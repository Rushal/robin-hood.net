@extends('layouts.primary-layout')

@section('content')
    <div class="container">
        <h1 class="page-title">HISTORY</h1>
        <p class="page-sub-title">Here are our stats since Robin-Hood.net launched.</p>

        <hr class="page-hr"/>

        <div class="row">
            <div class="col s12 m5 page-numbers-large center-align">
                2,376,235
                <div class="page-sub-title-3">Total Travelers</div>
            </div>

            <div class="col m2 hide-on-small-only rotate-cw-90"><img src="{{ asset ('images/bow.png') }}"/></div>

            <div class="col s12 m5 page-numbers-large center-align">
                <span style="color: #9fce1d;">$776,235</span>
                <div class="page-sub-title-3">Wealth Transfered</div>
            </div>
        </div>

        <div class="section"></div>

        <div class="row">
            <div class="col s12 m6 page-title-2">
                CHARITY DATA
                <div class="page-sub-title-2">Money given to Charity</div>
            </div>

            <div class="col hide-on-small-only m6 page-title-2">
                TRAVELER DATA
                <div class="page-sub-title-2">Money received from Traveler</div>
            </div>

            <div class="col s12 m6">
                <table class="centered">
                    <tbody>
                    <tr>
                        <td>United Nations Children's Fund</td>
                        <td>$258,201</td>
                    </tr>
                    <tr>
                        <td>Human Rights Watch</td>
                        <td>$258,201</td>
                    </tr>
                    <tr>
                        <td>Museum Of Modern Art</td>
                        <td>$258,201</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col s12 hide-on-med-and-up page-title-2">
                TRAVELER DATA
                <div class="page-sub-title-2">Money received from Traveler</div>
            </div>

            <div class="col s12 m6">
                <table class="centered">
                    <tbody>
                    <tr>
                        <td>Honda</td>
                        <td>$258,201</td>
                    </tr>
                    <tr>
                        <td>Home Deopt</td>
                        <td>$258,201</td>
                    </tr>
                    <tr>
                        <td>AT&T</td>
                        <td>$258,201</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection