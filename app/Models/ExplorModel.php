<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class ExplorModel extends Model
{
    use HasFactory;

    private $BASE_URL;

    /**
     * @param $BASE_URL
     */
    public function __construct()
    {
        $this->BASE_URL = Config::get('private.base');
    }


    /**
     * executing get requests
     * @param $url
     * @return bool|string
     */
    public function curlGetRequest($url)
    {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_PORT, 3083);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "content-type: application/json"
        ));

        $output = curl_exec($ch);
        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
            echo $error_msg;
            echo '<br>';
        }
        curl_close($ch);
        return $output;
    }

    private function getPOSTRequest($url, $data)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array('Content-Type: application/json')
        ));

        $response = curl_exec($curl);
        if (curl_errno($curl)) {
            return curl_error($curl);
        } else {
            return $response;
        }
        curl_close($curl);
    }

    public function getSellValue()
    {
        $sell_value = Config::get('private.BASE_BUY_SELl') . Config::get('private.LAST_MONTH_SELL_TRANS');
        $sell_value = $this->curlGetRequest($sell_value);
        $latest_orio_last_record_result = json_decode($sell_value);
        return $latest_orio_last_record_result->result;
    }

    public function getBuyValue()
    {
        $buy_value = Config::get('private.BASE_BUY_SELl') . Config::get('private.LAST_MONTH_BUY_TRANS');
        $buy_value = $this->curlGetRequest($buy_value);
        return $buy_value;// json_decode($buy_value);
    }

    public function getTenTransactions()
    {
        $first_ten_transaction = Config::get('private.BASE_SELL') . Config::get("private.FIRST_TEN_TRANS");
        $first_ten = $this->curlGetRequest($first_ten_transaction);
        $first_ten = json_decode($first_ten);
        return $first_ten->result;
    }

    public function getTotalBalance()
    {
        $orio_total_balance = $this->BASE_URL . Config::get('private.TOTAL_BALANCE');
        $orio_total = $this->curlGetRequest($orio_total_balance);
        $orio_total = json_decode($orio_total);
        return $orio_total->result;
    }

    public function getTotalTransactions()
    {
        $total_transactions_url = $this->BASE_URL . Config::get('private.TOTAL_TRANSACTIONS');
        $total_transactions = $this->curlGetRequest($total_transactions_url);
        $total_transactions = json_decode($total_transactions);
        return $total_transactions->result;
    }

    public function getPaginationTwenty()
    {
        $pagination_of_twenty = $this->BASE_URL . "pagination-of-twenty-records";
        $pagination = $this->curlGetRequest($pagination_of_twenty);
        $pagination = json_decode($pagination);
        return $pagination;
    }

    public function userCount()
    {
        $all_obyte_users_count = $this->BASE_URL . Config::get('private.ALL_USERS');
        $all_obyte_users = $this->curlGetRequest($all_obyte_users_count);
        $users = json_decode($all_obyte_users);
        return $users->result;
    }

    public function getLatestOrioPrice()
    {
        $latest_orio_price = $this->BASE_URL . Config::get('private.LATEST_PRICE');
        $latest_orio_price_result = $this->curlGetRequest($latest_orio_price);
        $latest_orio_price_result = json_decode($latest_orio_price_result);
        if ($latest_orio_price_result->result > 0) {
            $latest_orio_price = round($latest_orio_price_result->result, 4);
        } else {
            $latest_orio_price = 0;
        }
        return $latest_orio_price;
    }

    public function getOrioBalance()
    {
        $latest_orio_balance_record = $this->BASE_URL . Config::get('private.LATEST_ORIO_BALANCE');
        $latest_orio_balance_record_result = $this->curlGetRequest($latest_orio_balance_record);
        $latest_orio_balance_record_result = json_decode($latest_orio_balance_record_result);
        return $latest_orio_balance_record_result->result;
    }


    public function getOriolastRecord()
    {
        $latest_orio_last_record = $this->BASE_URL . Config::get('private.LAST_THIRTY_RECORDS');
        $latest_orio_last_record_result = $this->curlGetRequest($latest_orio_last_record);
        $latest_orio_last_record_result = json_decode($latest_orio_last_record_result);
        return $latest_orio_last_record_result->result;
    }

    public function getAllTransactions()
    {
        $transactoinsLink = $this->BASE_URL . Config::get('private.ALL_TRANS');
        $getAllTrans = $this->curlGetRequest($transactoinsLink);
        $getAllTrans = json_decode($getAllTrans);
        return $getAllTrans->result;
    }


    public function getTransactionDetails()
    {
        $res = null;
        if (isset($_POST["orioTxId"])) {
            $url = "3.140.132.65:3083/v1/to-crypto/get-transaction-details";
            $value = $_POST["orioTxId"];
            $data = ["orioTxId" => $value];
            $res = false;

            $res = getPOSTRequest($url, $data);
            $res_data = json_decode($res);

            date_default_timezone_set("Asia/Karachi");
            $date1 = new DateTime(date("h:i:sa"));
            $date2 = new DateTime((date("h:i:sa", $GetDate)));
            $interval = $date1->diff($date2);

        } else {
            $res = '';
        }
    }

    public function sellBuyRecord()
    {
        $res1;

        if (isset($_POST["orioAddress"])) {
            $url = "3.140.132.65:3083/v1/to-crypto/user-sell-buy-record";
            $value = $_POST["orioAddress"];
            $data = ["orioAddress" => $value];
            $res = false;


            $res1 = getPOSTRequest($url, $data);
            $res_data1 = json_decode($res1);

            date_default_timezone_set("Asia/Karachi");
            $date1 = new DateTime(date("h:i:sa"));
            $date2 = new DateTime((date("h:i:sa", $GetDate)));
            $interval = $date1->diff($date2);

        } else {
            $res1 = '';
        }
    }


}
