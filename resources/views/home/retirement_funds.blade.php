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
                                        <h1 class="title">RETIREMENT FUNDS</h1>
                                        <ol class="breadcrumb">
                                            <li><a href="{{ route('app.home') }}" class="link home">Home</a></li>
                                            <li><a {{-- href="{{route('about')}}" --}} class="link active">RETIREMENT FUNDS</a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="about-special padding-top padding-bottom">
                            <div class="container">
                                <h2 class="page-title">RETIREMENT FUNDS</h2>
                                <div class="wrapper-timeline">
                                    <div class="content-timeline">
                                        <div class="timeline-block">
                                            {{-- <div class="timeline-number"><span>2003</span></div> --}}
                                            <div class="timeline-title">RETIREMENT FUNDS</div>
                                            <p class="timeline-text">
                                                On the surface, retirement planning hasn't changed all that much over
                                                the years. You work, you save and then you retire. But while the
                                                mechanics may be the same, today's savers are facing some challenges
                                                that previous generations didn't have to worry about.

                                                First of all, life expectancy is longer, which means you'll need your
                                                money to last longer – potentially into your 90s. Bond yields are also
                                                much lower than they used to be, which means you can't buy a few fixed
                                                income instruments and earn a double-digit return. Then there is the
                                                health crisis due to the coronavirus pandemic.

                                                This is compounded by the fact that more companies are moving away from
                                                defined benefit pensions —which guaranteed you a certain amount of money
                                                in your golden years — to defined contribution plans, which are more
                                                subject to market ups and downs.

                                                So, how can you have the retirement you've always wanted? After all,
                                                retirees want to experience all the things they couldn't do when they
                                                were too busy working. Exotic travel vacations, marathon running, novel
                                                writing, spending more time with friends and family — the possibilities
                                                are almost endless. There are several steps, which we explain in this
                                                retirement guide, from budgeting and setting goals to choosing the right
                                                retirement savings account that will help you map out a plan that's
                                                right for you.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                      
                        <div class="sign-up">
                            <div class="container">
                                <div class="subscribe-email-wrapper">
                                    <div class="subscribe-email-left">
                                        <p class="subscribe-email-title">Sign up for <span>Stancorp  Finance </span>
                                            viewpoints!
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
