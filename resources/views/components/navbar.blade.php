<nav class="navbar mb-2 shadow" style="background-color: #fac635;">
    <div class="container d-flex justify-content-between">
        <div>
            <a class="navbar-brand fw-semibold" href="{{ route('home') }}">{{ $title }}</a>
        </div>
        <div class="d-flex">
            @if($user->role == 'user')
                @livewire('user.checkin-button')
            @else
                <a class="btn btn-sm btn-outline-dark ms-2" href="{{ route('backend.dashboard') }}">Administrasjon</a>
            @endif
            <a href="#" class="text-dark ms-2" style="text-decoration: none;">
                <img src="{{ $user->avatar_path }}" alt="avatar" class="rounded-circle" width="30" height="30"
                     title="{{ $user->first_name }}">
            </a>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-sm btn-outline-dark ms-2">Logg ut</button>
            </form>
        </div>
    </div>
</nav>
