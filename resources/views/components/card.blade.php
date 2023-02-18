@props(['header' => null])

<div class="card rounded shadow">

    @isset($header)
        <div class="card-header">
            {{ $header }}
        </div>
    @endisset

    <div class="card-body">
        {{ $slot }}
    </div>
</div>
