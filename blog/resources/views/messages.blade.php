@extends('layouts.app')

@section('title')Все сообщения @endsection

@section('content')
    <h1>Все сообщения</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h4>{{ $el->name }}</h4>
            <p>{{ $el->email }}</p>
            <p>{{ $el->message }}</p>
            <p>{{ $el->created_at }}</p>
        </div>
    @endforeach
@endsection

