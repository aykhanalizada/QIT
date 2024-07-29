<?php

namespace App\Http\Controllers;

use App\Models\Measure;
use Illuminate\Http\Request;

class MeasureController extends Controller
{
    public function index()
    {
        $measures = Measure::paginate(5);
        return view('settings.measure',compact('measures'));
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'short_name' => 'required|max:3'
        ]);
        Measure::create([
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

        $country = Measure::findOrFail($request->id);
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
        $country = Measure::findOrFail($request->id);
        $country->delete();
    }


}
