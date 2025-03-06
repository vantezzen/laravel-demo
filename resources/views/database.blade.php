@extends('layout')

@section('content')
<a href="{{ route('database.new') }}">
  <button class="bg-zinc-100 hover:bg-zinc-200 font-bold p-4 mb-3 w-full rounded">
    Create new entry
  </button>
</a>

  Entries:
  <ul class="mt-3">
    @foreach ($entries as $entry)
      <li>- {{ $entry->created_at }}</li>
    @endforeach
  </ul>
@endsection