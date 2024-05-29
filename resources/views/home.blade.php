@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts.sidebar')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <h3>Welcome to Smart Health</h3>

                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <th><i class="bi bi-person-circle"></i> Full Names</th>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <th><i class="bi bi-envelope"></i> Email</th>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <th><i class="bi bi-briefcase"></i> Role</th>
                                <td>{{ Auth::user()->role }}</td>
                            </tr>
                            <tr>
                                <th><i class="bi bi-calendar-date"></i> Account Created</th>
                                <td>{{ Auth::user()->created_at }}</td>
                            </tr>
                            @if(Auth::user()->role != "specialist")
                                <tr>
                                    <th><i class="bi bi-calendar"></i> Date of Birth</th>
                                    <td>{{ Auth::user()->date_of_birth }}</td>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-gender-ambiguous"></i> Gender</th>
                                    <td>{{ Auth::user()->gender }}</td>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-phone"></i> Phone</th>
                                    <td>{{ Auth::user()->phone }}</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
