@extends('app')
 
@section('content')
    ID: {{ $useritem->id }}<br/>
    Notes: {{ $useritem->notes }}
@endsection