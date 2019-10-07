@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left justify-content-center">
                            Data Mandor
                        </div>
                        <div class="float-right">
                            <button class="btn btn-success" onclick="window.location.href = '{{ route('admin.mandor.create') }}'">Tambah Mandor</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="mandor-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($mandors as $index => $mandor)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $mandor->name }}</td>
                                    <td>{{ $mandor->email }}</td>
                                    <td>{{ $mandor->phone }}</td>
                                    <td>
                                        <button class="btn btn-danger" onclick="deleteData('{{ $mandor->id }}')">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('admin.mandor.destroy', ['mandor' => -1]) }}" id="mandor-form" method="post">
        @csrf
        @method('DELETE')
    </form>
@endsection

@section('js')
    <script>
        $('#mandor-table').DataTable({

        });

        function deleteData(id) {
            var url = $('#mandor-form').attr('action');
            urls = url.split('/');
            urls[urls.length-1] = id;
            $('#mandor-form').attr('action', urls.join('/')).submit();
        }
    </script>
@endsection