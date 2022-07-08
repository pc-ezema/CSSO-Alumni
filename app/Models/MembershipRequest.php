<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipRequest extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'surname',
        'first_name',
        'second_name',
        'phone_number',
        'whatsapp_number',
        'email',
        'graduation_set_class',
        'state_of_origin',
        'occupation',
    ];
}
