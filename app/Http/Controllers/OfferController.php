<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Offer;
use App\Models\OfferProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::all();
        
        return view('pages.admin.offers.index', [
            'offers' => $offers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacts = Contact::all();
        $products = Product::all();
        
        return view('pages.admin.offers.create', [
            'contacts' => $contacts,
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
        $offer = new Offer();
        $offer->contact_id = $request->contact_id;
        $offer->save();

        if ($request->filled('products')) {
            foreach ($request->products as $currProduct) {
                $product = Product::find($currProduct['product_id']);

                $offerProduct = new OfferProduct();
                $offerProduct->offer_id = $offer->id;
                $offerProduct->product_id = $currProduct['product_id'];
                $offerProduct->amount = $currProduct['amount'];
                $offerProduct->price_per_product = $product->price;
                $offerProduct->save();
            }
        }
        
        return redirect()
            ->route('offers.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = Offer::with('products')->find($id);
        $contacts = Contact::all();
        $products = Product::all();
        
        return view('pages.admin.offers.edit', [
            'offer' => $offer,
            'contacts' => $contacts,
            'products' => $products
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
        $offer = Offer::find($id);
        $offer->contact_id = $request->contact_id;
        $offer->save();
        
        $dataToSync = collect($request->products)->mapWithKeys(function($product, $key){
            $dbProduct = Product::find($product['product_id']);
            return [
                $product['product_id'] => [
                    'amount' => $product['amount'],
                    'price_per_product' => $dbProduct->price
                ]
            ];
        });
        
        $offer->products()->sync($dataToSync);        

        return redirect()
            ->route('offers.edit', $id);
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
