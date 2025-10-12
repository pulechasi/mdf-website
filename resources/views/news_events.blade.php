@include('includes.header')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bg-light">

    <!-- Jumbotron -->
    <div class="py-3 mb-0"
        style="
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
                <h1 class="text-white py-5 display-4">News and Events</h1>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
    <div class="container ">
        <section id="">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    @foreach ($news_events as $event)
                        <div class="card">
                            <div class="card-body">
                                <!-- first row -->
                                <div class="row">

                                    <div class="col-md-4">

                                        <figure style="position: relative">
                                            <p
                                                style="position: absolute; background-color:green; color:white; padding-left:6px; padding-right:6px;">
                                                {{ strtoupper($event->category) }}</p>

                                            <div class="image-container">
                                                <img src="{{ $event->image }}" class="img-thumbnail" alt="Post Image">
                                                <div class="caption">
                                                    <span class="animated-text">{{ $event->title }}</span>
                                                </div>
                                            </div>
                                        </figure>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="content">
                                            <h5 class="card-title">
                                                <a href="{{ route('single.post', $event->slug) }}" class="text-success"
                                                    style="text-decoration: none">{{ $event->title }}</a>
                                            </h5>
                                            <small>
                                                <p><a href="#" style="text-decoration: none"><span
                                                            class="text-info fa fa-calendar mr-2"></span>
                                                        <i class="text-success"></i>
                                                        {{ $event->created_at->toFormattedDateString() }}
                                                    </a>
                                                </p>
                                            </small>

                                            <div class="pb-3">
                                                <p class="" style="text-decoration: none">
                                                    {{ str_replace('&nbsp;', ' ', str_limit(strip_tags($event->content), 100)) }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>


                <div class="col-lg-4 col-md-4">
                    <div class="row mb-4">
                        <a href="{{ route('press.release') }}" class="btn btn-success ">Press Release</a>
                        <div class="card">

                            <div class="card-body">
                                <p class="mx-auto">
                                    Get available press release from MDF
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <a href="{{ route('adverts.page') }}" class="btn btn-success ">Adverts</a>
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
