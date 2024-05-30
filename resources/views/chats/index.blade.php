@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-9">
                <div class="card">
                    <div style="background-color: cornflowerblue" class="card-header text-white py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="fw-bolder">
                            @if(Auth::user()->role == 'patient')
                                {{ __('Speak With Doctor') }}
                            @else
                                {{ __('Speak With Patient') }}
                            @endif
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
                                <th scope="col">Role</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($specialists as $specialist)
                                <tr>
                                    <td> P00{{$specialist->id}} </td>
                                    <td> {{$specialist->name}} </td>
                                    <td> {{$specialist->email}} </td>
                                    <td>
                                        @if($specialist->role == 'specialist')
                                            Doctor
                                        @else
                                            {{ $specialist->role }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('chats.show', $specialist->id)}}" class="btn btn-warning btn-sm">Chat</a>
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
