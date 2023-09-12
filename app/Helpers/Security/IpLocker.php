<?php

namespace App\Helpers\Security;

use Illuminate\Support\Facades\Log;
use App\Helpers\Data\Text;
use App\Models\Ip;
use App\Models\RestrictIp;
use App\Helpers\Data\Date;
use \Exception;

class IpLocker{
    /**
     * @var Date
     */
    protected $date;
    /**
     * @var string
     */
    protected $IP = null;
    /**
     * @var Text
     */
    protected $text;

    public function __construct() {
        $this->text     = new Text();
        $this->date     = new Date();
    }

    /**
     * @param string $ip
     * @return void
     */
    public function setIp(string $ip){
        $this->IP = $ip;
    }

    /**
     * @return bool
     */
    public function validRestrict(){
        $restrict_ip = $this->getRestrictIp();
        if (!$restrict_ip) {
            return true;
        }
        return false;
    }

    /**
     * @return int|null
     */
    public function validateIp(){
        $ip = $this->getIp();
        if (!$ip) {
            return $this->addIp();
        }
        return $ip->id;
    }

    /**
     * @return Ip
     */
    public function getIp(){
        return Ip::where($this->text->getIp(), $this->IP)->first();
    }

    /**
     * @return int|null
     */
    public function addIp(){
        try {
            $Model_Ip = new Ip();
            $Model_Ip->ip = $this->IP;
            $Model_Ip->created_at = $this->date->getFullDate();
            $Model_Ip->updated_at = null;
            $Model_Ip->save();
            return $Model_Ip->id;
        } catch (Exception $th) {
            return null;
        }
    }

    /**
     * @return RestrictIp
     */
    public function getRestrictIp(){
        $ip = $this->getIp();
        return RestrictIp::where($this->text::ID_IP, $ip->id)->first();
    }
}

?>