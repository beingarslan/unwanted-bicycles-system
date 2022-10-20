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
        'first_name',
        'last_name',
        'email',
        'api_token',
        'password',
        'prefecture',
        'zip_code',
        'address1',
        'address2',
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
        return "{$this->first_name} {$this->last_name}";
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
        if (! $this->zip_code || (! $this->prefecture && ! $this->address1 && ! $this->address2)) {
            return null;
        }

        return "{$this->prefecture} {$this->address1}, {$this->address2}, {$this->zip_code}";
    }

    public function scopeSearch($query, $searchText)
    {
        return $query->where('first_name', 'LIKE', "%{$searchText}%")
            ->orWhere('last_name', 'like', "%{$searchText}%")
            ->orWhere('email', 'like', "%{$searchText}%")
            ->orWhere('prefecture', 'like', "%{$searchText}%")
            ->orWhere('address1', 'like', "%{$searchText}%")
            ->orWhere('address2', 'like', "%{$searchText}%")
            ->orWhere('zip_code', 'like', "%{$searchText}%");
    }
}
