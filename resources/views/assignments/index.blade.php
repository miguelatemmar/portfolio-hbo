<!-- assignments.blade.php -->
@extends('layout')
@section('title', 'Assignments')
@section('content')

    <h1>Opdrachten</h1>

    <hr class="sub">

    <a href="assignments/create">
        <button type="button" class="btn btn-primary float-right">Toevoegen</button>
    </a>

    <br>

    <!-- Data tabel -->
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th scope="col">Naam</th>
            <th colspan="1">Beschrijving</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>

        @foreach($assignments as $row)
            <tr>
                <td>
                    <a href="{{URL::to("assignments/" . $row->id)}}">{{ $row->naam }}</a>
                </td>
                <td>
                    <small>{{ $row->beschrijving }}</small>
                </td>
                <td>
                    {{ $row->status->status }}
                </td>
                {{--
                <td>
                    <a href="{{URL::to("assignments/" . $row->id . "/edit")}}">
                        <button class="btn btn-sm btn-outline-secondary" type="button">Bewerken</button>
                    </a>
                </td>
                <form method="POST" action="{{ url("/assignments/$row->id") }}">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <td>
                        <button type="delete" onclick="return confirm('Weet je het zeker?')"
                                class="btn btn-sm btn-outline-danger">Verwijderen</button>
                    </td>
                </form>
                --}}
            </tr>
        @endforeach

        </tbody>
    </table>


    <a href="assignments/create">
        <button type="button" class="btn btn-primary float-right">Toevoegen</button>
    </a>

@endsection