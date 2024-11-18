 @extends('layouts.front')
 @section('content')
     
 
 <!-- slideshow content begin -->
 <div class="uk-section uk-padding-remove-vertical in-slideshow-gradient">
    <div id="particles-js" class="uk-light in-slideshow uk-background-contain" data-src="{{('front/assets/img/in-equity-decor-1.svg')}}" data-uk-img data-uk-slideshow>
        <hr>
        <ul class="uk-slideshow-items">
            <li class="uk-flex uk-flex-middle">
    <div class="uk-container">
        <div class="uk-grid-large uk-flex-middle" data-uk-grid>
            <div class="uk-width-1-2@s in-slide-text">
                <h1 class="uk-heading-small">SELAMAT DATANG DI <span class="in-highlight">FINANSIALKU</span> trade app.</h1>
                <p class="uk-text-lead uk-visible@m">Disini kami akan membantu anda untuk mencapai keinginan anda dan membantu anda untuk memenejemen keuangan anda.</p>
                <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s" data-uk-grid>
                </div>
                <a href="{{ route('login')}}" class="uk-button uk-button-primary">hayu narabung<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
            </div>
            <div class="in-slide-img">
                <img src="{{('front/assets/img/in-lazy.gif')}}" data-src="{{('front/assets/img/duit1.png')}}" alt="image-slide" width="652" height="746" data-uk-img>
            </div>
        </div>
    </div>
</li> 
        </ul>
        <div class="uk-container">
            <div class="uk-position-relative" data-uk-grid>
                <ul class="uk-slideshow-nav uk-dotnav uk-position-bottom-right uk-flex uk-flex-middle"></ul>
            </div>
        </div>
    </div>
</div>
<!-- slideshow content end -->
<!-- section content begin -->
<div class="uk-section uk-section-primary uk-preserve-color in-equity-1">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <h4>Popular products</h4>
            </div>
        </div>
        <div class="uk-grid-match uk-grid-medium uk-child-width-1-4@m uk-child-width-1-2@s uk-margin-bottom" data-uk-grid>
            <div>
                <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                    <div class="uk-flex uk-flex-middle">
                        <span class="in-product-name red">EQ</span>
                        <h5 class="uk-margin-remove">Stocks</h5>
                    </div>
                    <p>Access 19,000+ stocks across core and emerging markets on 40+ exchanges worldwide.</p>
                    <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                    <div class="uk-flex uk-flex-middle">
                        <span class="in-product-name green">LQ</span>
                        <h5 class="uk-margin-remove">Listed Options</h5>
                    </div>
                    <p>Access 1,200+ listed options across equities, indices, interest rates, energy, metals and more.</p>
                    <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                    <div class="uk-flex uk-flex-middle">
                        <span class="in-product-name blue">FU</span>
                        <h5 class="uk-margin-remove">Futures</h5>
                    </div>
                    <p>Access 300+ futures covering equity indices, energy, metals, agriculture, rates and more.</p>
                    <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                    <div class="uk-flex uk-flex-middle">
                        <span class="in-product-name"><i class="fas fa-ellipsis-h fa-xs"></i></span>
                        <h5 class="uk-margin-remove">More products</h5>
                    </div>
                    <p>Explore the full range of cash and leveraged products</p>
                    <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
<!-- section content begin -->
<div class="uk-section in-equity-2 uk-background-contain uk-background-center" data-src="{{('front/assets/img/finance.jpg')}}" data-uk-img>
    <div class="uk-container uk-margin-top">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-2xlarge@m uk-text-center">
                <span class="uk-label uk-label-warning">Fast execution, low latency<i class="fas fa-arrow-right fa-xs uk-margin-small-left"></i></span>
                <h1 class="uk-margin-top">Your premium choice for trading currencies & stocks online</h1>
                <p class="uk-text-lead uk-margin-medium-top">Harness the power of technology to make a quicker, smarter and more precise decision on CFD currency pairs, stocks, commodities and more</p>
            </div>
            <div class="uk-width-3-4@m uk-margin-medium-top">
                <img class="uk-align-center" src="#" data-src="#" alt="image" width="758" height="334" data-uk-img>
            </div>
            <div class="uk-width-2xlarge@m uk-margin-medium-top">
                <div class="uk-grid uk-child-width-1-4@m uk-child-width-1-4@s uk-text-center in-feature-box" data-uk-grid>
                    <a href="#">
                        <span class="in-icon-wrap">
                            <img src="{{('front/assets/img/in-lazy.gif')}}" data-src="{{('front/assets/img/in-equity-2-icon-1.svg')}}" alt="icon-1" width="35" height="42" data-uk-img>
                        </span>
                        <p class="uk-margin-top">Trading calculators</p>
                    </a>
                    <a href="#">
                        <span class="in-icon-wrap">
                            <img src="{{('front/assets/img/in-lazy.gif')}}" data-src="{{('front/assets/img/in-equity-2-icon-2.svg')}}" alt="icon-2" width="38" height="42" data-uk-img>
                        </span>
                        <p class="uk-margin-top">Market analysis</p>
                    </a>
                    <a href="#">
                        <span class="in-icon-wrap">
                            <img src="{{('front/assets/img/in-lazy.gif')}}" data-src="{{('front/assets/img/in-equity-2-icon-3.svg')}}" alt="icon-3" width="42" height="42" data-uk-img>
                        </span>
                        <p class="uk-margin-top">Market reviews</p>
                    </a>
                    <a href="#">
                        <span class="in-icon-wrap">
                            <img src="{{('front/assets/img/in-lazy.gif')}}" data-src="{{('front/assets/img/in-equity-2-icon-4.svg')}}" alt="icon-4" width="42" height="42" data-uk-img>
                        </span>
                        <p class="uk-margin-top">Trading academy</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
<!-- section content begin -->
<div class="uk-section in-equity-3 in-offset-top-20">
    <div class="uk-container uk-margin-large-bottom">
        <div class="uk-grid uk-flex uk-flex-middle">
            <div class="uk-width-expand@m">
                <h1 class="uk-margin-small-bottom">Tight spreads and <span class="in-highlight">ultra-fast</span> execution</h1>
                <h3 class="uk-margin-top uk-text-warning">Best market prices available so you can receive excellent conditions.</h3>
                <hr class="uk-margin-medium-top uk-margin-medium-bottom">
                <ul class="uk-list in-list-check">
                    <li>Negative balance protection</li>
                    <li>Segregated and supervised client funds</li>
                    <li>Instant deposit & fast withdrawal</li>
                </ul>
            </div>
            <div class="uk-width-2xlarge uk-flex uk-flex-right uk-flex-center@s">
                <div class="uk-card uk-card-body uk-card-default uk-border-rounded in-margin-top-60@s">
                    <div id="tradingview-widget"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
<!-- section content begin -->
 
<!-- section content end -->
<!-- section content begin -->

<!-- section content end -->
<!-- section content begin -->
 
<!-- section content end -->
@endsection