<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\Cdpoint;
use App\Models\Kategori;


class SertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
     public function __construct()
     {
         $this->middleware('auth');
     }
     
    public function index()
    {
        return view("pages.sertifikat");
    }


    public function edit(string $id)
    {
         $dataid = $id;
        return view("pages.editsertifikat",compact('dataid'));
    }

    public function view(string $id)
    {
         $dataid = $id;
        return view("pages.viewsertifikat",compact('dataid'));
    }

    public function trialcard(string $id)
    {
        $dataid = $id;
        $card = Card::find($id);
        $toclass = Kategori::find($card->toclass);
        $cardpoint = Cdpoint::where('cards_id',$id)->get();
        return view("pages.trialcard",compact('card','cardpoint','toclass'));
    }

    public function download(string $id)
    {
        $dataid = $id;
        $card = Card::find($id);
        $toclass = Kategori::find($card->toclass);
        $cardpoint = Cdpoint::where('cards_id',$id)->get();
        return view("pages.trialcardpdf",compact('card','cardpoint','toclass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.createsertifikat");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
