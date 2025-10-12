@include('includes.header')

<body>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 col-lg-8">
                    <div class="post">
                        <div class="row">
                            {{-- <div class="col-md-3 post-date">
                                <p>
                                    Started on:
                                    <a href="#" style="text-decoration: darkslategrey">
                                        {{ $operation->created_at->toFormattedDateString() }}
                                    </a>

                                </p>
                            </div> --}}
                            <div class="col-md-12 post-title">
                                <a href="#" style="text-decoration: none">
                                    <h4 class="display-4">{{ $operation->name }}</h4>
                                </a>

                            </div>

                        </div>
                        <div class="pt-2 py-2"></div>
                        						<div style="width: 700px; height: 400px; overflow: hidden;">
    <img src="{{ asset($operation->image) }}" style="width: 100%; height: 100%; object-fit: cover;" alt="#">
</div>
                        <div class="pt-3 py-3"></div>
                        <div class="desc">

                            {{ str_replace(' ','', strip_tags($operation->description)) }}

                        </div>

                        <!-- <div class="bottom">
                            <span class="first"><i class="fa fa-folder"></i><a href="#"> </a></span>|
                            <span class="sec"><i class="fa fa-comment"></i><a href="#"> Comment</a></span>
                        </div> -->
                    </div>

                    {{-- <div class="related-posts mt-4">
                        <h3>Related News</h3>
                        <hr>
                        <div class="row">
                            @foreach ($related_posts as $pos)


                                <div class="col-sm-4">
                                    <a href="#" style="text-decoration: none">
                                        <img src="{{ $pos->image }}" alt="Slider One">
                                        <h5>{{ $pos->title }}</h5>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div> --}}







                </div>

                <div class="col-md-4  col-lg-4 ">
                    @include('includes.internal_sidebar')
                </div>
            </div>
        </div>
    </section>


@include('includes.footer')




