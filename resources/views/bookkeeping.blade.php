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
                            <!--<th data-field="debit">DEBIT</th>-->
                            <th data-field="credit">Debit / Credit</th>
                            <th data-field="balance">BALANCE</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>6.24.2016</td>
                            <td>Deposit Chris K</td>
                            <!--<td></td>-->
                            <td>$3000</td>
                            <td>$8020.41</td>
                        </tr>
                        <tr>
                            <td>6.7.2016</td>
                            <td>Deposit Chris K</td>
                            <!--<!--<td></td>-->
                            <td>$3000</td>
                            <td>$5020.41</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>6.1.2016</td>
                            <td>Uniseph</td>
                            <td>- $18</td>
<!--<td></td>-->
                            <td>$2020.41</td>
                        </tr>
                        <tr>
                            <td>5.14.2016</td>
                            <td>Deposit Chris K</td>
<!--<td></td>-->
                            <td>$2000</td>
                            <td>$2028.41</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>5.1.2016</td>
                            <td>Service Fees</td>
                            <td>$18</td>
<!--<td></td>-->
                            <td>$38.41</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>4.1.2016</td>
                            <td>Uniseph</td>
                            <td>$18</td>
<!--<td></td>-->
                            <td>$56.41</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>4.1.2016</td>
                            <td>Service Fees (3 months)</td>
                            <td>$47.97</td>
<!--<td></td>-->
                            <td>$71.41</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>3.1.2016</td>
                            <td>Service Fees</td>
                            <td>$18</td>
<!--<td></td>-->
                            <td>$119.38</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>2.1.2016</td>
                            <td>Service Fees</td>
                            <td>$18</td>
<!--<td></td>-->
                            <td>$137.38</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>1.1.2016</td>
                            <td>Service Fees</td>
                            <td>$18</td>
<!--<td></td>-->
                            <td>$155.38</td>
                        </tr>

                        <tr class="table-collapsible-header">
                            <td>2015</td>
                            <td>CLICK TO EXPAND</td>
                            <!--<td></td>-->
                            <td></td>
                            <td class="arrow"><i class="material-icons">&#xE5C5;</i></td>
                        </tr>
                        <tr>
                            <td>6.24.2016</td>
                            <td>Deposit Chris K</td>
<!--<td></td>-->
                            <td>$3000</td>
                            <td>$8020.41</td>
                        </tr>
                        <tr>
                            <td>6.7.2016</td>
                            <td>Deposit Chris K</td>
<!--<td></td>-->
                            <td>$3000</td>
                            <td>$5020.41</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>6.1.2016</td>
                            <td>Uniseph</td>
                            <td>$18</td>
<!--<td></td>-->
                            <td>$2020.41</td>
                        </tr>
                        <tr>
                            <td>5.14.2016</td>
                            <td>Deposit Chris K</td>
<!--<td></td>-->
                            <td>$2000</td>
                            <td>$2028.41</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>5.1.2016</td>
                            <td>Service Fees</td>
                            <td>$18</td>
<!--<td></td>-->
                            <td>$38.41</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>4.1.2016</td>
                            <td>Uniseph</td>
                            <td>$18</td>
<!--<td></td>-->
                            <td>$56.41</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>4.1.2016</td>
                            <td>Service Fees (3 months)</td>
                            <td>$47.97</td>
<!--<td></td>-->
                            <td>$71.41</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>3.1.2016</td>
                            <td>Service Fees</td>
                            <td>$18</td>
<!--<td></td>-->
                            <td>$119.38</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>2.1.2016</td>
                            <td>Service Fees</td>
                            <td>$18</td>
<!--<td></td>-->
                            <td>$137.38</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>1.1.2016</td>
                            <td>Service Fees</td>
                            <td>$18</td>
<!--<td></td>-->
                            <td>$155.38</td>
                        </tr>

                        <tr class="table-collapsible-header">
                            <td>2014</td>
                            <td>CLICK TO EXPAND</td>
                            <!--<td></td>-->
                            <td></td>
                            <td class="arrow"><i class="material-icons">&#xE5C5;</i></td>
                        </tr>
                        <tr>
                            <td>6.24.2016</td>
                            <td>Deposit Chris K</td>
<!--<td></td>-->
                            <td>$3000</td>
                            <td>$8020.41</td>
                        </tr>
                        <tr>
                            <td>6.7.2016</td>
                            <td>Deposit Chris K</td>
<!--<td></td>-->
                            <td>$3000</td>
                            <td>$5020.41</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>6.1.2016</td>
                            <td>Uniseph</td>
                            <td>$18</td>
<!--<td></td>-->
                            <td>$2020.41</td>
                        </tr>
                        <tr>
                            <td>5.14.2016</td>
                            <td>Deposit Chris K</td>
<!--<td></td>-->
                            <td>$2000</td>
                            <td>$2028.41</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>5.1.2016</td>
                            <td>Service Fees</td>
                            <td>$18</td>
<!--<td></td>-->
                            <td>$38.41</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>4.1.2016</td>
                            <td>Uniseph</td>
                            <td>$18</td>
<!--<td></td>-->
                            <td>$56.41</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>4.1.2016</td>
                            <td>Service Fees (3 months)</td>
                            <td>$47.97</td>
<!--<td></td>-->
                            <td>$71.41</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>3.1.2016</td>
                            <td>Service Fees</td>
                            <td>$18</td>
<!--<td></td>-->
                            <td>$119.38</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>2.1.2016</td>
                            <td>Service Fees</td>
                            <td>$18</td>
<!--<td></td>-->
                            <td>$137.38</td>
                        </tr>
                        <tr class="red darken-1">
                            <td>1.1.2016</td>
                            <td>Service Fees</td>
                            <td>$18</td>
<!--<td></td>-->
                            <td>$155.38</td>
                        </tr>

                    </tbody>
                </table>

                <!-- other years --
                <table class="table-collapsible-header">
                    <thead>
                        <tr>
                            <th data-field="date">2015</th>
                            <th data-field="description">CLICK TO EXPAND</th>
                            <th data-field="debit"></th>
                            <th data-field="credit"></th>
                            <th data-field="balance"><</th>
                        </tr>
                    </thead>
                </table>

                <div id="2015" class="hidden">
                    <table class="table-collapsible-content">
                        <tbody>
                            <tr>
                                <td>6.24.2016</td>
                                <td>Deposit Chris K</td>
                                td></td>
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

                <table class="table-collapsible-header">
                    <thead>
                        <tr>
                            <th data-field="date">2014</th>
                            <th data-field="description">CLICK TO EXPAND</th>
                            <th data-field="debit"></th>
                            <th data-field="credit"></th>
                            <th data-field="balance"><</th>
                        </tr>
                    </thead>
                </table>

                <div id="2014" class="hidden">
                    <table class="table-collapsible-content">
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

                <table class="table-collapsible-header">
                    <thead>
                        <tr>
                            <th data-field="date">2013</th>
                            <th data-field="description">CLICK TO EXPAND</th>
                            <th data-field="debit"></th>
                            <th data-field="credit"></th>
                            <th data-field="balance"><</th>
                        </tr>
                    </thead>
                </table>

                <div id="2013" class="hidden">
                    <table class="table-collapsible-content">
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
                </div>-->

            </div>
        </div>

    </div>
@endsection