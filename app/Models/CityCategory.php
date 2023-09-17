<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\City;

class CityCategory extends Model
{
    use HasFactory;

    protected $table = 'city_category';

    protected $fillable = ['id_city', 'id_category'];

    public $timestamps = false;

    public function Category() {
        return $this->hasOne(Category::class, 'id', 'id_category');
    }
    
    public function City() {
        return $this->hasOne(City::class, 'id', 'id_city');
    }
}