<?php

namespace App\Helpers\Scorts;

use App\Helpers\Data\Text;
use App\Helpers\Data\Status;
use App\Models\Category;
use App\Models\Config;

class Services{/**
     * @var Text
     */
    protected $text;
    /**
     * @var Status
     */
    protected $status;
    const HOME_INTRODUCTION_STATUS = "home_introduction_status";
    const HOME_END_STATUS = "home_end_status";
    const HOME_INTRODUCTION_STATUS_HTML = "home_introduction_status_html";
    const HOME_END_STATUS_HTML = "home_end_status_html";

    public function __construct() {
        $this->text = new Text();
        $this->status = new Status();
    }

    /**
     * @return Category|null
     */
    public function getByUrl(string $url){
        $Category = Category::where($this->text::URL, $url)->first();
        if (!$Category) {
            return null;
        }
        return $Category;
    }

    /**
     * @return Category[]
     */
    public function getAllCategory(){
        return Category::where($this->text::STATUS, $this->status->getEnable())->get();
    }
    

    /**
     * @return Category[]
     */
    public static function AllCategory(){
        return Category::where("status", true)->get();
    }

    /**
     * @return Config
     */
    public function homeIntroductionStatus(){
        return Config::where($this->text::CODE, self::HOME_INTRODUCTION_STATUS)->first();
    }

    /**
     * @return Config
     */
    public function homeEndStatus(){
        return Config::where($this->text::CODE, self::HOME_END_STATUS)->first();
    }

    /**
     * @return Config
     */
    public function homeIntroductionStatusHtml(){
        return Config::where($this->text::CODE, self::HOME_INTRODUCTION_STATUS_HTML)->first();
    }

    /**
     * @return Config
     */
    public function homeEndStatusHtml(){
        return Config::where($this->text::CODE, self::HOME_END_STATUS_HTML)->first();
    }
}
?>