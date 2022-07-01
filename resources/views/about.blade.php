@extends('layouts.frontend')

@section('page-content')
<!--About Breadcrumb-->
<section class="Breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>About Us</h1>
                <p><a href="/">Home</a> <i class="bi bi-arrow-left-right"></i> About Us</p>
            </div>
        </div>
    </div>
</section>
<!--About Breadcrumb Ends-->

<!-- Our History -->
<section class="History">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="TextArea">
                    <div class="line"></div>
                    <h6>
                        ABOUT US
                    </h6>
                    <h1>
                        ABOUT C.C.S.O ALUMIN
                    </h1>
                    <div class="text">
                        We, the members of CSS OBOSI ALUMNI ASSOCIATION a not for-profit and non-political organisation do firmly and solemnly resolve to provide for ourselves a constitution and to be governed by the provisions therein contained.

                    </div>
                    <div class="link">
                        <button>
                            <a href="/members">
                                Become a Member
                            </a>
                        </button>
                        <button>
                            <a href="/login">
                                Membership Login
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="btn-div">
                    <img src="{{URL::asset('assets/images/Union.png')}}" draggable="false" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Our History ENDS-->

<!-- Our Mission -->
<section class="mission">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="large-div">
                    <div class="icon">
                        <img src="{{URL::asset('assets/images/icon.png')}}" draggable="false" alt="Icon">
                        <span>
                            Our Mission
                        </span>
                    </div>
                    <p>
                        To promote cooperation, interaction and beneficial relationship among members and also to raise requisite funds for meeting the associations projects and commitments.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="large-div">
                    <div class="icon">
                        <img src="{{URL::asset('assets/images/iconc.png')}}" draggable="false" alt="Icon">
                        <span>
                            Our Vision
                        </span>
                    </div>
                    <p>
                        Bringing together/reuniting the alumni of our alma mater globally to come together and positively impact value to the world at large.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Mission  ENDS-->

<!-- Our Objectives -->
<section class="objective">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="item">
                    <div class="line"></div>
                    <h6>
                        AIM
                    </h6>
                    <h1>
                        Our Objectives
                    </h1>
                    <ul>
                        <li>
                            To promote cooperation, interaction and beneficial relationships amongst members.
                        </li>
                        <li>
                            To raise requisite funds for meeting the association’s projects and commitments.
                        </li>
                        <li>
                            To promote the social health of the association through occasional lawful informal and/or recreational activities as shall be approved from time to time.
                        </li>
                        <li>
                            To confer, consult, maintain contact and co-operate with any persons, associations, and societies or bodies of persons established in nigeria as may be necessary for meeting the association’s objectives.
                        </li>
                        <li>
                            To carry out the various aims and objectives through the establishment of standing committees when necessary. generally, to take all such steps necessary and incidental towards realizing the foregoing objectives.
                        </li>
                        <li>
                            To encourage members to work in concert for the development of the association.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image">
                    <h3>
                        CSS Obosi Alumni Constitution
                    </h3>
                    <button>
                        <a href="#">
                            Click here to download
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Objectives  ENDS-->
@endsection