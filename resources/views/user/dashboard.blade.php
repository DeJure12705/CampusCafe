@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="display-4">User Dashboard</h1>
    <p>Welcome, {{ Auth::user()->name }}!</p>
</div>
@endsection