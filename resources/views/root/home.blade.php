@extends('main')
@section('title', 'Login')

@section('content')
holi 
<a href="{{ url('logout') }}">salir</a>
<br>
{{-- {{ session()->get('user_dni') }} --}}
{{ Auth::user()->rol_id }}
@endsection