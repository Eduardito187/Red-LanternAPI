<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ip;

class RestrictIp extends Model
{
    use HasFactory;

    protected $table = 'restrict_ip';

    protected $fillable = ['id_ip', 'created_at', 'updated_at'];

    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = false;
    
    public function Ip() {
        return $this->hasOne(Ip::class, 'id', 'id_ip');
    }
}
