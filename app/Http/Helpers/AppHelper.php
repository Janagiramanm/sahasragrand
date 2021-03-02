<?php

namespace App\Http\Helpers;
use GuzzleHttp\Exception\GuzzleException;
use http\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AppHelper
{

    public static function sendRegistrationOtp($name, $receipientno, $otp){
        $client = new \GuzzleHttp\Client();
        if ($receipientno) {

            // $username = "manoj.p@netiapps.com";
            // $hash = "c036e85abe2efe9d3ccce6f9495dc320778f5d56370424f1bf602135d9efd4f8";

            $username =  env('TEXTLOCAL_USERNAME');
            $hash =  env('TEXTLOCAL_HASH');
        
            // Config variables. Consult http://api.textlocal.in/docs for more info.
            $test = "0";
        
            // Data for text message. This is the text message data.
            $sender = "sahasr"; // This is who the message appears to be from.
            $numbers = $receipientno; // A single number or a comma-seperated list of numbers
            $message = "Dear $name your OTP for registration is $otp Rgds SGOWA";
            // 612 chars or less
            // A single number or a comma-seperated list of numbers
            $message = urlencode($message);
            $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
            $ch = curl_init('http://api.textlocal.in/send/?');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch); // This is the result from the API
            curl_close($ch);

        } else {
            throw new \Exception("Mobile number not available", Response::HTTP_PRECONDITION_FAILED);
        }
    }

    public static function sendActivationSms($name,$receipientno,$rndString){
         
        if ($receipientno) {

            $username =  env('TEXTLOCAL_USERNAME');
            $hash =  env('TEXTLOCAL_HASH');

            $test = "0";
            // Data for text message. This is the text message data.
            $sender = "sahasr"; // This is who the message appears to be from.
            $numbers = $receipientno; // A single number or a comma-seperated list of numbers
            $message = "Dear $name your OTP for registration is $otp Rgds SGOWA";
            // 612 chars or less
            // A single number or a comma-seperated list of numbers
            $message = urlencode($message);
            $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
            $ch = curl_init('http://api.textlocal.in/send/?');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch); // This is the result from the API
            curl_close($ch);

            // $ch = curl_init();
            // // $user=env('MVAAYOO_USERNAME'); //"manoj.p@netiapps.com:Netiapps839";
            // // $senderID = env('MVAAYOO_SENDERID');
            // $user="manoj.p@netiapps.com:Netiapps839";
            // $senderID="sahas";
            // $msgtxt = "Dear $name Welcome to Sahasra Grand your membership has been activated User name $receipientno and Password : $rndString";
           
            // curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            // curl_setopt($ch, CURLOPT_POST, 1);
            // curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
            // curl_exec($ch);
           
            // curl_close($ch);
            // $ch = curl_init();
        }
    }

    public static function BookingConfirmation($name,$receipientno,$rndString){
        if ($receipientno) {

            $ch = curl_init();
            // $user=env('MVAAYOO_USERNAME'); //"manoj.p@netiapps.com:Netiapps839";
            // $senderID = env('MVAAYOO_SENDERID');
            $user="manoj.p@netiapps.com:Netiapps839";
            $senderID="sahas";
            $msgtxt = "Dear $name your OTP for registration is $rndString Rgds SGOWA";
           
            curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
            curl_exec($ch);
           
            curl_close($ch);
            $ch = curl_init();
        }
    }

    public static function sendForgotPasswordOtp($name,$receipientno,$rndString){
        if ($receipientno) {

            $ch = curl_init();
            // $user=env('MVAAYOO_USERNAME'); //"manoj.p@netiapps.com:Netiapps839";
            // $senderID = env('MVAAYOO_SENDERID');
            $user="manoj.p@netiapps.com:Netiapps839";
            $senderID="sahas";
            $msgtxt = "Dear $name your OTP for forgot password is $rndString Rgds SGOWA";
           
            curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
            curl_exec($ch);
           
            curl_close($ch);
            $ch = curl_init();
        }
    }
}