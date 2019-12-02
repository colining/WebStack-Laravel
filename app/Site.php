<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Site extends Model implements Sortable
{
    use SortableTrait;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public $sortable = [
        'order_column_name' => 'order',
    ];

}
