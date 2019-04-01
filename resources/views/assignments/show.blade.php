<!-- assignments.blade.php -->
@extends('layout')
@section('title', 'Assignments')
@section('content')

    <h1>{{ $assignments->naam }} details</h1>
    <small>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL::to("/assignments/")}}">Opdrachten</a></li>
                <li class="breadcrumb-item active" aria-current="page">Details</li>
            </ol>
        </nav>
    </small>

    <hr class="sub">
    <div class="form-group">
        <div class="row">
            <div class="col"><label class="col-form-label"><strong>Id:</strong></label></div>
            <div class="col col-md-9">{{ $assignments->id }}</div>
        </div>
        <div class="row">
            <div class="col"><label class="col-form-label"><strong>Naam:</strong></label></div>
            <div class="col col-md-9">{{ $assignments->naam }}</div>
        </div>

        <div class="row">
            <div class="col"><label class="col-form-label"><strong>Beschrijving:</strong></label></div>
            <div class="col col-md-9">{{ $assignments->beschrijving }}</div>
        </div>
        <br>
        <div class="row">
            <div class="col"><label class="col-form-label"><strong>Aangemaakt op:</strong></label></div>
            <div class="col col-md-9">{{ $assignments->created_at }}</div>
        </div>

        <div class="row">
            <div class="col"><label class="col-form-label"><strong>Bewerkt op:</strong></label></div>
            <div class="col col-md-9">{{ $assignments->updated_at }}</div>
        </div>
    </div>

    <a href="{{URL::to("/assignments/")}}">
        <button type="button" class="btn btn-secondary">Terug</button></a>

    <a href="{{URL::to("/assignments/".$assignments->id."/edit")}}">
        <button class="btn btn-primary" type="submit">Bewerken</button></a>

@endsection