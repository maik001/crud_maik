<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document_type extends Model
{
    protected $fillable = [
        'id',
        'type_name',
    ];

    protected function document()
    {
        return $this->belongsTo(Document::class, foreignKey:'type_id', ownerKey:'id');
    }
}
