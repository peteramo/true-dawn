<?php

namespace App\Models;

use App\Models\Pages\Contact;
use App\Models\Pages\Homepage;
use App\Models\Pages\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;
    protected $table = 'pages';
    protected $guarded = [];

    public function home()
    {
        return $this->hasOne(Homepage::class,'hom_page_id');
    }

    public function meta()
    {
        return $this->hasOne(Meta::class,'met_page_id');
    }

    public function project()
    {
        return $this->hasMany(Project::class,'pro_page_id');
    }

    public function static()
    {
        return $this->hasOne(StaticPages::class,'sta_page_id');
    }

    public function contact()
    {
        return $this->hasOne(Contact::class,'con_page_id');
    }
}
