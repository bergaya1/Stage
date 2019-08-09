@extends('layouts.app')
@section('content')
    <div class="row">
    <div class="col-sm-12">
        <div class="full-right">
            <h2> Facteurs </h2>
        </div>
    </div>
    </div>

    <table class="table table-border">
     <tr>
        <th with="80px">id </th>
        <th with="120px" class="text-center">
            <a href="{{route('bills.create')">
            </a>
          </th>      

     </tr>
<?php $id=1; ?>
@foreach ($bill as $key => $value)
   <tr>
       <td>{{ $id++ }}</td>
       <td>
       <a class="btn btn-info btn-sm" href="{{route('bills.show',$value->id)}}"></a> 
       <a class="btn btn-primary btn-sm" href="{{route('bills.edit',$value->id)}}"></a> 
       {!! Form::open(['method'=> 'DELETE','route'=>['bills.destory', $value->id],'style'=>'display']) 
       <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"> !!}
       {!! Form::close() !!}
       </td>
    </tr>
@endforeach

    </table>



@endsection