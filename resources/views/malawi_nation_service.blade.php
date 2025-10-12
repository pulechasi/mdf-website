@include('includes.header')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bg-light">

    <div class="py-5"
        style="
  background-image: linear-gradient(
    rgba(0, 0, 0, 0.7),
    rgba(0, 0, 0, 0.1)
    ),
    url(app/img/mns2.jpeg);
    background-size: cover;
  height: 260px;
">
        <div class="container">
            <div class="row">
                <h1 class="text-white py-5 display-4">Malawi National Service</h1>
            </div>
        </div>
    </div>

    <!--BODY-->
    <div class="container ">

                                    <div class="py-5">
                                       <h2 class="lead">Malawi National Service acts as a reserve force for the Army, Air Force, and Navy Force and performs other functions as prescribed.
                                    </h2>
      <div class="row pt-5">
                                <div class="col-lg-4 ">
                                    <div class="flex-container">
                                        {{-- <img src="{{ asset('app/img/maritime-1.jpg') }}" style="width: 300px; height: 300px"
                                            alt=""
                                            class="rounded-circle border border-success d-block d-sm-block mx-auto" /> --}}

                                            <div class="  center-block mx-auto pt-5">
                                                <img src="{{ asset('app/img/mns.jpeg') }}" class="img-responsive" alt="Image description" />
                                            </div>
                                    </div>
                                </div>

                                <div class="col-lg-8 py-1">
                                    <h3 class=" display-4 text-end">VISION</h3>
                                    <div class="mx-auto">
                                        <p class="lead">
                                         Our Service shall be a "fit for purpose" organization with requisite human expertise and suitably equipped for the execution of developmental and production oriented as well as internal security tasks in contribution to the fulfilment of Malawi Defence Force's obligation to the achievement of human security for the Republic of Malawi.

                                        </p>
                                          <p class="lead">

                                        Our professional posture shall be characterized by a holistic human security centric approach nested in the traditional Malawi Defence Forces's  apolitical and equality nature.
                                        </p>
                                        <br />


                                    </div>
                                </div>
                                <div class="col-lg-12 pt-5">
                                    <h3 class=" display-4 text-start">MISSION STATEMENT</h3>

                                    <p class="lead">
                                       To conduct Human Security operations in the contribution to the fulfilment of Malawi Defence Forces's defence of territorial integrity, sovereignty and constitutional order of the Republic of Malawi and its National Interests.
                                    </p>
                                </div>
                            </div>
        <div class="row justify-content-evenly g-4">
            <div class="col-lg-12">
                <div class="">
                    <div class="justify-content-between">
                        <div class="py-5 mb-3">
                            <div class="mb-5">



            <div class="col-lg-6">
                <div class="card h-100">
                    <h5 class="card-title py-3">
                        AGRICULTURE PRODUCTION COMPANY LIMITED
                    </h5>
                    <img src="{{ asset('app/img/agriculture.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">
                            • Produce and supply food stuffs/ rations for service members and to be self-sustaining <br>
                            • Ease pressure on Budgetary allocation for the military specifically on rations <br>
                            • Registered for purposes of commercializing the Agricultural Production Unit <br>
                            • Choma Farm in Mzuzu, Kalewa Goat Farm in Nkhota-Kota, Kasungu Crop Farm in Kasungu, and
                            Gada Farm in Mchinji.

                        </p>
                    </div>
                </div>
            </div>
                                    </div>



                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')
