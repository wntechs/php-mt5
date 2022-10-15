<?php

namespace Ram\WIK;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleLogMiddleware\LogMiddleware;
use JsonMapper;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Psr\Http\Message\RequestInterface;
use Ram\WIK\Mt5Request\ChangeCreditRequest;
use Ram\WIK\Mt5Request\ChangePasswordRequest;
use Ram\WIK\Mt5Request\CreateAccountRequest;
use Ram\WIK\Mt5Request\DealHistoryRequest;
use Ram\WIK\Mt5Request\OrderHistoryRequest;
use Ram\WIK\Mt5Response\AccountInfo\AccountInfoData;
use Ram\WIK\Mt5Response\Accounts\AccountList;
use Ram\WIK\Mt5Response\Balances\BalanceList;
use Ram\WIK\Mt5Response\ChangeCredit\ChangeCredit;
use Ram\WIK\Mt5Response\ChangePassword\ChangePassword;
use Ram\WIK\Mt5Response\CreateAccount\CreateAccount;
use Ram\WIK\Mt5Response\Groups\GroupList;
use Ram\WIK\Mt5Response\OrderHistory\OrderHistory;

class Mt5Client
{
    protected $client;
    protected $host;
    protected $port;
    protected $token;
    protected $mapper;

    public function __construct($host, $port){

        $this->mapper = new JsonMapper();
        $this->mapper->bStrictNullTypes = false;
        $this->host = $host;
        $this->port = $port;
        $logger = new Logger('mt5Client');  //A new PSR-3 Logger like Monolog
        $logger->pushHandler(new StreamHandler(__DIR__ . '/mt5Client.log', Level::Debug));
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
               // 'Authorization'     => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJBY2Nlc3NUb2tlbiIsImp0aSI6IjhmYzA3ZDM1LWEwZGUtNDYxNS1hM2RhLThiNGYwZjQxN2E0ZSIsImlhdCI6IjEwLzEyLzIwMjIgMzoxNDozMiBQTSIsImh0dHA6Ly9zY2hlbWFzLnhtbHNvYXAub3JnL3dzLzIwMDUvMDUvaWRlbnRpdHkvY2xhaW1zL25hbWUiOiJhZG1pbiIsIlVzZXJJZCI6IjEiLCJleHAiOjE2NjU2NzQwNzIsImlzcyI6Imh0dHBzOi8va2FybXNvZnQuY29tIiwiYXVkIjoiaHR0cHM6Ly9rYXJtc29mdC5jb20ifQ._abMXviGUdY2GkxyceCvdcdChhEQdWTDrvjbUOK93XE',
                'Accept-Encoding'     => 'gzip, deflate, br',
                'Connection'     => 'keep-alive',
                'User-Agent'     => 'PostmanRuntime/7.26.8',
                ]
        ]);
    }

    public  function generateToken($username, $password){
        try {

            $resp = $this->client->post("token", ['query' => ['username' => $username, 'password' => $password]]);
            $this->token = $resp->getBody()->getContents();
            return $this->token;

        }catch (\Exception $e){
            return 'err:' . $e->getMessage();
        }
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

        return $this->mapper->map(json_decode($body), new GroupList());
    }

    public function getAccounts(string $group):AccountList{
        $resp = $this->client->get("group/accounts", ['json' => ['request_id' => 123456, 'group' => $group]]);
        $body = $resp->getBody()->getContents();

        return $this->mapper->map(json_decode($body), new AccountList());
    }

    public function getAccountInfo(string $login):AccountInfoData{
        $resp = $this->client->get("account/{$login}", ['json' => ['request_id' => 123456]]);
        $body = $resp->getBody()->getContents();

        return $this->mapper->map(json_decode($body), new AccountInfoData());
    }

    public function getBalances(array $logins):BalanceList{
        $resp = $this->client->post("account/balances", ['json' => ['request_id' => 123456, 'logins'=> $logins]]);
        $body = $resp->getBody()->getContents();

        return $this->mapper->map(json_decode($body), new BalanceList());
    }

    public function createAccount(CreateAccountRequest $request){
        //print_r($request->toJson()); die;
        $resp = $this->client->post("account", ['json' => $request->toArray()]);

        $body = $resp->getBody()->getContents();

        return $this->mapper->map(json_decode($body), new CreateAccount());
    }

    public function changePassword(ChangePasswordRequest $request){
        $resp = $this->client->post("user/{$request->getLogin()}/change-password", ['json' => $request->toArray()]);

        $body = $resp->getBody()->getContents();

        return $this->mapper->map(json_decode($body), new ChangePassword());
    }

    public function getDealHistory(DealHistoryRequest $request){
        $resp = $this->client->post("trade/dealhistory", ['json' => $request->toArray()]);

        $body = $resp->getBody()->getContents();

        return $this->mapper->map(json_decode($body), new Mt5Response\DealHistory\DealHistory());
    }

    public function getOrderHistory(OrderHistoryRequest $request){
        $resp = $this->client->post("trade/ordershistory", ['json' => $request->toArray()]);

        $body = $resp->getBody()->getContents();

        return $this->mapper->map(json_decode($body), new OrderHistory());
    }

    public function changeCredit(ChangeCreditRequest $request){
        $resp = $this->client->post("user/{$request->getLogin()}/change-credit", ['json' => $request->toArray()]);

        $body = $resp->getBody()->getContents();

        return $this->mapper->map(json_decode($body), new ChangeCredit());
    }

}
