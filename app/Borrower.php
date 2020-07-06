<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    protected $table = 'borrowers';
    protected $fillable = [ 'application_no',
                            'branch',
                            'branch_no',
                            'center',
                            'group_no',
                            'borrower_no',
                            'full_name',
                            'nic',
                            'birthday',
                            'address',
                            'lp_no',
                            'mobile_no',
                            'email',
                            'occupation',
                            'requested_amount',
                            'duration_weeks',
                            'loan_stage'];
}
