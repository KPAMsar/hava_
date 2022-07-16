@include('includes.header')
<section class="wow fadeIn pb-0 position-relative parallax sm-background-image-center" data-stellar-background-ratio="0.5" style="background-image:url('img/bg.jpg');">
    <div class="container">
        @if(Session::has('success'))
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
        @endif
        <div class="row justify-content-center contact-us-padding">
            <div class="col-12 col-xl-8 col-lg-9 text-extra-dark-gray text-center last-paragraph-no-margin">
                <h5 class="alt-font  font-weight-600">CONTACT US</h5>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!---ADDRESS start --->

                <div class="row justify-content-left">
                    <div class="col-12 col-xl-8 col-lg-9 text-extra-dark-gray text-center last-paragraph-no-margin">
                        <h5 class="alt-font  font-weight-600">Address:</h5>
                    </div>
                </div>
                <div class="row justify-content-left">
                    <div class="col-12 col-xl-9 col-lg-9 text-extra-dark-gray margin-six-bottom  text-center last-paragraph-no-margin">
                        <p class="width-100 mx-auto text-medium font-weight-400 d-inline-block sm-width-100">
                            3rd Avenue, Lokogoma, Abuja Nigeria.
                        </p>
                    </div>
                </div>
                <!---ADDRESS end--->
                <!---email start --->
                <div class="row justify-content-left">
                    <div class="col-12 col-xl-8 col-lg-9 text-extra-dark-gray text-center last-paragraph-no-margin">
                        <h5 class="alt-font  font-weight-600">Phone no:</h5>

                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-9 col-lg-9 text-extra-dark-gray margin-six-bottom   last-paragraph-no-margin">
                        <p class="width-100 mx-auto text-medium font-weight-400 d-inline-block sm-width-100" style="text-align:center; ">
                            +23481671408543

                        </p>
                    </div>
                </div>
                <!---email end --->
                <!---phone no start --->
                <div class="row justify-content-left">
                    <div class="col-12 col-xl-8 col-lg-9 text-extra-dark-gray text-center last-paragraph-no-margin">
                        <h5 class="alt-font  font-weight-600">Email:</h5>
                    </div>
                </div>
                <div class="row justify-content-left">
                    <div class="col-12 col-xl-9 col-lg-9 text-extra-dark-gray margin-six-bottom  text-center last-paragraph-no-margin">
                        <p class="width-100 mx-auto text-medium font-weight-400 d-inline-block sm-width-100">
                            info@ahavadevinit.org
                        </p>
                    </div>
                </div>
            </div>
            <!---phone no end --->

            <!---send us a message start --->
            <div class="col-md-6 ">
                <div class="container partners margin-six-bottom" id="volunteer">

                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-10 col-lg-10 text-extra-dark-gray margin-two-bottom text-center last-paragraph-no-margin">
                            <h5 class="alt-font  font-weight-600">Send us a message</h5>

                        </div>
                    </div>
                    <div>
                        <div>
                            <form action="{{ route('contact')}}" method="post">
                                @csrf
                                <div class="">
                                    <div class="col-12">
                                        <div id="success-project-contact-form" class="mx-0"></div>
                                    </div>
                                    <div>
                                        <input type="text" name="name" placeholder="Enter your name " class="big-input" required>
                                    </div>

                                    <div>
                                        <input type="email" name="email" placeholder="Enter your Email " class="big-input" required>
                                    </div>
                                    <div>
                                        <textarea name="message" placeholder="Enter your message " rows="4" class="big-textarea" required></textarea>
                                    </div>
                                    <div class=" text-center sm-margin-30px-bottom md-margin-30px-bottom">
                                        <input type="submit" class="btn btn-transparent-deep-pink btn-large btn-rounded margin-20px-top" value="Send" name="send_volunteer">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@include('includes.footer')