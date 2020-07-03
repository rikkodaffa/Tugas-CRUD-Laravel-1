@extends('adminlte.master')

@section('content')
    <div class = "ml-3 mt-3">
        <h1>Daftar Jawaban</h1>
        <table class="table table-bordered">
                    <thead>                  
                        <tr>
                        <th style="width: 10px">#</th>
                        <th>Jawaban</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items1 as $key => $item1)
                            <tr>
                                <td> {{ $key+1 }} </td>
                                <td> {{ $item1->answer }} </td>
                            </tr>

                        @endforeach
                        <a href="/items" class="btn btn-primary mb-3">
                            Jawab Pertanyaan Lain
                            </a>
                    </tbody>
                    </table>
    </div>

@endsection