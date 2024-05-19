<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'file_path',
        'comments'
    ];

    protected static function booted(): void
    {
        self::deleting(function (Document $document) {
// Suggested code may be subject to a license. Learn more: ~LicenseLog:665364203.
            Storage::disk('public')->delete($document->file_path);
        });
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
