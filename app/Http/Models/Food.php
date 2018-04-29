<?php
/**
 * Created by PhpStorm.
 * User: hsh
 * Date: 18/3/19
 * Time: 下午12:56
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class Food extends Model
{

    protected $table = 'foods';

    protected $fillable = ['content', 'img', 'dateType', 'foodType', 'date' ,'create_user', 'last_modify_user'];

}