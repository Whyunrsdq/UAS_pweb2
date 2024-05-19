<?php

namespace App\Http\Controllers;

use App\Models\Bukutamu;
use Illuminate\Http\Request;

class BukutamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array(
            'bukutamus' => Bukutamu::all()
        );
        return view('back.index', $data);
    }

    public function cari(Request $request)
    {
        if ($request->has('cari')) {
            $bukutamus = Bukutamu::where('nama', 'LIKE', '%' . $request->cari . '%')->orwhere('email', 'LIKE', '%' . $request->cari . '%')->paginate(5);
        } else {
            $bukutamus = Bukutamu::all();
        }
        return view('back.cari', compact('bukutamus', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $bukutamu = new Bukutamu();
            $bukutamu->nama = $request->nama;
            $bukutamu->email = $request->email;
            $bukutamu->pesan = $request->pesan;
            $bukutamu->save();
            return redirect('/')->with(['success' => 'your message has been sent']);
        }
        return view('front.portofolio-wahyu');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bukutamu  = Bukutamu::find($request->id);
        $data = array(
            'bukutamu' => $bukutamu
        );

        if ($request->isMethod('post')) {
            $bukutamu->nama = $request->nama;
            $bukutamu->email = $request->email;
            $bukutamu->pesan = $request->pesan;
            $bukutamu->save();
            return redirect('/admin')->with(['update' => 'Update successful']);
        }
        return view('front.portofolio-wahyu', $data);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $bukutamu = Bukutamu::find($request->id);
        $bukutamu->delete();
        return redirect('/admin')->with(['delete' => 'data has been successfully deleted']);
    }
}
