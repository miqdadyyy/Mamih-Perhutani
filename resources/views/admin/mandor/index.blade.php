@extends('admin.layouts.app')

@section('title', 'Data Mandor')

@section('css')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/modules/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/modules/css/select.bootstrap4.min.css') }}">
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Mandor</h1>
            <div class="section-header-button">
                <a href="{{ route('admin.mandor.create') }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Mandor</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="mandor-table">
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
                                                <button class="btn btn-danger"
                                                        onclick="deleteData('{{ $mandor->id }}')">Delete
                                                </button>
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
        </div>
    </section>

    <form action="{{ route('admin.mandor.destroy', ['mandor' => -1]) }}" id="mandor-form" method="post">
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
        $('#mandor-table').DataTable({

        });

        function deleteData(id) {
            var url = $('#mandor-form').attr('action');
            urls = url.split('/');
            urls[urls.length - 1] = id;
            $('#mandor-form').attr('action', urls.join('/')).submit();
        }
    </script>
@endsection

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
    {{--<div class="container">--}}
        {{--<div class="row justify-content-center">--}}
            {{--<div class="col-md-12">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-header">--}}
                        {{--<div class="float-left justify-content-center">--}}
                            {{--Data Mandor--}}
                        {{--</div>--}}
                        {{--<div class="float-right">--}}
                            {{--<button class="btn btn-success" onclick="window.location.href = '{{ route('admin.mandor.create') }}'">Tambah Mandor</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="card-body">--}}
                        {{--<table class="table table-bordered" id="mandor-table">--}}
                            {{--<thead>--}}
                            {{--<tr>--}}
                                {{--<th>#</th>--}}
                                {{--<th>Nama</th>--}}
                                {{--<th>Email</th>--}}
                                {{--<th>No HP</th>--}}
                                {{--<th>Action</th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}
                            {{--<tbody>--}}
                            {{--@foreach($mandors as $index => $mandor)--}}
                                {{--<tr>--}}
                                    {{--<td>{{ $index + 1 }}</td>--}}
                                    {{--<td>{{ $mandor->name }}</td>--}}
                                    {{--<td>{{ $mandor->email }}</td>--}}
                                    {{--<td>{{ $mandor->phone }}</td>--}}
                                    {{--<td>--}}
                                        {{--<button class="btn btn-danger" onclick="deleteData('{{ $mandor->id }}')">Delete</button>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                            {{--</tbody>--}}
                        {{--</table>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<form action="{{ route('admin.mandor.destroy', ['mandor' => -1]) }}" id="mandor-form" method="post">--}}
        {{--@csrf--}}
        {{--@method('DELETE')--}}
    {{--</form>--}}
{{--@endsection--}}

{{--@section('js')--}}
    {{--<script>--}}
        {{--$('#mandor-table').DataTable({--}}

        {{--});--}}

        {{--function deleteData(id) {--}}
            {{--var url = $('#mandor-form').attr('action');--}}
            {{--urls = url.split('/');--}}
            {{--urls[urls.length-1] = id;--}}
            {{--$('#mandor-form').attr('action', urls.join('/')).submit();--}}
        {{--}--}}
    {{--</script>--}}
{{--@endsection--}}