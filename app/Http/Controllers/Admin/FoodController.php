<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\Activity;
use App\Http\Models\Food;
use App\Http\Utils\ApiReturn;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.food', [
            "list" => Food::paginate(20)
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
        return view('admin.foodCreate', [
            "item" => [
                "id" => null,
                "img" => null,
                "content" => null,
                "create_user" => null,
                "dateType" => null,
                "foodType" => null,
                "date" => null,
                "last_modify-user" => null
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
        $result = Activity::create([
            "content" => $request['content'],
            "img" => $request['img'],
            "dateType" => $request['dateType'],
            "foodType" => $request['foodType'],
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
        return view('admin.foodCreate', [
            "item" => Food::findOrFail($id)
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
        return Food::findOrFail($id);
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
        $one = Food::find($id);
        $result = $one->update([
            "img" => $request['img'],
            "content" => $request['content'],
            "dateType" => $request['dateType'],
            "foodType" => $request['foodType'],
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
        $result = Food::find($id)->delete();
        $apiReturn = new ApiReturn();
        return $apiReturn->success($result);
    }
}
