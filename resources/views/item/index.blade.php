@extends('adminlte.master')

@section('content')
    <div class = "ml-3 mt-3">
        <h1>Daftar Pertanyaan</h1>
        <a href="/items/create" class="btn btn-primary mb-3">
            Create New Item
        </a>
        <table class="table table-bordered">
                    <thead>                  
                        <tr>
                        <th style="width: 10px">#</th>
                        <th>Judul</th>
                        <th>Pertanyaan</th>
                        <th>Klik Jawab</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $key => $item)
                            <tr>
                                <td> {{ $key+1 }} </td>
                                <td> {{ $item->title }} </td>
                                <td>{{ $item->question }}</td>
                                <td><a href="/items1/create" class="btn btn-primary mb-3">Jawab</a> </td>
                            </tr>



                        @endforeach

                    </tbody>
                    </table>
    </div>

@endsection