<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function company(){
        $companies = Company::paginate(5);
        return view('settings.company',compact('companies'));
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'VOEN' => 'nullable|numeric'
        ]);
        Company::create([
            'name' => $request->name,
            'VOEN' => $request->VOEN
        ]);

        return response()->json([
            'Succesfully created'
        ], 201);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'VOEN' => 'numeric|nullable'
        ]);

        $company = Company::findOrFail($request->id);
        $company->update([
            'name' => $request->name,
            'VOEN' => $request->VOEN
        ]);

        return response()->json([
            'Succesfully updated'
        ], 200);
    }

    public function delete(Request $request)
    {
        $company = Company::findOrFail($request->id);
        $company->delete();
    }


}
