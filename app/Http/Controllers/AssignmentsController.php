<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;

class AssignmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $assignments = \App\Assignment::orderby('created_at', 'desc')->paginate(5);
        $assignments = \App\Assignment::all();
        $status = \App\Status::all();
        return view('assignments.index', compact('assignments', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = \App\Status::all();
        return view ('assignments.create', compact('status'));
//        return view('assignments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $assignment = new Assignment();
        $assignment->naam = request('naamInput');
        $assignment->beschrijving = request('beschrijvingTextArea');
        $assignment->status_id = request('statusInput');
        $assignment->save();
        return redirect('/assignments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assignments = \App\Assignment::find($id);
        return view('assignments.show', compact('assignments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $assignments = \App\Assignment::find($id);
        return view('assignments.edit', compact('assignments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update($id){
        $assignments = Assignment::find($id);
        $assignments->naam = request('naamInput');
        $assignments->beschrijving = request('beschrijvingTextArea');
        $assignments->status_id = request('statusInput');
        $assignments->save();
        return redirect('/assignments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        Assignment::findOrFail($id)->delete();
        return redirect('/assignments');
    }
}
