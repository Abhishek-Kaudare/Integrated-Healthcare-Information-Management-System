<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false;

    public function generaluser(){
        if($this->role_id === 1 ){
            return true;
        }
        return false;
    }
    public function doctor(){
        if($this->role_id === 2 ){
            return true;
        }
        return false;
    }

    public function hospital(){
        if($this->role_id === 3 ){
            return true;
        }
        return false;
    }

    public function pharmacy(){
        if($this->role_id === 4 ){
            return true;
        }
        return false;
    }

    public function blood(){
        if($this->role_id === 5 ){
            return true;
        }
        return false;
    }
    public function admin(){
        if($this->role_id === 6 ){
            return true;
        }
        return false;
    }


}
