@extends('layout')

@section('content')
<a href="{{ route('queue.update') }}">
  <button class="bg-zinc-100 hover:bg-zinc-200 font-bold p-4 mb-3 w-full rounded">
    Dispatch new job
  </button>
</a>

  Last run: {{ $queueUpdate }}
@endsection