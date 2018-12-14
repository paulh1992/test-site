@extends('layouts.app')


@section('content')
  @while(have_posts()) @php the_post() @endphp
    
	@include('partials.left-content')
	@include('partials.right-content')

	
	@include('partials.content-page')
  @endwhile
@endsection
