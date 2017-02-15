@extends('layouts.user')

@section('content')
  <div class="">
    <a href="/add">Ajouter un produit</a>
  </div>

  <table class="ui table">
    <tr>
      <th>Name</th>
      <th>Stock</th>
      <th>Modify</th>
    </tr>
    @foreach ($sweets as $sweet)
    <tr>
      <td>{{ $sweet->name }}</td>
      <td>{{ $sweet->stock }}</td>
      <td style="display: flex; flex-direction: row;">
        <form class="ui form" action="/restock" method="post">
          <button type="submit" class="ui button">+</button>
        </form>
        <form class="ui form" action="/sell" method="post">
          <button type="submit" class="ui button">-</button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
@stop
