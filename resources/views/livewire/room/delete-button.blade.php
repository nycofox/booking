<div>
    <button class="btn btn-danger btn-small ms-2" wire:click="$emit('triggerDelete', {{ $room->id }})">Slett</button>
</div>

@push('scripts')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
        @this.on('triggerDelete', room => {
            Swal.fire({
                title: 'Er du sikker?',
                text: 'Rommet vil bli slettet!!',
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#aaa',
                confirmButtonText: 'Slett!'
            }).then((result) => {
                //if user clicks on delete
                if (result.value) {
                    // calling destroy method to delete
                @this.call('destroy', room)
                    // success response
                    Swal.fire({title: 'Rommet ble slettet!', icon: 'success'});
                } else {
                    Swal.fire({
                        title: 'Rommet ble ikke slettet.',
                        icon: 'success'
                    });
                }
            });
        });
        })
    </script>
@endpush
