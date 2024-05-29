<div class="col-md-3">
    <div class="card">
        <h5 class="card-title bg-primary text-white p-2">Menu</h5>
        <div class="card-body">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="/home">
                        <i class="bi bi-person"></i> Profile
                    </a>
                </li>
                @if(Auth::user()->role != "patient")
                <li class="nav-item">
                    <a class="nav-link" href="{{route('patients.index')}}">
                        <i class="bi bi-people"></i> Patients
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{route('messaging.index')}}">
                        <i class="bi bi-chat-dots"></i> Messaging
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('vital_parameters.index')}}">
                        <i class="bi bi-heart-pulse"></i> Vital Parameters
                    </a>
                </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('records.index')}}">
                            <i class="bi bi-file-medical"></i> Medical Record
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link text-danger" href="/">
                        <i class="bi bi-lock"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>