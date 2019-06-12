@extends('layout')
@section('title', 'Opdrachten')
@section('content')

    <h1>Maak een cijfer aan</h1>

    <small>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL::to("/grades/")}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Aanmaken</li>
            </ol>
        </nav>
    </small>

    <!-- validation message -->
    @if(count($errors)>0)
        <ul>
            @foreach($errors->all() as $error)
            <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action={{ url("/grades") }}>

        {{ csrf_field() }}

        <div class="form-group">
            <label for="registratieInput">Registratie:</label>
            <input type="date" class="form-control" id="registratieInput" name="registratieInput">

            <label for="cursusInput">Cursus: <span style="color:red">*</span></label>
            <textarea class="form-control  mb-2 mr-sm-2 mb-sm-0" id="cursusInput" name="cursusInput" rows="2"></textarea>

            <label for="projectNameInput">Toets:</label>
            <input type="text" class="form-control" id="toetsInput" name="toetsInput">

            <label for="pogingInput">Poging:</label>
            <input type="text" class="form-control" id="pogingInput" name="pogingInput">

            <label for="resultaatInput">Resultaat:</label>
            <input type="text" class="form-control" id="resultaatInput" name="resultaatInput">

            <label for="geldigInput">Geldig:</label>
            <input type="text" class="form-control" id="geldigInput" name="geldigInput">
        </div>
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary mb-2">Toevoegen</button>
        </div>

        <a href="{{URL::to("/grades/")}}">
            <button type="button" class="btn btn-secondary">Terug</button></a>
    </form>

@endsection