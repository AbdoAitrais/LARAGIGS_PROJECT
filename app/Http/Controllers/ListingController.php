<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // show all listings
    public function index(){
        // latest()->get() gets all the listings sorted by the latest
        // request() is same as Request $request
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()     
        ]);
    }
    // show single listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
