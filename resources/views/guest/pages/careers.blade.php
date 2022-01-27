@extends('guest.layouts.app')

@section('content')
    <div id="careers">
        <div class="content">
            <div class="first-section">
                @include('guest.layouts.header')
                <div class="text-content">
                    <p>CAREERS</p>
                    <h3 class="mb5">The future is here!
                        <br>Future where work is fun.
                    </h3>
                    <p>We're looking for front-end, back-end, blockchain developers. Game engineers, designers or 3D artist, and
                        adventurers, builders, thinkers, and missionaries to join our team and our powerful mission to bring the
                        decentralized gaming and metaverse to the entire planet.</p>
                    <div class="btn-container pt5">
                        <a href="#" class="button ribbon-outset border">APPLY TODAY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pagejs')
    {{-- <script src="{{ asset('js/pages/guests/buynow/index.js') }}"></script> --}}
@stop
