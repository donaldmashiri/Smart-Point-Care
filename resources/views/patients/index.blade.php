@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="fw-bolder">
                            {{ __('Patients') }}
                        </h5>
                        <div class="justify-content-end">
                            <a href="{{route('patients.create')}}" class="btn btn-success btn-sm justify-content-end"> Add Patient</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('layouts.messages')
                        <table class="table table-sm table-bordered table-striped table-responsive-sm">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date Of Birth</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Address</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Added On</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($patients as $patient)
                                <tr>
                                    <td> P00{{$patient->id}} </td>
                                    <td> {{$patient->name}} </td>
                                    <td> {{$patient->email}} </td>
                                    <td> {{$patient->date_of_birth}} </td>
                                    <td> {{$patient->gender}} </td>
                                    <td> {{$patient->address}} </td>
                                    <td> {{$patient->phone}} </td>
                                    <td> {{$patient->created_at}} </td>
                                    <td>
                                        <a href="{{route('patients.show', $patient->id)}}" class="btn btn-warning btn-sm">View</a>
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
@endsection
