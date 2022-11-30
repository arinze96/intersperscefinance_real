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
                                        <h1 class="title">CHILDREN ACCOUNT</h1>
                                        <ol class="breadcrumb">
                                            <li><a href="{{ route('app.home') }}" class="link home">Home</a></li>
                                            <li><a {{-- href="{{route('about')}}" --}} class="link active">CHILDREN ACCOUNT</a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="news padding-top padding-bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="article">
                                        <div class="col-md-6">
                                            <a class="wp-img"><img src="assets/img/homepage/general.jpg" alt=""
                                                    class="img-responsive"></a>
                                        </div>
                                        <div class="col-md-6"><a class="article-title"></a>

                                            <div class="preview">
                                                <p class="paragraph">As a parent, We want the best for our kids. We
                                                    want to do everything Possible to set them up for success.

                                                    We at  Finance have spoken with many parents and
                                                    grandparents who have one simple question: How can I invest in my
                                                    child or grandchild’s future? Knowing the power of compound
                                                    interest, some couple wrote us that they wanted to kick-start their
                                                    son’s retirement savings. Others just want to help their kids get a
                                                    college diploma without taking on any debt.

                                                </p>
                                                <p class="paragraph">Those are great concerns to have, so give
                                                    yourself a high five! Whether “Junior” is still crawling around the
                                                    living room floor or getting ready to graduate from high school, we
                                                    got you covered, you can secure and invest in their future. The
                                                     Hortcorp finance Children’s Account is a unique investments account
                                                    designed to allow parents invest then save for their children’s
                                                    future and teach them about savings/investments from a tender age.
                                                    The account is modeled in two tiers for young children and teens
                                                    with an overarching objective of making savings fun for them and
                                                    teaching them financial discipline.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="news padding-top padding-bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="article">

                                        <div class="col-md-6"><a class="article-title"></a>

                                            <div class="preview">
                                                <p class="paragraph">BGC account is modeled in two tiers for young
                                                    children and teens with an overarching objective of making savings
                                                    fun for them and teaching them financial discipline.
                                                </p>
                                                <p class="paragraph">
                                                    An account specifically for children between the ages of 0-15yrs
                                                </p>
                                                <p class="paragraph">
                                                    ROI rate at 150% per annum (withdrawal once a year and only if there
                                                    are emergency needs)
                                                </p>
                                                <p class="paragraph">
                                                    Zero account opening balance
                                                </p>
                                                <p class="paragraph">
                                                    Minimum Investment of $15,000
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#" class="wp-img"><img
                                                    src="assets/img/homepage/children.jpg" alt=""
                                                    class="img-responsive"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="news padding-top padding-bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="article">
                                        <div class="col-md-6">
                                            <a class="wp-img"><img src="assets/img/homepage/teens.jpg" alt=""
                                                    class="img-responsive"></a>
                                        </div>
                                        <div class="col-md-6"><a class="article-title"></a>

                                            <div class="preview">
                                                <p class="paragraph">MT Teens account is a next level account for
                                                    teenagers from 16years and above.

                                                </p>
                                                <p class="paragraph">
                                                    An account specifically for children between the ages of 16-Above
                                                </p>
                                                <p class="paragraph">
                                                    Interest rate at 200%( withdraw twice a year and more only if they
                                                    are emergency needs)
                                                </p>
                                                <p class="paragraph">
                                                    Zero account opening balance
                                                </p>
                                                <p class="paragraph">
                                                    Minimum Investment of $20,000
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                        <div class="sign-up">
                            <div class="container">
                                <div class="subscribe-email-wrapper">
                                    <div class="subscribe-email-left">
                                        <p class="subscribe-email-title">Sign up for <span>Hortcorp  Finance </span>
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
