<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $table = 'centers';
    protected $fillable = [ 'center_name',
                            'center_no',
                            'branch_no',
                            'center_address',
                            'center_province',
                            'center_city',
                            'center_postal',
                            'center_mobile',
                            'center_land',
                            'center_email',];
}
