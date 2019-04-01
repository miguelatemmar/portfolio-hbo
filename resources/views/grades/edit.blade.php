<!-- grades.blade.php -->
@extends('layout')
@section('title', 'Grades')
@section('content')

    <h1>{{ $grades->cursus }} bewerken </h1>
    <small>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL::to("/grades/")}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bewerken</li>
            </ol>
        </nav>
    </small>
    <hr class="sub">

    <form method="POST" class="form-horizontal" action="{{ URL("/grades/$grades->id") }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="form-group">
            <div class="row">
                <div class="col"><label class="col-form-label"><strong>Registratie:</strong></label></div>
                <div class="col col-md-9">
                    <input type="text" class="form-control" id="registratieInput"
                           name="registratieInput" value="{{ $grades->registratie }}">
                </div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label"><strong>Cursus:</strong></label></div>
                <div class="col col-md-9">
                    <textarea class="form-control" id="cursusInput"
                              name="cursusInput" rows="8">{{ $grades->cursus }}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label"><strong>Toets:</strong></label></div>
                <div class="col col-md-9">
                    <input type="text" class="form-control" id="toetsInput"
                           name="toetsInput" value="{{ $grades->toets }}">
                </div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label"><strong>Poging:</strong></label></div>
                <div class="col col-md-9">
                    <input type="text" class="form-control" id="pogingInput"
                           name="pogingInput" value="{{ $grades->poging }}">
                </div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label"><strong>Resultaat:</strong></label></div>
                <div class="col col-md-9">
                    <input type="text" class="form-control" id="resultaatInput"
                           name="resultaatInput" value="{{ $grades->resultaat }}">
                </div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label"><strong>Geldig:</strong></label></div>
                <div class="col col-md-9">
                    <input type="text" class="form-control" id="geldigInput"
                           name="geldigInput" value="{{ $grades->geldig }}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary mb-2">Bewerken</button>
        </div>


        <a href="{{URL::to("/grades/")}}">
            <button type="button" class="btn btn-secondary">Terug</button></a>

        <a href="{{URL::to("grades/" . $grades->id)}}">
            <button type="button" class="btn btn-light">Details</button></a>

    </form>
@endsection