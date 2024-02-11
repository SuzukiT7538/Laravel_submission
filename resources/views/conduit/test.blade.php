@extends('layouts.conduit')
@section('contents')
hi
{{-- {{$data}} --}}
@php
var_dump($data);
exit;
@endphp
@foreach($data as $d)
{{-- {{$d}}; --}}
{{-- @php
var_dump($d);
@endphp --}}
@endforeach
@endsection
