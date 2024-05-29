@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-9">
                <div class="card">
                    <div style="background-color: cornflowerblue" class="card-header text-white py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="fw-bolder">
                            {{ __('Diagonises') }}
                        </h5>
                    </div>
                    <div class="card-body">
                        @include('layouts.messages')

                        <form method="POST" action="{{ route('diagonises.store') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="category" class="">{{ __('Select category') }}</label>
                                    <select name="category" class="form-control" id="category">
                                        <option value="">Select Category</option>
                                        <option value="headache">Headache</option>
                                        <option value="cold">Cold</option>
                                        <option value="fever">Fever</option>
                                        <option value="cough">Cough</option>
                                    </select>
                                    @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="symptoms" class="">{{ __('Enter Symptoms') }}</label>
                                    <input id="symptoms" type="text" class="form-control" name="symptoms" required autofocus>
                                    @error('symptoms')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="float-right">
                                    <button type="submit" class="float-right btn btn-sm btn-primary">
                                        {{ __('Get Diagnosis') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-striped table-responsive-sm">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category</th>
                                <th scope="col">Symptoms</th>
                                <th scope="col">Solution</th>
                                <th scope="col">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($diagonises as $data)
                                <tr>
                                    <td> D0{{$data->id}} </td>
                                    <td> {{$data->category}} </td>
                                    <td> {{$data->symptoms}} </td>
                                    <td> {{$data->solution}} </td>
                                    <td> {{$data->created_at}} </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
