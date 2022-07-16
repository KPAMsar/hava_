

@include('includes.header')

<section class="wow fadeIn pb-0 position-relative parallax sm-background-image-center" data-stellar-background-ratio="0.5" style="background-image:url('img/bg.jpg');">
    <div class="container">

        <div class="row justify-content-center contact-us-padding">
            <div class="col-12 col-xl-8 col-lg-9 text-extra-dark-gray text-center last-paragraph-no-margin">
                <h5 class="alt-font  font-weight-600">Messages </h5>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($message as $key => $msg)
                    <tr>
                        <th scope="row">{{$key + 1}}</th>
                        <td>{{$msg->name}}</td>
                        <td>{{$msg->email}}</td>
                        <td>{{$msg->message}}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
            <!---phone no end --->
<br><br><br><br>
            <!---send us a message start --->

        </div>
    </div>
</section>

@include('includes.footer')