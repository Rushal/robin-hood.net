<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;

class TransactionsController extends Controller
{
    public function index()
    {
        $now = Carbon::now();

        $transactions = Transaction::select(
            'id',
            'transaction_date',
            'description',
            'amount',
            'type',
            \DB::raw('@balance := CAST(@balance + IF(type = "credit", amount, -amount) AS DECIMAL(10,2)) AS balance'),
            \DB::raw('YEAR(transaction_date) AS transaction_year')
        )
        ->from(\DB::raw('transactions, (SELECT @balance := 0) AS balanceStart'))
        ->get();

        $transactions = $transactions->reverse();

        $transactionYears = $transactions->unique('transaction_year');

        return view('pages.bookkeeping', compact('transactions', 'transactionYears'));
    }
}
