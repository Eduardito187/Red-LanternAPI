<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Account;

class Config extends Model
{
    use HasFactory;

    protected $table = 'config_data';

    protected $fillable = ['id', 'code', 'value', 'last_edit', 'created_at', 'updated_at'];

    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = false;

    public function accountLastEdit() {
        return $this->hasOne(Account::class, 'id', 'last_edit');
    }
}