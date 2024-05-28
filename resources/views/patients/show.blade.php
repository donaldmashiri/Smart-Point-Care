@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="fw-bolder">
                            {{ __('Patient Infomation') }}
                        </h5>
                        <div class="justify-content-end">
                            <a href="{{route('patients.index')}}" class="btn btn-secondary btn-sm justify-content-end"> back</a>
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
                            <tr>
                                <td> P00{{$patient->id}} </td>
                                <td> {{$patient->name}} </td>
                                <td> {{$patient->email}} </td>
                                <td> {{$patient->date_of_birth}} </td>
                                <td> {{$patient->gender}} </td>
                                <td> {{$patient->address}} </td>
                                <td> {{$patient->phone}} </td>
                                <td> {{$patient->created_at}} </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="col-md-10 mt-3">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="fw-bolder">
                            {{ __('Vital Parameters') }}
                        </h5>
                        <div class="justify-content-end">
                            <a href="{{route('vital_parameters.create', ['user' => $patient->id])}}" class="btn btn-primary btn-sm justify-content-end">Add</a>
                        </div>
                    </div>
                    <div class="card-body mt-3">
                        @if($vitalParameters->count() > 0)
                            <table class="table table-sm table-bordered table-striped table-responsive-sm">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Blood Pressure</th>
                                    <th>Heart Rate</th>
                                    <th>Body Temperature</th>
                                    <th>Oxygen Level</th>
                                    <th>Weight</th>
                                    <th>Notes</th>
                                    <th>Created At</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($vitalParameters as $vitalParameter)
                                    <tr>
                                        <td>{{$vitalParameter->id}}</td>
                                        <td>{{$vitalParameter->blood_pressure}}</td>
                                        <td>{{$vitalParameter->heart_rate}}</td>
                                        <td>{{$vitalParameter->body_temperature}}</td>
                                        <td>{{$vitalParameter->oxygen_level}}</td>
                                        <td>{{$vitalParameter->weight}}</td>
                                        <td>{{$vitalParameter->notes}}</td>
                                        <td>{{$vitalParameter->created_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h4 class="alert alert-danger">No vitalParameter yet</h4>
                        @endif
                    </div>

                </div>
            </div>


            <div class="col-md-10 mt-3">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="fw-bolder">
                            {{ __('Specialist Feedback') }}
                        </h5>
                        <div class="justify-content-end">
                            <a href="{{route('feedbacks.create', ['user' => $patient->id])}}" class="btn btn-primary btn-sm justify-content-end">Add</a>
                        </div>
                    </div>
                    <div class="card-body mt-3">
                        @if($feedbacks->count() > 0)
                            <table class="table table-sm table-bordered table-striped table-responsive-sm">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Specialist</th>
                                    <th>Diagnosis</th>
                                    <th>Advice</th>
                                    <th>Created At</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($feedbacks as $feedback)
                                    <tr>
                                        <td>{{$feedback->user->name}}</td>
                                        <td>{{$feedback->specialist_name}}</td>
                                        <td>{{$feedback->diagnosis}}</td>
                                        <td>{{$feedback->advice}}</td>
                                        <td>{{$feedback->created_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h4 class="alert alert-danger">No Diagonals yet</h4>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
