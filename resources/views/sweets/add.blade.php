@extends('layouts.user')

@section('content')
  <h1>Add a Sweet</h1>
  <form class="ui form" action="/add" method="post">
    <label for="name">Name</label><input type="text" name="name">
    <label for="stock">Stock</label><input type="number" name="stock">
      {{ csrf_field() }}
    <button class="ui green button" type="submit" name="button">Save</button>
  </form>
@stop
