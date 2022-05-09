{{-- formulario para crear dulces --}}
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/dulce') }}" method="post">
    @csrf
    @include('form',['modo'=>'Crear']);

</form>
</div>
@endsection
