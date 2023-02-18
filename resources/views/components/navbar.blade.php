<nav class="navbar mb-2" style="background-color: #fac635;">
    <div class="container d-flex justify-content-between">
        <div>
            <a class="navbar-brand" href="{{ route('home') }}">{{ $title }}</a>
        </div>
        <div>
            @if($user->role == 'user')
                @livewire('user.checkin-button')
            @endif
            <a href="#" class="text-dark ms-2" style="text-decoration: none;">
                <img src="{{ $user->avatar_path }}" alt="avatar" class="rounded-circle" width="30" height="30"
                     title="{{ $user->first_name }}">
            </a>
        </div>
    </div>
</nav>
