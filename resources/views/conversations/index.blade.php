@extends('layouts.app')

@section('content')
<br><br><br><ul class="list-group">
    @foreach ($conversations as $conversation)
    <a href="{{ route('conversation.show' ,$conversation->id) }}"><li class="list-group-item">
        {{ Illuminate\Support\Str::limit($conversation->messages->last()->content, 50) }}
        envoye par {{ auth()->user()->id === $conversation->messages->last()->user_id ? 'vous' : $conversation->messages->last()->user->name}}
    </li></a>
    @endforeach

  </ul>

@endsection
