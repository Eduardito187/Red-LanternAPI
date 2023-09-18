<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Scorts\Services;
use App\Helpers\Data\Status;

class VisitorControllers extends Controller
{
    /**
     * @var Services
     */
    protected $services;
    /**
     * @var Status
     */
    protected $status;

    public function __construct() {
        $this->services = new Services();
        $this->status = new Status();
    }

    /**
     * @param Request $request
     * @return Response
    */
    public function Index(Request $request)
    {
        return view('visitor/index')->with(
            [
                'category' => $this->services->getAllCategory(),
                'home_introduction_status' => $this->services->homeIntroductionStatus()->value ?? $this->status->getDisable(),
                'home_end_status' => $this->services->homeEndStatus()->value ?? $this->status->getDisable(),
                'home_introduction_status_html' => $this->services->homeIntroductionStatusHtml()->value ?? $this->status->getDisable(),
                'home_end_status_html' => $this->services->homeEndStatusHtml()->value ?? $this->status->getDisable()
            ]
        );
    }

    /**
     * @param Request $request
     * @return Response
    */
    public function Seguridad(Request $request)
    {
        return view('visitor/seguridad');
    }

    /**
     * @param Request $request
     * @return Response
    */
    public function Privacidad(Request $request)
    {
        return view('visitor/privacidad');
    }

    /**
     * @param Request $request
     * @return Response
    */
    public function Confidencialidad(Request $request)
    {
        return view('visitor/confidencialidad');
    }
}