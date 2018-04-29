<?php
/**
 * Created by PhpStorm.
 * User: hsh
 * Date: 18/3/19
 * Time: 下午12:56
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    protected $table = 'teachers';

    protected $fillable = ['name', 'img', 'content', 'word', 'class_id', 'best', 'last_modify_user'];

    public function classInfo ()
    {
        return $this->belongsTo('App\Http\Models\Classes', 'class_id', 'id');
    }
}