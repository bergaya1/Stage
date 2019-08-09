@extends('layouts.app')
@section('content')
    <div class="row">
    <div class="col-sm-12">
        <div class="full-right">
            <h2> Hello Customers </h2>
        </div>
    </div>
    </div>

    <table class="table table-border">
     <tr>
        <th with="80px">id </th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Adresse</th>
        <th with="120px" class="text-center">
            <a href="{{route('customers.create')">
            </a>
          </th>      

     </tr>
<?php $id=1; ?>
@foreach ($customer as $key => $value)
   <tr>
       <td>{{ $id++ }}</td>
       <td>{{ $value->nom }}</td>
       <td>{{ $value->prenom }}</td>
       <td>{{ $value->adresse}}</td>
       <td>
       <a class="btn btn-info btn-sm" href="{{route('customers.show',$value->id)}}"></a> 
       <a class="btn btn-primary btn-sm" href="{{route('customers.edit',$value->id)}}"></a> 
       {!! Form::open(['method'=> 'DELETE','route'=>['customers.destory', $value->id],'style'=>'display']) 
       <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"> !!}
       {!! Form::close() !!}
       </td>
    </tr>
@endforeach

    </table>



@endsection