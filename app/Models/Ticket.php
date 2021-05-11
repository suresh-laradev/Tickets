<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tickets';
    protected $primaryKey = 'id';
    protected $fillable = [
        'ticket_id',
        'service_mode', 
        'mode_of_shipment',
        'sea_opts',
        'type_of_shipment',
        'cus_id',
        'sup_id',
        'date_of_doc_rec',
        'timedoc'
        ];
    
        public function getTimedocAttribute($date){
            return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('h:m');
        }

    
}