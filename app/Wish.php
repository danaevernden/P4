<?php

namespace P4; #P4; #\App; //changed from P4

use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    //
  public function charity() {
  return $this->belongsTo('\P4\Charity');
  }

  public function user() {
    return $this->belongsTo('\P4\User');
  }

}
