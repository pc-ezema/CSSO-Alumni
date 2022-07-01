@extends('layouts.frontend')

@section('page-content')
<!--Member Breadcrumb-->
<section class="Breadcrumb-Member">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Become A Member </h1>
                <p><a href="/">Home</a> <i class="bi bi-arrow-left-right"></i>Become A Member </p>
            </div>
        </div>
    </div>
</section>
<!--Member Breadcrumb Ends-->

<!--Membership Eligibility-->
<section class="Eligibility">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="legit">
                    <h1>
                        Membership Eligibility
                    </h1>
                    <div class="uplift">
                        <div class="circle"></div>
                        <p class="move">
                            Are you an alumni of C.S.S Obosi ?
                        </p>
                        <div class="moving">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    No
                                </label>
                            </div>
                        </div>
                        <hr class="vertical">
                    </div>
                    <div class="uplift">
                        <div class="circle"></div>
                        <p class="move">
                            Are you willing to actively participate in the activities of C.S.S Obosi Alumni Association ?
                        </p>
                        <div class="moving">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    No
                                </label>
                            </div>
                        </div>
                        <hr class="vertical">
                    </div>
                    <div class="uplift">
                        <div class="circle"></div>
                        <p class="move">
                            Are you willing to donate, contribute and pay dues required by the association ?
                        </p>
                        <div class="moving">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    No
                                </label>
                            </div>
                        </div>
                        <hr class="vertical">
                    </div>
                    <div class="uplift">
                        <div class="circle"></div>
                        <p class="move">
                            Do you pledge to abide by the C.S.S Obosi Alumni Constitution ?
                        </p>
                        <div class="moving">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    No
                                </label>
                            </div>
                        </div>
                        <hr class="vertical">
                    </div>
                    <button>
                        <a href="/login">
                            Proceed To Become A Member
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Membership Eligibility Ends-->
@endsection