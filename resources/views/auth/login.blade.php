<x-app-layout>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="card">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Welcome to Funkybooking</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">Please log in to continue</p>
                    <a href="{{ route('google.login') }}" class="btn btn-warning">
                        <i class="fab fa-google"></i>
                        Login with Google
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
