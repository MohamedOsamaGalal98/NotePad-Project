@extends('layouts.app')


@section('content')

<form method="POST"  action="{{url('/notepad')}}">
@csrf

  <div class="form-group">
    <label for="title">Note Title:</label>
    <input type="text" name="title"></input>
  </div>

  <div class="form-group">
    <label for="notebody">Note:</label>
    <textarea  name="note"></textarea>
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