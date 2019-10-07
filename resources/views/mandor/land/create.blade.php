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
                        <form action="{{ route('mandor.land.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="ph">Tingkat Keasaman (PH): </label>
                                <input type="number" class="form-control" id="ph" name="ph" value="{{ old('ph') }}" required>
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