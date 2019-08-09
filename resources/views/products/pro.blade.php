@extends('layouts.app')
@section('content')
    <div class="row">
    <div class="col-sm-12">
        <div class="full-right">
            <h2> NOUVEAU Products </h2>
        </div>
    </div>
    </div>

    <table class="table table-border">
     <tr>
        <th with="80px">id </th>
        <th>Nomprod</th>
        <th>Prix</th>
        <th with="120px" class="text-center">
            <a href="{{route('products.create')">
            </a>
          </th>      

     </tr>
<?php $id=1; ?>
@foreach ($product as $key => $value)
   <tr>
       <td>{{ $id++ }}</td>
       <td>{{ $value->nomprod }}</td>
       <td>{{ $value->prix }}</td>
       <td>
       <a class="btn btn-info btn-sm" href="{{route('products.show',$value->id)}}"></a> 
       <a class="btn btn-primary btn-sm" href="{{route('products.edit',$value->id)}}"></a> 
       {!! Form::open(['method'=> 'DELETE','route'=>['products.destory', $value->id],'style'=>'display']) 
       <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"> !!}
       {!! Form::close() !!}
       </td>
    </tr>
@endforeach

    </table>



@endsection