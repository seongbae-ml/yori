@extends('app')
 
@section('content')
    {!! Form::model(new App\UserItem, ['route' => ['useritems.store']]) !!}
        @include('projects/partials/_form', ['submit_text' => 'Create Project'])
    {!! Form::close() !!}
@endsection