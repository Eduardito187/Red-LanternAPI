<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AccountLogin;

class Account extends Model
{
    use HasFactory;
    protected $table = 'account';

    protected $fillable = ['name', 'email', 'token', 'created_at', 'updated_at'];
    protected $hidden = ['token', 'created_at', 'updated_at'];

    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = false;

    public function accountLogin() {
        return $this->hasOne(AccountLogin::class, 'id_account', 'id');
    }
}