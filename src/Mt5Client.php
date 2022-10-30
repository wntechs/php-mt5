<?php

namespace Ram\WIK;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleLogMiddleware\LogMiddleware;
use JsonMapper;
use Monolog\Handler\StreamHandler;

use Monolog\Logger;
use Phpfastcache\Helper\Psr16Adapter;
use Psr\Http\Message\RequestInterface;
use Ram\WIK\Mt5Request\AccountInfoExRequest;
use Ram\WIK\Mt5Request\AccountInfoRequest;
use Ram\WIK\Mt5Request\ChangeCreditRequest;
use Ram\WIK\Mt5Request\ChangePasswordRequest;
use Ram\WIK\Mt5Request\CreateAccountRequest;
use Ram\WIK\Mt5Request\DealHistoryRequest;
use Ram\WIK\Mt5Request\OpenPositionRequest;
use Ram\WIK\Mt5Request\OrderHistoryRequest;
use Ram\WIK\Mt5Response\AccountInfo\AccountInfoData;
use Ram\WIK\Mt5Response\AccountInfoEx\AccountInfoExData;
use Ram\WIK\Mt5Response\Accounts\AccountList;
use Ram\WIK\Mt5Response\Balances\BalanceList;
use Ram\WIK\Mt5Response\ChangeCredit\ChangeCredit;
use Ram\WIK\Mt5Response\ChangePassword\ChangePassword;
use Ram\WIK\Mt5Response\CreateAccount\CreateAccount;
use Ram\WIK\Mt5Response\DealHistory\DealHistory;
use Ram\WIK\Mt5Response\Groups\GroupList;
use Ram\WIK\Mt5Response\OrderHistory\OrderHistory;
use Ram\WIK\Mt5Response\Positions\Positions;


class Mt5Client
{
    private static string $AUTH_TOKEN = "AUTH_TOKEN";
    protected $client;
    protected $host;
    protected $port;
    protected $token;
    protected $mapper;
    private $cacheAdapter;
    protected $user;
    protected $password;

    public function __construct($user, $password, $host, $port){

        $this->cacheAdapter = new Psr16Adapter("Files");

        $this->mapper = new JsonMapper();
        $this->mapper->bStrictNullTypes = false;
        $this->user = $user;
        $this->password = $password;
        $this->host = $host;
        $this->port = $port;

        if($this->cacheAdapter->has(self::$AUTH_TOKEN)) {
            $this->token = rtrim(ltrim($this->cacheAdapter->get(self::$AUTH_TOKEN), '"'), '"');
        }else{
            $this->generateToken();
        }

        $logger = new Logger('mt5Client');  //A new PSR-3 Logger like Monolog
        $logger->pushHandler(new StreamHandler(__DIR__ . '/mt5Client.log', Logger::DEBUG));
        $stack = new HandlerStack();
        $stack->setHandler(new CurlHandler());
        $stack->push($this->handleAuthorizationHeader());
        $stack->push(new LogMiddleware($logger));
        $this->client = new Client([
            'handler' => $stack,
            // Base URI is used with relative requests
            'base_uri' => "http://{$this->host}:{$this->port}/api/",
            // You can set any number of default request options.
            'timeout'  => 600.0,
            'headers' => [
                'Accept'     => '*/*',
                'content-type'     => 'application/json',
                'Accept-Encoding'     => 'gzip, deflate, br',
                'Connection'     => 'keep-alive',
                'User-Agent'     => 'PostmanRuntime/7.26.8',
                ]
        ]);
        if(!$this->hasValidToken())
            $this->generateToken();
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public  function generateToken(): string
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => "http://{$this->host}:{$this->port}/api/",
            // You can set any number of default request options.
            'timeout'  => 600.0,
            'headers' => [
                'Accept'     => '*/*',
                'content-type'     => 'application/json',
                'Accept-Encoding'     => 'gzip, deflate, br',
                'Connection'     => 'keep-alive',
                'User-Agent'     => 'PostmanRuntime/7.26.8',
            ]
        ]);
        //echo 'requesting new token'. PHP_EOL;
        $resp = $client->post("token", ['query' => ['username' => $this->user, 'password' => $this->password]]);
        $this->token = $resp->getBody()->getContents();
       // echo 'token generated' . PHP_EOL;
        $this->cacheAdapter->set(self::$AUTH_TOKEN, $this->token, 60*60*12); // 12 hours
        //echo 'Token saved in cache' . PHP_EOL;die;
        return $this->token;
    }

    private function hasValidToken(){
        if($this->token == null) return false;
        $result = json_decode(base64_decode(str_replace('_', '/', str_replace('-','+',explode('.', $this->token)[1]))));

        return ($result->exp > time());
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
    }



    /**
     * Handle Authorization Header
     */
    private function handleAuthorizationHeader()
    {
        return function (callable $handler)
        {
            return function (RequestInterface $request, array $options) use ($handler)
            {

                if($this->token) {
                    $request = $request->withHeader('Authorization', 'Bearer ' . $this->token);
                }

                return $handler($request, $options);
            };
        };
    }



    public function getGroups() :  GroupList{
        $resp = $this->client->get("group", ['json' => ['request_id' => 123456]]);
        $body = $resp->getBody()->getContents();

        return $this->mapper->map($this->checkResponseAndThrowErrorIfAny($body), new GroupList());
    }

    public function getAccounts(string $group):AccountList{
        $resp = $this->client->get("group/accounts", ['json' => ['request_id' => 123456, 'group' => $group]]);
        $body = $resp->getBody()->getContents();

        return $this->mapper->map($this->checkResponseAndThrowErrorIfAny($body), new AccountList());
    }

    public function getAccountInfo(AccountInfoRequest $request):AccountInfoData{
        $resp = $this->client->get("account/{$request->getLogin()}", ['json' => ['request_id' => 123456]]);
        $body = $resp->getBody()->getContents();

        return $this->mapper->map($this->checkResponseAndThrowErrorIfAny($body), new AccountInfoData());
    }
    public function getAccountInfoEx(AccountInfoExRequest $request):AccountInfoExData{
        $resp = $this->client->get("account/{$request->getLogin()}/infoEx", ['json' => ['request_id' => 123456]]);
        $body = $resp->getBody()->getContents();

        return $this->mapper->map($this->checkResponseAndThrowErrorIfAny($body), new AccountInfoExData());
    }

    public function getBalances(array $logins):BalanceList{
        $resp = $this->client->post("account/balances", ['json' => ['request_id' => 123456, 'logins'=> $logins]]);
        $body = $resp->getBody()->getContents();

        return $this->mapper->map($this->checkResponseAndThrowErrorIfAny($body), new BalanceList());
    }

    public function createAccount(CreateAccountRequest $request):CreateAccount{
        //print_r($request->toJson()); die;
        $resp = $this->client->post("account", ['json' => $request->toArray()]);

        $body = $resp->getBody()->getContents();

        return $this->mapper->map($this->checkResponseAndThrowErrorIfAny($body), new CreateAccount());
    }

    public function changePassword(ChangePasswordRequest $request):ChangePassword{
        $resp = $this->client->post("user/{$request->getLogin()}/change-password", ['json' => $request->toArray()]);

        $body = $resp->getBody()->getContents();

        return $this->mapper->map($this->checkResponseAndThrowErrorIfAny($body), new ChangePassword());
    }

    public function getDealHistory(DealHistoryRequest $request):DealHistory{
        $resp = $this->client->post("trade/dealhistory", ['json' => $request->toArray()]);

        $body = $resp->getBody()->getContents();

        return $this->mapper->map($this->checkResponseAndThrowErrorIfAny($body), new DealHistory());
    }

    public function getOrderHistory(OrderHistoryRequest $request): OrderHistory{
        $resp = $this->client->post("trade/ordershistory", ['json' => $request->toArray()]);

        $body = $resp->getBody()->getContents();

        return $this->mapper->map($this->checkResponseAndThrowErrorIfAny($body), new OrderHistory());
    }

    public function changeCredit(ChangeCreditRequest $request):ChangeCredit{

        $resp = $this->client->post("user/{$request->getLogin()}/change-credit", ['json' => $request->toArray()]);
        $body = $resp->getBody()->getContents();

        return $this->mapper->map($this->checkResponseAndThrowErrorIfAny($body), new ChangeCredit());
    }

    public function getOpenPositions(OpenPositionRequest $request): Positions {
        $resp = $this->client->post("trade/openpositions", ['json' => $request->toArray()]);
        $body = $resp->getBody()->getContents();

        return $this->mapper->map($this->checkResponseAndThrowErrorIfAny($body), new Positions());
    }



    private function checkResponseAndThrowErrorIfAny($body){
        $obj = json_decode($body);
       // print_r($obj);die;
        if($obj->StatusCode != 200)
            throw new \Exception($obj->Message);
        return $obj;
    }

}
