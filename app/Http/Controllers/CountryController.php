<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function country()
    {
        $countries = Country::paginate(2);
        return view('settings.country', compact('countries'));
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'short_name' => 'required|max:3'
        ]);
        Country::create([
            'name' => $request->name,
            'short_name' => $request->short_name
        ]);

        return response()->json([
            'Succesfully created'
        ], 201);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'short_name' => 'required|max:3|string'
        ]);

        $country = Country::findOrFail($request->id);
        $country->update([
            'name' => $request->name,
            'short_name' => $request->short_name
        ]);

        return response()->json([
            'Succesfully updated'
        ], 200);
    }

    public function delete(Request $request)
    {
        $country = Country::findOrFail($request->id);
        $country->delete();
    }


}

