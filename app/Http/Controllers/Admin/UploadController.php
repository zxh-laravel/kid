<?php
/**
 * Created by PhpStorm.
 * User: hsh
 * Date: 18/4/8
 * Time: 下午2:08
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Utils\ApiReturn;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index (Request $request){
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $path = $img->store(date('Ymd'), 'uploads');

            $api = new ApiReturn();
            return $api->success([
                "url" => '/uploads/'.$path
            ]);

        }
    }
}