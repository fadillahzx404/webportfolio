<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['name_project', 'category_project_id', 'desc_project', 'tools_project', 'photo_cover', 'photo_left', 'photo_center', 'icon_project', 'photo_right', 'video_link', 'link_project', 'github_project', 'date', 'created_at', 'updated_at'];

    protected $hidden = [];

    public function category()
    {
        return $this->belongsTo(CategoryProject::class, 'category_project_id', 'id');
    }
}
