@extends('layouts.frontend')

@section('page-content')
<!-- WELCOME-->
<section class="welcome-screen">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active banner-one">
                <div class="banner-note text-center">
                    <p>
                        To promote cooperation, interaction and beneficial relationship among members and also to raise requisite funds for commitments.
                    </p>
                </div>
            </div>
            <div class="carousel-item banner-two">
                <div class="banner-note text-center">
                    <p>
                        Bringing together / reuniting the alumni of our alma mater globally to come together and positively impact value to the world at large.
                    </p>
                </div>
            </div>
            <!-- <div class="carousel-item banner-three">
                        <div class="banner-note text-center">
                            <p>
                                Bringing together/reuniting the alumni of our alma mater globally to come together and positively impact value to the world at large.
                            </p>
                        </div>
                    </div> -->
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
                        We, the members of C.S.S.O OBOSI ALUMNI ASSOCIATION a not for-profit and non-political organisation do firmly and solemnly resolve to provide for ourselves a constitution and to be governed by the provisions therein contained.
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
                <!-- <div class="text-center">
                        <h6>
                            AIM
                        </h6>
                        <h1>
                            Our Goals
                        </h1>
                        <div class="amet">
                            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim vel. 
                        </div>
                    </div> -->
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
                        Meet some of our top exective members of Association
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <button type="button" class="len" data-bs-toggle="modal" data-bs-target="#exampleModal8">
                    <div class="image-div">
                        <img src="{{URL::asset('assets/images/president.png')}}" draggable="false">
                    </div>
                    <div class="diet">
                        <h4>
                            Sir Kenneth Ifeatu Obi
                        </h4>
                        <div>
                            President
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="len" data-bs-toggle="modal" data-bs-target="#exampleModal9">
                    <div class="image-div">
                        <img src="{{URL::asset('assets/images/profs.png')}}" draggable="false">
                    </div>
                    <div class="diet">
                        <h4>
                            Professor Rita Ugokwe-Joseph
                        </h4>
                        <div>
                            Vice President
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="len" data-bs-toggle="modal" data-bs-target="#exampleModal12">
                    <div class="image-div">
                        <img src="{{URL::asset('assets/images/Chtis.png')}}" draggable="false" alt="">
                    </div>
                    <div class="diet">
                        <h4>
                            Christian Ayinofu Emedo FCA
                        </h4>
                        <div>
                            Financial Secretary
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="len" data-bs-toggle="modal" data-bs-target="#exampleModal11">
                    <div class="image-div">
                        <img src="{{URL::asset('assets/images/redu.png')}}">
                    </div>
                    <div class="diet">
                        <h4>
                            Mr Chukwuemeka Joseph Iredu
                        </h4>
                        <div>
                            General Secretary
                        </div>
                    </div>
                </button>
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

<!-- Modal-9 -->
<div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Our Excos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="model">
                            <img src="{{URL::asset('assets/images/profs.png')}}" draggable="false">
                            <h1>
                                Professor Rita Ugokwe-Joseph
                            </h1>
                            <p>
                                Vice President
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="layer">
                            <h2>
                                Brief Autobiography
                            </h2>
                            <p>
                                Professor Rita Ugokwe-Joseph was born in Obosi Anambra state Nigeria.
                                She has been in the practice of clinical
                                psychology and behaviour rehabilitation for 39 years.
                            </p>
                            <p>
                                She has practiced in the Philippines and Nigeria
                                and has consulted for many non-profit organizations on behaviour modification.
                            </p>
                            <p>
                                Dr. Ugokwe-Joseph is a
                                professor of Clinical psychology and mental hygiene at Nnamdi Azikiwe University Awka and immediate
                                past Dean of the Faculty of Social Sciences. In addition she was the foundation director for the Center
                                for Ageing Cognition and Psychological Health. She is the founder of Psychiatric Rehabilitation Center
                                Obosi.
                            </p>
                            <h2>
                                Education
                            </h2>
                            <ul>
                                <li>
                                    <b>
                                        Higher Degree:
                                    </b>
                                    psychology and behaviour science in Manila Philippines.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal-8 -->
<div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Our Excos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="model">
                            <img src="{{URL::asset('assets/images/president.png')}}" draggable="false">
                            <h1>
                                Sir Kenneth Ifeatu Obi
                            </h1>
                            <p>
                                President
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="layer">
                            <h2>
                                Brief Autobiography
                            </h2>
                            <p>
                                Kenneth Ifeatu Obi. ksc
                                Married with 5 Children
                                Lives in Nigeria
                            </p>
                            <h2>
                                Qualifications:
                            </h2>
                            <ul>
                                <li>
                                    WAEC O’L CSSO “85Set
                                </li>
                                <li>
                                    OND Accounting & HND A
                                </li>
                                <li>
                                    MBA in Business administration-Unizik-2016
                                </li>
                                <li>
                                    Certified Management Consultant-Distinction in Time Management-London Graduate School-2021
                                </li>
                            </ul>
                            <h2>
                                Work Experiences:
                            </h2>
                            <ul>
                                <li>
                                    NSPMC- Industrial trainee-1989
                                </li>
                                <li>
                                    CBN-Research Officer-1993
                                </li>
                                <li>
                                    Athantic Oil Services Ltd-Managing Director/CEO-1999
                                </li>
                                <li>
                                    Athantic Oil Services (Uk) Ltd
                                </li>
                            </ul>
                            <h2>
                                Other Conglomerates:
                            </h2>
                            <ul>
                                <li>
                                    Linsoft Technologies Ltd
                                </li>
                                <li>
                                    Fretelcons Engineering ltd
                                </li>
                                <li>
                                    Dovelife (Uk) Ltd, etc
                                </li>
                            </ul>
                            <h2>
                                Philanthropism-Well over 24 projects which includes:
                            </h2>
                            <ul>
                                <li>
                                    Currently part of the construction of St Andrew’s School in Obosi
                                </li>
                                <li>
                                    Scholarships for over 100
                                </li>
                                <li>
                                    Grassroots Medicare
                                </li>
                                <li>
                                    Donation of mobile clinic to Redcross
                                </li>
                                <li>
                                    Donation of Ambulance to 2 hospitals
                                </li>
                                <li>
                                    Widows empowerment, etc
                                </li>
                            </ul>
                            <h2>
                                Awards:
                            </h2>
                            <ul>
                                <li>
                                    Prestigious United Nations Ambassador for World
                                    Peace(AMBP)UN-PEPolac/AMBO0028/2021;
                                </li>
                                <li>
                                    4 start PHF-Rotary International
                                </li>
                                <li>
                                    Pillar of Solferino-Red cross Society
                                </li>
                                <li>
                                    Obosi Achievers Award
                                </li>
                                <li>
                                    Obosi outstanding Personality-Obosi Community
                                </li>
                                <li>
                                    Man of Excellence-DON
                                </li>
                                <li>
                                    International Service Award-Lions Club Awka
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal-10 -->
<div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Our Excos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="model">
                            <img src="{{URL::asset('assets/images/andrew.png')}}" draggable="false">
                            <h1>
                                Engr. ONUBOGU, Ebuka Andrew
                            </h1>
                            <p>
                                Publicity Secretary
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="layer">
                            <h2>
                                Brief Autobiography
                            </h2>
                            <p>
                                A COREN registered Engineering personnel and Member of The Nigerian Society of Engineers. H
                            </p>
                            <h2>
                                Education
                            </h2>
                            <ul>
                                <li>
                                    <b>
                                        Enugu state University of Science and Technology:
                                    </b>
                                    B.Eng Electrical/Electronic Engineering
                                </li>
                                <li>
                                    <b>
                                        University of Lagos:
                                    </b>
                                    Master of Engineering Systems Management
                                </li>
                            </ul>
                            <h2>
                                Work Experience
                            </h2>
                            <p>
                                He has several years of Electrical and Instrumentation Engineering work experience in both downstream
                                and upstream sector of the oil and gas industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal-11 -->
<div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Our Excos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="model">
                            <img src="{{URL::asset('assets/images/redu.png')}}" draggable="false">
                            <h1>
                                Mr Chukwuemeka Joseph Iredu
                            </h1>
                            <p>
                                General Secretary
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="layer">
                            <h2>
                                Brief Autobiography
                            </h2>
                            <p>
                                An accomplished Journalist, Communicator , private Legal Practitioner and a Notary Public of Nigeria
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal-12 -->
<div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Our Excos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="model">
                            <img src="{{URL::asset('assets/images/Chtis.png')}}" draggable="false">
                            <h1>
                                Christian Ayinofu Emedo FCA
                            </h1>
                            <p>
                                Financial Secretary
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="layer">
                            <h2>
                                Brief Autobiography
                            </h2>
                            <p>
                                Native of Obosi,Ire village ezee kindred
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal-13 -->
<div class="modal fade" id="exampleModal13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Our Excos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="model">
                            <img src="{{URL::asset('assets/images/fav.png')}}" draggable="false">
                            <h1>
                                Mr. Austin Ibeabuchi
                            </h1>
                            <p>
                                Auditor
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="layer">
                            <h2>
                                Brief Autobiography
                            </h2>
                            <p>
                                BAP(SA) - Business Accountant in Practice.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal-14 -->
<div class="modal fade" id="exampleModal14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Our Excos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="model">
                            <img src="{{URL::asset('assets/images/fav.png')}}" draggable="false">
                            <h1>
                                Hon. Alex Emeka Ejindu JP
                            </h1>
                            <p>
                                Walfare Officer
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="layer">
                            <h2>
                                Brief Autobiography
                            </h2>
                            <p>
                                CEO Lexcall Nig LTD and RJ Trained Technical Solution, 49 New Mkt Road Onitsha. Secretary Ohanaezendi Igbo Idemili North, VPG ODU(2003- 2007), President Uruowulu 2015-2019
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection