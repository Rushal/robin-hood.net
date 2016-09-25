<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database;

class Transaction extends Model
{
    public $fillable = ['transaction_date', 'description', 'amount', 'type'];
    protected $dates = ['transaction_date'];
}
