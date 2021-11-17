<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = ['Bid', 'Bname', 'Bslug', 'Bdes','Bstatus'];
    protected $primaryKey = 'Bid';
    protected $table = 'tbl_brand';
}
