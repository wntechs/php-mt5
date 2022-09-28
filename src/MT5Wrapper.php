<?php
namespace Ram\WIK;

use Ram\WIK\Request\AccountHaveOrdersRequest;
use Ram\WIK\Request\AccountHavePositionsRequest;
use Ram\WIK\Request\AddQuoteRequest;
use Ram\WIK\Request\AppendCommentRequest;
use Ram\WIK\Request\BalanceFixRequest;
use Ram\WIK\Request\BaseRequest;
use Ram\WIK\Request\BulkChangeBalanceRequest;
use Ram\WIK\Request\ChangeBalanceRequest;
use Ram\WIK\Request\ChangeCreditRequest;
use Ram\WIK\Request\ChangePasswordRequest;
use Ram\WIK\Request\CheckPasswordRequest;
use Ram\WIK\Request\ClosePositionRequest;
use Ram\WIK\Request\CreateAccountRequest;
use Ram\WIK\Request\CreateGroupRequest;
use Ram\WIK\Request\DeleteAccountRequest;
use Ram\WIK\Request\GetAccountBalancesRequest;
use Ram\WIK\Request\GetAccountInfoExRequest;
use Ram\WIK\Request\GetAccountInfoRequest;
use Ram\WIK\Request\GetAccountsRequest;
use Ram\WIK\Request\GetAllBalancesRequest;
use Ram\WIK\Request\GetBalancesOperationsRequest;
use Ram\WIK\Request\GetChartHistoryRequest;
use Ram\WIK\Request\GetDealsHistoryRequest;
use Ram\WIK\Request\GetGroupRequest;
use Ram\WIK\Request\GetLeverageAndGroupRequest;
use Ram\WIK\Request\GetLoginsByGroupRequest;
use Ram\WIK\Request\GetMarginInfoExRequest;
use Ram\WIK\Request\GetMarginInfoRequest;
use Ram\WIK\Request\GetOpenPositionsForLoginRequest;
use Ram\WIK\Request\GetOpenPositionsRequest;
use Ram\WIK\Request\GetOrderHistoryRequest;
use Ram\WIK\Request\GetTradingVolumeRequest;
use Ram\WIK\Request\GetUsersOnlineRequest;
use Ram\WIK\Request\GetVersionRequest;
use Ram\WIK\Request\InfoRequest;
use Ram\WIK\Request\ListRequest;
use Ram\WIK\Request\ModifyAccountRequest;
use Ram\WIK\Request\ModifyGroupRequest;
use Ram\WIK\Request\ModifyPendingRequest;
use Ram\WIK\Request\ModifyPositionRequest;
use Ram\WIK\Request\OpenOrderRequest;
use Ram\WIK\Request\SendMailRequest;
use Ram\WIK\Request\ServerTimeRequest;
use Ram\WIK\Request\SplittingPositionRequest;
use Ram\WIK\Request\TransferBalanceRequest;
use Ram\WIK\Response\AccountHaveOrdersResponse;
use Ram\WIK\Response\AccountHavePositionsResponse;
use Ram\WIK\Response\AddQuoteResponse;
use Ram\WIK\Response\BalanceFixResponse;
use Ram\WIK\Response\BulkChangeBalance\BulkChangeBalanceResponse;
use Ram\WIK\Response\ChangeBalanceResponse;
use Ram\WIK\Response\ChangeCreditResponse;
use Ram\WIK\Response\ChangePasswordResponse;
use Ram\WIK\Response\CheckPasswordResponse;
use Ram\WIK\Response\ClosePositionResponse;
use Ram\WIK\Response\CreateAccountResponse;
use Ram\WIK\Response\CreateGroupResponse;
use Ram\WIK\Response\DeleteAccountResponse;
use Ram\WIK\Response\GetAccountBalances\GetAccountBalanceResponse;
use Ram\WIK\Response\GetAccountInfoExResponse;
use Ram\WIK\Response\GetAccountInfoResponse;
use Ram\WIK\Response\GetAccounts\GetAccountsResponse;
use Ram\WIK\Response\GetAllBalances\GetBalancesResponse;
use Ram\WIK\Response\GetBalancesOperations\GetBalancesOperationsResponse;
use Ram\WIK\Response\GetChartHistory\GetChartHistoryResponse;
use Ram\WIK\Response\GetDealsHistory\GetDealsHistoryResponse;
use Ram\WIK\Response\GetGroupResponse;
use Ram\WIK\Response\GetLeverageAndGroup\GetLeverageAndGroupResponse;
use Ram\WIK\Response\GetLoginsByGroupResponse;
use Ram\WIK\Response\GetMarginInfo\GetMarginInfoResponse;
use Ram\WIK\Response\GetMarginInfoExResponse;
use Ram\WIK\Response\GetOpenPositions\GetOpenPositionsResponse;
use Ram\WIK\Response\GetOpenPositionsForLogin\GetOpenPositionsForLoginResponse;
use Ram\WIK\Response\GetOrderHistory\GetOrderHistoryResponse;
use Ram\WIK\Response\GetTradingVolume\GetTradingVolumeResponse;
use Ram\WIK\Response\GetUsersOnline\GetUsersOnlineResponse;
use Ram\WIK\Response\GetVersionResponse;
use Ram\WIK\Response\InfoResponse;
use Ram\WIK\Response\ListResponse;
use Ram\WIK\Response\ModifyAccountResponse;
use Ram\WIK\Response\ModifyGroupResponse;
use Ram\WIK\Response\ModifyPendingResponse;
use Ram\WIK\Response\ModifyPositionResponse;
use Ram\WIK\Response\OpenOrderResponse;
use Ram\WIK\Response\SendMailResponse;
use Ram\WIK\Response\ServerTimeResponse;
use Ram\WIK\Response\SplittingPositionResponse;
use Ram\WIK\Response\TransferBalance\TransferBalanceResponse;

class MT5Wrapper
{
    private  $fp;
    protected string $ip;
    protected int $port;
    protected string $error_no = "", $error_message = "";

    /**
     * @param $ip string
     * @param $port int
     */
    public function __construct(string $ip, int $port)
    {
        $this->ip = $ip;
        $this->port = $port;
        $this->connect();
    }

    private function connect(): void
    {
        if($this->fp == null){
            $this->fp = fsockopen($this->ip, $this->port, $this->error_no, $this->error_message, 30);
        }
    }
    private function disconnect(): void
    {
        if($this->fp != null){
            fclose($this->fp);
        }
    }

    public function appendComment(AppendCommentRequest $request): bool|string
    {
        $data = $request->toArray();
        $this->connect();
        return $this->sendRequest($data);
    }

    public function getGroups(BaseRequest $request): bool|string
    {
        $data = $request->toArray();
        $data['action'] = 'getgroups';
        $this->connect();
        return $this->sendRequest($data);
    }

    public function getSymbols(BaseRequest $request): Response\GetSymbols\GetSymbolsResponse|bool
    {
        $data = $request->toArray();
        $data['action'] = 'getsymbols';
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new Response\GetSymbols\GetSymbolsResponse($ret);
        }
        return false;
    }

    public function createAccount(CreateAccountRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new CreateAccountResponse($ret);
        }
        return false;
    }

    public function getGroup(GetGroupRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new GetGroupResponse($ret);
        }
        return false;
    }

    public function getLeverageAndGroup(GetLeverageAndGroupRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new GetLeverageAndGroupResponse($ret);
        }
        return false;
    }
    public function changeBalance(ChangeBalanceRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new ChangeBalanceResponse($ret);
        }
        return false;
    }

    public function changeCredit(ChangeCreditRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new ChangeCreditResponse($ret);
        }
        return false;
    }

    public function changePassword(ChangePasswordRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new ChangePasswordResponse($ret);
        }
        return false;
    }
    public function checkPassword(CheckPasswordRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new CheckPasswordResponse($ret);
        }
        return false;
    }

    public function accountHavePositions(AccountHavePositionsRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new AccountHavePositionsResponse($ret);
        }
        return false;
    }

    public function accountHaveOrders(AccountHaveOrdersRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new AccountHaveOrdersResponse($ret);
        }
        return false;
    }
    public function getAccounts(GetAccountsRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new GetAccountsResponse($ret);
        }
        return false;
    }

    public function addQuote(AddQuoteRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new AddQuoteResponse($ret);
        }
        return false;
    }

    public function balanceFix(BalanceFixRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new BalanceFixResponse($ret);
        }
        return false;
    }

    public function bulkChangeBalance(BulkChangeBalanceRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new BulkChangeBalanceResponse($ret);
        }
        return false;
    }
    public function closePosition(ClosePositionRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new ClosePositionResponse($ret);
        }
        return false;
    }

    public function createGroup(CreateGroupRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new CreateGroupResponse($ret);
        }
        return false;
    }

    public function deleteAccount(DeleteAccountRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new DeleteAccountResponse($ret);
        }
        return false;
    }
    public function getAccountInfo(GetAccountInfoRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new GetAccountInfoResponse($ret);
        }
        return false;
    }

    public function getAccountInfoEx(GetAccountInfoExRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new GetAccountInfoExResponse($ret);
        }
        return false;
    }

    public function getAllBalances(GetAllBalancesRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new GetBalancesResponse($ret);
        }
        return false;
    }

    public function getBalancesOperations(GetBalancesOperationsRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new GetBalancesOperationsResponse($ret);
        }
        return false;
    }

    public function getChartHistory(GetChartHistoryRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new GetChartHistoryResponse($ret);
        }
        return false;
    }

    public function getDealsHistory(GetDealsHistoryRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new GetDealsHistoryResponse($ret);
        }
        return false;
    }

    public function getMarginInfo(GetMarginInfoRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new GetMarginInfoResponse($ret);
        }
        return false;
    }

    public function getOpenPositionsForLogin(GetOpenPositionsForLoginRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new GetOpenPositionsForLoginResponse($ret);
        }
        return false;
    }

    public function getOpenPositions(GetOpenPositionsRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new GetOpenPositionsResponse($ret);
        }
        return false;
    }

    public function getOrderHistory(GetOrderHistoryRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new GetOrderHistoryResponse($ret);
        }
        return false;
    }

    public function getLoginsByGroup(GetLoginsByGroupRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new GetLoginsByGroupResponse($ret);
        }
        return false;
    }

    public function getMarginInfoEx(GetMarginInfoExRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new GetMarginInfoExResponse($ret);
        }
        return false;
    }

    public function getTradingVolume(GetTradingVolumeRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new GetTradingVolumeResponse($ret);
        }
        return false;
    }

    public function getUsersOnline(GetUsersOnlineRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new GetUsersOnlineResponse($ret);
        }
        return false;
    }

    public function getVersioin(GetVersionRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new GetVersionResponse($ret);
        }
        return false;
    }

    public function getInfo(InfoRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new InfoResponse($ret);
        }
        return false;
    }

    public function list(ListRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new ListResponse($ret);
        }
        return false;
    }

    public function modifyPending(ModifyPendingRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new ModifyPendingResponse($ret);
        }
        return false;
    }

    public function modifyAccount(ModifyAccountRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new ModifyAccountResponse($ret);
        }
        return false;
    }

    public function modifyGroup(ModifyGroupRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new ModifyGroupResponse($ret);
        }
        return false;
    }

    public function modifyPosition(ModifyPositionRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new ModifyPositionResponse($ret);
        }
        return false;
    }
    public function openOrder(OpenOrderRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new OpenOrderResponse($ret);
        }
        return false;
    }

    public function sendMail(SendMailRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new SendMailResponse($ret);
        }
        return false;
    }

    public function serverTime(ServerTimeRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new ServerTimeResponse($ret);
        }
        return false;
    }

    public function splittingPosition(SplittingPositionRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new SplittingPositionResponse($ret);
        }
        return false;
    }

    public function transferBalance(TransferBalanceRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new TransferBalanceResponse($ret);
        }
        return false;
    }

    public function getAccountBalances(GetAccountBalancesRequest $request){
        $data = $request->toArray();
        $this->connect();
        $ret = $this->sendRequest($data);
        if($ret){
            return new GetAccountBalanceResponse($ret);
        }
        return false;
    }

    private function sendRequest($data): bool|string
    {
        $string = http_build_query($data);
        if (!$this->fp) {
           return false;
        } else {
            fwrite($this->fp, $string);
            $response = "";
            while (fgets($this->fp, 128)) {
                $response .= fgets($this->fp, 128); // If you expect an answer
            }
            return $response;
        }
    }

    public function __destruct()
    {
        $this->disconnect();
    }


}
