<?php

namespace Consultations;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
            'deleted_at'
        ];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'name',
            'email',
            'username',
            'password',
        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
            'password',
            'remember_token',
        ];

    public function setPasswordAttribute($valor){
        if(!empty($valor)){
            $this->attributes['password'] = \Hash::make($valor);
        }
    }
}
