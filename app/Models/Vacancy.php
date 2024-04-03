<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $table = 'vacancies';
    protected $guarded = false;

//    protected $fillable = [
//        'user_id',
//        'title',
//        'image',
//        'company',
//        'location',
//        'email',
//        'description',
//        'min_pay',
//        'max_pay',
//    ];

    // Relationship To User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
