<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['title_exp', 'start_date_exp', 'end_date_exp', 'company_exp', 'desc_exp', 'created_at', 'updated_at'];

    public function dateOrder()
    {
        return $this->orderBy('date', 'desc');
    }
}
