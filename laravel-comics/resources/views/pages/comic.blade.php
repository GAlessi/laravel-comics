<!DOCTYPE html>
@extends('layouts.main-layout')

@section('content')

    <main class="comic">
        <div class="imgBar">
            <img src="{{$elem['thumb']}}" alt="">
        </div>

        <div class="rowSales">

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
        <div class="rowInfo">
            <div class="container talent">

                <div class="box">
                    <h4>Talent</h4>
                </div>
                <div class="box">
                    <span>Art by:</span>
                    <span class="content">
                        @foreach ($elem['artists'] as $artist)
                            {{$artist}}{{ $loop->last ? '.' : ',' }}
                        @endforeach
                    </span>
                </div>
                <div class="box">
                    <span>Written by:</span>
                    <span class="content">
                        @foreach ($elem['writers'] as $writer)
                            {{$writer}}{{ $loop->last ? '.' : ',' }}
                        @endforeach
                    </span>
                </div>

            </div>
            <div class="container specs">

                <div class="box">
                    <h4>Specs</h4>
                </div>
                <div class="box">
                    <span>Series:</span>
                    <span class="content">
                        {{$elem['series']}}
                    </span>
                </div>
                <div class="box">
                    <span>U.S. Price:</span>
                    <span class="info">
                        {{$elem['price']}}
                    </span>
                </div>
                <div class="box">
                    <span>On sale date:</span>
                    <span class="info">
                        {{$elem['sale_date']}}
                    </span>
                </div>

            </div>

        </div>
        <div class="barLink">
            <div class="empty"></div>
            <div class="full">
                <span>DIGITAL COMICS</span>
                <div class="icon"></div>
            </div>
            <div class="full">
                <span> SHOP DC</span>
                <div class="icon"></div>
            </div>
            <div class="full">
                <span>COMIC SHOP LOCATOR</span>
                <div class="icon"></div>
            </div>
            <div class="full">
                <span>SUBSCRIPTIONS</span>
                <div class="icon"></div>
            </div>

            <div class="empty"></div>
        </div>
    </main>

@endsection
