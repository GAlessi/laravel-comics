<footer>
    <div class="pre-footer">


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
        
        <div class="logo">
            <img src="{{ asset('/storage/assets/dc-logo-bg.png') }}" alt="">
        </div>
    </div>
    <div class="socials">

    </div>

</footer>
