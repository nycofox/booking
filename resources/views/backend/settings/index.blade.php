<x-backend-layout>
    <h2>Innstillinger</h2>

    <form action="{{ route('settings.update') }}" method="post">
        @method('PATCH')
        @csrf

        <table class="table">
            <thead>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($settings as $setting)
                <tr>
                    <td>
                        <strong>{{ $setting->key }}</strong><br>
                        <small>{{ $setting->description }}</small>
                    </td>
                    <td>
                        <input type="text" name="{{ $setting->key }}" value="{{ $setting->value }}" class="form-control">
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>

</x-backend-layout>
