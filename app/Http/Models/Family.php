<?php
/**
 * Created by PhpStorm.
 * User: hsh
 * Date: 18/3/19
 * Time: 下午12:56
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class Family extends Model
{

    protected $table = 'family';

    protected $fillable = ['title', 'banner', 'content', 'status','create_user', 'last_modify_user'];

}