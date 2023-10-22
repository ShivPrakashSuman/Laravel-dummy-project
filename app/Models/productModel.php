<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    use HasFactory;
     
    protected $table = 'product';

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
        'brand_id',
        'category_id',
        'primary_image',
        'secondary_image',
        'title',
        'description',
        'price',
        'quantity',
        'sell_price',
        'status',
    ];

    public function getCategory() {
        return $this->belongsTo('App\Models\categoryModel', 'category_id');
    }
    public function getBrand() {
        return $this->belongsTo('App\Models\brandModel', 'brand_id');
    }
    public function scopeSort($query, $orderBy,$orderType)
    {
        $query->orderBy($orderBy, $orderType);
        return $query;
    }
    public function scopeFilter($query, $params)
    {
        if($params && isset($params['search'])){
            $query->where('id', 'like', '%' . $params['search'] . '%')
            ->orWhere('title', 'like', '%' . $params['search'] . '%')
            ->orWhere('price', 'like', '%' . $params['search'] . '%');
        }
        return $query;
    }
}
