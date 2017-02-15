@extends(layouts.user)

@section('content')
  <h1>Add a Sweet</h1>
  <form class="ui form" action="/add" method="post">
    <label for="name"></label><input type="text" name="name">
    <label for="stock"></label><input type="number" name="stock">
    <button type="submit" name="button">Save</button>
  </form>
@stop
