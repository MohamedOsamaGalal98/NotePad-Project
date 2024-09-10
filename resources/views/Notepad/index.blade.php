@extends('layouts.app')


@section('content')

		
			  @foreach($notes as $note)
			        <a href=""><h5 class="card-title" >Title: {{$note->title}}</h5></a>
				    <h6 class="card-subtitle mb-2 text-muted">Note: {{$note->note}} </h6>
                    <a class="button" href="{{ url('/notepad/' . $note->id) }}">Edit</a>

                    <form method="post"  action="{{url('/notepad/' . $note->id)}}">
                     @csrf
                     @method('delete')
                    <button>Delete</button>
                      </form>
                    @endforeach

@stop