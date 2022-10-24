@extends('app')
@section('content')

<h3>Tampil Data Part</h3>

<table class="table table-bordered table-hover">
  <tr>
    <th>#ID</th>
    <th>Shop Code</th>
    <th>Gate Group</th>
    <th>Time Receiving</th>
    <th>Order Date</th>
    <th>Part Number</th>
    <th>Qty Perkanban</th>
    <th>Qty</th>
    <th>Receive Qty</th>
    <th>Delivery Qty</th>
    <th>Qty perbok</th>
    <th>Mindel</th>
    <th>Label No</th>
  </tr>

  @foreach($parts as $s) 
  <tr>
    <td>{{$s->id}}</td>
    <td>{{$s->ShopCode}}</td>
    <td>{{$s->GateGroup}}</td>
    <td>{{$s->Time_Receiving}}</td>
    <td>{{$s->OrderDate}}</td>
    <td>{{$s->QtyPerKanban}}</td>
    <td>{{$s->Qty}}</td>
    <td>{{$s->ReceiveQty}}</td>
    <td>{{$s->DeliveryQty}}</td>
    <td>{{$s->QtyPerBox}}</td>
    <td>{{$s->Mindel}}</td>
    <td>{{$s->LabelNo}}</td>

    </td> -->
  </tr>
  @endforeach
</table>
@endsection