<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'book_name',
        'book_desc',
        'author',
        'image',
        'is_booked',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_booked' => 'boolean',
    ];

     /**
     * @return BelongsTo
     * book's user
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo( User::class );
    }

     /**
     * @return BelongsTo
     * book's category
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class );
    }
}
