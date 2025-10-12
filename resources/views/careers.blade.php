@include('includes.header')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bg-light">

    <!-- Jumbotron -->

    <!-- <div
  class="jumbotron bg-image p-5 d-flex align-items-end shadow-1-strong rounded mb-5 text-white fw-bold"
  style="background-image: url('img/project31.jpg');"
><p>
  <h1 class="mb-3 h2" >Careers in MDF</h1>

 </p>
</div> -->
    <!-- Jumbotron -->

    <div class="py-5" style="
      background-image: linear-gradient(
          rgba(0, 0, 0, 0.7),
          rgba(0, 0, 0, 0.1)
        ),
        url(app/img/project31.jpg);
        background-size: cover;
      height: 260px;
    ">
        <div class="container">
            <div class="row">
                <h1 class="text-white lead display-4">Careers in the Malawi Defence Force</h1>

                <p class="text-center text-white">Whether you are joining as a soldier or an officer,
                    joining begins
                    with
                    submitting an application
                    following an advertisement
                    which the institution releases in the mainstream media.</p>
            </div>
        </div>
    </div>

    <!--BODY-->
    <div class="container py-4">


        <div class="row bg-light">
            <div class="col-lg-8 col-sm-12 py-4 mb-4">

                <h4 class="text-center display-4">Joining the Malawi Defence Force
                </h4>

                <p class="text-center lead">To join the Malawi Defence Force, you need to meet a set of basic
                    requirements focusing on your
                    age,
                    nationality, academic
                    qualifications, and health and fitness.</p>


            </div>


            <div class="col-4 col-md-4 py-2">
                <img src="{{ asset('app/img/careers.jpg') }}" class="rounded-circle mx-auto d-none d-md-block "
                    style="width: 300px; height: 300px" alt="" />
            </div>

        </div>
        <div class="row mb-4 bg-secondary py-4">

            <div class="col-lg-4 col-md-4 mx-auto  py-2">
                <img src="{{ asset('app/img/careers-3.jpg') }}" class="rounded-circle mx-auto d-block d-md-block "
                    style="width: 300px; height: 300px ; background-size: cover; " alt="" />
            </div>

            <div class="col-lg-8 col-sm-12 mb-2">
                <div>
                    <h4 class="text-center display-4  text-white">Joining as a regular Soldier
                    </h4>

                    <p class="text-center lead text-white ">To be recruited as a regular
                        soldier in the MDF, one has
                        to be a
                        Malawian
                        citizen without any
                        criminal
                        record. Height should
                        not be less than 165cm for men and 158cm for women, physically, mentally and medically fit,
                        be
                        aged
                        between 18 and 24,
                        single and without children. Must possess a minimum qualification of Malawi School
                        Certificate
                        of
                        Education (MSCE) and be
                        prepared to undergo an intensive basic military training.</p>

                </div>

            </div>

        </div>
        <div class="row bg-light">
            <div class="col-lg-8 col-sm-12 py-4 mb-4">

                <h4 class="text-center display-4">Joining as an Officer
                </h4>

                <p class="text-center lead">
                    If you wish to pursue a career as an officer, the requirements are similar to those of regular
                    soldiers with some differences in age and qualifications. All applying as Officer Cadets should be
                    aged between 18 and 28 and have a minimum qualification of a
                    First Degree from a recognised and accredited Institution of higher learning.
                </p>


            </div>


            <div class="col-4 col-md-4 py-2">
                <img src="{{ asset('app/img/uploads.jpg') }}" class="rounded-circle mx-auto d-none d-md-block "
                    style="width: 300px; height: 300px" alt="" />
            </div>

        </div>
        <!--Mini-jumbotron-->
        <div class="mini-jumbotron bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white fw-bold"
            style="background-image: url('app/img/Project21.jpg');  background-size: cover; ">
            <h1 class="mb-3 h2 text-white display-4 ">Jobs Available</h1>
            <div class="text-center">
                <p class="lead">For currently available vacancies, <a href="{{route('adverts.page')}}"
                        class="text-white">
                        <i class="lead">Click Here.</i> </a></p>
            </div>
        </div>

    </div>
    </div>



    @include('includes.footer')
