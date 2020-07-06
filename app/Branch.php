<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';
    protected $fillable = [ 'branch_name',
                            'branch_no',
                            'branch_address',
                            'branch_province',
                            'branch_city',
                            'branch_postal',
                            'branch_mobile',
                            'branch_land',
                            'branch_email',];
}
