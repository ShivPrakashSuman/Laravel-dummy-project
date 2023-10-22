<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderModel extends Model
{
    use HasFactory;
    
    protected $table = 'order';

    protected $primaryKey = 'id';

     /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;


      /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'user_id',
        'address_id',
        'product_id',
        'quantity',
        'price',
        'status'
    ];

    public function scopeSort($query, $orderBy,$orderType)
    {
        $query->orderBy($orderBy, $orderType);
        return $query;
    }
    public function scopeFilter($query, $params)
    {
        if($params && isset($params['search'])){
            $query->where('id', 'like', '%' . $params['search'] . '%')
                ->orWhere('price', 'like', '%'. $params['search']. '%')
                ->orWhere('status', 'like', '%'. $params['search']. '%');
        }
        return $query;
    }

    /**
     * @var array<int, string>
     */

}
