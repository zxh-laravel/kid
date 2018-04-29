<?php
/**
 * Created by PhpStorm.
 * User: hsh
 * Date: 18/3/19
 * Time: 下午12:56
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $table = 'news';

    protected $fillable = ['title', 'content', 'banner','status', 'create_user', 'last_modify_user'];
}