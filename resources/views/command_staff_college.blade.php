@include('includes.header')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bg-light">


    <!-- Jumbotron -->

    <div class="py-5"
        style="
  background-image: linear-gradient(
      rgba(0, 0, 0, 0.7),
      rgba(0, 0, 0, 0.1)
    ),
    url(app/img/gala1.jpg);
    background-size: cover;
  height: 260px;
">
        <div class="container">
            <div class="row">
                <h1 class=" py-5 display-4 text-white">Command and Staff College</h1>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="service">
            <p class=" lead" contenteditable="true">
                {{ $staticText['about_college']->value }}
            </p>
            <div class="">
                @auth
                    @if (optional(Auth::user())->role == 0)
                        <form method="POST" action="{{ route('updateText', 'about_college') }}">
                            @csrf
                            @method('PUT')
                            <textarea class="form-control" name="about_college" rows="5">{{ $staticText['about_college']->value }}</textarea>
                            <button type="submit" class="btn btn-primary">Update About Text</button>
                        </form>
                    @endif
                @endauth
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row  ">
            <div class="col-lg-4">
                <div class="flex-container">
                    <div class="image-container position-relative">
                        <img src="{{ asset('app/img/static_pages_images/' . $images['staffcollage']->filename) }}"
                            style="width:300px;height:300px;"
                            class="rounded-circle img-responsive mx-auto d-block d-md-block" alt="sample image">
                        @auth
                            @if (optional(Auth::user())->role == 0)
                                <form action="{{ route('update.image', 'staffcollage') }}" method="POST"
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
            </div>
            <div class="col-lg-8 py-5">
                <h4 class="display-4 text-end ">Vision</h4>
                <div class="">

                    <p class="lead">{{ $staticText['college_vision']->value }}</p>
                </div>

                <div class="">
                    @auth
                        @if (optional(Auth::user())->role == 0)
                            <form method="POST" action="{{ route('updateText', 'college_vision') }}">
                                @csrf
                                @method('PUT')
                                <textarea class="form-control" name="college_vision" rows="5">{{ $staticText['college_vision']->value }}</textarea>
                                <button type="submit" class="btn btn-primary">Update Vision Text</button>
                            </form>
                        @endif

                    @endauth

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-lg-8 py-5">
                <h4 class="display-4 text-start ">Mission</h4>
                <div class="">
                    <p class="lead ">
                        {{ $staticText['college_mission']->value }}
                    </p>
                </div>
                <div class="">
                    @auth
                        @if (optional(Auth::user())->role == 0)
                            <form method="POST" action="{{ route('updateText', 'college_mission') }}">
                                @csrf
                                @method('PUT')
                                <textarea class="form-control" name="college_mission" rows="5">{{ $staticText['college_mission']->value }}</textarea>
                                <button type="submit" class="btn btn-primary">Update Mission Text</button>
                            </form>
                        @endif

                    @endauth

                </div>
            </div>

            <div class="col-lg-4 py-4">
                <div class="flex-container">
                    <div class="image-container position-relative">
                        <img src="{{ asset('app/img/static_pages_images/' . $images['staff1']->filename) }}"
                            style="width:300px;height:300px;" alt=""
                            class="rounded-circle img-responsive mx-auto d-none d-md-block" alt="sample image">
                        @auth

                            @if (optional(Auth::user())->role == 0)
                                <form action="{{ route('update.image', 'staff1') }}" method="POST"
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
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row  ">
            <div class="col-lg-4 py-5">
                <div class="flex-container">
                    <div class="image-container position-relative">
                        <img src="{{ asset('app/img/static_pages_images/' . $images['staff']->filename) }}"
                            style="width:300px;height:300px; background-size: cover; " alt=""
                            class="rounded-circle img-responsive mx-auto d-block d-md-block">
                        @auth
                            @if (optional(Auth::user())->role == 0)
                                <form action="{{ route('update.image', 'staff') }}" method="POST"
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
            </div>
            <div class="col-lg-8 py-5">
                <h4 class="display-4 text-end ">Core Values</h4>
                <div class="">
                    <p class="lead">
                        {{ $staticText['college_core_values']->value }}
                    </p>
                </div>
                <div class="">
                    @auth
                        @if (optional(Auth::user())->role == 0)
                            <form method="POST" action="{{ route('updateText', 'college_core_values') }}">
                                @csrf
                                @method('PUT')
                                <textarea class="form-control" name="college_core_values" rows="5">{{ $staticText['college_core_values']->value }}</textarea>
                                <button type="submit" class="btn btn-primary">Update Values Text</button>
                            </form>
                        @endif

                    @endauth

                </div>
                <div class="text-align-right mx-5">
                    <ul>
                        <div class="row">
                            <div class="col-md-6 lead">
                                <li>Integrity</li>
                                <li>Good Leadership</li>
                                <li>Patriotism</li>
                            </div>
                            <div class="col-md-6 lead">
                                <li>High Standards of Discipline</li>
                                <li>Duty</li>
                                <li>Excellence</li>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    @include('includes.footer')
