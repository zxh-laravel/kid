<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\Activity;
use App\Http\Models\Classes;
use App\Http\Models\Online;
use App\Http\Utils\ApiReturn;
use Illuminate\Http\Request;

class OnlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.online', [
            "list" => Online::paginate(20)
        ]);
//        return Cms::paginate(20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.actCreate', [
            "item" => [
                "id" => null,
                "content" => null,
                "class_id" => null,
                "date" => null,
                "create_user" => null,
                "last_modify-user" => null
            ],
            "classes" => Classes::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = Activity::create([
            "class_id" => $request['class_id'],
            "content" => $request['content'],
            "date" => $request['date'],
            "last_modify_user" => $request['create_user'] ? $request['create_user'] : '',
            "create_user" => $request['create_user'] ? $request['create_user'] : ''
        ]);

        $apiReturn = new ApiReturn();
        return $apiReturn->success($result);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.actCreate', [
            "item" => Activity::findOrFail($id)
        ]);
//        return Cms::findOrFail($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Activity::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $one = Activity::find($id);
        $result = $one->update([
            "class_id" => $request['class_id'],
            "content" => $request['content'],
            "date" => $request['date'],
            "last_modify_user" => $request['create_user'] ? $request['create_user'] : '',
        ]);

        $apiReturn = new ApiReturn();
        return $apiReturn->success($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Activity::find($id)->delete();
        $apiReturn = new ApiReturn();
        return $apiReturn->success($result);
    }
}
