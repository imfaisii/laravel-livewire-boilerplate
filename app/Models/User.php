<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Jenssegers\Agent\Agent;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Rappasoft\LaravelAuthenticationLog\Traits\AuthenticationLoggable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, HasRoles, AuthenticationLoggable;

    const DEFAULT_AVATAR = '/assets/img/default-avatar.png';

    protected $appends = ['top_role'];

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar'
    ];

    protected $attributes = ['avatar' => self::DEFAULT_AVATAR];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function getAvatarAttribute($value)
    {
        if ($value !== self::DEFAULT_AVATAR) return "/storage/$value";

        return self::DEFAULT_AVATAR;
    }

    protected function getTopRoleAttribute()
    {
        return $this->roles->first()->name;
    }

    public function getUserAgents($count = 5)
    {
        $agents = $this->authentications->map(function ($log) {
            $agent = tap(new Agent, fn ($agent) => $agent->setUserAgent($log->user_agent));

            return [
                'is_mobile' => ($agent->isMobile() || $agent->isTablet()) ? true : false,
                'device' => $agent->device(),
                'platform' => $agent->platform(),
                'browser' => $agent->browser(),
                'login_at' => Carbon::parse($log->login_at)->format('l M d g:i a'),
                'country' => $log->location['country'],
                'ip' => $log->location['ip'],
                'timezone' => $log->location['timezone'],
            ];
        });

        return $agents->take($count);
    }
}
