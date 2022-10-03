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
                                            <p class="timeline-text">Getting a loan doesn’t have to be intimidating, with the right lender it can be a simple process. You only need a lender committed to taking the mystery out of the mortgage loan process! At Stancorp  finance we understand! Our investors want simple facts, honest answers and competitive products.

                                                Stancorp finance automatically offers loan services to investors with over $100,000 investment either in our normal Weltweit Financial Services packages or the NFP plans. Investors over $100,000 are entitled to loans of $500,000-1millon dollars yearly with 5% paid monthly, or the investor could wish to compound the interest till the time limit, provided all required information and identity of the investor are duly confirmed by the Weltweit loan board.
                                                
                                                Every investor above $100,000 is provided with a personal account manager and the investor has a direct communication with the manager in order to see that our loan offers are secured.
                                                
                                                GREAT INVESTING WITH THE Stancorp finance FAMILY!</p>
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
                      
                        <div class="sign-up">
                            <div class="container">
                                <div class="subscribe-email-wrapper">
                                    <div class="subscribe-email-left">
                                        <p class="subscribe-email-title">Sign up for <span> Stancorp Finance </span> viewpoints!
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
