<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tagihan extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    protected $guarded = [];
    protected $dates = ['tanggal_tagihan', 'tanggal_jatuh_tempo'];
    protected $with = ['user', 'siswa', 'tagihanDetails'];
    /**
     * Get the user that owns the Tagihan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the siswa that owns the Tagihan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }

    /**
     * Get all of the tagihanDetails for the Tagihan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tagihanDetails(): HasMany
    {
        return $this->hasMany(TagihanDetail::class);
    }

    /**
     * Get all of the pembayaran for the Tagihan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pembayaran(): HasMany
    {
        return $this->hasMany(Pembayaran::class);
    }

    public function getStatsTagihanWali()
    {
        if($this->status == 'baru'){
            return 'Belum dibayar';
        }
        if($this->status == 'lunas'){
            return 'Sudah dibayar';
        }
        return $this->status;
    }

    protected static function booted()
    {
        static::creating(function ($tagihan) {
            $tagihan->user_id = auth()->user()->id;
        });

        static::updating(function ($tagihan) {
            $tagihan->user_id = auth()->user()->id;
        });
    }
}
