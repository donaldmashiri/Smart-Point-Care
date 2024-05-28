@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Vital Parameters') }}</div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>User ID</th>
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
                                <td>{{$vitalParameter->user()->name?? ""}}</td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
