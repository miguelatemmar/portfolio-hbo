<?php

namespace App\Http\Controllers;

use App\Grade;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $grades = \App\Grade::all();
//        $grades = \App\Grade::orderby('created_at', 'desc')->get();
        $grades = \App\Grade::orderBy('id', 'desc')->paginate(10);
//        dd($grades);
        return view('grades.index', compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('grades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grade = new Grade();
        $grade->registratie = request('registratieInput');
        $grade->cursus = request('cursusInput');
        $grade->toets = request('toetsInput');
        $grade->poging = request('pogingInput');
        $grade->resultaat = request('resultaatInput');
        $grade->geldig = request('geldigInput');
        $grade->save();
        return redirect('/grades');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grades = \App\Grade::find($id);
        return view('grades.show', compact('grades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grades = \App\Grade::find($id);
        return view('grades.edit', compact('grades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $grades = Grade::find($id);
        $grades->registratie = request('registratieInput');
        $grades->cursus = request('cursusInput');
        $grades->toets = request('toetsInput');
        $grades->poging = request('pogingInput');
        $grades->resultaat = request('resultaatInput');
        $grades->geldig = request('geldigInput');
        $grades->save();
        return redirect('/grades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Grade::findOrFail($id)->delete();
        return redirect('/grades');
    }
}
