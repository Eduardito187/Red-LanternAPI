<?php

namespace App\Helpers\Security;

use App\Models\Account as ModelAccount;
use App\Helpers\Data\Text;

class TokenAccess{
    /**
     * @var Text
     */
    protected $Text;
    /**
     * @var string
     */
    protected $Token;

    public function __construct() {
        $this->Text = new Text();
    }

    /**
     * @return bool
     */
    public function validateToken() {
        $validateAccount = ModelAccount::select($this->Text::ID)->where($this->Text::TOKEN, $this->getToken())->get()->toArray();
        if (count($validateAccount) == 0) {
            return false;
        }else{
            return true;
        }
    }

    /**
     * @return string|null
     */
    public function getToken(){
        $Token = explode($this->Text::SPACE, $this->Token);
        if (count($Token) == 2) {
            return $Token[1];
        }else{
            return null;
        }
    }

    /**
     * @param string $token
     * @return void
     */
    public function setToken(string $token){
        $this->Token = $token;
    }
}
?>