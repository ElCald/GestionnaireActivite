<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGestionnaireReqest;
use App\Models\Enfant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Activite;

class EnfantController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enfantsList = Enfant::orderBy('id')->get();
        

        return view('enfant.list',['enfantsList' => $enfantsList]);
      
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enfant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGestionnaireReqest $request)
    {
        $request->validated();


        if(Auth::user()->admin!=true){
            $enfant = Enfant::make($request->input());
            $enfant->user()->associate(Auth::id());
            $enfant->save();
        }
        else{
            $enfant = Enfant::make($request->input());
            $enfant->user()->associate(Auth::id());
            $enfant->save(); 
            
        }

        

        return redirect()->route('enfant.show', ['enfant' => $enfant]);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activitesList = Activite::orderBy('id')->get();
        //return view('enfant.show',['enfants' => Enfant::findOrFail($id)]);
        return view('enfant.show',['enfants' => Enfant::findOrFail($id)],['activite' => $activitesList]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('enfant.edit',['enfants' => Enfant::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreGestionnaireReqest $request, Enfant $enfant)
    {
        $request->validated();
        $enfant->update($request->input());
        return redirect()->route('enfant.show', ['enfant' => $enfant]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enfant = Enfant::findOrFail($id);
        $enfant->delete();
        return redirect()->route('enfant.index');
    }
}
