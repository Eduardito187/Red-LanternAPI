<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Account;
use App\Models\City;
use App\Models\Category;
use App\Models\TypeFeed;
use App\Models\AccountCommentFeed;
use App\Models\AccountLikeFeed;
use App\Models\AccountQualityFeed;
use App\Models\AccountSharedFeed;
use App\Models\FeedPicture;

class Feed extends Model
{
    use HasFactory;
    protected $table = 'feed';

    protected $fillable = [
        'id', 'title', 'url', 'enable_comments', 'comments', 'enable_likes', 'likes', 'enable_shareds', 
        'shareds', 'body', 'id_account', 'id_city', 'id_category', 'id_type_feed', 'status', 'premium', 
        'quality', 'publish_at', 'disabled_at', 'created_at', 'updated_at'
    ];
    protected $hidden = ['publish_at', 'disabled_at', 'created_at', 'updated_at'];

    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = false;
    
    public function Account() {
        return $this->hasOne(Account::class, 'id', 'id_account');
    }
    
    public function City() {
        return $this->hasOne(City::class, 'id', 'id_city');
    }
    
    public function Category() {
        return $this->hasOne(Category::class, 'id', 'id_category');
    }
    
    public function TypeFeed() {
        return $this->hasOne(TypeFeed::class, 'id', 'id_type_feed');
    }

    public function AccountCommentFeed() {
        return $this->hasMany(AccountCommentFeed::class, 'id_feed', 'id');
    }
    public function AccountLikeFeed() {
        return $this->hasMany(AccountLikeFeed::class, 'id_feed', 'id');
    }
    public function AccountQualityFeed() {
        return $this->hasMany(AccountQualityFeed::class, 'id_feed', 'id');
    }
    public function AccountSharedFeed() {
        return $this->hasMany(AccountSharedFeed::class, 'id_feed', 'id');
    }
    public function FeedPicture() {
        return $this->hasMany(FeedPicture::class, 'id_feed', 'id');
    }
}