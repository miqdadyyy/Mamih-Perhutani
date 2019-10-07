@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left justify-content-center">
                            Data Pengukuran Tanah
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="plant-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Mandor</th>
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
                            @foreach($lands as $index => $land)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $land->user->name }}</td>
                                    <td>{{ $land->ph }}</td>
                                    <td>{{ $land->temperature }}</td>
                                    <td>{{ $land->humidity }}</td>
                                    <td>{{ $land->oksygen }}</td>
                                    <td>{{ $land->texture }}</td>
                                    <td>{{ $land->created_at->format('d/M/Y') }}</td>
                                    <td>
                                        <button class="btn btn-danger" onclick="deleteData('{{ $land->id }}')">Delete</button>
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
    {{--<form action="{{ route('admin.plant.destroy', ['plant' => -1]) }}" id="plant-form" method="post">--}}
    {{--@csrf--}}
    {{--@method('DELETE')--}}
    {{--</form>--}}
@endsection

@section('js')
    <script>
        // $(document).ready(function(){
            $('#plant-table').DataTable({
                orderable: true
                {{--processing: true,--}}
                {{--serverSide: true,--}}
                {{--ajax: '{{ route('admin.ajax.lands') }}',--}}
                {{--columns: [--}}
                {{--{data: 'no'},--}}
                {{--{data: 'ph'},--}}
                {{--{data: 'temperature'},--}}
                {{--{data: 'humidity'},--}}
                {{--{data: 'oksygen'},--}}
                {{--{data: 'texture'},--}}
                {{--{data: 'date'},--}}
                {{--{data: 'action'},--}}
                {{--]--}}
            });
        // });

        function deleteData(id) {
            var url = $('#plant-form').attr('action');
            urls = url.split('/');
            urls[urls.length - 1] = id;
            $('#plant-form').attr('action', urls.join('/')).submit();
        }
    </script>
@endsection