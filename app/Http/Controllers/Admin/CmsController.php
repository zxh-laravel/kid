<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\Cms;
use App\Http\Utils\ApiReturn;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.cms', [
            "list" => Cms::paginate(20)
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
        return view('admin.cmsCreate', [
            "item" => [
                "id" => null,
                "name" => null,
                "content" => null,
                "img" => null
            ]
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
        $result = Cms::create([
            "name" => $request['name'],
            "img" => $request['img'],
            "content" => $request['content'],
            "last_modify_user" => $request['create_user'],
            "create_user" => $request['create_user']
        ]);

        $apiReturn = new ApiReturn();
        return $apiReturn->success($request);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.cmsCreate', [
            "item" => Cms::findOrFail($id)
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
        return Cms::findOrFail($id);
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
        $one = Cms::find($id);
        $result = $one->update([
            "name" => $request['name'],
            "img" => $request['img'],
            "content" => $request['content'],
            "last_modify_user" => $request['create_user'],
        ]);

        $apiReturn = new ApiReturn();
        return $apiReturn->success($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Cms::find($id)->delete();
        $apiReturn = new ApiReturn();
        return $apiReturn->success($result);
    }
}
