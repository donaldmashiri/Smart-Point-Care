@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-9">
                <div class="row">
                    <h5 class="fw-bolder">
                        {{ __('Medical Records') }}
                    </h5>
                    <div class="col-md-9 mt-3">
                        <div class="card">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h5 class="fw-bolder">
                                    {{ __('Vital Parameters') }}
                                </h5>
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


                    <div class="col-md-9 mt-3">
                        <div class="card">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h5 class="fw-bolder">
                                    {{ __('Specialist Feedback') }}
                                </h5>
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
                                            <th>Date</th>
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


                    <div class="col-md-9 mt-3">
                        <div class="card">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h5 class="fw-bolder">
                                    {{ __('Referrals') }}
                                </h5>
                            </div>
                            <div class="card-body mt-3">
                                @if($referrals->count() > 0)
                                    <table class="table table-sm table-bordered table-striped table-responsive-sm">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Specialist</th>
                                            <th>Reason</th>
                                            <th>Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($feedbacks as $feedback)
                                            <tr>
                                                <td>{{$feedback->id}}</td>
                                                <td>{{$feedback->specialist}}</td>
                                                <td>{{$feedback->reason}}</td>
                                                <td>{{$feedback->created_at}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <h4 class="alert alert-danger">No Referrals yet</h4>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
