<?php

namespace App\Http\Middleware;

use \Closure;
use \Illuminate\Http\Request;
use App\Helpers\Security\TokenAccess;
use App\Helpers\Data\Text;
use App\Helpers\Data\Status;
use App\Helpers\Security\IpLocker;
use \Illuminate\Http\Response;
use \Illuminate\Http\RedirectResponse;
use App\Helpers\Login\Customer;

class MiddlewareNoLogin{
    /**
     * @var Text
     */
    protected $text;
    /**
     * @var Status
     */
    protected $status;
    /**
     * @var IpLocker
     */
    protected $ipLocker;
    /**
     * @var TokenAccess
     */
    protected $tokenAccess;
    /**
     * @var Customer
     */
    protected $customer;

    public function __construct() {
        $this->text = new Text();
        $this->status = new Status();
        $this->ipLocker = new IpLocker();
        $this->tokenAccess = new TokenAccess();
        $this->customer = new Customer();
    }

    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure(Request): (Response|RedirectResponse)  $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //Setea la ip en la clase IpLocker
        $this->ipLocker->setIp($request->ip());
        //Registra u valida la Ip del cliente
        $this->ipLocker->validateIp();

        // Validacion de Ip
        if ($this->ipLocker->validRestrict() == $this->status->getDisable()) {
            return abort($this->text::ERROR_401, $this->text::ACCESS_UNAUTHORIZED);
        }

        // Validacion de login
        if ($this->customer->isLogin() === false) {
            return $next($request);
        }else {
            return redirect()->route("Home");
        }
    }
}