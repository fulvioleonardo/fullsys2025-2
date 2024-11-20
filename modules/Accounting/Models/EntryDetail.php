<?php

namespace Modules\Accounting\Models;

use Illuminate\Database\Eloquent\Model;

class EntryDetail extends Model
{
    protected $table = 'entry_details';
    protected $fillable = ['entry_id', 'puc_id', 'debit', 'credit'];

    public function entry()
    {
        return $this->belongsTo(Entry::class);
    }

    public function puc()
    {
        return $this->belongsTo(Puc::class);
    }
}
