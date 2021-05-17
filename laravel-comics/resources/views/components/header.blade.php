<header>

    <div class="otherSites">
        <span>DC POWERED BY VISA</span>
        <span>ADDITIONAL DC SITES</span>
    </div>

    <nav>
        <img id="logo" src="{{ asset('/storage/assets/dc-logo.png') }}" alt="">

        <ul class="navbarList">
            @foreach ($nav as $value)
                <li>{{$value}}</li>
            @endforeach
        </ul>

        <input type="text" name="" placeholder="Search">
    </nav>
</header>
