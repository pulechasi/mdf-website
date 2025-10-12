@include('includes.header')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bg-light">

    <!-- Jumbotron -->
    <div class="py-5" style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.7),
            rgba(0, 0, 0, 0.1)
          ),
          url(app/img/army1.jpg);
          background-size: cover;
        height: 260px;
      ">
        <div class="container">
            <div class="row">
                <h1 class="text-white py-5 display-4">Press release</h1>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
    <div class="container ">
        <section id="blog">
            <div class="row">
                <div class="col-lg-8 col-md-8">

                    @foreach ($press_release as $press)
                    <div class="card">
                        <div class="card-body">
                            <!-- first row -->
                            <div class="row">

                                <div class="col-md-4">

                                    <figure style="position: relative;">
                                        <p style="position: absolute; background-color:green; color:white; padding-left:6px; padding-right:6px;">{{ strtoupper($press->category) }}</p>
                                        <img src="{{ $press->image }}" class="img-thumbnail" alt="Press Image">
                                    </figure>

                                </div>
                                <div class="col-md-4">
                                    <div class="content">
                                        <h5 class="card-title">
                                            <a href="{{ route('single.post', $press->slug) }}" class="text-success"
                                                style="text-decoration: none">{{ $press->title }}</a>
                                        </h5>
                                        <small>
                                            <p><a href="#" style="text-decoration: none"><span
                                                        class="text-info fa fa-calendar mr-2"></span>
                                                    <i class="text-success"></i>
                                                    {{ $press->created_at->toFormattedDateString() }}
                                                </a>
                                            </p>
                                        </small>

                                        <div class="pb-3">
                                            <p class="text-success">

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>



                <div class="col-md-4">
                    <div class="row mb-4">
                        <a href="#" class="btn btn-success ">News & Events</a>
                        <div class="card">

                            <div class="card-body">
                                <p class="mx-auto">
                                    Explore and follow recent news and events,the MDF takes part in and hosts many public events throughout the year.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <a href="#" class="btn btn-success ">Adverts</a>
                        <div class="card">

                            <div class="card-body">
                                <p class="mx-auto">
                                    Find published adverts whether vacancies or invitations for bids.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('includes.footer')
