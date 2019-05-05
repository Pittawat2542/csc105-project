<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'name',
        'age',
        'category_id',
        'location',
        'description',
        'photo_id',
        'user_id',
        'phone',
        'line',
        'facebook'
    ];

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
//     */
//    public function category() {
//        return $this->belongsToMany('App\Categories', 'categories', 'category_id', null, 'id');
//    }

    public function category() {
        return $this->belongsTo('App\Categories', 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function photo() {
        return $this->belongsTo('App\Photo');
    }
}
