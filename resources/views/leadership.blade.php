@extends('layouts.frontend')

@section('page-content')
<!--Leader Breadcrumb-->
<section class="Breadcrumb-Leader">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Leadership</h1>
                <p><a href="/">Home</a> <i class="bi bi-arrow-left-right"></i> Leadership</p>
            </div>
        </div>
    </div>
</section>
<!--Leader Breadcrumb Ends-->

<!--TRUSTED-->
<section class="trusted">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="TextArea">
                    <div class="line"></div>
                    <h6>
                        TRUSTEES
                    </h6>
                    <h1>
                        Board Of Trustees
                    </h1>
                </div>
            </div>
            <div class="col-lg-3">
                <button type="button" class="len" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="image-div">
                        <img src="{{URL::asset('assets/images/chair.png')}}" draggable="false" alt="">
                    </div>
                    <div class="diet">
                        <h4>
                            Col. Samuel Chukwuemeka Agbanusi (Rtd)
                        </h4>
                        <div>
                            Chairman
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="len" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    <div class="image-div">
                        <img src="{{URL::asset('assets/images/any.png')}}">
                    </div>
                    <div class="diet">
                        <h4>
                            Mr. Anyoku, Winston Obi (Nwajueze)
                        </h4>
                        <div>
                            Member
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="len" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    <div class="image-div">
                        <img src="{{URL::asset('assets/images/barr.png')}}" draggable="false">
                    </div>
                    <div class="diet">
                        <h4>
                            BARR. CHINELO ANN NNADI NEE EZEME
                        </h4>
                        <div>
                            Member
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="len" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                    <div class="image-div">
                        <img src="{{URL::asset('assets/images/revpng.png')}}" draggable="false">
                    </div>
                    <div class="diet">
                        <h4>
                            Rev Canon Chukwudi <br> Emenike Ibegbu
                        </h4>
                        <div>
                            Member
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="len" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                    <div class="image-div">
                        <img src="{{URL::asset('assets/images/arc.png')}}" draggable="false">
                    </div>
                    <div class="diet">
                        <h4>
                            Arc Samuel Ekpelu Okagbue
                        </h4>
                        <div>
                            Member
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="len" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                    <div class="image-div">
                        <img src="{{URL::asset('assets/images/mrs.png')}}" draggable="false">
                    </div>
                    <div class="diet">
                        <h4>
                            Dr (Mrs) Nnonyelum Joy Igboebisi
                        </h4>
                        <div>
                            Member
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="len" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                    <div class="image-div">
                        <img src="{{URL::asset('assets/images/lady.png')}}" draggable="false">
                    </div>
                    <div class="diet">
                        <h4>
                            Lady Ify Nwokeabia
                        </h4>
                        <div>
                            Member
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- EXECUTIVES-->
<section class="executive">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="Our">
                    <div class="line"></div>
                    <span style="color: #1853B6;">EXECUTIVES</span>
                    <h2 style="color: #1853B6;">
                        Our Excos
                    </h2>
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
            <div class="col-lg-3">
                <button type="button" class="len" data-bs-toggle="modal" data-bs-target="#exampleModal10">
                    <div class="image-div">
                        <img src="{{URL::asset('assets/images/andrew.png')}}" draggable="false">
                    </div>
                    <div class="diet">
                        <h4>
                            Engr. ONUBOGU, Ebuka Andrew (MNSE)
                        </h4>
                        <div>
                            Publicity Secretary
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="len" data-bs-toggle="modal" data-bs-target="#exampleModal14">
                    <div class="image-div">
                        <img src="{{URL::asset('assets/images/alex.png')}}" draggable="false">
                    </div>
                    <div class="diet">
                        <h4>
                            Hon. Alex Emeka Ejindu JP
                        </h4>
                        <div>
                            Welfare Officer
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="len" data-bs-toggle="modal" data-bs-target="#exampleModal15">
                    <div class="image-div">
                        <img src="{{URL::asset('assets/images/Austin Ibeabuchi.png')}}">
                    </div>
                    <div class="diet">
                        <h4>
                            Mr. Austin Ibeabuchi
                        </h4>
                        <div>
                            Auditor
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="len" data-bs-toggle="modal" data-bs-target="#exampleModal16">
                    <div class="image-div">
                        <img src="{{URL::asset('assets/images/Maurice Chukwu.jpg')}}">
                    </div>
                    <div class="diet">
                        <h4>
                            Mr. Maurice Canice Chukwu
                        </h4>
                        <div>
                            Legal Adviser
                        </div>
                    </div>
                </button>
            </div>
        </div>
</section>
<!-- EXECUTIVES ENDS-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Board Of Trustees</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="model">
                            <img src="{{URL::asset('assets/images/chair.png')}}" draggable="false">
                            <h1>
                                Col. Samuel Chukwuemeka Agbanusi (Rtd)
                            </h1>
                            <p>
                                Chairman
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="layer">
                            <h2>
                                Brief Autobiography
                            </h2>
                            <p>
                                I am a Security Expert with over 35 years of cognate experience. My stay in the security space spans across 25 years of military service in the Nigerian Army & 15 years in the Corporate Security & Safety Management / Consultancy world.
                            </p>
                            <h2>
                                Education
                            </h2>
                            <p>
                                <b>
                                    Community Secondary School Obosi (1976)
                                </b> - Senior Prefect, House Prefect of then "House P" as well as the President of the Debating / Literary Society.
                            </p>
                            <p>
                                <b>
                                    Bsc. in Marketing from University of Nigeria, Enugu Campus in (1983) <br>
                                </b>
                                <b>
                                    Nigerian Defence Academy, Kaduna (1985) <br>
                                </b> - Commissioned a Second Lieutenant in December of the same year into the Infantry Corps.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal-1 -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Board Of Trustees</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="model">
                            <img src="{{URL::asset('assets/images/any.png')}}" draggable="false">
                            <h1>
                                Mr. Anyoku, Winston Obi (Nwajueze)
                            </h1>
                            <p>
                                Member
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="layer">
                            <h2>
                                Brief Autobiography
                            </h2>
                            <p>
                                My name is Winston Anyoku, born to Mr. Emmanuel (Nwajueze), and Mrs. Catherine Anyoku of
                                Umunweshi family of Ugamuma Obosi, in the year 1965. Gifted with melodious voice, and for the joy of
                                being in God’s presence, Winston grew up an active Chorister and Youth member of St. Marys Church,
                                Obosi and during this period. and I am a member of the Computer
                                Professionals of Nigeria (CPN). I presently work for ChampionX Oilfield Solutions, an American Oilfield
                                Technology Solution Multinational.
                            </p>
                            <p>
                                Apergy and ChampionX came together to form what is today
                                ChampionX, a global leader in oilfield technology solutions, chemistry programs and services, drilling
                                technologies, artificial lift solutions, and automation technologies for the oil and gas industry; here I
                                have served for over two decades, and counting with retirement in view. My current research for a Ph.D
                                is a Decision Support Systems solution for a Chemical-Based Pipeline corrosion treatment.
                            </p>
                            <p>
                                I am married and blessed with two young men and two young ladies, who altogether put smile on mine
                                face and heart to the glory of God.
                                Winston Anyoku, M.Sc, MCPN.
                            </p>
                            <h2>
                                Primary School Education
                            </h2>
                            <p>
                                Community Primary School, Obosi
                            </p>
                            <h2>
                                Secondary School Education
                            </h2>
                            <p>
                                Dennis Memorial Grammar
                                School, (DMGS) Onitsha
                            </p>
                            <h2>
                                Higher Education
                            </h2>
                            <p>
                            <ul>
                                <li>
                                    <b>University Of Nigeria Nsukka:</b>
                                    Bachelor of Science (B.Sc. degree)

                                </li>
                                <li>
                                    <b>University of Port Harcourt:</b>Computer Science
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal-2 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Board Of Trustees</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="model">
                            <img src="{{URL::asset('assets/images/barr.png')}}" draggable="false">
                            <h1>
                                BARR. Chinelo Ann Nnamdi Nee Ezeme
                            </h1>
                            <p>
                                Member
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="layer">
                            <h2>
                                Brief Autobiography
                            </h2>
                            <p>
                                A native of Nkpor in Idemili LGA.
                                Lives in Abuja, a Legal Practitioner. Politician.... Former Zonal Chairman, South East Geopolitical Zone
                                PDP. Former State Legal Adviser, FCT. PDP. Mindset Coach and Social Entrepreneur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal-3 -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Board Of Trustees</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="model">
                            <img src="{{URL::asset('assets/images/revpng.png')}}" draggable="false">
                            <h1>
                                Rev Canon Chukwudi Emenike Ibegbu
                            </h1>
                            <p>
                                Member
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="layer">
                            <h2>
                                Brief Autobiography
                            </h2>
                            <p>
                                Entered CSS, Obosi in 1970, graduated 1974. Post-secondary: Diploma in Journalism (NIJ) Lagos; B.Sc
                                (Journalism) Florida, USA; M.Div Crowther Graduate Theological College, Abeokuta, worked in various
                                electronic and print media in Nigeria and USA before being ordained priest in the Anglican Church.
                            </p>
                            <p>
                                Presently Rev Canon and Vicar, St Barnabas' Anglican Parish Church, Mafoluku, Oshodi, Lagos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal-4 -->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Board Of Trustees</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="model">
                            <img src="{{URL::asset('assets/images/arc.png')}}" draggable="false">
                            <h1>
                                Arc Samuel Ekpelu Okagbue
                            </h1>
                            <p>
                                Member
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="layer">
                            <h2>
                                Brief Autobiography
                            </h2>
                            <p>
                                Self employed businessman, married with four children.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal-5 -->
<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Board Of Trustees</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="model">
                            <img src="{{URL::asset('assets/images/lady.png')}}" draggable="false">
                            <h1>
                                Lady Ify Nwokeabia
                            </h1>
                            <p>
                                Member
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="layer">
                            <h2>
                                Brief Autobiography
                            </h2>
                            <p>
                                Born in Port Harcourt, in August 5th 1960 by late Mr Jonas and late Mrs Grace Azubike.Married to Sir KBC Nwokeabia.
                            </p>
                            <h2>
                                Primary School Education
                            </h2>
                            <p>
                                Baptist Day Primary school Port Harcourt
                            </p>
                            <h2>
                                Secondary School Education
                            </h2>
                            <p>
                                Community secondary school Obosi
                            </p>
                            <h2>
                                Had Higher Education
                            </h2>
                            <p>
                            <ul>
                                <li>
                                    Anambra collage of Education Awka
                                </li>
                                <li>
                                    University of Port Harcourt
                                </li>
                                <li>
                                    Second degree Nnamdi Azikiwe University Awka
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal-6 -->
<div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Board Of Trustees</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="model">
                            <img src="{{URL::asset('assets/images/mrs.png')}}" draggable="false">
                            <h1>
                                Dr (Mrs) Nnonyelum Joy Igboebisi
                            </h1>
                            <p>
                                Member
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="layer">
                            <h2>
                                Brief Autobiography
                            </h2>
                            <p>
                                <b>
                                    Date of Birth:
                                </b> 22nd November 1956 <br>
                                <b>
                                    Nationally:
                                </b> Nigerian (born in Obosi, Idemili North, Anambra State) <br>
                                <b>
                                    Marriage Status:
                                </b> Widow. <br>
                                <b>
                                    Educational Qualifications:
                                </b> WASC, TC11,
                                BA(Ed), M.ED, PHD <br>
                                <b>
                                    Working Experience:
                                </b> Primary School Teacher, Education Supervisor, UNICEF Desk Officer on Basic
                                Education. <br>
                                <b>
                                    Hobbies:
                                </b> Reading, Watching Football.
                            </p>
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
                                Engr. ONUBOGU, Ebuka Andrew (MNSE)
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
                                A COREN registered Engineering personnel and Member of The Nigerian Society of Engineers.
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
                            <img src="{{URL::asset('assets/images/alex.png')}}" draggable="false">
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
                                CEO Lexcall Nig LTD and RJ Trained Technical Solution, 49 New Mkt Road Onitsha. Secretary Ohanaeze
                                ndi Igbo Idemili North, VPG ODU(2003- 2007), President Uruowulu 2015-2019
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal-15 -->
<div class="modal fade" id="exampleModal15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img src="{{URL::asset('assets/images/Austin Ibeabuchi.png')}}" draggable="false">
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
<!-- Modal-16 -->
<div class="modal fade" id="exampleModal16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img src="{{URL::asset('assets/images/Maurice Chukwu.jpg')}}" draggable="false">
                            <h1>
                                Mr. Maurice Canice Chukwu
                            </h1>
                            <p>
                                Legal Adviser
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="layer">
                            <h2>
                                Brief Autobiography
                            </h2>
                            <p>
                                Maurice Chukwu, LLM (With Distinction), (With Best Performance Award, & Best Dissertation Award)
                                Brunel University London; LLB (Hons.) UNIZIK; BL (Hons.) Nigerian Law School.
                            </p>
                            <p>
                                Maurice is a multiple award-winning British Chevening Scholar with in-depth knowledge, expertise and
                                experience in the practice of Corporate Governance, Litigation, Legal Advisory, Statutory and Regulatory
                                Compliance, IP Law, Fintech Law, and IT Law.
                            </p>
                            <p>
                                He is the Founder of Centre for Global Tolerance & Human Rights.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--TRUSTED Ends-->
@endsection