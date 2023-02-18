<div class="d-inline">
    @if($checkedIn)
        <button wire:click="checkout" class="btn btn-sm btn-success">Sjekk ut</button>
    @else
        <button wire:click="checkin" class="btn btn-sm btn-primary">Sjekk inn</button>
    @endif
</div>
