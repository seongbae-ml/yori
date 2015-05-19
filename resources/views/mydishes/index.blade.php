@extends('app')
 
@section('content')

	<div class="page-header">
        <h3>
            Recipes based on &quot;{{ html_entity_decode($query) }}&quot;
        </h3>
    </div>

	@if ( $recipes == null || count($recipes) == 0)
        We could not find any recipes.
    @else
        @foreach ($recipes as $recipe)
            <p><a href="{{ $recipe->WebURL }}" target="_blank">{{ $recipe->Title }}</a></p>
            <a href="{{ $recipe->WebURL }}" target="_blank"><img src="{{ $recipe->ImageURL120 }}" /></a>
        @endforeach
    @endif

@endsection