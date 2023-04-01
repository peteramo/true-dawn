<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $guarded = [];

    public function breakAddress()
    {
        return wordwrap($this->address,15, "<br />");
    }

    public function connPara()
    {
        if(!empty($this->con_email) OR !empty($this->con_email2) OR !empty($this->con_phone) OR !empty($this->con_phone2) OR !empty($this->con_mobile) OR !empty($this->con_fax)){
            return true;
        }else{
            return false;
        }
    }

    public function socialLinks()
    {
        if(!empty($this->con_twitter) OR !empty($this->con_facebook) OR !empty($this->con_instagram) OR !empty($this->con_skype) OR !empty($this->con_linkedin)){
            return true;
        }else{
            return false;
        }
    }
}
