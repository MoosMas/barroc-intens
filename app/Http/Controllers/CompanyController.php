<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view('pages.admin.companies.index', [
            'companies' => $companies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(now());
        $company = new Company();
        $company->name = $request->name;
        $company->phone = $request->phone;
        $company->street = $request->street;
        $company->house_number = $request->house_number;
        $company->city = $request->city;
        $company->country_code = $request->country_code;
        if($request->has('bkr_checked_at')){
                $company->bkr_checked_at = now()->toDateTimeString();
            }else{
                //Checkbox not checked
            }
        $company->contact_id = $request->contact_id;
        $company->save();

        return redirect()
            ->route('companies.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::findOrFail($id);
        
        return view('pages.admin.companies.show', [
            'company' => $company,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
       //dd(now());
        return view('pages.admin.companies.edit', [
            'company' => $company]);

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
        $company = Company::findOrFail($id);
        $company->name = $request->name;
        $company->phone = $request->phone;
        $company->street = $request->street;
        $company->house_number = $request->house_number;
        $company->city = $request->city;
        $company->country_code = $request->country_code;
        if($request->has('bkr_checked_at')){
                $company->bkr_checked_at = now()->toDateTimeString();
            }else{
                //Checkbox not checked
            }
        $company->contact_id = $request->contact_id;
        $company->save();

        return redirect()
            ->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::destroy($id);
        return redirect()
        ->route('companies.index');
    }
}
