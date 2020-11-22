<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Offer;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index(Request $request)
    {
        $city = City::where('slug', $request->city)->first();
        $category = Category::where('slug', $request->category)->first();

        if (!isset($request->subcategory))
        {
            return response()->json(Offer::isPublished()->where('city_id', $city->id)->where('category_id', $category->id)->with('images')->paginate(6));
        }

        $subcategory = SubCategory::where('slug', $request->subcategory)->first();

        return response()->json(Offer::isPublished()->where('city_id', $city->id)->where('category_id', $category->id)->where('sub_category_id', $subcategory->id)->with('images')->paginate(6));
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

    public function show($slug)
    {
        return response()->json(Offer::isPublished()->where('slug', $slug)->with('images')->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        //
    }
}
