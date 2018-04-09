<?php
/**
 * Created by PhpStorm.
 * User: hsh
 * Date: 18/4/8
 * Time: 下午4:27
 */

namespace App\Http\Utils;


class ApiReturn
{

    public function success($data, $message = "") {
        return [
            "code" => 1,
            "message" => $message ? $message : 'success',
            "data" => $data
        ];
    }

    public function error($message){
        return [
            "code" => 0,
            "data" => null,
            "message" => $message
        ];
    }
}