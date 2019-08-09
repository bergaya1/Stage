@extends('layouts.app')
@section('content')
    <div class="row">
    <div class="col-sm-12">
        <div class="full-right">
            <h2> New Tickets </h2>
        </div>
    </div>
    </div>

    <table class="table table-border">
     <tr>
        <th with="80px">numero </th>
        <th with="120px" class="text-center">
            <a href="{{route('tickets.create')">
            </a>
          </th>      

     </tr>
<?php $numero=1; ?>
@foreach ($ticket as $key => $value)
   <tr>
       <td>{{ $numero++ }}</td>
       <td>
       <a class="btn btn-info btn-sm" href="{{route('tickets.show',$value->numero)}}"></a>  
       </td>
    </tr>
@endforeach

    </table>



@endsection