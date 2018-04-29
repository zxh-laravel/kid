<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\Classes;
use App\Http\Models\Teacher;
use App\Http\Utils\ApiReturn;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.teacher', [
            "list" => Teacher::paginate(20)
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
        return view('admin.teacherCreate', [
            "item" => [
                "id" => null,
                "name" => null,
                "content" => null,
                "img" => null,
                "word" => null,
                "best" => 0,
                "class_id" => null
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
        $result = Teacher::create([
            "name" => $request['name'],
            "img" => $request['img'],
            "content" => $request['content'],
            "word" => $request['word'],
            "best" => $request['best'],
            "class_id" => $request['class_id'],
            "last_modify_user" => $request['create_user'],
            "create_user" => $request['create_user']
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
        return view('admin.teacherCreate', [
            "item" => Teacher::findOrFail($id),
            "classes" => Classes::get()
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
        return Teacher::findOrFail($id);
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
        $one = Teacher::find($id);
        $result = $one->update([
            "name" => $request['name'],
            "img" => $request['img'],
            "content" => $request['content'],
            "best" => $request['best'],
            "word" => $request['word'],
            "class_id" => $request['class_id'],
            "last_modify_user" => $request['create_user'],
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
        $result = Teacher::find($id)->delete();
        $apiReturn = new ApiReturn();
        return $apiReturn->success($result);
    }
}
