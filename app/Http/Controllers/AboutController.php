<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        $data = array(
            'abouts' => About::all()
        );
        return view('back.about', $data);
    }

    public function edit($id)
    {
        $about = About::find($id);
        return view('back.edit', compact(['about']));
    }

    public function update(Request $request, string $id)
    {
        $about  = About::find($request->id);
        $data = array(
            'abouts' => $about
        );

        if ($request->isMethod('post')) {
            $about->home = $request->home;
            $about->save();
            return redirect('/about')->with(['success' => 'Update successful']);
        }
        return view('back.setting-update', $data);
    }
    public function aboutbaru(Request $request, string $id)
    {
        $about  = About::find($request->id);
        $data = array(
            'about' => $about
        );

        if ($request->isMethod('post')) {
            $about->home = $request->home;
            $about->save();
            return redirect('/admin')->with(['success' => 'Update successful']);
        }
        return view('back.setting-update', $data);
    }
    // public function show()
    // {
    //     $data = array(
    //         'abouts' => About::all()
    //     );
    //     return view('front.portofolio-wahyu', $data);
    // }
}
