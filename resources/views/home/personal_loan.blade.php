<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.home_css')
</head>

<body>
    <div class="body-wrapper-content">
        <div class="sidenav-overlay"></div>
        <!-- HEADER-->
        @include('include.home_header')
        <!-- WRAPPER-->
        <div id="wrapper-content">
            <!-- PAGE WRAPPER-->
            <div id="page-wrapper">
                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <!-- CONTENT-->
                    <div class="content">
                        <section class="page-banner about">
                            <div class="container">
                                <div class="page-title-wrapper">
                                    <div class="page-title-content">
                                        <h1 class="title">PERSONAL LOANS</h1>
                                        <ol class="breadcrumb">
                                            <li><a {{-- href="{{route('home')}}" --}} class="link home">Home</a></li>
                                            <li><a {{-- href="{{route('about')}}" --}} class="link active">PERSONAL LOANS</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="about-special padding-top padding-bottom">
                            <div class="container">
                                <h2 class="page-title">PERSONAL LOANS</h2>
                                <div class="wrapper-timeline">
                                    <div class="content-timeline">
                                        <div class="timeline-block">
                                            {{-- <div class="timeline-number"><span>2003</span></div> --}}
                                            <div class="timeline-title">Personal loans</div>
                                            <p class="timeline-text">Cryptocurrency is a form of payment that can be exchanged online for goods and services. Many companies have issued their own currencies, often called tokens, and these can be traded specifically for the good or service that the company provides. Think of them as you would arcade tokens or casino chips. You’ll need to exchange real currency for the cryptocurrency to access the good or service. Cryptocurrencies work using a technology called blockchain. Blockchain is a decentralized technology spread across many computers that manages and records transactions. Part of the appeal of this technology is its security. Cryptocurrencies are sets of software protocols for generating digital tokens and for tracking transactions in a way that makes it hard to counterfeit or re-use tokens. which is why at Atlanticmutuals we pride ourselves in ensuring you choose the right investment plan for you. More than 10,000 different cryptocurrencies are traded publicly, according to CoinMarketCap.com, a market research website. And cryptocurrencies continue to proliferate, raising money through initial coin offerings, or ICOs. The total value of all cryptocurrencies on Aug. 18, 2021, was more than $1.9 trillion — down from April high of $2.2 trillion, according to CoinMarketCap. The total value of all bitcoins, the most popular digital currency, was pegged at about $849 billion, regaining some ground from recent price lows. Still, the market value of bitcoin is down from April high of $1.2 trillion with our 24/7 support staffs present, we work round the clock to ensure smooth user experience.</p>
                                            {{-- <div class="timeline-slider">
                                                <div class="item-slider">
                                                    <a href="#"><img src="assets/img/about/about-1.jpg" alt=""
                                                            class="img-responsive"></a>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="wrapper-banner-why">
                            <div class="wrapper-img"><img src="assets/img/about/bkg.jpg" alt=""
                                    class="img-responsive"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="content-why">
                                            <div class="why-icon"><i class="icon flaticon-cup"></i></div>
                                            <div class="why-title">Why choose us</div>
                                            <div class="why-text">
                                                <p class="text">Since 2003, our firm has been dedicated to
                                                    delivering exceptional asset management and investment for our institutional,
                                                    retail, and high-net-worth clients. We consistently spend all
                                                    efforts in assuring.</p>
                                                <p class="text">We consistently spend all efforts in assuring
                                                    investment efficiency at all times.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wrapper-table">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="content-table">
                                                        <div data-value="2500"
                                                            class="main-table main-table-about margin-table-bottom">
                                                            <div class="table-number">25300</div>
                                                            <div class="table-text">Individual Investors</div>
                                                        </div>
                                                        <div data-value="4764" class="main-table main-table-about">
                                                            <div class="table-number">478964</div>
                                                            <div class="table-text">Commissionable Trades </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="content-table">
                                                        <div data-value="2280"
                                                            class="main-table main-table-about margin-table-bottom">
                                                            <div class="table-number">22280</div>
                                                            <div class="table-text">Brokerage Accounts </div>
                                                        </div>
                                                        <div data-value="5100" class="main-table main-table-about">
                                                            <div class="table-number">50100</div>
                                                            <div class="table-text">Customer Assets</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sign-up">
                            <div class="container">
                                <div class="subscribe-email-wrapper">
                                    <div class="subscribe-email-left">
                                        <p class="subscribe-email-title">Sign up for <span> Intersperse Finance </span> viewpoints!
                                        </p>
                                        <div class="description">Get a weekly email of our pros' current thinking
                                            about financial markets, investing and personal finance.</div>
                                    </div>
                                    <div class="subscribe-email-right">
                                        <form>
                                            <div class="input-group form-subscribe-email">
                                                <input type="text" placeholder="Email" class="form-control"><span
                                                    class="input-group-btn"><button type="submit"
                                                        class="btn-view">Get viewpoint</button></span>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="back-top"><a href="#top" class="link"><i class="fa fa-angle-double-up"></i></a></div>
        </div>
        <!-- FOOTER-->
        @include('include.home_footer')
    </div>
    <!-- LIBRARY JS-->
    @include('include.home_script')
</body>


<!-- Mirrored from swlabs.co/goahead/html/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jan 2022 02:51:25 GMT -->

</html>
