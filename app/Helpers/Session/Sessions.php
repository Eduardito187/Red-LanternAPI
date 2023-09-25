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

    public function __construct()
    {
        //
    }

    /**
     * @param string $nombre
     * @param mixed $valor
     * @return void
     */
    public function setVariableSesion($nombre, $valor)
    {
        Session::put(
            [$nombre => $valor]
        );
    }

    /**
     * @param string $nombre
     * @return void
     */
    public function deleteVariableSesion(string $nombre)
    {
        Session::forget($nombre);
    }

    /**
     * @param string $nombre
     * @return mixed
     */
    public function getVariableSesion(string $nombre)
    {
        $value = null;

        try {
            if (Session::has($nombre)) {
                $value = session($nombre);
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