@extends ('adminlte.master')

@section('content')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Jawaban</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="/items1/id" method="POST">
                    @csrf
                    <div class="card-body">
                    <div class="form-group">
                        <label for="answer">Jawaban</label>
                        <input type="text" class="form-control" id="answer" name="answer" placeholder="Masukan Jawaban">
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