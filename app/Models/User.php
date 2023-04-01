<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'usr_user_name',
        'usr_mobile_phone',
        'usr_password_hash',
        'usr_email_address',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAuthPassword()
    {
        return $this->usr_password_hash;
    }

    private function checkUsrStrIsUnique($str)
    {
        // $query = $this->table;
        return !! static::whereUsrStr($str)->exists();
    }

    public function isAdmin()
    {
        return $this->usr_is_admin;
    }

    public function member()
    {
        return $this->hasOne(Member::class,'mbr_usr_id');
    }

    public function showAccStatus()
    {
        if($this->usr_is_active == 1){
            return "<span style='color:green'>فعال</span>";
        }else{
            return "<span style='color:red'>غیرفعال</span>";
        }
    }

    public function returnInfo()
    {
        if(!empty($this->usr_user_name)){
            return $this->usr_user_name;
        }else{
            if(!empty($this->usr_mobile_phone)){
                return $this->usr_mobile_phone;
            }else{
                return $this->usr_email_address;
            }
        }
    }

    public function ownAcc($id)
    {
        return !! $id == auth()->user()->id;
    }

    public function checkActivation()
    {
        if($this->usr_is_active == 1){
            return true;
        }else{
            return false;
        }
    }
}
