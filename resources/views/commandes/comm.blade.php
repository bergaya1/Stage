@extends('layouts.app')
@section('content')
    <div class="row">
    <div class="col-sm-12">
        <div class="full-right">
            <h2>  Commandes </h2>
        </div>
    </div>
    </div>

    <table class="table table-border">
     <tr>
        <th with="80px">id_cmd </th>
        <th>Montant</th>
        <th>Lieu commande </th>
        <th>Modalite de paiement</th>
        <th with="120px" class="text-center">
            <a href="{{route('commandes.create')">
            </a>
          </th>      

     </tr>
<?php $id_cmd=1; ?>
@foreach ($commande as $key => $value)
   <tr>
       <td>{{ $id_cmd++ }}</td>
       <td>{{ $value->montant }}</td>
       <td>{{ $value->lieu_cmd }}</td>
       <td>{{ $value->mode_paiement}}</td>
       <td>
       <a class="btn btn-info btn-sm" href="{{route('commandes.show',$value->id_cmd)}}"></a> 
       <a class="btn btn-primary btn-sm" href="{{route('commandes.edit',$value->id_cmd)}}"></a> 
       {!! Form::open(['method'=> 'DELETE','route'=>['commandes.destory', $value->id_cmd],'style'=>'display']) 
       <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"> !!}
       {!! Form::close() !!}
       </td>
    </tr>
@endforeach

    </table>



@endsection