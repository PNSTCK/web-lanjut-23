@extends('layout.be.tempalte')
@section('content')
    <div class="container px-4 mt-4">

        <div class="row">
            <div class="col-md-6">

                <a href="" class="btn btn-primary mb-3">
                    <i class="fas fa-plus">tambah data</i>

                <div class="card">
                    <div class="card-header">data chasier</div>
                    <div class="card-body"></div>

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama pt</th>
                                <th>Nama Ketua</th>
                                <th>Nomor kontak</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>

                        <body>

                            @foreach ($data as $row)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $row->nama_pt }} </td>
                                    <td> {{ $row->nama_ketua }} </td>
                                    <td> {{ $row->nomor_kontak }} </td>
                                    <td> {{ $row->alamat }} </td>
                                    <td> {{ $row->created_at }} </td>
                                    <td>
                                        <form method="POST" action="{{route('supplier-delete', $row->id)}}">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Del" class="btn btn-danger">

                                            <a href="{{route('supplier-edit', $row->id) }}"
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
