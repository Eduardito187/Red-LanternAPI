<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Scorts\Services;
use App\Helpers\Data\Status;
use App\Helpers\Login\Customer;
use App\Helpers\Navigation\Pagination;

class CategoryControllers extends Controller
{
    /**
     * @var Services
     */
    protected $services;
    
    /**
     * @var Status
     */
    protected $status;

    /**
     * @var Customer
     */
    protected $customer;

    /**
     * @var Pagination
     */
    protected $pagination;

    public function __construct() {
        $this->services = new Services();
        $this->status = new Status();
        $this->customer = new Customer();
        $this->pagination = new Pagination();
    }

    /**
     * @param Request $request
     * @param string $url
     * @return Response
    */
    public function CategoryUrl(Request $request, string $url)
    {
        $Category = $this->services->getByUrl($url);

        if (!is_null($Category)) {
            $this->customer->setCurrentCategoryPage($Category->code);
            $this->pagination->initCategoryItems($Category->id);
            return view('visitor/category/view')->with(
                [
                    'category' => $Category
                ]
            );
        }else {
            $this->pagination->clearItems();
            return view('visitor/category/none');
        }
    }
}