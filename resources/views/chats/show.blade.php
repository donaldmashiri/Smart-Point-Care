@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-9">
                <div class="card">
                    <div style="background-color: cornflowerblue" class="card-header text-white py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="fw-bolder">
                            @if($specialist->role == 'specialist')
                            {{ __('Speak With Doctor') }}
                            @else
                                {{ __('Speak With Patient') }}
                            @endif
                        </h5>
                    </div>
                    <div class="card-body">
                        @include('layouts.messages')

                        <form method="POST" action="{{ route('chats.store') }}">
                            @csrf

                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="receiver_id" value="{{ $specialist->id }}">

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="message">Message:</label>
                                        <input type="text" name="message" id="message" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="float-right">
                                    <button type="submit" class="float-right btn btn-sm btn-primary">
                                        {{ __('Send') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div style="background-color: cornflowerblue" class="card-header text-white py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="fw-bolder">
                            {{ __('Patients') }}
                        </h5>
                        @if($specialist->role == 'specialist')
                            <div class="justify-content-end">
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="" class="btn btn-success btn-sm justify-content-end"> Refer To A Specialist</a>
                            </div>
                        @endif

                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Refer Patient To Specialist</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('referrals.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" value="{{$specialist->id}}" name="user_id" >
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

                    <div class="card-body">
                        <div class="chat-box">
                            <div class="chat-box">
                                @foreach($chats as $chat)
                                    <div class="chat-message {{ $chat->user_id === auth()->user()->id ? 'text-right' : '' }}">
                                        <p><strong>{{ $chat->user_id === auth()->user()->id ? 'You' : $specialist->name }}:</strong> {{ $chat->message }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
