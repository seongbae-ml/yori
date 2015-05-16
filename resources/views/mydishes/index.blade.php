@extends('app')
 
@section('content')

	<div class="page-header">
        <h3>
            My Items
            <div class="pull-right">
                <div class="pull-right">
                    <a href="{{{ URL::to('admin/news/create') }}}"
                       class="btn btn-sm  btn-primary iframe"><span
                                class="glyphicon glyphicon-plus-sign"></span> Add New</a>

                    <a href="{{{ URL::to('admin/news/create') }}}"
                       class="btn btn-sm  btn-primary iframe"><span
                                class="glyphicon glyphicon-plus-sign"></span> Find Dishes</a>
                </div>
            </div>
        </h3>
    </div>

	<p>{{ $response }}</p>
    <hr/>
    <p>{{ print_r($bodyVal) }}</p>
    <hr/>
    <p>{{ print_r($recipes) }}</p>

    @if ( $recipes == null )
        You have no items
    @else
        <p>{{ print_r($recipes) }}</p>
        @foreach ($recipes as $recipe)
            <p>{{ print_r($recipe) }}</p>
        @endforeach
    @endif

@endsection