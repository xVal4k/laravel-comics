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
        <div class="container"></div>
    </section>
</main>
