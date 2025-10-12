@include('includes.header')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bg-light">

    <div class="py-5"
        style="
  background-image: linear-gradient(
    rgba(0, 0, 0, 0.7),
    rgba(0, 0, 0, 0.1)
    ),
    url(app/img/project3.jpg);
    background-size: cover;
  height: 260px;
">
        <div class="container">
            <div class="row">
                <h1 class="text-white py-5 display-4">Malawi Army</h1>
            </div>
        </div>
    </div>

    <!--BODY-->
    <div class="container ">
        <div class="row justify-content-evenly g-4">
            <div class="col-lg-9">
                <div class="">
                    <div class="justify-content-between">
                        <div class="pt-5">
                            <div class="pt-5">
                                <h3>MALAWI ARMY (LAND FORCES)

                                    </h3>
                                    <div class="container">
                                        <ul class="list-unordered row lead">
                                            <li class="list-item  "> service for Infantry or Ground Troops</li>
                                            <li class="list-item  ">Has Infantry Brigades and battalions</li>
                                        </ul>
                                    </div>



                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 d-block d-sm-block py-3">

                                    {{-- <img src="{{ asset('app/img/project3.jpg') }}" style="width:270px;height:275px;"
                                        alt="" class="rounded-circle d-block d-sm-block mx-auto"> --}}

                                    <div class="image-container position-relative">
   @if (isset($images['land-forces']) && !empty($images['land-forces']->filename))
                                    <img src="{{ asset('app/img/static_pages_images/' . $images['land-forces']->filename) }}"
                                         style="width:270px;height:275px;" alt="Land Forces"
                                         class="rounded-circle d-block mx-auto">
                                @endif
                                        @auth
                                            @if (optional(Auth::user())->role == 1)
                                                <form action="{{ route('update.image', 'land-forces') }}" method="POST"
                                                    enctype="multipart/form-data" class="image-overlay">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="d-flex align-items-center">
                                                        <input type="file" name="new_image" class="form-control me-2">
                                                        <button type="submit" class="btn btn-primary">Update Image</button>
                                                    </div>
                                                </form>
                                            @endif
                                        @endauth
                                    </div>

                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    
                                     <h3 class=" display- text-start">VISION</h3>
                                    <div class="">
                                        <p class="lead">Our Vision is to have a well trained land force with latest fighting and combat capabilities that can swiftly respond to contemporary emerging threat and security concerns with sound logistical support .</p>
                                        <br>

                                    </div>

                                    <div class="">

                                        <h3 class=" display- text-start">MISSION STATEMENT</h3>
                                        <div class="">
                                            <p class="lead">To conduct military operations in defence of territorial
                                                integrity,
                                                sovereignty and constitutional order of
                                                the Republic of Malawi and its national interests</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class=" display- text-start">FUNDAMENTAL ROLES</h3>
                                    <div class="">
                                        <div class="container">
                                            <ul class="list-unordered row lead">
                                                <li class="list-item col-md-12 ">Defend Malawi Sovereignty</li>
                                                <li class="list-item col-md-12 ">Protect Malawians</li>
                                                <li class="list-item col-md-12 ">Provide support to Civil authorities in
                                                    times
                                                    of National emergencies</li>
                                                <li class="list-item col-md-12 ">Protect Malawi's national interests
                                                </li>

                                                <li class="list-item col-md-12 ">Maintain law and order in support of
                                                    Malawi
                                                    Police Services</li>

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
    </div>

    @include('includes.footer')
