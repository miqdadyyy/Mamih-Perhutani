@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left justify-content-center">
                            Tambah Tanaman
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.plant.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Tanaman : </label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="ph">Tingkat Keasaman (PH): </label>
                                <input type="number" class="form-control" id="ph" name="ph" value="{{ old('ph') }}">
                            </div>
                            <div class="form-group">
                                <label for="temperature">Tingkat Suhu (Celcius): </label>
                                <input type="number" class="form-control" id="temperature" name="temperature" value="{{ old('temperature') }}">
                            </div>
                            <div class="form-group">
                                <label for="humidity">Tingkat Kelembaban : </label>
                                <input type="number" class="form-control" id="humidity" name="humidity" value="{{ old('humidity') }}">
                            </div>
                            <div class="form-group">
                                <label for="oksygen">Tingkat Oksigen : </label>
                                <input type="number" class="form-control" id="oksygen" name="oksygen" value="{{ old('oksygen') }}">
                            </div>
                            <div class="form-group">
                                <label for="texture">Tingkat Tekstur: </label>
                                <input type="number" class="form-control" id="texture" name="texture" value="{{ old('texture') }}">
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection