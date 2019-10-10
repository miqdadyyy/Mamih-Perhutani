@extends('admin.layouts.app')

@section('title', 'Home')

@section('css-library')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
          integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
          crossorigin=""/>

    <link rel="stylesheet" href="{{ asset('dashboard-assets/modules/css/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/modules/css/select2.min.css') }}">
@endsection

@section('css')

@endsection

@section('content')
    <div class="main-content-inner">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4>Tambah Tanaman</h4>
                        <br>
                        <form action="{{ route('admin.plant.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="ph">Tingkat Keasaman (PH): </label>
                                <input type="number" class="form-control" id="ph" name="ph" value="{{ old('ph') }}"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="temperature">Tingkat Suhu (Celcius): </label>
                                <input type="number" class="form-control" id="temperature" name="temperature" required
                                       value="{{ old('temperature') }}">
                            </div>
                            <div class="form-group">
                                <label for="humidity">Tingkat Kelembaban : </label>
                                <input type="number" class="form-control" id="humidity" name="humidity" required
                                       value="{{ old('humidity') }}">
                            </div>
                            <div class="form-group">
                                <label for="oksygen">Tingkat Oksigen : </label>
                                <input type="number" class="form-control" id="oksygen" name="oksygen" required
                                       value="{{ old('oksygen') }}">
                            </div>
                            <div class="form-group">
                                <label for="texture">Tingkat Tekstur : </label>
                                <input type="number" class="form-control" id="texture" name="texture" required
                                       value="{{ old('texture') }}">
                            </div>
                            <div class="form-group">
                                <label for="texture">Tanaman : </label>
                                <select name="plant" id="plant-select" class="form-control" required>
                                    @foreach($plants as $plant)
                                        <option value="{{ $plant->id }}">{{ $plant->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="submit" value="Submit" class="btn btn-primary float-right">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
            integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
            crossorigin=""></script>
    <script src="{{ asset('dashboard-assets/modules/js/select2.full.min.js') }}"></script>
@endsection