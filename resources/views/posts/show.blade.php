@extends('layouts.app')

@section('content')
    <div class="container">
        <post :post="{{ $post }}" :user="{{ auth()->user() }}"></post>
    </div>
@endsection
