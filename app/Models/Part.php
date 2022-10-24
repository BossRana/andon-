<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;
    protected $table = 'parts';
    protected $primaryKey = 'id';
    protected $fillable = [
        
        'ShopCode', 
        'GateGroup', 
        'Time_Receiving',
        'OrderDate', 
        'PartNumber', 
        'QtyPerKanban', 
        'Qty', 
        'ReceiveQty', 
        'DeliveryQty', 
        'QtyPerBox', 
        'Mindel', 
        'LabelNo',
        
    ];
}
