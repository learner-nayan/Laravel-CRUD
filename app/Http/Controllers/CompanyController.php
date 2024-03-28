<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index() {
        $companies = Company::get();
        return view('companies.index', compact('companies'));
    }

    public function create() {
        return view('companies.create');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required | min:3 | string',
            'address' => 'nullable | string',
            'est_date' => 'nullable | date',
            'type' => 'required | in:IT,Software,Finance', 
            'status' => 'accepted'
        ]);

        // dd($request);
        // dd($validatedData);

        $company = new Company();

        // $company->name = $request->name;
        // $company->address = $request->address;
        // $company->est_date = $request->est_date;
        // $company->type = $request->type;
        // $company->status = $request->status=='on'?1:0;

        $company->name = $validatedData['name'];
        $company->address = $validatedData['address'];
        $company->est_date = $validatedData['est_date'];
        $company->type = $validatedData['type'];
        $company->status = $validatedData['status']=='on'?1:0;

        $company->save();
        return redirect()->route('companies.index')->with('message', 'Data stored successfully.');
    }

    public function edit($id) {
        $company=Company::find($id);
        return view('companies.edit', compact('company'));
    }

    public function update($id, Request $request) {
        $company=Company::find($id);
        // dd($id);
        $request->validate([
            'name' => 'required | min:3 | string',
            'address' => 'nullable | string',
            'est_date' => 'nullable | date',
            'type' => 'required | in:IT,Software,Finance', 
            'status' => 'accepted'
        ]);

        $company->name = $request->name;
        $company->address = $request->address;
        $company->est_date = $request->est_date;
        $company->type = $request->type;
        $company->status = $request->status=='on'?1:0;

        $company->update();

        return redirect()->route('companies.index')->with('message', 'Record upated successfully');
    }

    public function delete($id) {
        // dd($id);
        $company = Company::find($id);
        $company->delete();
        return redirect()->route('companies.index')->with('message', 'Record deleted successfully');
    }
}
