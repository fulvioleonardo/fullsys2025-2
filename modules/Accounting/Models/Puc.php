<?php

namespace Modules\Accounting\Models;

use Illuminate\Database\Eloquent\Model;

class Puc extends Model
{
    protected $table = 'puc';
    protected $fillable = ['code', 'name', 'type'];

    public function entryDetails()
    {
        return $this->hasMany(EntryDetail::class);
    }
}
