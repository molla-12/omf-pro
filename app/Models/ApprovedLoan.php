<?php

namespace App\Models;
use App\Models\LoanService;
use App\Models\User;
use App\Models\Borrower;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovedLoan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'approved_loan_id',
        'role',
        'ruquested_by',
        'approved_by',
        'loan_service_id',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'status'
    ];

    public function loanService(){
        return $this->belongsTo(LoanService::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function borrower(){
        return $this->belongsTo(Borrower::class);
    }
}
