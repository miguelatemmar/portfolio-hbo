<!-- assignments.blade.php -->
@extends('layout')
@section('title', 'Assignments')
@section('content')

    <h1>Opdrachten</h1>

    <hr class="sub">

    <a href="assignments/create">
        <button type="button" class="btn btn-primary justify-content-right">Toevoegen</button>
    </a>

    <br>
    <!-- Paginatie/Numering -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- Data tabel -->
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th scope="col">Naam</th>
            <th colspan="3">Beschrijving</th>
        </tr>
        </thead>
        <tbody>

        @foreach($assignments as $row)
            <tr>
                <td><a href="{{URL::to("assignments/" . $row->id)}}">{{ $row->naam }}</a></td>
                <td><small>{{ $row->beschrijving }}</small></td>
                <td><a href="{{URL::to("assignments/" . $row->id . "/edit")}}">
                        <button class="btn btn-sm btn-outline-secondary" type="button">Bewerken</button></a>
                </td>
                <form method="POST" action="{{ url("/assignments/$row->id") }}">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <td><button type="delete" class="form-control btn btn-sm btn-outline-danger">Verwijderen</button></td>
                </form>
            </tr>
        @endforeach

        </tbody>
    </table>

    <!-- Paginatie/Numering -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>

    <a href="assignments/create">
        <button type="button" class="btn btn-primary">Toevoegen</button>
    </a>

@endsection