<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemPurchaseHistory extends Model
{
    protected $table = 'Item_Purchase_History';
    protected $fillable = [];
    protected $hidden = [];

    protected static $itemModel = 'App\Models\Item';
    protected static $purchaseModel = 'App\Models\Purchase';

    public function item () {
        return $this->belongsTo(static::$itemModel, 'item_id');
    }

    public function purchase () {
        return $this->belongsTo(static::$purchaseModel, 'purchase_id');
    }
}