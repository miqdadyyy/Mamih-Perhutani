@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left justify-content-center">
                            Data Tanaman
                        </div>
                        <div class="float-right">
                            <button class="btn btn-success"
                                    onclick="window.location.href = '{{ route('admin.plant.create') }}'">Tambah Tanaman
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="plant-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>PH</th>
                                <th>Templerature</th>
                                <th>Kelembaban</th>
                                <th>Oksigen</th>
                                <th>Tekstur</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('admin.plant.destroy', ['plant' => -1]) }}" id="plant-form" method="post">
        @csrf
        @method('DELETE')
    </form>
@endsection

@section('js')
    <script>
        $('#plant-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.ajax.plants') }}',
            columns: [
                {data: 'no'},
                {data: 'name'},
                {data: 'ph'},
                {data: 'temperature'},
                {data: 'humidity'},
                {data: 'oksygen'},
                {data: 'texture'},
                {data: 'action'},
            ]
        });

        function deleteData(id) {
            var url = $('#plant-form').attr('action');
            urls = url.split('/');
            urls[urls.length - 1] = id;
            $('#plant-form').attr('action', urls.join('/')).submit();
        }
    </script>
@endsection