@include('includes.header')
<section class="wow fadeIn pb-0 position-relative parallax sm-background-image-center" data-stellar-background-ratio="0.5" style="background-image:url('img/bg.jpg');">
    <div class="container">

        <div class="row justify-content-center contact-us-padding">
            <div class="col-12 col-xl-8 col-lg-9 text-extra-dark-gray text-center last-paragraph-no-margin">
                <h5 class="alt-font  font-weight-600">Volunteers </h5>
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
                        <th scope="col">Phone </th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($volunteer as $key=> $person)
                   <tr>
                        <th scope="row">{{$key + 1}}</th>
                        <td>{{$person->name}}</td>
                        <td>{{$person->phone}}</td>
                        <td>{{$person->email}}</td>
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