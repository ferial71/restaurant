<?php

namespace App\Http\Controllers;

use App\Http\Resources\RestaurantCollection;
use App\Models\restaurent;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware(['auth']);
//    }

    /**
     * Display a listing of the resource.
     *
     * @return RestaurantCollection
     */
    public function index()
    {
        return new RestaurantCollection(restaurent::all());
//        Collection(Player::all());
//        $restaurents = restaurent::all();

//        return json_encode($restaurents);
//        return view('restaurants.index', compact('restaurents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $restorent = restaurent::create($request->all());
        return redirect()->route('restorants.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant = restaurent::findOrFail($id);
        return view('restaurants.edit', compact('restaurant'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restaurant = restaurent::findOrFail($id);
        $restaurant->delete();
        return view('restaurants.index');
    }
}
