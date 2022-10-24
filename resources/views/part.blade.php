@extends('masters')
@section('konten')

@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
 

	 <div class="form-group mr-1">
	        <button class="btn btn-success">Refresh</button>
	        <!-- <button class="btn btn-success" href="/home">Back</button> -->
	        <a class="btn btn-info" href="home" >Back</a>
	        <a class="btn btn-info" href="tampil" >Tampil</a>
	  </div>
    <div class="card-body p-1 table-responsive">
    <br/>
        <table class="table table-bordered table-striped table-hover mb-5">
            <thead>
                <tr>
                    <!-- <th>No</th> -->
				    <th>Shop Code</th>
				    <th>Gate Group</th>
				    <th>Part Number</th>
				    <th>Time Receiving</th>
				    <th>Order Date</th>
				    <th>Qty Perkanban</th>
				    <th>Qty</th>
				    <th>Receive Qty</th>
				    <th>Delivery Qty</th>
				    <th>Qty perbok</th>
				    <th>Mindel</th>
				    <th>Label No</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($part as $row)
            <tr>
                <!-- <td>{{ $no++ }}</td> -->
			    <td>{{$row->ShopCode}}</td>
			    <td>{{$row->GateGroup}}</td>
			    <td>{{$row->PartNumber}}</td>
			    <td>{{$row->Time_Receiving}}</td>
			    <td>{{$row->OrderDate}}</td>
			    <td>{{$row->QtyPerKanban}}</td>
			    <td>{{$row->Qty}}</td>
			    <td>{{$row->ReceiveQty}}</td>
			    <td>{{$row->DeliveryQty}}</td>
			    <td>{{$row->QtyPerBox}}</td>
			    <td>{{$row->Mindel}}</td>
			    <td>{{$row->LabelNo}}</td>

            </tr>
            @endforeach

        </table>
		{{ $part -> links() }}


       <br/>



    </div>
</div>
@endsection

