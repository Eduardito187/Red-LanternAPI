<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Account;
use App\Models\Feed;
use App\Models\Picture;

class FeedPicture extends Model
{
    use HasFactory;

    protected $table = 'feed_picture';

    protected $fillable = ['sort', 'id_account', 'id_feed', 'id_picture', 'created_at', 'updated_at'];
    protected $hidden = ['created_at', 'updated_at'];

    public $timestamps = false;
    
    public function Account() {
        return $this->hasOne(Account::class, 'id', 'id_account');
    }
    
    public function Feed() {
        return $this->hasOne(Feed::class, 'id', 'id_feed');
    }
    
    public function Picture() {
        return $this->hasOne(Picture::class, 'id', 'id_picture');
    }
}