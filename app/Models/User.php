<?php

namespace App\Models;

use App\Core\Traits\SpatieLogsActivity;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;
    use SpatieLogsActivity;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'api_token',
        'password',
        'company_name',
        'postal_code',
        'prefecture',
        'county',
        'town',
        'building_name',
        'phone_number',
        'fax_number',
        'home_page',
        'department',
        'name_furigana',
        'emergency_phone',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    /**
     * Get a fullname combination of first_name and last_name
     *
     * @return string
     */
    public function getNameAttribute()
    {
        return $this->attributes['name'];
    }

    /**
     * Prepare proper error handling for url attribute
     *
     * @return string
     */
    public function getAvatarUrlAttribute()
    {
        if ($this->info) {
            return asset($this->info->avatar_url);
        }

        return asset(theme()->getMediaUrlPath() . 'avatars/blank.png');
    }

    /**
     * User relation to info model
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function info()
    {
        return $this->hasOne(UserInfo::class);
    }

    // joined_at
    public function getJoinedAtAttribute()
    {
        return Carbon::parse($this->created_at)->format('Y-m-d H:i');
    }

    // address
    public function getAddressAttribute()
    {
        return $this->attributes['postal_code'] . ' ' . $this->attributes['prefecture'] . ' ' . $this->attributes['county'] . ' ' . $this->attributes['town'] . ' ' . $this->attributes['building_name'];
    }

    public function scopeSearch($query, $searchText)
    {
        return $query->where('name', 'LIKE', "%{$searchText}%")
            ->orWhere('email', 'like', "%{$searchText}%")
            ->orWhere('prefecture', 'like', "%{$searchText}%")
            ->orWhere('company_name', 'like', "%{$searchText}%")
            ->orWhere('phone_number', 'like', "%{$searchText}%")
            ->orWhere('fax_number', 'like', "%{$searchText}%")
            ->orWhere('home_page', 'like', "%{$searchText}%")
            ->orWhere('department', 'like', "%{$searchText}%")
            ->orWhere('name_furigana', 'like', "%{$searchText}%")
            ->orWhere('emergency_phone', 'like', "%{$searchText}%");
    }
}
