@extends('layouts.frontend')

@section('page-content')
<!-- WELCOME-->
<section class="welcome-screen">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active banner-one">
                <div class="banner-note text-center">
                    <p>
                        To promote cooperation, interaction and beneficial relationship among members and also to raise requisite funds for meeting the associations projects and commitments.
                    </p>
                </div>
            </div>
            <div class="carousel-item banner-two">
                <div class="banner-note text-center">
                    <p>
                        Bringing together/reuniting the alumni of our alma mater globally to come together and positively impact value to the world at large.
                    </p>
                </div>
            </div>
            <div class="carousel-item banner-three">
                <div class="banner-note text-center">
                    <p>
                        To promote the social health of the association through occasional lawful informal and/or recreational activities as shall be approved from time to time.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="sett">
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<!-- WELCOME ENDS-->

<!-- THE-IDEA-->
<section class="idea">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="TextArea">
                    <div class="line"></div>
                    <h6>
                        ABOUT US
                    </h6>
                    <h1>
                        The Idea
                    </h1>
                    <div class="text">
                        We, the members of CSS OBOSI ALUMNI ASSOCIATION a not for-profit and non-political organisation do firmly and solemnly resolve to provide for ourselves a constitution and to be governed by the provisions therein contained.
                    </div>
                    <div class="link">
                        <a href="/about">
                            Learn more <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="btn-div">
                    <img src="{{URL::asset('assets/images/Group 46486 (1).png')}}" draggable="false" alt="">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="counter-div text-center">
                    <img src="{{URL::asset('assets/images/members.png')}}" draggable="false">
                    <h4><span class="counter">95 </span><span>+</span></h4>
                    <p>Members </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="counter-div text-center">
                    <img src="{{URL::asset('assets/images/leaders.png')}}" style="width:60px ;" draggable="false">
                    <h4><span class="counter">14</span><span>+</span></h4>
                    <p>Leaders</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="counter-div text-center">
                    <img src="{{URL::asset('assets/images/years.png')}}" style="width:50px ;" draggable="false">
                    <h4><span class="counter">20</span><span>+</span></h4>
                    <p class="years">Years</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="counter-div text-center">
                    <img src="{{URL::asset('assets/images/project.png')}}" draggable="false">
                    <h4><span class="counter">5</span><span>+</span></h4>
                    <p>Projects</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- THE-IDEA ENDS-->

<!--Our Stats-->
<!-- <section class="ourStats">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 text-center justify-content-between allStatBox">
        <div class="statBox">
            <div class="iconArea">
                <img src="assets/images/members.png" draggable="false">
            </div>
            <div class="contentArea">
                <h5>105</h5>
            <p>members</p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="statBox">
            <div class="iconArea">
                <img src="assets/images/years.png" draggable="false">
            </div>
            <div class="contentArea">
            <h5>20</h5>
            <p>Years in Existence</p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="statBox">
            <div class="iconArea">
                <img src="assets/images/members.png" draggable="false">
            </div>
            <div class="contentArea">
                <h5>16</h5>
                <p>Leaders</p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="statBox">
            <div class="iconArea">
            <img src="@/assets/img/icon-shipper.png" draggable="false">
            </div>
            <div class="contentArea">
                <h5>16</h5>
                <p>Leaders</p>
            </div>
            <div class="clear"></div>
        </div>
        </div>
    </div>
    </div>
</section> -->
<!--Our Stats Ends-->

<!-- OUR-GOAL-->
<section class="goal">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h6>
                        AIM
                    </h6>
                    <h1>
                        Our Goals
                    </h1>
                    <!-- <div class="amet">
                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim vel.
                    </div> -->
                </div>
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="background">
                    <div class="background-div">
                        <h1>
                            Our Objectives
                        </h1>
                        <div class="line"></div>
                        <ol>
                            <li>
                                TO PROMOTE COOPERATION, INTERACTION AND BENEFICIAL RELATIONSHIPS AMONGST MEMBERS.
                            </li>
                            <li>
                                TO RAISE REQUISITE FUNDS FOR MEETING THE ASSOCIATION’S PROJECTS AND COMMITMENTS.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>
<!-- OUR-GOAL ENDS-->

<!-- EXECUTIVES-->
<section class="executive">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="Our">
                    <div class="line">

                    </div>
                    <span>EXECUTIVES</span>

                    <h2>
                        Our Excos
                    </h2>
                    <div>
                        Meet some of our top exective members of our Old Boys Association
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="image-div">
                    <img src="{{URL::asset('assets/images/fav.png')}}" alt="">
                </div>
                <div class="diet">
                    <h4>
                        Sir Kenneth Ifeatu Obi
                    </h4>
                    <div>
                        President
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="image-div">
                    <img src="{{URL::asset('assets/images/fav.png')}}" alt="">
                </div>
                <div class="diet">
                    <h4>
                        Professor Rita Ugokwe-Joseph
                    </h4>
                    <div>
                        Vice President
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="image-div">
                    <img src="{{URL::asset('assets/images/fav.png')}}" alt="">
                </div>
                <div class="diet">
                    <h4>
                        Christian Ayinofu Emedo FCA
                    </h4>
                    <div>
                        Financial Secretary
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="image-div">
                    <img src="{{URL::asset('assets/images/fav.png')}}" alt="">
                </div>
                <div class="diet">
                    <h4>
                        Mr Chukwuemeka Joseph Iredu
                    </h4>
                    <div>
                        General Secretary
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="link">
                    <a href="/leadership">
                        See All Executives <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- EXECUTIVES ENDS-->

<!-- MEMBERSHIPS-->
<section class="member">
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="list">
                    <h2>
                        MEMBERSHIP
                    </h2>
                    <div class="line"></div>
                    <h3>
                        Membership Eligibility
                    </h3>
                </div>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-12">
                <p>
                    Are you an alumni of C.S.S Obosi ? Connect with other members by joining our asssociation today
                </p>
                <button>
                    <a href="/members">
                        Become A Member
                    </a>
                </button>
            </div>
        </div>
    </div>
</section>
<!-- MEMBERSHIPS ENDS-->
@endsection