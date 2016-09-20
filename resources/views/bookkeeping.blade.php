@extends('layouts.primary-layout')

@section('content')
    <div class="container">
        <h1 class="page-title hide-on-small-only">BOOKKEEPING</h1>
        <h1 class="page-title hide-on-med-and-up">BOOK-KEEPING</h1>
        <p class="page-sub-title">The following is a listing of the state of Robin Hood's bank account of 3/12/2012 to present.</p>

        <hr class="page-hr"/>

        <div class="row">
            <div class="col s12">
                <table class="responsive-table">
                    <thead>
                    <tr>
                        <th data-field="date">DATE</th>
                        <th data-field="description">DESCRIPTION</th>
                        <th data-field="debit">DEBIT</th>
                        <th data-field="credit">CREDIT</th>
                        <th data-field="balance">ACCT. BALANCE</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>6.24.2016</td>
                        <td>Deposit Chris K</td>
                        <td></td>
                        <td>$3000</td>
                        <td>$8020.41</td>
                    </tr>
                    <tr>
                        <td>6.7.2016</td>
                        <td>Deposit Chris K</td>
                        <td></td>
                        <td>$3000</td>
                        <td>$5020.41</td>
                    </tr>
                    <tr class="red darken-1">
                        <td>6.1.2016</td>
                        <td>Uniseph</td>
                        <td>$18</td>
                        <td></td>
                        <td>$2020.41</td>
                    </tr>
                    <tr>
                        <td>5.14.2016</td>
                        <td>Deposit Chris K</td>
                        <td></td>
                        <td>$2000</td>
                        <td>$2028.41</td>
                    </tr>
                    <tr class="red darken-1">
                        <td>5.1.2016</td>
                        <td>Service Fees</td>
                        <td>$18</td>
                        <td></td>
                        <td>$38.41</td>
                    </tr>
                    <tr class="red darken-1">
                        <td>4.1.2016</td>
                        <td>Uniseph</td>
                        <td>$18</td>
                        <td></td>
                        <td>$56.41</td>
                    </tr>
                    <tr class="red darken-1">
                        <td>4.1.2016</td>
                        <td>Service Fees (3 months)</td>
                        <td>$47.97</td>
                        <td></td>
                        <td>$71.41</td>
                    </tr>
                    <tr class="red darken-1">
                        <td>3.1.2016</td>
                        <td>Service Fees</td>
                        <td>$18</td>
                        <td></td>
                        <td>$119.38</td>
                    </tr>
                    <tr class="red darken-1">
                        <td>2.1.2016</td>
                        <td>Service Fees</td>
                        <td>$18</td>
                        <td></td>
                        <td>$137.38</td>
                    </tr>
                    <tr class="red darken-1">
                        <td>1.1.2016</td>
                        <td>Service Fees</td>
                        <td>$18</td>
                        <td></td>
                        <td>$155.38</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection