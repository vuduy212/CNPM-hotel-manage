<?php

namespace App\Http\Controllers;

use App\Models\RoomCategories;
use Illuminate\Http\Request;

class RoomCategoriesController extends Controller
{
    protected $roomCategories;

    public function __construct(RoomCategories $roomCategories)
    {
        $this->roomCategories = $roomCategories;
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roomCategories = $this->roomCategories->search($request->all());
        return view('AdminPage.room_categories.index', compact('roomCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoomCategories  $roomCategories
     * @return \Illuminate\Http\Response
     */
    public function show(RoomCategories $roomCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoomCategories  $roomCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomCategories $roomCategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RoomCategories  $roomCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomCategories $roomCategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoomCategories  $roomCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomCategories $roomCategories)
    {
        //
    }
}
