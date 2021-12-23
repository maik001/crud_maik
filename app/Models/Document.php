<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'id',
        'type_id',
        'title',
        'name_archive'
    ];

    public function document_type()
    {
        return $this->hasOne(Document_type::class, 'id', 'type_id');
    }
}
