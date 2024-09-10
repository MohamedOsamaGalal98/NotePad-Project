@extends('layouts.app')


@section('content')

<form method="post"  action="{{url('/notepad/' . $note->id)}}">
@csrf

  <div class="form-group">
    <label for="title">Note Title:</label>
    <input  name="title" value="{{$note->title}}"></input>
  </div>

  <div class="form-group">
    <label for="notebody">Note:</label>
    <textarea  name="note">{{$note->note}}</textarea>
  </div>

  <div class="form-group">
    <label for="sumbit">Submit</label>
    <input type="submit" name="submit"></input>
  </div>

</form>



      @if ($errors->any())
          <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        @endif


@stop