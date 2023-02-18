    <nav class="navbar mb-2" style="background-color: #fac635;">
        <div class="container d-flex justify-content-between">
            <div>
            <a class="navbar-brand" href="{{ route('home') }}">{{ $title }}</a>
            </div>
            <div>
                @livewire('user.checkin-button')
                <a href="#" class="text-dark" style="text-decoration: none;">{{ $user->first_name }}</a>
            </div>
        </div>
    </nav>
