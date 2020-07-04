@extends ('adminlte.master')

@section('content')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Pertanyaan</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="/items/{{$item->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$item->title}}" placeholder="Masukan Judul">
                    </div>
                    <div class="form-group">
                        <label for="question">Pertanyaan</label>
                        <input type="text" class="form-control" id="question" name="question" value="{{$item->question}}" placeholder="Ajukan Pertanyaan">
                    </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
                </div>
    </div>

@endsection