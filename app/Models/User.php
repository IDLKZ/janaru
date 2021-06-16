<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package App\Models
 * @version June 8, 2021, 11:27 am UTC
 *
 * @property integer $is_admin
 * @property string $name
 * @property string $surname
 * @property string $middlename
 * @property string $email
 * @property string $phone
 * @property string $work
 * @property string $birthday
 * @property string $city
 * @property string $skills
 * @property string $about
 * @property integer $email_verified
 * @property string $password
 * @property string $remember_token
 */
class User extends Authenticatable
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'is_admin',
        'name',
        'surname',
        'middlename',
        'email',
        'phone',
        'work',
        'birthday',
        'city',
        'skills',
        'about',
        'email_verified',
        'password',
        'remember_token',
        "img"
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'is_admin' => 'integer',
        'name' => 'string',
        'surname' => 'string',
        'middlename' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'work' => 'string',
        'birthday' => 'string',
        'city' => 'string',
        'skills' => 'string',
        'about' => 'string',
        'email_verified' => 'integer',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'is_admin' => 'required|integer',
        "img"=>"nullable|sometimes|file|image|max:10240",
        'name' => 'required|string|max:255',
        'surname' => 'required|string|max:255',
        'middlename' => 'nullable|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:255',
        'work' => 'nullable|string|max:500',
        'birthday' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'skills' => 'nullable',
        'about' => 'nullable|string',
        'email_verified' => 'required|integer',

        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];


}
