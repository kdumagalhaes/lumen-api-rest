<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    
    public function showAllOffers()
    {
        return response()->json(Offer::all());
    }

    public function showOneOffer($id)
    {
        return response()->json(Offer::find($id));
    }

    public function create(Request $request)
    {
        $offer = Offer::create($request->all());

        return response()->json($offer, 201);
    }

    public function update($id, Request $request)
    {
        $offer = Offer::findOrFail($id);
        $offer->update($request->all());

        return response()->json($offer, 200);
    }

    public function delete($id)
    {
        Offer::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}