<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\ContractProduct;
use App\Models\Maintenance;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Contract;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = Contract::all();

        return view('pages.admin.contracts.index', [
            'contracts' => $contracts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        $products = Product::all();
        
        return view('pages.admin.contracts.create', [
            'companies' => $companies,
            'products' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contract = Contract::create($request->except(['products', '_token']));
        
        $periodicMaintenance = [];
        
        for ($i = 1; $i <= 2; $i++) {
            $periodicMaintenance[$i] = [
                'company_id' => $request->company_id,
                'title' => 'Periodiek onderhoud',
                'remark' => 'Het periodieke onderhoud dat inbegrepen is bij het contract.',
                'start' => Carbon::parse($request->start_date)->addMonths(4*$i)
            ];
        }
        
        foreach ($periodicMaintenance as $appointment) {
            Maintenance::create($appointment);
        }
        
        if ($request->filled('products')) {
            foreach ($request->products as $product) {
                $dbProduct = Product::find($product['product_id']);
                $contractProduct = new ContractProduct();
                $contractProduct->contract_id = $contract->id;
                $contractProduct->product_id = $product['product_id'];
                $contractProduct->amount = $product['amount'];
                $contractProduct->price_per_product = $dbProduct->price;
                $contractProduct->save();
            }
        }
        
        return redirect()
            ->route('contracts.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contract = Contract::findOrFail($id);
        return view('pages.admin.contracts.show', [
            'contract' => $contract,
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
        //
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
        //
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
