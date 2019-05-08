<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'is_verified', 'location', 'description', 'photo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * checking role of user if in db value is equal 1 then admin if 2 then moderator if 3 then user default user
     * @return string
     */
    public function role() {
        switch($this->role) {
            case 1:
                return 'admin';
                break;
            case 2:
                return 'mod';
                break;
            case 3:
                return 'user';
                break;
            default:
                return 'user';
                break;
        }
    }

    /**
     * checking role and if role is admin then return boolean isAdmin true;
     * @return bool
     */
    public function isAdmin() {
        return $this->role()=='admin' ? true : false;
    }

    /**
     * Checking role and if role is equal mod then return boolean isModerator true;
     * @return bool
     */
    public function isModerator() {
        return $this->role()=='mod' ? true : false;
    }

    /**
     * Checking role and if role is equal user then return boolean isUser true;
     * @return bool
     */
    public function isUser() {
        return $this->role()=='user' ? true : false;
    }

    /** return boolean if user is verified
     * @return bool|int
     */
    public function isVerified() {
        return $this->is_verified==1 ? true : false;
    }

    /**
     * Var photo belongs to model photo
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function photo() {
        return $this->belongsTo('App\Photo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function offer() {
        return $this->hasMany('App\Offer');
    }

    public function wishlist(){
        return $this->hasMany(Wishlist::class);
    }
}
