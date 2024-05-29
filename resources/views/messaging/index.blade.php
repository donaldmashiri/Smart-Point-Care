@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ __('Sense, Store and Notify Application') }}</div>

                    <div class="card-body">

                            <div class="row">

                                <div class="col-md-4 card card-body">
                                    <form action="{{route('messaging.store')}}" method="post">
                                        @csrf
                                    <h2>Communication with PHCPS</h2>
                                    <div class="mb-3">
                                        <label for="phcps-message" class="form-label">Message</label>
                                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="3"></textarea>
                                        @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" name="role" value="PHCPS" class="btn btn-primary">Send to PHCPS</button>
                                    </form>
                                </div>

                                <div class="col-md-4 card card-body">
                                    <form action="{{route('messaging.store')}}" method="post">
                                        @csrf
                                    <h2>Communication with Specialists</h2>
                                    <div class="mb-3">
                                        <label for="phcps-message" class="form-label">Message</label>
                                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="3"></textarea>
                                        @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" name="role" value="specialist" class="btn btn-primary">Send to Specialists</button>
                                    </form>
                                </div>

                                <div class="col-md-4 card card-body">
                                    <form action="{{route('messaging.store')}}" method="post">
                                        @csrf
                                    <h2>Communication with Referral Centers</h2>
                                    <div class="mb-3">
                                        <label for="phcps-message" class="form-label">Message</label>
                                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="3"></textarea>
                                        @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                        <button type="submit" name="role" value="Referral Centers" class="btn btn-primary">Send to Referral Centers</button>
                                    </form>
                                </div>

                            </div>
                        @include('layouts.messages')

                       <div class="container mt-5">
                           <div class="row card">
                               <div class="card-header text-capitalize ">sense, store and notify application to establish
                                   communication</div>
                               <div class="card-body">
                                   @include('layouts.messages')
                                   <table class="table table-sm table-bordered table-striped table-responsive-sm">
                                       <thead>
                                       <tr>
                                           <th scope="col">Name</th>
                                           <th scope="col">Role</th>
                                           <th scope="col">Message</th>
                                       </tr>
                                       </thead>
                                       <tbody>
                                       @foreach($messagings as $messaging)
                                           <tr>
                                               <td> {{$messaging->user->name}} </td>
                                               <td> {{$messaging->role}} </td>
                                               <td> {{$messaging->message}} </td>
                                           </tr>
                                       @endforeach
                                       </tbody>
                                   </table>
                               </div>
                           </div>
                       </div>
                </div>
            </div>
        </div>
    </div>
@endsection
