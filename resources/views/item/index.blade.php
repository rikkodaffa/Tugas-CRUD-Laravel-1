@extends('adminlte.master')

@section('content')
    <div class = "ml-3 mt-3">
        <h1>Daftar Pertanyaan</h1>
        <a href="/items/create" class="btn btn-primary mb-3">
            Buat Pertanyaan
        </a>
        <table class="table table-bordered">
                    <thead>                  
                        <tr>
                        <th style="width: 10px">#</th>
                        <th>Judul</th>
                        <th>Pertanyaan</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $key => $item)
                            <tr>
                                <td> {{ $key+1 }} </td>
                                <td> {{ $item->title }} </td>
                                <td>{{ $item->question }}</td>
                                <td>
                                <a href="/items1/create" class="btn btn-primary">Jawab</a> 
                                <a href="/items/{{$item->id}}" class="btn btn-info">Lihat</a>
                                <a href="/items/{{$item->id}}/edit" class="btn btn-default">Edit</a>
                                <form action ="/items/{{$item->id}}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                                </button>
                                </form>
                                </td>
                                
                            </tr>



                        @endforeach

                    </tbody>
                    </table>
    </div>

@endsection