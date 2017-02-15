@extends('layouts.user')

@section('content')
  <div class="">
    <a href="/add">Ajouter un produit</a>
  </div>

  <table class="ui table">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Stock</th>
      <th>Modifiers</th>
    </tr>
    @foreach ($sweets as $sweet)
    <tr>
      <td>{{ $sweet->id }}</td>
      <td>{{ $sweet->name }}</td>
      <td>{{ $sweet->stock }}</td>
      <td style="display: flex; flex-direction: row;">
        <form class="ui form" action="/api/restock/{{$sweet->id}}" method="post"> {{ csrf_field() }}
          <button type="submit" class="ui button">+</button>
        </form>
        <form class="ui form" action="/api/sell/{{$sweet->id}}" method="post"> {{ csrf_field() }}
          <button type="submit" class="ui button">-</button>
        </form>
        <form class="ui form" action="/delete/{{$sweet->id}}" method="post"> {{ csrf_field() }}
          <button type="submit" class="ui red button">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
@stop
