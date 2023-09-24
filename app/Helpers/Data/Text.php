<?php

namespace App\Helpers\Data;

class Text{
    const SPACE = " ";
    const ID = "id";
    const ID_IP = "id_ip";
    const TOKEN = "token";
    const TIME_ZONE= "America/La_Paz";
    const ZONE_FULL_PHP= "Y-m-d H:i:s";
    const DAY_PHP= "d";
    const MONTH_PHP= "m";
    const YEAR_PHP= "Y";
    const DATE_PHP= "Y-m-d";
    const TIME_PHP= "H:i";
    const DATE_TIME_PHP= "H:i:s";
    const CREADO = "Creado";
    const MODIFICADO = "Modificado";
    const CREADO_NOW = "Creado recientemente.";
    const MODIFICADO_NOW = "Modificado recientemente.";
    const HOURS_PHP= "H";
    const MINUTES_PHP= "min";
    const LIKE = "like";
    const PERCENT = "%";
    const IP = "ip";
    const DAYS_DIFENCENS = " hace % dias.";
    const DAY_DIFENCENS = " hace % dia.";
    const MONTH_DIFENCENS = " hace % mes.";
    const MOTHS_DIFENCENS = " hace % meses.";
    const YEAR_DIFENCENS = " hace % año.";
    const YEARS_DIFENCENS = " hace % años.";
    const AUTHORIZATION = "Authorization";
    const ERROR_402 = 402;
    const ERROR_404 = 404;
    const ERROR_400 = 400;
    const ERROR_401 = 401;
    const ERROR_403 = 403;
    const ERROR_500 = 500;
    const TOKEN_PROHIBITED = "Access prohibited";
    const TOKEN_DECLINE = "TOKEN decline.";
    const ACCESS_DECLINE = "Access decline.";
    const ACCESS_UNAUTHORIZED = "Unauthorized access.";
    const STATUS = "status";
    const URL = "url";
    const CODE = "code";

    public function __construct() {
        //
    }
    
    /**
     * @param string $text
     * @param int $month
     * @return string
     */
    public function getDiferenceMonth(string $text, int $month){
        return $text.str_replace($this->getPercent(), $month, $month > 1 ? self::MOTHS_DIFENCENS : self::MONTH_DIFENCENS);
    }
    
    /**
     * @param string|int $number
     * @param string $label
     * @return string
     */
    public function concatTwoString(string|int $number, string $label){
        return $number." ".$label;
    }

    /**
     * @param string $text
     * @param int $year
     * @return string
     */
    public function getDiferenceYear(string $text, int $year){
        return $text.str_replace($this->getPercent(), $year, $year > 1 ? self::YEARS_DIFENCENS : self::YEAR_DIFENCENS);
    }

    /**
     * @param string $text
     * @param int $days
     * @return string
     */
    public function getDiferenceDays(string $text, int $days){
        return $text.str_replace($this->getPercent(), $days, $days > 1 ? self::DAYS_DIFENCENS : self::DAY_DIFENCENS);
    }
    
    /**
     * @return string
     */
    public function getPercent(){
        return self::PERCENT;
    }

    /**
     * @return string
     */
    public function getLike(){
        return self::LIKE;
    }
    
    /**
     * @return string
     */
    public function getIp(){
        return self::IP;
    }
}
?>