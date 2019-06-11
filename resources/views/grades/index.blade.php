<!-- grades.blade.php -->
@extends('layout')
@section('title', 'Grades')
@section('content')

    <h1>Dashboard</h1>

    <hr class="sub">
    <a href="grades/create">
        <button type="button" class="btn btn-primary float-right">Toevoegen</button>
    </a>

    <br>

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
        <br>
        {{--<!-- Paginatie/Numering -->--}}
        {{--<nav aria-label="Page navigation example">--}}
            {{--<ul class="pagination justify-content-center">--}}
                {{--{{ $grades->links() }}--}}
            {{--</ul>--}}
        {{--</nav>--}}

        @foreach($grades as $row)
            <tr>
                <td>
                    <small>
                        <a href="{{URL::to("grades/" . $row->id)}}">{{ $row->cursus }}</a>
                    </small>
                </td>
                <td>
                    <small>{{ $row->toets }}</small>
                </td>
                <td>
                    <small>{{ $row->poging }}</small>
                </td>
                <td>
                    <small>{{ $row->resultaat }}</small>
                </td>
                {{--
                <td>
                    <a href="{{URL::to("grades/" . $row->id . "/edit")}}">
                        <button class="btn btn-sm btn-outline-secondary" type="button">Bewerken</button>
                    </a>
                </td>
                {{--
                <form method="POST" action="{{ url("/grades/$row->id") }}">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <td>
                        <button type="delete" onclick="return confirm('Weet je het zeker?')"
                                class="form-control btn btn-sm btn-outline-danger">Verwijderen</button>
                    </td>
                </form>
                --}}
            </tr>
        @endforeach

        </tbody>
    </table>
    {{--<!-- Paginatie/Numering -->--}}
    {{--<nav aria-label="Page navigation example">--}}
        {{--<ul class="pagination justify-content-center">--}}
            {{--{{ $grades->links() }}--}}
        {{--</ul>--}}
    {{--</nav>--}}

    <a href="grades/create">
        <button type="button" class="btn btn-primary float-right">Toevoegen</button>
    </a>

@endsection