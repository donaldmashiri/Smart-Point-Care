@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
          <div class="col-md-9">
              <div class="row">
                  <div class="container">
                      <div class="col-md-9">
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

                      <div class="container col-md-10 mt-3">
                          <div class="card">
                              <div class="card-header">{{ __('Referral Cases') }}</div>
                              <div class="card-body">
                                  <form action="{{ route('referrals.store') }}" method="POST">
                                      @csrf
                                      <div class="form-group">
                                          <input type="hidden" class="form-control" value="{{$patient->id}}" name="user_id" >
                                      </div>
                                      <div class="form-group">
                                          <label for="notes">referred_to</label>
                                          <select class="form-control" name="specialist" id="referred_to">
                                              <option value="">Select Specialist</option>
                                              @foreach($specialists as $specialist)
                                                  <option value="{{$specialist->name}}">{{$specialist->name}}</option>
                                              @endforeach
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label for="notes">Reason</label>
                                          <textarea class="form-control" id="reason" name="reason" rows="3"></textarea>
                                      </div>
                                      <button type="submit" class="btn btn-primary mt-1">Submit</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
@endsection
