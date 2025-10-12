@include('includes.header')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bg-light">

    <div class="py-5" style="
  background-image: linear-gradient(
    rgba(0, 0, 0, 0.7),
          rgba(0, 0, 0, 0.1)
    ),
    url(app/img/airforces.jpeg);
    background-size: cover;
  height: 260px;
">
        <div class="container">
            <div class="row">
                <h1 class="text-white py-5 display-4">Malawi Air Force</h1>
            </div>
        </div>
    </div>



    <!--BODY-->
    <div class="container ">
        <div class="row justify-content-evenly g-4">
            <div class="col-lg-12">
                <div class="">
                    <div class="justify-content-between">
                        <div class=" py-5 mb-3">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="flex-container">
                                      
                                             <div class="circle-container img-circle center-block mx-auto">
                                                <img src="{{ asset('app/img/airforces.jpeg') }}" class="img-responsive" alt="Image description" />
                                            </div>
                                    </div>
                                </div>

                                <div class="col-lg-8 col-md-12 col-sm-12 py-4">
                                    <h3 class=" display-4 text-end">VISION</h3>
                                    <div class="">
                                        <p class="lead">To have a patriotic and highly professional Air Force, capable
                                            of defending
                                            Malawi
                                            air space, territorial integrity and national interests.</p>
                                        <br>

                                        <h3 class=" display-4 text-end">MISSION STATEMENT</h3>
                                        <div>
                                            <p class="lead">Defend the country against external air threats, support the
                                                MDF in the
                                                maintenance of internal order and provide the community with essential
                                                services while maintaining a professional, efficient and cost-effective
                                                service. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class=" row">
                                <div class="col-12">
                                    <h3 class="display-4 py-4 text-left mb-lg-0">FUNDAMENTAL ROLES</h3>

                                    <p class="lead mb-lg-0">To have a patriotic and highly professional Air Force,
                                        capable
                                        of
                                        defending Malawi
                                        air space, territorial integrity and national interests.</p>
                                    <ul class="list-unordered row lead">
                                        <li class="list-item col-md-6 ">Integrity</li>
                                        <li class="list-item col-md-6 ">Good Leadership</li>
                                        <li class="list-item col-md-6 ">Patriotism</li>
                                        <li class="list-item col-md-6 ">Excellence</li>

                                        <li class="list-item col-md-6 ">High Standards of Discipline</li>
                                        <li class="list-item col-md-6 ">Duty</li>
                                        <li class="list-item col-md-6 ">Excellence</li>
                                        <li class="list-item col-md-6 ">Excellence</li>
                                    </ul>
                                </div>





                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @include('includes.footer')
