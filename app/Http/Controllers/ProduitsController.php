<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProduitStoreRequest;
use App\Models\Categorie;
use App\Models\CodeBarre;
use App\Models\Produit;
use App\Models\QRCode;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::all();
        $codebarres = CodeBarre::all();
        $qrcodes = QRCode::all();

        return view('produits.index', compact('produits', 'codebarres', 'qrcodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('produits.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $codebarre= new CodeBarre();

        if($request->file('imagecodebarre')){
            $file= $request->file('imagecodebarre');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('imagecodebarre'), $filename);
            $codebarre['imagecodebarre']= $filename;
        }
        $codebarre->save();
        //$codebarre = CodeBarre::create(["imagecodebarre" => 'img/products/' . $filename]);


        $qrcode= new QRCode();

        if($request->file('imageqrcode')){
            $file= $request->file('imageqrcode');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('imageqrcode'), $filename);
            $qrcode['imageqrcode']= $filename;
        }
        $qrcode->save();

        //$qrcode = QRCode::create($request->only('imageqrcode'));


        $produit = Produit::create(array_merge(
            $request->only('nom', 'description', 'quantite', 'categorie_id'),
            [
                'codebarre_id' => $codebarre->id,
                'qrcode_id' => $qrcode->id,
            ]
        ));
        //dd($codebarre->id);
        // $produit->codebarre_id= $codebarre->id;
        //$produit->qrcode_id = $qrcode->id ;
        return redirect()->route('produits.index')
            ->withSuccess(__('Produit crée avec succée'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        return view('produits.show', [
            'produit' => $produit
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        return view('produits.edit', [
            'produit' => $produit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {
        $produit->update($request->only('nom', 'description', 'quantite'));

        return redirect()->route('produits.index')
            ->withSuccess(__('Produit modifié avec succée'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();

        return redirect()->route('produits.index')
            ->withSuccess(__('Produit supprimé avec succée'));
    }

    public function delete($id)
    {
        $produit = Produit::find($id);

        return view('produits.delete', compact('produit'));
    }
}
