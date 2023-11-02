@extends('layout.be.tempalte')
@extends('title', 'tambah supply')
@section('content')
    <div class="container" px-4 mt-4>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">tambah supply</div>
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

                        <form action=""{{ route('supplier-update') }} method="POST">
                            @csrf
                            @method('patch')

                            <div class="mb-3">
                                <label>nama supplier</label>
                                <input type="text" name="" class="form-control">

                            </div>
                            <input type="submit" value="Simpan" class="form-control" value="{{$data->name}}">
                            <a href="{{ route('suplier-index') }}" class="btn" btn-warning>batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
