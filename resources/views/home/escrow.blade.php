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
                                        <h1 class="title">ESCROW</h1>
                                        <ol class="breadcrumb">
                                            <li><a href="{{ route('app.home') }}" class="link home">Home</a></li>
                                            <li><a {{-- href="{{route('about')}}" --}} class="link active">ESCROW</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="about-special padding-top padding-bottom">
                            <div class="container">
                                <h2 class="page-title">ESCROW</h2>
                                <div class="wrapper-timeline">
                                    <div class="content-timeline">
                                        <div class="timeline-block">
                                            {{-- <div class="timeline-number"><span>2003</span></div> --}}
                                            <div class="timeline-title">What is an Escrow?</div>
                                            <p class="timeline-text">Escrow is a legal concept describing a financial instrument whereby an asset or escrow money is held by a third party on behalf of two other parties that are in the process of completing a transaction. Escrow accounts might include escrow fees managed by agents who hold the funds or assets until receiving appropriate instructions or until the fulfillment of predetermined contractual obligations. Money, securities, funds, and other assets can all be held in escrow. It is often suggested as a replacement for a certified or cashier's check.</p>
                                            {{-- <div class="timeline-slider">
                                                <div class="item-slider">
                                                    <a href="#"><img src="assets/img/about/about-1.jpg" alt=""
                                                            class="img-responsive"></a>
                                                </div>
                                            </div> --}}
                                            <p class="timeline-text">Escrow is the use of a third party, which holds an asset or funds before they are transferred from one party to another.</p>
                                            <p class="timeline-text">The third-party holds the funds until both parties have fulfilled their contractual requirements.</p>
                                            <p class="timeline-text">
                                                Escrow is associated with real estate transactions, but it can apply to any situation where funds will pass from one party to another.</p>
                                                <p class="timeline-text">With real estate, escrow can be used when purchasing a home, but also for the life of a mortgage.</p>
                                                <p class="timeline-text">
                                                    Online escrow has been on the rise as a way to offer secure transactions for high-ticket items, such as art or jewelry.</p>
                                            <p class="timeline-text">
                                                Escrow is a process used when two parties are in the process of completing a transaction, and there is uncertainty over whether one party or another will be able to fulfill their obligations. Contexts that use escrow include Internet transactions, banking, intellectual property, real estate, mergers and acquisitions, and law, and many more. Consider a company that is selling goods internationally. That company requires assurance that it will receive payment when the goods reach their destination. The buyer, for their part, is prepared to pay for the goods only if they arrive in good condition. The buyer can place the funds in escrow with an agent with instructions to disburse them to the seller once the goods arrive in a suitable state. This way, both parties are safe, and the transaction can proceed.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                        <div class="sign-up">
                            <div class="container">
                                <div class="subscribe-email-wrapper">
                                    <div class="subscribe-email-left">
                                        <p class="subscribe-email-title">Sign up for <span>Hortcorp  Finance </span> viewpoints!
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
