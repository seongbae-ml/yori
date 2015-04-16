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

	@if ( !$useritems->count() )
        You have no items
    @else
        <ul>
            @foreach( $useritems as $useritem )
                <li><a href="{{ route('useritems.show', $useritem->id) }}">{{ $useritem->notes }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection