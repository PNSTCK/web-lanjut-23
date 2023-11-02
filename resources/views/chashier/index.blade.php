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
                                <th>Nama chashier</th>
                                <th>Telpon</th>
                                <th>Umur</th>
                            </tr>
                        </thead>

                        <body>

                            @foreach ($data as $row)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $row->name }} </td>
                                    <td> {{ $row->phone }} </td>
                                    <td> {{ $row->age }} </td>
                                    <td> {{ $row->created_at }} </td>
                                    <td>Update | Delete</td>
                                </tr>
                            @endforeach

                        </body>
                    </table>

                </div>
            </div>
        </div>

    </div>
@endsection
