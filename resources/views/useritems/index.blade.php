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

	@if ( !$useritems->count() )
        You have no items
    @else
        <table id="table" class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Expires</th>
            <th>Action</th>
        </tr>

        
        </thead>
        <tbody>
            @foreach( $useritems as $useritem )
                <tr>
                    <td><a href="{{ route('useritems.show', $useritem->id) }}">{{ $useritem->name }}</a></td>
                    <td></td>
                    <td>{{ $useritem->expire_date }}</td>
                    <td>{!! Form::model($useritem, ['method' => 'DELETE', 'route' => ['useritems.destroy', $useritem->id]]) !!}
                            <a href="/mydishes" class="btn btn-primary btn-sm iframe cboxElement"><span class="glyphicon glyphicon-heart"></span>  Find Dishes</a>
                            <a href="/useritems/{{ $useritem->id }}/edit" class="btn btn-success btn-sm iframe cboxElement"><span class="glyphicon glyphicon-pencil"></span>  Edit</a>
                            <a href="#" onclick="$(this).closest('form').submit()" class="btn btn-danger btn-sm iframe cboxElement"><span class="glyphicon glyphicon-trash"></span>  Delete</a>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
        
    @endif

    <ul>
            
        </ul>
@endsection
