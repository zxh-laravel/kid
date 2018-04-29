<?php
/**
 * Created by PhpStorm.
 * User: hsh
 * Date: 18/3/19
 * Time: 下午12:56
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class Online extends Model
{

    protected $table = 'onlines';

    protected $fillable = ['name', 'sex', 'mobile', 'age'];

}