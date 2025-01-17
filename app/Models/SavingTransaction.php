<?php

namespace App\Models;
use App\Models\Branch;
use App\Models\User;
use App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavingTransaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'withdrawals',
        'deposits',
        'customer_id',
        'branch_id',
        'user_id',
    ];

    public function branch(){
        return $this->belongsTo(Branch::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
