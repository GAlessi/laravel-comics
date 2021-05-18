<footer>
    <div class="pre-footer">

        <div class="texts">
            <div class="lists">
                @foreach ($footer as $value => $list)
                    <ul>
                        <li class="title">{{$list["title"]}}</li>
                        @foreach ($list["links"] as $link)
                            <li><a href="#">{{$link}}</a></li>
                        @endforeach
                    </ul>
                @endforeach
            </div>

            <p>All Site Content TM and C 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved. </p>
            <a href="#">Cookies Settings</a>
        </div>

        <div class="logo">
            <img src="{{ asset('/storage/assets/dc-logo-bg.png') }}" alt="">
        </div>
    </div>
    <div class="socials">
        <a href="#">
            <h4>SIGN-UP NOW!</h4>
        </a>

        <ul class="icons">
            <li><h3>FOLLOW US</h3></li>
            <li><a href="#"><img src="{{ asset('/storage/assets/footer-facebook.png') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ asset('/storage/assets/footer-twitter.png') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ asset('/storage/assets/footer-youtube.png') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ asset('/storage/assets/footer-pinterest.png') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ asset('/storage/assets/footer-periscope.png') }}" alt=""></a></li> 
        </ul>


    </div>

</footer>
