<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use App\Models\User;
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
        
        $incompleteRequests = [];
        foreach ($requests as $request){
            if (empty($request->start)) {
                array_push($incompleteRequests, $request->id);
            }
            elseif (empty($request->duration_minutes)) {
                array_push($incompleteRequests, $request->id);
            }
            elseif (empty($request->employee_id)) {
                array_push($incompleteRequests, $request->id);
            }
            else {
                continue;
            }
        }

        return view('pages.admin.maintenance.index', [
            'requests' => $requests,
            'incompleteRequests' => $incompleteRequests
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
        $maintenance_request->start = $request->start;
        $maintenance_request->duration_minutes = $request->duration_minutes;
        $maintenance_request->employee_id = $request->employee_id;
        $maintenance_request->save();

        return redirect()
            ->route('home')
            ->with('success', 'Storingsaanvraag succesvol verstuurd');
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
        $employees = User::all()->where('role_id', 10);
        
        return view('pages.admin.maintenance.edit', [
            'maintenance' => $maintenance,
            'employees' => $employees
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

        // TODO: Add form fields for these properties
        $maintenance->employee_id = $request->employee_id;
//        $maintenance->work_order_id = $request->work_order_id;

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
