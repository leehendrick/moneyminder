<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransactionType extends Model
{
    protected $table = 'transactions_types';

    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }
}
