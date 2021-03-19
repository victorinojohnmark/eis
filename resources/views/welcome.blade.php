@extends('layouts.master')

@section('content')
    <div class="text-center py-5" id="welcome-content">
        <h1 class="display-5"><i class="fas fa-leaf text-secondary"></i> <br>Employee Information System</h1>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="{{ route('login') }}">Login</a></li>
            <li class="list-inline-item"><a href="#">Register</a></li>
            <li class="list-inline-item"><a href="http://172.26.3.132/cslpi-directory">Local Directory</a></li>
        </ul>
    </div>
    <script>
        let welcomeContent = document.querySelector('#welcome-content');
        welcomeContent.parentElement.classList.add('welcome-wrapper');
    </script>
@endsection
