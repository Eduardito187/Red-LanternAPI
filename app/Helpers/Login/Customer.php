<?php

namespace App\Helpers\Login;

class Customer{

    /**
     * @var string
     */
    const TOKEN_SESSION = "token_session";

    public function __construct() {
        //
    }

    /**
     * @return bool
     */
    public function isLogin(){
        if (session(self::TOKEN_SESSION)) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * @param string $token
     * @return void
     */
    public function initLogin(string $token){
        session([self::TOKEN_SESSION => $token]);
    }
}
?>