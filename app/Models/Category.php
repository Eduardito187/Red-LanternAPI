<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Account;
use App\Models\Picture;
use App\Models\CityCategory;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';

    protected $fillable = ['id', 'code', 'name', 'url', 'icon_html', 'content_html', 'virtual', 'status', 'id_picture', 'last_edit', 'created_at', 'updated_at'];

    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = false;

    public function accountLastEdit() {
        return $this->hasOne(Account::class, 'id', 'last_edit');
    }
    
    public function Picture() {
        return $this->hasOne(Picture::class, 'id', 'id_picture');
    }
    
    public function CityCategory() {
        return $this->hasMany(CityCategory::class, 'id_category', 'id');
    }
}