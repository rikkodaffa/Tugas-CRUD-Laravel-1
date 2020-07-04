@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3">
        <h3>Detail Pertanyaan dan Jawaban</h3>
        <p>Judul Pertanyaan : {{$item->title}}</p>
        <p>Pertanyaan : {{$item->question}}</p>
        
        
    </div>
@endsection