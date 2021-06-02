<section id="top">
    <div class="logo">
        <img src="@asset('images/teascompany_logo.svg')" alt="logo" />
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="menu-item">
            <a href="#markets">
                <svg viewBox="0 0 500 250">
                    <defs><path id="curve" d="M0,0 c0 250,500 250,500 0" /></defs>
                    <text width="500">
                      <textPath xlink:href="#curve" startOffset="50">
                        Schedule
                      </textPath>
                    </text>
                  </svg>
            </a>
        </div>
        </div>
        <div class="col-md-6">
            <div class="menu-item">
            <a href="#catering">
                <svg viewBox="0 0 500 250">
                    <defs><path id="curve" d="M0,0 c0 250,500 250,500 0" /></defs>
                    <text width="500">
                      <textPath xlink:href="#curve" startOffset="50">
                        Catering
                      </textPath>
                    </text>
                  </svg>
            </a>
        </div>
        </div>
        <div class="col-md-6">
            <div class="menu-item">
            <a href="#menu">
                <img src="@asset('images/menu_fruittea.png')" />
                <svg viewBox="0 0 500 250">
                    <defs><path id="curve" d="M0,0 c0 250,500 250,500 0" /></defs>
                    <text width="500">
                      <textPath xlink:href="#curve" startOffset="50">
                        Menu
                      </textPath>
                    </text>
                  </svg>
            </a>
        </div>
        </div>
        <div class="col-md-6">
            <div class="menu-item">
            <a href="#about">
                <svg viewBox="0 0 500 250">
                    <defs><path id="curve" d="M0,0 c0 250,500 250,500 0" /></defs>
                    <text width="500">
                      <textPath xlink:href="#curve" startOffset="50">
                        About Us
                      </textPath>
                    </text>
                  </svg>
            </a>
        </div>
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
                    <div class="logo-wrap">
                        <img src="{{ $market['logo']['url'] }}" alt="{{ $market['logo']['alt'] }}" />
                    </div>
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
