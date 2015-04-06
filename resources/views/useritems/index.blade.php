@extends('app')
 
@section('content')

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