@extends('layouts.main-layout')
@section('content')
    <main>

        <div class="container">

            <h3 class="currentSeries">CURRENT SERIES</h3>

            <ul class="comics">
                @foreach ($data as $comic)
                    <li class="comic">
                        <div class="cover">
                            <img src="{{$comic['thumb']}}" alt="">
                        </div>
                        <h4>{{$comic['series']}}</h4>
                    </li>
                @endforeach

            </ul>

            <h5 class="button">LOAD MORE</h5>

        </div>
        <div class="merchandise">
            <div>
                <img id="logo" src="{{ asset('/storage/assets/buy-comics-digital-comics.png') }}" alt="">
                <span>DIGITAL COMICS</span>
            </div>
            <div>
                <img id="logo" src="{{ asset('/storage/assets/buy-comics-merchandise.png') }}" alt="">
                <span>DC MERCHANDISE</span>
            </div>
            <div>
                <img id="logo" src="{{ asset('/storage/assets/buy-comics-subscriptions.png') }}" alt="">
                <span>SUBSCRIPTION</span>
            </div>
            <div>
                <img id="logo" src="{{ asset('/storage/assets/buy-comics-shop-locator.png') }}" alt="">
                <span>COMIC SHOP LOCATOR</span>
            </div>
            <div>
                <img id="logo" src="{{ asset('/storage/assets/buy-dc-power-visa.svg') }}" alt="">
                <span>DC POWER VISA</span>
            </div>


        </div>
    </main>
@endsection
