@extends('layouts.app')

@section('content')
<div class="p-6 bg-white rounded-lg shadow">
    <h1 class="text-2xl font-bold">Dashboard</h1>
    <p>Welcome, {{ Auth::user()->name }}!</p>
</div>
@endsection
