<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurServices extends Model
{
    //
    protected $guarded = ['id'];

      public function features()
      {
      // one service -> many features
      return $this->hasMany(FeaturesOfServices::class, 'service_id');
      }


}
