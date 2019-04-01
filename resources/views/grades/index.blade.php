<!-- grades.blade.php -->
@extends('layout')
@section('title', 'Grades')
@section('content')

    <h1>Dashboard</h1>
    <hr class="sub">
    <a href="grades/create">
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
            <th scope="col">Cursus</th>
            <th scope="col">Toets</th>
            <th scope="col">Poging</th>
            <th colspan="3">Resultaat</th>
        </tr>
        </thead>
        <tbody>

        @foreach($grades as $row)
            <tr>
                <td>
                    <small><a href="{{URL::to("grades/" . $row->id)}}">{{ $row->cursus }}</a></small>
                </td>
                <td><small>{{ $row->toets }}</small></td>
                <td><small>{{ $row->poging }}</small></td>
                <td><small>{{ $row->resultaat }}</small></td>
                <td><a href="{{URL::to("grades/" . $row->id . "/edit")}}">
                        <button class="btn btn-sm btn-outline-secondary" type="button">Bewerken</button></a>
                </td>
                <form method="POST" action="{{ url("/grades/$row->id") }}">
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

    <a href="grades/create">
        <button type="button" class="btn btn-primary">Toevoegen</button>
    </a>

@endsection