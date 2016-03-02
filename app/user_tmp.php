<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;

class User_tmp extends Model {

    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_tmp';
    public	$timestamps	=	false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


}
