<div>
    <h1>Nom du projet {{ $conversation->projet->nomStartup }}</h1>

    @foreach ($conversation->messages as $message)

    {{ $message }}

    <textarea wire:keydown.enter.prevent="sendMessage" wire:model="message" name="" id="" cols="30" rows="10"></textarea>
    {{--  <div style="{{ $message->user->id === auth()->user()->id ? background-color: green : background-color: red"  }}> </div>  --}}
    @endforeach
</div>
