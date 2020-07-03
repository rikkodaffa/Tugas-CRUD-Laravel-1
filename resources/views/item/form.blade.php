@extends ('adminlte.master')

@section('content')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Pertanyaan</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="/items" method="POST">
                    @csrf
                    <div class="card-body">
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Masukan Judul">
                    </div>
                    <div class="form-group">
                        <label for="question">Pertanyaan</label>
                        <input type="text" class="form-control" id="question" name="question" placeholder="Ajukan Pertanyaan">
                    </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
    </div>

@endsection