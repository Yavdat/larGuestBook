@extends('layout')

@section('content')

    @include('_common._form')

    <div class="text-right"><b>All messages:</b><i class="badge">{{ $count }}</i></div>
    <br>

    @include('pages.messages._items');
@stop
