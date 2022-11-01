<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = Maintenance::all();
        
        $requests = $requests->map(function ($request) {
            $request->end = $request->getEndTime();
            return $request;
        });
        
        return view('pages.admin.maintenance.index', [
            'requests' => $requests
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.guest.maintenance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maintenance_request = new Maintenance();
        $maintenance_request->company_id = Auth::user()->company->id;
        $maintenance_request->title = $request->title;
        $maintenance_request->remark = $request->remark;
        $maintenance_request->save();
        
        return redirect()
            ->route('maintenance.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maintenance = Maintenance::find($id);
        
        return view('pages.admin.maintenance.show', [
            'maintenance' => $maintenance
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
        $maintenance = Maintenance::find($id);
        
        return view('pages.admin.maintenance.edit', [
            'maintenance' => $maintenance
        ]);
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
        $newDate = Carbon::parse($request->start_date)
            ->setTimeFromTimeString($request->start_time);
        
        $maintenance = Maintenance::find($id);
        $maintenance->title = $request->title;
        $maintenance->remark = $request->remark;
        $maintenance->start = $newDate;
        $maintenance->duration_minutes = $request->duration_minutes;
        
        $maintenance->save();
        
        return redirect()
            ->route('maintenance.index')
            ->with('success', 'Aanvraag aangepast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
