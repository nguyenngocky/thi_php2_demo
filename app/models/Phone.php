<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model{
    protected $table = 'smart_phones';

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
?>