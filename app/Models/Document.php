<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'id',
        'type_id',
        'name_arquive',

    ];

    public function document_type()
    {
        return $this->belongsTo(Document_type::class);
    }
}
