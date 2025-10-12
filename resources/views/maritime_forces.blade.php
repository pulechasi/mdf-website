@include('includes.header')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bg-light">

    <div class="py-5" style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.7),
          rgba(0, 0, 0, 0.1)
          ),
          url(app/img/Navy_Divers.jpg);
          background-size: cover;
        height: 260px;
      ">
        <div class="container">
            <div class="row">
                <h1 class="text-white py-5 display-4">Navy Force</h1>
            </div>
        </div>
    </div>

    <!--BODY-->
    <div class="container">
        <div class="row justify-content-evenly g-4">
            <div class="col-lg-12">
                <div class="">
                    <div class="justify-content-between">
                        <div>
                            <p class="lead pt-5">
                                One MDF Service specialised in both land and water operations (amphibious)

                            </p>
                        </div>
                        <div class=" mb-3">
                            <div class="row">
                                <div class="col-lg-4 py-4">
                                    <div class="flex-container">
                                       
                                            <div class="circle-container img-circle center-block mx-auto">
                                                <img src="{{ asset('app/img/Navy.jpg') }}" class="img-responsive" alt="Image description" />
                                            </div>
                                    </div>
                                </div>

                                <div class="col-lg-8 py-1">
                                    <h3 class=" display-4 text-end">VISION</h3>
                                    <div class="mx-auto">
                                        <p class="lead">
                                            To have a well-trained force equipped with seaworthy
                                            watercraft and sound logistical support.
                                        </p>
                                        <br />

                                        <h3 class=" display-4 text-end">MISSION STATEMENT</h3>

                                        <p class="lead">
                                            To maintain, train and provide a Combat ready Navy Force capable of dominating the Area of
                                            Responsibility, deterring aggression and maintaining
                                            freedom of all waters in Malawi.
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <div class="row py-3">
                                <div class="col-lg-12">
                                    <h3 class="display-4">
                                        FUNDAMENTAL ROLES
                                    </h3>
                                    <div class="col-12 container">
                                        <ul class="list-unordered row lead">
                                            <li class="list-item col-md-6 ">
                                                To protect the territorial waters of Malawi and the
                                                adjacent land against external interferences
                                            </li>
                                            <li class="list-item col-md-6 ">
                                                To assist the Civil Authorities in maintenance of law
                                                and order
                                            </li>
                                            <li class="list-item col-md-6 ">
                                                To support land forces operating along Lake Malawi
                                            </li>
                                            <li class="list-item col-md-6 ">
                                                To conduct Counter Drug/human trafficking ops
                                            </li>

                                            <li class="list-item col-md-6 ">
                                                To conduct humanitarian operations during disaster
                                            </li>
                                        </ul>
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
