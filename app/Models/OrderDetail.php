<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class OrderDetail extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'order_detail';

     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id',
        'product_id',
        'amount',
        'price',        
        'total'
    ];

    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'product_id');
    }

    public function order()
    {
        return $this->belongTos('App\Models\Orders', 'id', 'order_id');
    }
        
}
