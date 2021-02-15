<?php
namespace application\core;

class Security{
    static public $method = "AES-128-CTR";
    static public  function encrypt($value, $key, $iv){
        return openssl_encrypt($value, self::$method, $iv, 0, $iv);
    }
    static public  function decrypt($value, $key, $iv){
        return openssl_decrypt ($value, self::$method, $key, 0, $iv); 
    }
}