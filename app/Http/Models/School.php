<?php
/**
 * Created by PhpStorm.
 * User: hsh
 * Date: 18/3/19
 * Time: 下午12:56
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class School extends Model
{

    protected $table = 'school';

    protected $fillable = ['name', 'content', 'mobile', 'wechat', 'address', 'open_time', 'close_time', 'last_modify_user'];
}