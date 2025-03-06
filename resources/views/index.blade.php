@extends('layout')

@section('content')
  <a href="{{ route('database') }}" class="bg-zinc-100 hover:bg-zinc-200 font-bold p-4 rounded mr-2">
    Database
  </a>
  <a href="{{ route('cache') }}" class="bg-zinc-100 hover:bg-zinc-200 font-bold p-4 rounded mr-2">
    Cache
  </a>
  <a href="{{ route('queue') }}" class="bg-zinc-100 hover:bg-zinc-200 font-bold p-4 rounded">
    Queue
  </a>
@endsection