<?php

namespace Modules\Accounting\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $table = 'entries';
    protected $fillable = ['description'];

    public function details()
    {
        return $this->hasMany(EntryDetail::class);
    }
}
