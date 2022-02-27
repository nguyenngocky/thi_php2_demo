<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model{
   
    protected $table = 'brands';
    public function phone(){
        return $this->hasMany(Phone::class, 'brand_id');
    }
}
?>