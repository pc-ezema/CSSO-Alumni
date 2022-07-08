@extends('layouts.frontend')

@section('page-content')
<!--About Breadcrumb-->
<section class="Breadcrumb-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Contact Us</h1>
                <p><a href="/">Home</a> <i class="bi bi-arrow-left-right"></i> Contact Us</p>
            </div>
        </div>
    </div>
</section>
<!--About Breadcrumb Ends-->

<!--CONTACT-US-->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="Textarea">
                    <h1>
                        Get In Touch
                    </h1>
                    <p>
                        We would love to hear from you. For more information about our programs or our organization, please contact us using the form below.
                    </p>
                </div>
                <div class="Visit">
                    <form class="login">
                        <div class="row">
                            <!--Name-->
                            <div class="col-lg-12">
                                <label>First Name</label>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <i class="bi bi-person"></i>
                                        <input type="text" placeholder="First name" name="firstname" class="input" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label>Last Name</label>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <i class="bi bi-person"></i>
                                        <input type="text" placeholder="Last name" name="firstname" class="input" required>
                                    </div>
                                </div>
                            </div>
                            <!--Phone Number-->
                            <div class="col-lg-12">
                                <label>Phone Number</label>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <i class="bi bi-phone"></i>
                                        <input type="tel" placeholder="Enter your phone number " name="lastname" class="input" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label>Email</label>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <i class="bi bi-envelope"></i>
                                        <input type="text" placeholder="Email address" name="lastname" class="input" required>
                                    </div>
                                </div>
                            </div>
                            <!--Message-->
                            <div class="col-lg-12 mb-4">
                                <label>Message</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea required class="input" cols="20" placeholder="Enter your message." rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <button> <a href="#">Send Message </a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="property">
                    <div class="baby">
                        <img src="{{URL::asset('assets/images/phone.png')}}" draggable="false" alt="">
                        <h4>
                            Phone Number
                        </h4>
                        <div>
                            +234 8130000309
                        </div>
                        <div>
                            +234 8033796762
                        </div>
                    </div>
                    <div class="baby">
                        <img src="{{URL::asset('assets/images/emaill.png')}}" draggable="false" alt="">
                        <h4>
                            Email Address
                        </h4>
                        <div>
                            info@cssoalumni.org
                        </div>
                    </div>
                    <div class="baby">
                        <img src="{{URL::asset('assets/images/location.png')}}" draggable="false" alt="">
                        <h4>
                            Address
                        </h4>
                        <div>
                            Mike Ajegbo Road,Obosi,
                            Idemili North Local Government Area, Anambra State.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CONTACT-US Ends-->

<!--MAP-->
<section class="map">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text">
                    <p>
                        Locate Us Here
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1014756.6903908219!2d2.976542089307389!3d6.535154865265881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf2bae227550d%3A0xe771ad7f1bbe89d6!2sLagos!5e0!3m2!1sen!2sng!4v1639066038889!5m2!1sen!2sng" width="100%" class="mapp" height="350" style="border:1px solid #fff; border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>

                </div>
            </div>
        </div>
    </div>
</section>
<!--MAP Ends-->
@endsection