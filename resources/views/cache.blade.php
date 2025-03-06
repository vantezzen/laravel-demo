@extends('layout')

@section('content')
<a href="{{ route('cache.update') }}">
  <button class="bg-zinc-100 hover:bg-zinc-200 font-bold p-4 mb-3 w-full rounded">
    Update cache
  </button>
</a>

  Last updated: {{ $lastUpdated }}
@endsection