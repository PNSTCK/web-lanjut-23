@extends('layout.be.tempalte')
@extends('title', 'tambah category')
@section('content')
    <div class="container" px-4 mt-4>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">tambah kategory</div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action=""{{ route('category-store') }} method="POST">
                            <div class="mb-3">
                                <label>nama kategory</label>
                                <input type="text" name="" class="form-control">

                            </div>
                            <input type="submit" value="Simpan" class="form-control">
                            <a href="{{ route('category-index') }}" class="btn" btn-warning>batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
