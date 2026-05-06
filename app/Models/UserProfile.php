<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_profiles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'full_name',
        'phone_no',
        'date_of_birth',
        'gender',
        'avatar',
        'bio',
        'address_line_1',
        'address_line_2',
        'city',
        'state',
        'country',
        'pincode',
        'social_links',
        'education_details',
        'professional_details',
        'company_details',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date_of_birth' => 'date',
        'social_links' => 'array',
        'education_details' => 'array',
        'professional_details' => 'array',
        'company_details' => 'array',
    ];

    /**
     * Get the user that owns the profile.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Helper to get the full formatted address.
     */
    public function getFullAddressAttribute()
    {
        return collect([
            $this->address_line_1,
            $this->address_line_2,
            $this->city,
            $this->state,
            $this->country,
            $this->pincode
        ])->filter()->implode(', ');
    }

    /**
     * Get specific social link by key (e.g., 'linkedin').
     */
    public function getSocialLink(string $platform)
    {
        $links = $this->social_links ?? [];
        return $links[$platform] ?? null;
    }
}
