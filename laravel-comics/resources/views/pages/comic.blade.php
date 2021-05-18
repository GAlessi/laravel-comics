<!DOCTYPE html>
@extends('layouts.main-layout')

@section('content')

    <main class="comic">
        <div class="imgBar">
            <img src="{{$elem['thumb']}}" alt="">
        </div>

        <div class="row">

            <div class="sale">
                <h3>{{$elem['title']}}</h3>

                <div class="greenBar">
                    <div class="price">
                        <div class="">
                            <span>U.S. Price:</span>
                            <span class="white">{{$elem['price']}}</span>
                        </div>

                        <span>AVAIABLE</span>
                    </div>
                    <div class="check">
                        <span class="white">Check Avaliability</span>

                    </div>

                </div>
                <p>{{$elem['description']}}</p>
            </div>
            <div class="adv">
                <h5>ADVERTISEMENT</h5>
                <img src="{{ asset('/storage/assets/adv.jpg') }}">
            </div>
        </div>
    </main>

@endsection
