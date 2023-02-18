<div>
    <form-group>
        <label for="search">Søk etter bruker</label>
        <input wire:model="search" type="text" placeholder="Skriv navn, minst 2 bokstaver" class="form-control"/>
    </form-group>


    <ul>
        @foreach($users as $user)
            <li><a href="#">{{ $user->name }}</a></li>
        @endforeach
    </ul>
</div>
