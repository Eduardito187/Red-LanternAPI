<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Account;
use App\Models\Feed;

class AccountCommentFeed extends Model
{
    use HasFactory;

    protected $table = 'account_comment_feed';

    protected $fillable = ['comment', 'id_account', 'id_feed', 'created_at', 'updated_at'];
    protected $hidden = ['id_account', 'id_feed'];

    public $timestamps = false;

    public function Account() {
        return $this->hasOne(Account::class, 'id', 'id_account');
    }
    
    public function Feed() {
        return $this->hasOne(Feed::class, 'id', 'id_feed');
    }
}