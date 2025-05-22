@extends('layout.template')

@section('content')
<div class="container mt-4">
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Updated</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
           // $loop points data
           @foreach ($points as $p)
           <tr>
            <td>{{ $p->id}}</td>
            <td>{{ $p->Name}}</td>
            <td>{{ $p->Description}}

            </td>

                <img src="{{ asset('storage/'image/' . $p->image) }}" alt=""
                width="200" title=" {{ $p->image }}";
            <td>{{ $p->Image}}</td>
            <td>{{ $p->Created_at }}</td>
            <td>{{ $p->Updated_at }}</td>
           @endforeach

           @endfor
        </tbody>
    </table>
</div>
@endsection
