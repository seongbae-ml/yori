@extends('app')
 
@section('content')

	<div class="page-header">
        <h3>
            Add New Item
            <div class="pull-right">
                <div class="pull-right">
                    
                </div>
            </div>
        </h3>
    </div>

    {!! Form::model(new App\UserItem, ['route' => ['useritems.store']]) !!}
        @include('useritems/partials/_form', ['submit_text' => 'Submit'])
    {!! Form::close() !!}
@endsection