{{-- formulario de edicion de dulces --}}
@extends('layouts.app')

@section('content')
<div class="container">


<form action="{{url('/dulce/'.$dulce->id)}}" method="post">
@csrf
{{method_field('PATCH')}}

    @include('form',['modo'=>'Editar']);

</form>
</div>
@endsection


