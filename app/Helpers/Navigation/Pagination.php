<?php

namespace App\Helpers\Navigation;

use App\Helpers\Session\Sessions;
use App\Models\Feed;
use App\Models\Category;

class Pagination{

    /**
     * @var string
     */
    const ITEMS_PAGINATION = "items_pagination";

    /**
     * @var Sessions
     */
    protected $sessions;

    public function __construct() {
        $this->sessions = new Sessions();
    }

    /**
     * @return array
     */
    public function getPaginationItems() {
        $p = 1;
        $n = 20;
        if (isset($_GET["p"])) {
            $p = intval($_GET["p"]);
        }
        $paginationItems = $this->sessions->getVariableSesion(self::ITEMS_PAGINATION);
        if (is_null($paginationItems)) {
            $paginationItems = [];
        }else{
            $paginationItems = json_decode($paginationItems);
        }

        $inicio = ($p - 1) * $n;
        $fin = $inicio + $n - 1;

        $inicio = max(0, $inicio);
        $fin = min(count($paginationItems) - 1, $fin);

        return array_slice($paginationItems, $inicio, $fin - $inicio + 1);
    }

    /**
     * @return Feed[]
     */
    public function getItems() {
        return Feed::whereIn('id', $this->getPaginationItems())->get();
    }

    /**
     * @return void
     */
    public function clearItems() {
        $this->sessions->setVariableSesion(self::ITEMS_PAGINATION, json_encode([]));
    }

    /**
     * @param int $idCategory
     * @return array
     */
    public function initCategoryFilter(int $idCategory) {
        //return Category::select('id')->get()->toArray();
        return Category::pluck('id')->toArray();
    }

    /**
     * @param int $idCategory
     * @return void
     */
    public function initCategoryItems(int $idCategory) {
        $this->sessions->setVariableSesion(self::ITEMS_PAGINATION, json_encode($this->initCategoryFilter($idCategory)));
    }
}
?>