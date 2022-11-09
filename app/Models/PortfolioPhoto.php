<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioPhoto extends Model
{
    use HasFactory;

    public function rPortfolioPhoto(){
        return $this->belongsTo(Portfolio::class, 'portfolio_id');
    }
}
