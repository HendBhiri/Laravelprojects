<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function addProd($name, $category_id, $stock)
    {
        return self::create([
            'name' => $name,
            'category_id' => $category_id,
            'stock' => $stock,
        ]);
    }

    public function modProd($name, $category_id, $stock)
    {
        $this->update([
            'name' => $name,
            'category_id' => $category_id,
            'stock' => $stock,
        ]);
        return $this;
    }

    public function delProd()
    {
        $this->delete();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
