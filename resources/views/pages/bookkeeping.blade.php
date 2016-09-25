@extends('layouts.primary-layout')

@section('content')
    <div class="container">
        <h1 class="page-title">BOOKKEEPING</h1>
        <p class="page-sub-title">The following is a listing of the state of Robin Hood's bank account of 3/12/2012 to present.</p>

        <hr class="page-hr"/>

        <div class="row">
            <div class="col s12">
                <table>
                    <thead>
                        <tr>
                            <th data-field="date">DATE</th>
                            <th data-field="description">DESCRIPTION</th>
                            <th data-field="credit">DEBIT / CREDIT</th>
                            <th data-field="balance">BALANCE</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($transactionYears as $transactionYear)
                            @if($transactionYear->transaction_year != date("Y"))
                                <tr class="table-collapsible-header">
                                    <td>{{ $transactionYear->transaction_year }}</td>
                                    <td>CLICK TO EXPAND</td>
                                    <td></td>
                                    <td class="arrow"><i class="material-icons">&#xE5C5;</i></td>
                                </tr>
                            @endif

                            @foreach($transactions as $transaction)
                                @if($transaction->transaction_year == $transactionYear->transaction_year)
                                    <tr
                                            @if($transaction->type === "debit")
                                            class="red darken-2"
                                            @endif
                                    >
                                        <td>{{ $transaction->transaction_date->format('Y-m-d') }}</td>
                                        <td>{{ $transaction->description }}</td>
                                        <td>${{ round($transaction->amount, 2) }}</td>
                                        <td>${{ $transaction->balance }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach

                    </tbody>
                </table>


            </div>
        </div>

    </div>
@endsection