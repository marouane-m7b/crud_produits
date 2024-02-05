<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Type;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products', ['products' => Produit::paginate(4)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        return view('create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'RefPdt' => ['required', 'string', 'max:10', 'unique:produits,RefPdt'],
            'libPdt' => ['required', 'string', 'max:255'],
            'Prix' => ['required', 'string', 'max:255'],
            'Qte' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'type_id' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ];  
        $request->validate($rules);
        $produit = new Produit();
        $produit->refPdt = "P00".$request->input('refPdt');
        $produit->libPdt = $request->input('libPdt');
        $produit->Prix = $request->input('Prix');
        $produit->Qte = $request->input('Qte');
        $produit->description = $request->input('description');
        $produit->type_id = $request->input('type_id');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $filename);
            $produit->image = $filename;
        }
        $produit->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        return view('product', ['product' => $produit]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return to_route('product.index');
    }
}
