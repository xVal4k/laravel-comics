<main>
    <section id="sec_1">
        <img src="./images/jumbotron.jpg" alt="">
    </section>

    <section id="sec_2">
        <div class="curr_series">CURRENT SERIES</div>
        <div class="container">
            @foreach ($comics as $card)
                <div class="card">
                    <img src="{{$card['thumb']}}" alt="{{$card['title']}}">
                    <p>{{$card['title']}}</p>
                </div>
            @endforeach
        </div>
        <button>LOAD MORE</button>
    </section>

    <section id="sec_3">
        <div class="container">
            <ul class="sec3_links">
                <li>
                    <a href="{{ route('blank_page') }}">
                        <img src="./images/buy-comics-digital-comics.png" alt="img">
                        DIGITAL COMICS
                    </a>
                </li>
                <li>
                    <a href="{{ route('blank_page') }}">
                        <img src="./images/buy-comics-merchandise.png" alt="img">
                        DC MERCHANDISE
                    </a>
                </li>
                <li>
                    <a href="{{ route('blank_page') }}">
                        <img src="./images/buy-comics-subscriptions.png" alt="img">
                        SUBSCRIPTION
                    </a>
                </li>
                <li>
                    <a href="{{ route('blank_page') }}">
                        <img src="./images/buy-comics-shop-locator.png" alt="img">
                        COMIC SHOP LOCATOR
                    </a>
                </li>
                <li>
                    <a href="{{ route('blank_page') }}">
                        <img src="./images/buy-dc-power-visa.svg" alt="img">
                        DC POWER VISA
                    </a>
                </li>
            </ul>
        </div>
    </section>
</main>
