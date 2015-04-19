@extends('app')
 
@section('content')

	<div class="page-header">
        <h3>
            My Items
            <div class="pull-right">
                <div class="pull-right">
                    <a href="{{{ URL::to('useritems/create') }}}"
                       class="btn btn-sm  btn-primary iframe"><span
                                class="glyphicon glyphicon-plus-sign"></span> Add New</a>

                </div>
            </div>
        </h3>
    </div>

	{!! Form::model($useritem, ['method' => 'PATCH', 'route' => ['useritems.update', $useritem->id]]) !!}
        @include('useritems/partials/_form', ['submit_text' => 'Submit'])
    {!! Form::close() !!}
    
@endsection

	