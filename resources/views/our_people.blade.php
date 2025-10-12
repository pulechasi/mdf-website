@include('includes.header')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bg-light">

    <div class="py-5"
        style="
  background-image: linear-gradient(
    rgba(0, 0, 0, 0.7),
    rgba(0, 0, 0, 0.1)
    ),
    url(app/img/match.jpg);
    background-size: cover;
  height: 260px;
">
        <div class="container">
            <div class="row">
                <h1 class="text-white py-5 display-4">Our People</h1>
            </div>
        </div>
    </div>

    <!--BODY-->
    <div class="container ">
        <div class="row justify-content-evenly g-4">
            <div class="col-lg-10">
                <div class="">
                    <div class="justify-content-between">
                        <div class="py-5 mb-3">
                            {{--
                            <h4>OUR PEOPLE</h4> --}}
                            <p class="lead">In line with Section 4 of the Defence Force Act (2023), 
MDF is a Quad-Service comprising the Army, Air Force, Navy Force, and the National 
Service with the Defence Force Commander at the Joint Headquarters. 
The structure reflects the needs of the contemporary operational requirements. </p>
  <img src="{{ asset('app/img/our_people.jpg') }}" alt="" class="img-fluid" />

                          



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')
