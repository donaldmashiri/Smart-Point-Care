@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Vital Parameters Add') }}</div>

                    <div class="card-body">
                        <form action="{{ route('vital_parameters.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="user_id">User </label>
                                <input type="number" class="form-control" id="user_id" name="user_id" required>
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
