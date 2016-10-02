@extends('layouts.primary-layout')

@section('content')
<div class="forest">
    <div class="tutorial"></div>
    <div class="planks">
        <div class="plank plank-1"><img src="images/ad_logos/fedex.png" class="traveler-logo"/></div>
        <div class="plank plank-2"><img src="images/ad_logos/citi.png" class="traveler-logo"/></div>
        <div class="plank plank-3"><img src="images/ad_logos/dell.png" class="traveler-logo"/></div>
        <div class="plank plank-4"><img src="images/ad_logos/cheveron.png" class="traveler-logo"/></div>
        <div class="plank plank-5"><img src="images/ad_logos/citi.png" class="traveler-logo"/></div>
        <div class="plank plank-6"><img src="images/ad_logos/dell.png" class="traveler-logo"/></div>
        <div class="plank plank-7"><img src="images/ad_logos/fedex.png" class="traveler-logo"/></div>
        <div class="plank plank-8"><img src="images/ad_logos/citi.png" class="traveler-logo"/></div>
        <div class="plank plank-9"><img src="images/ad_logos/cheveron.png" class="traveler-logo"/></div>
        <div class="plank plank-10"><img src="images/ad_logos/dell.png" class="traveler-logo"/></div>
        <div class="plank plank-11"><img src="images/ad_logos/fedex.png" class="traveler-logo"/></div>
        <div class="plank plank-12"><img src="images/ad_logos/citi.png" class="traveler-logo"/></div>
        <div class="plank plank-13"><img src="images/ad_logos/cheveron.png" class="traveler-logo"/></div>
        <div class="plank plank-14"><img src="images/ad_logos/fedex.png" class="traveler-logo"/></div>
        <div class="plank plank-15"><img src="images/ad_logos/dell.png" class="traveler-logo"/></div>
        <div class="plank plank-16"><img src="images/ad_logos/cheveron.png" class="traveler-logo"/></div>
        <div class="plank plank-17"><img src="images/ad_logos/citi.png" class="traveler-logo"/></div>
        <div class="plank plank-18"><img src="images/ad_logos/fedex.png" class="traveler-logo"/></div>
        <div class="plank plank-19"><img src="images/ad_logos/cheveron.png" class="traveler-logo"/></div>
        <div class="plank plank-20"><img src="images/ad_logos/dell.png" class="traveler-logo"/></div>
        <div class="plank plank-21"><img src="images/ad_logos/citi.png" class="traveler-logo"/></div>

        <div class="quote"><img src="{{ asset('images/uncompressed/quote.png') }}" alt=""/></div>
        <div class="treasure"><img src="images/chest.png" alt=""/></div>
    </div>
</div>

<div class="forest-mobile">
    <div id="mobile-carousel-home">
        <div class="item">
            <div class="plank-mobile landscape-1"><img src="{{ asset('images/ad_logos/fedex.png') }}" class="traveler-logo"/></div>
            <div class="plank-mobile landscape-2"><img src="{{ asset('images/ad_logos/dell.png') }}" class="traveler-logo"/></div>
            <div class="plank-mobile landscape-3"><img src="{{ asset('images/ad_logos/citi.png') }}" class="traveler-logo"/></div>
        </div>
        <div class="item">
            <div class="plank-mobile landscape-1"><img src="{{ asset('images/ad_logos/cheveron.png') }}" class="traveler-logo"/></div>
            <div class="plank-mobile landscape-2"><img src="{{ asset('images/ad_logos/citi.png') }}" class="traveler-logo"/></div>
            <div class="plank-mobile landscape-3"><img src="{{ asset('images/ad_logos/dell.png') }}" class="traveler-logo"/></div>
        </div>
        <div class="item">
            <div class="plank-mobile landscape-1"><img src="{{ asset('images/ad_logos/fedex.png') }}" class="traveler-logo"/></div>
            <div class="plank-mobile landscape-2"><img src="{{ asset('images/ad_logos/citi.png') }}" class="traveler-logo"/></div>
            <div class="plank-mobile landscape-3"><img src="{{ asset('images/ad_logos/cheveron.png') }}" class="traveler-logo"/></div>
        </div>
        <div class="item">
            <div class="plank-mobile landscape-1"><img src="{{ asset('images/ad_logos/fedex.png') }}" class="traveler-logo"/></div>
            <div class="plank-mobile landscape-2"><img src="{{ asset('images/ad_logos/dell.png') }}" class="traveler-logo"/></div>
            <div class="plank-mobile landscape-3"><img src="{{ asset('images/ad_logos/citi.png') }}" class="traveler-logo"/></div>
        </div>
        <div class="item">
            <div class="plank-mobile landscape-1"><img src="{{ asset('images/ad_logos/fedex.png') }}" class="traveler-logo"/></div>
            <div class="plank-mobile landscape-2"><img src="{{ asset('images/ad_logos/cheveron.png') }}" class="traveler-logo"/></div>
            <div class="plank-mobile landscape-3"><img src="{{ asset('images/ad_logos/dell.png') }}" class="traveler-logo"/></div>
        </div>
        <div class="item">
            <div class="plank-mobile landscape-1"><img src="{{ asset('images/ad_logos/citi.png') }}" class="traveler-logo"/></div>
            <div class="plank-mobile landscape-2"><img src="{{ asset('images/ad_logos/fedex.png') }}" class="traveler-logo"/></div>
            <div class="plank-mobile landscape-3"><img src="{{ asset('images/ad_logos/dell.png') }}" class="traveler-logo"/></div>
        </div>
        <div class="item">
            <div class="plank-mobile landscape-1"><img src="{{ asset('images/ad_logos/citi.png') }}" class="traveler-logo"/></div>
            <div class="plank-mobile landscape-2"><img src="{{ asset('images/ad_logos/cheveron.png') }}" class="traveler-logo"/></div>
            <div class="plank-mobile landscape-3"><img src="{{ asset('images/ad_logos/fedex.png') }}" class="traveler-logo"/></div>
        </div>

        <div class="item">
            <div class="treasure-mobile landscape"><a href="#" data-remodal-target="chest"><img src="{{ asset('images/chest.png') }}" alt=""/></a></div>
        </div>
    </div>
</div>



<div class="remodal remodal-chest" data-remodal-id="chest" data-remodal-options="hashTracking: false">
    <div class="row">
        <img src="{{ asset('images/bow.png') }}"/>
    </div>

    <div class="row">
        <div class="page-numbers-med">
            2,376,235
            <div class="page-sub-title">PEOPLE HAVE TRAVELED IN THE<br/>FOREST, TRANSFERRING</div>
        </div>
    </div>

    <div class="row">
        <div class="page-numbers-med">
            <span style="color: #9fce1d;">$776,235</span>
            <div class="page-sub-title">THE WORLD THANKS YOU.<br/>ENJOY YOUR PERFECT DAY!</div>
        </div>
    </div>

    <div class="row rotate-180">
        <img src="{{ asset('images/bow.png') }}"/>
    </div>
</div>



<div class="remodal remodal-mobile-tutorial" data-remodal-id="mobile-tutorial" data-remodal-options="hashTracking: false">
    <div class="row">
        <img src="{{ asset('images/bow.png') }}"/>
    </div>

    <div class="row">
        <img src="{{ asset('images/mobile-tutorial.png') }}" width="100%" height="auto"/>
    </div>

    <div class="row rotate-180">
        <img src="{{ asset('images/bow.png') }}"/>
    </div>
</div>
@endsection