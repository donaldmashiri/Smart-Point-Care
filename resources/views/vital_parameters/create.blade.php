@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="fw-bolder">
                            {{ __('Patient Details') }}
                        </h5>
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
                    <div class="card-header">{{ __('Vital Parameters Add') }}</div>
                    <div class="card-body">
                        <form action="{{ route('vital_parameters.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" class="form-control" value="{{$patient->id}}" name="user_id" >
                            </div>
                            <div class="form-group">
                                <label for="blood_pressure">Blood Pressure</label>
                                <input type="text" class="form-control" id="blood_pressure" name="blood_pressure" required>
                            </div>
                            <div class="form-group">
                                <label for="heart_rate">Heart Rate</label>
                                <input type="text" class="form-control" id="heart_rate" name="heart_rate" required>
                            </div>
                            <div class="form-group">
                                <label for="body_temperature">Body Temperature</label>
                                <input type="text" class="form-control" id="body_temperature" name="body_temperature" required>
                            </div>
                            <div class="form-group">
                                <label for="oxygen_level">Oxygen Level</label>
                                <input type="text" class="form-control" id="oxygen_level" name="oxygen_level" required>
                            </div>
                            <div class="form-group">
                                <label for="weight">Weight</label>
                                <input type="text" class="form-control" id="weight" name="weight" required>
                            </div>
                            <div class="form-group">
                                <label for="notes">Notes</label>
                                <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-1">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
