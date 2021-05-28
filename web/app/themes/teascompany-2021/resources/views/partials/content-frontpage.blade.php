<section id="top">
    <div class="logo">
        Logo
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <a href="#markets">Schedule</a>
        </div>
        <div class="col-md-6">
            <a href="#catering">Catering</a>
        </div>
        <div class="col-md-6">
            <a href="#menu">Menu</a>
        </div>
        <div class="col-md-6">
            <a href="#about">About Us</a>
        </div>
    </div>
    </div>
</section>

<section id="menu">
    <div class="container">
        @foreach ($data['menu'] as $section)
            <div class="type">
                <h3>{{ $section['title'] }}</h3>
                <div class="products">
                    @foreach ($section['items'] as $item)
                        <div class="product">
                            <div class="text">
                                <h4>{{ $item['title'] }}</h4>
                                <p>{{ $item['description'] }}</p>
                            </div>
                            <div class="price">
                                {{ $item['price'] }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</section>

<section id="markets">
    <div class="container">
    <h2>Find us at these markets</h2>
    <div class="markets">
        @foreach ($data['markets'] as $market)
        <div class="market">
            <div class="logo">
                @if($market['logo'])
                    <img src="{{ $market['logo']['url'] }}" alt="{{ $market['logo']['alt'] }}" />
                @endif
            </div>
            <div class="text">
                <h4>{{ $market['title'] }}</h4>
                {!! $market['info'] !!}
            </div>
        </div>
        @endforeach
    </div>
    </div>
</section>

<section id="catering">
    <div class="container">
    {!! $data['catering'] !!}
    </div>
</section>

<section id="about">
    <div class="container">
        @if($data['about']['image'])
            <img src="{{ $data['about']['image']['url'] }}" alt="{{ $data['about']['image']['alt'] }}" />
        @endif
        {!! $data['about']['text'] !!}
    </div>
</section>
