<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activite;
use App\Http\Requests\StoreGestionnaireReqest;
use Illuminate\Support\Facades\Auth;

class ActiviteController extends Controller
{

    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activitesList = Activite::orderBy('id')->get();
        return view('activite.list',['activitesList' => $activitesList]);
    }

  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::check())
            return redirect('login');
        if(Auth::user()->admin == true)
            return view('activite.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGestionnaireReqest $request)
    {
        if(!Auth::check())
            return redirect('login');
        if(Auth::user()->admin == true){
            $request->validated();

            $activite = activite::create($request->input());
            $activite->save();
            return redirect()->route('activite.show', ['activite' => $activite]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('activite.show',['activites' => activite::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Auth::check())
            return redirect('login');
        if(Auth::user()->admin == true)
            return view('activite.edit',['activites' => activite::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreGestionnaireReqest $request, activite $activite)
    {
        if(!Auth::check())
            return redirect('login');
        if(Auth::user()->admin == true){
            $request->validated();
            $activite->update($request->input());
            return redirect()->route('activite.show', ['activite' => $activite]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Auth::check())
            return redirect('login');
        if(Auth::user()->admin == true){
            $activite = activite::findOrFail($id);
            $activite->delete();
            return redirect()->route('activite.index');
        }
    }
}
