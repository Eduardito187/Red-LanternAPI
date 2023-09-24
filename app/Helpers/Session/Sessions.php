<?php

namespace App\Helpers\Session;

use Illuminate\Support\Facades\Log;
use App\Helpers\Data\Text;
use App\Helpers\Data\Date;
use \Exception;
use Illuminate\Support\Facades\Session;

class Sessions{
    /**
     * @var Text
     */
    protected $text;

    /**
     * @var Date
     */
    protected $date;

    /**
     * @var Session
     */
    protected $session;

    public function __construct()
    {
        $this->session = new Session();
    }

    /**
     * @param string $nombre
     * @param mixed $valor
     * @return void
     */
    public function setVariableSesion($nombre, $valor)
    {
        $this->session::put($nombre, $valor);
    }

    /**
     * @param string $nombre
     * @return void
     */
    public function deleteVariableSesion(string $nombre)
    {
        $this->session::forget($nombre);
    }

    /**
     * @param string $nombre
     * @return mixed
     */
    public function getVariableSesion(string $nombre)
    {
        $value = null;

        try {
            if ($this->session::has($nombre)) {
                $value = $this->session::get($nombre);
            } else {
                $value = null;
            }
        } catch (\Exception $e) {
            $value = null;
        }

        return $value;
    }
}
?>