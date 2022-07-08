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
                    <div class="line-rule">
                        @includeIf('layouts.error_template')
                    </div>
                    <form>
                        <div class="uplift">
                            <div class="circle"></div>
                            <p class="move">
                                Are you an alumni of C.S.S Obosi ?
                            </p>
                            <!-- <div class="moving">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="are_you_an_alumni" value="Yes" id="flexCheckDefault" required>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="are_you_an_alumni" value="No" id="flexCheckDefault" required>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        No
                                    </label>
                                </div>
                            </div>
                            <hr class="vertical"> -->
                        </div>
                        <div class="uplift">
                            <div class="circle"></div>
                            <p class="move">
                                Are you willing to actively participate in the activities of C.S.S Obosi Alumni Association ?
                            </p>
                            <!-- <div class="moving">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="are_you_willing_to_actively_participate" value="Yes" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="are_you_willing_to_actively_participate" value="No" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        No
                                    </label>
                                </div>
                            </div>
                            <hr class="vertical"> -->
                        </div>
                        <div class="uplift">
                            <div class="circle"></div>
                            <p class="move">
                                Are you willing to donate, contribute and pay dues required by the association ?
                            </p>
                            <!-- <div class="moving">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="are_you_willing_to_donate" value="Yes" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="are_you_willing_to_donate" value="No" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        No
                                    </label>
                                </div>
                            </div>
                            <hr class="vertical"> -->
                        </div>
                        <div class="uplift">
                            <div class="circle"></div>
                            <p class="move">
                                Do you pledge to abide by the C.S.S Obosi Alumni Constitution ?
                            </p>
                            <!-- <div class="moving">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="do_you_pledge" value="Yes" id="flexCheckDefault" required>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="do_you_pledge" value="No" id="flexCheckDefault" required>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        No
                                    </label>
                                </div>
                            </div>
                            <hr class="vertical"> -->
                        </div>
                        <button type="button" style="margin-top: 3rem" class="lenn" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                            Proceed To Become A Member
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Membership Eligibility Ends-->

<!-- Modal-7 -->
<div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Membership Eligibility Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="login" method="POST" action="{{ route('membership.eligibility') }}">
                    @csrf
                    <div class="row">
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="surname">Surname</label>
                                    <input type="text" class="form-control" id="surname" name="surname" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="second_name">Second Name</label>
                                    <input type="text" class="form-control" id="second_name" name="second_name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="whatsapp_number">Whatsapp Number</label>
                                    <input type="text" class="form-control" id="whatsapp_number" name="whatsapp_number" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="graduation_set_class">Graduation Set Class</label>
                                    <input type="text" class="form-control" id="graduation_set_class" name="graduation_set_class" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="state_of_origin">State of Origin</label>
                                    <input type="text" class="form-control" id="state_of_origin" name="state_of_origin" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="occupation">Occupation</label>
                                    <input type="text" class="form-control" id="occupation" name="occupation" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4 text-center">
                            <button class="send" style="color: #fff;" type="submit" class="lenn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection