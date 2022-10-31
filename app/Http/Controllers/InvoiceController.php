<?php

namespace App\Http\Controllers;

use App\Models\CustomInvoiceProduct;
use Illuminate\Http\Request;
use App\Models\CustomInvoice;
use App\Models\Product;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = CustomInvoice::all();
        return view('pages.admin.invoices.index', [
            'invoices' => $invoices
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $companies = Company::all();

        return view('pages.admin.invoices.create', [
            'products' => $products,
            'companies' => $companies
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
        $custom_invoice = new CustomInvoice();
        $custom_invoice->date = $request->date;
        $custom_invoice->company_id = $request->company_id;
        $custom_invoice->save();

        if ($request->filled('products')) {
            foreach ($request->products as $currProduct) {
                $product = Product::find($currProduct['product_id']);

                $invoiceProduct = new CustomInvoiceProduct();
                $invoiceProduct->custom_invoice_id = $custom_invoice->id;
                $invoiceProduct->product_id = $currProduct['product_id'];
                $invoiceProduct->amount = $currProduct['product_id'];
                $invoiceProduct->price_per_product = $product->price;
                $invoiceProduct->save();
            }
        }

        return redirect()
            ->route('invoices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = CustomInvoice::find($id);

        return view('pages.admin.invoices.show', [
            'invoices' => $invoice
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
        $invoice = CustomInvoice::findOrFail($id);

        return view('pages/admin/invoices/edit',[
            'invoice' => $invoice
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
