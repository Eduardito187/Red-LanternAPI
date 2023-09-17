<?php

namespace App\Helpers\Data;

use Carbon\Carbon;
use App\Helpers\Data\Text;

class Date{
    /**
     * @var Text
     */
    protected $Text;

    public function __construct() {
        $this->Text = new Text();
        date_default_timezone_set($this->Text::TIME_ZONE);
    }
    
    /**
     * @param string $date
     * @param string|null $date_
     * @param bool|null $status
     * @return string|null
     */
    public function getDiferenceInDates(string $date, string|null $date_, bool|null $status){
        if (is_null($date_) || strlen($date_) == 0) {
            return null;
        }

        $Year = $this->getDiferenceYear($date, $date_);
        $Month = $this->getDiferenceMonth($date, $date_);
        $Days = $this->getDiferenceDays($date, $date_);
        if ($status === true){
            return $this->getDiferenceCreated($Year, $Month, $Days);
        }else if($status === false) {
            return $this->getDiferenceUpdated($Year, $Month, $Days);
        }else {
            $Hours = $this->getDiferenceHours($date, $date_);
            $Minutes = $this->getDiferenceMinutes($date, $date_);
            return $this->getDiferenceUpdatedInit($Year, $Month, $Days, $Hours, $Minutes);
        }
    }

    /**
     * @param int $Year
     * @param int $Month
     * @param int $Days
     * @return string
     */
    public function getDiferenceCreated(string $Year, string $Month, string $Days){
        if ($Year > 0) {
            return $this->Text->getDiferenceYear($this->Text::CREADO, $Year);
        }else if ($Month > 0){
            return $this->Text->getDiferenceMonth($this->Text::CREADO, $Month);
        }else {
            if ($Days > 0) {
                return $this->Text->getDiferenceDays($this->Text::CREADO, $Days);
            }else {
                return $this->Text::CREADO_NOW;
            }
        }
    }

    /**
     * @param int $Year
     * @param int $Month
     * @param int $Days
     * @return string
     */
    public function getDiferenceUpdated(string $Year, string $Month, string $Days){
        if ($Year > 0) {
            return $this->Text->getDiferenceYear($this->Text::MODIFICADO, $Year);
        }else if ($Month > 0){
            return $this->Text->getDiferenceMonth($this->Text::MODIFICADO, $Month);
        }else {
            if ($Days > 0) {
                return $this->Text->getDiferenceDays($this->Text::MODIFICADO, $Days);
            }else {
                return $this->Text::MODIFICADO_NOW;
            }
        }
    }

    /**
     * @param int $Year
     * @param int $Month
     * @param int $Days
     * @param int $Hours
     * @param int $Minutes
     * @return string
     */
    public function getDiferenceUpdatedInit(int $Year, int $Month, int $Days, int $Hours, int $Minutes){
        if ($Year > 0) {
            return $this->Text->concatTwoString($Year, $this->Text::YEAR_PHP);
        }else if ($Month > 0){
            return $this->Text->concatTwoString($Month, $this->Text::MONTH_PHP);
        }else {
            if ($Days > 0) {
                return $this->Text->concatTwoString($Days, $this->Text::DAY_PHP);
            }else {
                if ($Hours > 0) {
                    return $this->Text->concatTwoString($Hours, $this->Text::HOURS_PHP);
                }else {
                    return $this->Text->concatTwoString($Minutes, $this->Text::MINUTES_PHP);
                }
            }
        }
    }

    /**
     * @param string $date
     * @param string $date_
     * @return string
     */
    public function getDiferenceYear(string $date, string $date_){
        $toDate = Carbon::parse($date);
        $fromDate = Carbon::parse($date_);
        return $toDate->diffInYears($fromDate);  
    }

    /**
     * @param string $date
     * @param string $date_
     * @return string
     */
    public function getDiferenceMonth(string $date, string $date_){
        $toDate = Carbon::parse($date);
        $fromDate = Carbon::parse($date_);
        return $toDate->diffInMonths($fromDate);  
    }

    /**
     * @param string $date
     * @param string $date_
     * @return string
     */
    public function getDiferenceDays(string $date, string $date_){
        $toDate = Carbon::parse($date);
        $fromDate = Carbon::parse($date_);
        return $toDate->diffInDays($fromDate);  
    }

    /**
     * @param string $date
     * @param string $date_
     * @return string
     */
    public function getDiferenceHours(string $date, string $date_){
        $toDate = Carbon::parse($date);
        $fromDate = Carbon::parse($date_);
        return $toDate->diffInHours($fromDate);  
    }

    /**
     * @param string $date
     * @param string $date_
     * @return string
     */
    public function getDiferenceMinutes(string $date, string $date_){
        $toDate = Carbon::parse($date);
        $fromDate = Carbon::parse($date_);
        return $toDate->diffInMinutes($fromDate);  
    }

    /**
     * @return int
     */
    public function getDay(){
        return date($this->Text::DAY_PHP);
    }
    
    /**
     * @return int
     */
    public function getMonth(){
        return date($this->Text::MONTH_PHP);
    }
    
    /**
     * @return int
     */
    public function getYear(){
        return date($this->Text::YEAR_PHP);
    }

    /**
     * @return string
     */
    public function getDate(){
        return date($this->Text::DATE_PHP);
    }

    /**
     * @return string
     */
    public function getFullDate(){
        return date($this->Text::ZONE_FULL_PHP);
    }

    /**
     * @param string $date_time
     * @param string $date
     * @return string
     */
    public function addDateToDate(string $date_time, string $date){
        return date($this->Text::ZONE_FULL_PHP, strtotime($date_time.$date));
    }

    /**
     * @return string
     */
    public function getTime(){
        return date($this->Text::TIME_PHP);
    }

    /**
     * @return string
     */
    public function getFullTime(){
        return date($this->Text::DATE_TIME_PHP);
    }
}
?>