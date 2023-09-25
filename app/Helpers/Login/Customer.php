<?php

namespace App\Helpers\Login;

use App\Helpers\Session\Sessions;
use App\Models\City;

class Customer{

    /**
     * @var string
     */
    const TOKEN_SESSION = "token_session";
    
    /**
     * @var string
     */
    const STORE_NAME = "store_name";
    
    /**
     * @var string
     */
    const STORE_CODE = "store_code";

    /**
     * @var string
     */
    const CURRENT_CATEGORY_CODE = "current_category_code";

    /**
     * @var Sessions
     */
    protected $sessions;

    public function __construct() {
        $this->sessions = new Sessions();
    }

    /**
     * @return void
     */
    public function setStorePage(){
        if (isset($_GET["_store"])) {
            $this->sessions->setVariableSesion(self::STORE_CODE, $_GET["_store"]);
        }
    }

    /**
     * @param string|null $code
     * @return void
     */
    public function setCurrentCategoryPage(string|null $code){
        $this->sessions->setVariableSesion(self::CURRENT_CATEGORY_CODE, $code);
    }

    /**
     * @return string
     */
    public function getStoreName(){
        $sessionStoreCode = $this->sessions->getVariableSesion(self::STORE_CODE);
        
        if (is_null($sessionStoreCode)) {
            $this->sessions->setVariableSesion(self::STORE_CODE, "scz");
        }

        $City = City::where("code", $this->sessions->getVariableSesion(self::STORE_CODE))->first();

        if (!$City) {
            return "Santa Cruz";
        }
        return $City->name;
    }

    /**
     * @return bool
     */
    public function isLogin(){
        if (is_null($this->sessions->getVariableSesion(self::TOKEN_SESSION))) {
            return false;
        }
        return true;
    }

    /**
     * @param string $token
     * @return void
     */
    public function initLogin(string $token){
        $this->sessions->setVariableSesion(self::TOKEN_SESSION, $token);
    }

    /**
     * @return void
     */
    public function closeSession(){
        $this->sessions->deleteVariableSesion(self::TOKEN_SESSION);
    }
}
?>