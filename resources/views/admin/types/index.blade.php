@extends('layouts.app')

@section('content')
<div class="container">
    <h1>List types</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Color</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($types as $type)
            <tr>
                <th scope="row">{{$type->id}}</th>
                <td>{{$type->label}}</td>
                <td>{!! $type->getBadgeColor() !!}</td>
            </tr>
            @empty
            <tr>
                <td colspan="n">Nessun risultato</td>
            </tr> 
            @endforelse
          
        </tbody>
      </table>
</div>
@endsection
