<?php
 
namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
 
class APIController extends Controller
{
   	public function TampilApi()
	{

        $curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => 'https://logistik.daihatsu.astra.co.id/partmove/model/mindel_monitoring.php?sp_type=EXCEL',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_POSTFIELDS => array('ShopCode' => 'Weld1','GateGroup' => 'Aspira_1'),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		
		$dataAll = json_decode($response, true);
		foreach ($dataAll['data'] as $key => $value) {
			DB::table('parts')->insert([
			    "ShopCode" => $value['ShopCode'],
	            "GateGroup" => $value['GateGroup'],
	            "Time_Receiving" => $value['Time_Receiving'],
	            "OrderDate" => $value['OrderDate'],
	            "PartNumber" => $value['PartNumber'],
	            "QtyPerKanban" => $value['QtyPerKanban'],
	            "Qty" => $value['Qty'],
	            "ReceiveQty" => $value['ReceiveQty'],
	            "DeliveryQty" => $value['DeliveryQty'],
	            "QtyPerBox" => $value['QtyPerBox'],
	            "Mindel" => $value['Mindel'],
	            "LabelNo" => $value['LabelNo'],
	            "created_at" => date('Y-m-d H:i:s'),
			]);
		}
		echo "oke";
		
	}
	

}
 
  
