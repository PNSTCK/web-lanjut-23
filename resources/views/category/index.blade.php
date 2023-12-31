@extends('layout.be.tempalte')
@section('content')
    <div class="container px-4 mt-4">

        <div class="row">
            <div class="col-md-6">

                <a href="" class="btn btn-primary mb-4">
                    <i class="fas fa-plus">tambah data</i>

                <div class="card">
                    <div class="card-header">data kategory</div>
                    <div class="card-body"></div>

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama category</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <body>

                            @foreach ($data as $row)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $row->name }} </td>
                                    <td> {{ $row->created_at }} </td>
                                    <td>
                                        <form method="POST" action="{{route('category-delete', $row->id)}}">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Del" class="btn btn-danger">

                                            <a href="{{route('category-edit', $row->id) }}"
                                                class="btn btn-warning">edit</a>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </body>
                    </table>

                </div>
            </div>
        </div>

    </div>
@endsection
