<!-- grades.blade.php -->
@extends('layout')
@section('title', 'Grades')
@section('content')

    <h1>{{ $grades->cursus }} details</h1>
    <small>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL::to("/grades/")}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Details</li>
            </ol>
        </nav>
    </small>

    <hr class="sub">

    <div class="form-group">
        <div class="row">
            <div class="col"><label class="col-form-label"><strong>Id:</strong></label></div>
            <div class="col col-md-9">{{ $grades->id }}</div>
        </div>

        <div class="row">
            <div class="col"><label class="col-form-label"><strong>Registratie:</strong></label></div>
            <div class="col col-md-9">{{ date('d-m-Y', strtotime($grades->registratie)) }}</div>
        </div>

        <div class="row">
            <div class="col"><label class="col-form-label"><strong>Cursus:</strong></label></div>
            <div class="col col-md-9">{{ $grades->cursus }}</div>
        </div>

        <div class="row">
            <div class="col"><label class="col-form-label"><strong>Toets:</strong></label></div>
            <div class="col col-md-9">{{ $grades->toets }}</div>
        </div>
        <div class="row">
            <div class="col"><label class="col-form-label"><strong>Pogingen:</strong></label></div>
            <div class="col col-md-9">{{ $grades->poging }}</div>
        </div>
        <div class="row">
            <div class="col"><label class="col-form-label"><strong>Resultaat:</strong></label></div>
            <div class="col col-md-9">{{ $grades->resultaat }}</div>
        </div>
        <div class="row">
            <div class="col"><label class="col-form-label"><strong>Aangemaakt op:</strong></label></div>
            <div class="col col-md-9">{{ date('d-m-Y H:i:s', strtotime($grades->created_at)) }}</div>
        </div>

        <div class="row">
            <div class="col"><label class="col-form-label"><strong>Bewerkt op:</strong></label></div>
            <div class="col col-md-9">{{ date('d-m-Y H:i:s', strtotime($grades->updated_at)) }}</div>
        </div>
    </div>

    <a href="{{URL::to("/grades/")}}">
        <button type="button" class="btn btn-secondary">Terug</button></a>

    <a href="{{URL::to("/grades/".$grades->id."/edit")}}">
        <button class="btn btn-primary" type="submit">Bewerken</button></a>

    <button type="delete" onclick="return confirm('Weet je het zeker?')"
            class="btn btn-danger float-right">Verwijderen</button>

@endsection