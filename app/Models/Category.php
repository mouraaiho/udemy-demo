<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function subCategories()
    {
        return Category::where('parent_category_id',$this->id)->get();
    }

    public function parentCategory()
    {
        return Category::where('id',$this->parent_category_id)->get();
    }

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
}
