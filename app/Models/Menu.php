<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $guarded = [];

    public function activeStatus()
    {
        if($this->men_active == 1){
            return "<span style='color:green'>Active</span>";
        }else{
            return "<span style='color:red'>Deactive</span>";
        }
    }

    public function checkMen($link)
    {
        $req = request()->segment(count(request()->segments()));
        if($req == $link){
            return 'active';
        }else{
            return '';
        }
    }
}
