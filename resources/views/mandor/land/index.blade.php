@extends('mandor.layouts.app')

@section('title', 'Data Tanah')

@section('css')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/modules/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/modules/css/select.bootstrap4.min.css') }}">
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Tanah</h1>
            <div class="section-header-button">
                <a href="{{ route('mandor.land.create') }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Tanah</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="land-table">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>PH</th>
                                        <th>Temperature</th>
                                        <th>Kelembaban</th>
                                        <th>Oksigen</th>
                                        <th>Tekstur</th>
                                        <th>Tanggal</th>
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
        </div>
    </section>

    <form action="{{ route('mandor.land.destroy', ['land' => -1]) }}" id="land-form" method="post">
        @csrf
        @method('DELETE')
    </form>
@endsection


@section('js')
    <!-- JS Libraies -->
    <script src="{{ asset('dashboard-assets/modules/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/modules/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/modules/js/select.bootstrap4.min.js') }}"></script>

    <script>
        $('#land-table').DataTable({
            orderable: true,
            processing: true,
            serverSide: true,
            ajax: '{{ route('mandor.ajax.lands') }}',
            columns: [
                {data: 'no'},
                {data: 'ph'},
                {data: 'temperature'},
                {data: 'humidity'},
                {data: 'oksygen'},
                {data: 'texture'},
                {data: 'date'},
                {data: 'action'},
            ]
        });

        function deleteData(id) {
            var url = $('#land-form').attr('action');
            urls = url.split('/');
            urls[urls.length - 1] = id;
            $('#land-form').attr('action', urls.join('/')).submit();
        }
    </script>
@endsection
