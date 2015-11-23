<?php

namespace P4;

use Illuminate\Database\Eloquent\Model;

class Charity extends Model
{
    //
  public function wish() {
    return $this->hasMany('\P4\Wish');
  }
}
