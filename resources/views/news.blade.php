@include('includes.header')

<body>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-lg-8">
                    <div class="post">
                        <div class="row">
                            <div class="col-md-2 post-date">
                                <div class="day"></div>
                                <div class="month"></div>
                                <div class="year"></div>
                            </div>
                            <div class="col-md-8 post-title">
                                <a href="#">
                                    <h2></h2>
                                </a>

                            </div>
                            <div class="col-md-2 profile-picture">
                                <!-- <img src="img/" alt="Profile Picture" class="img-circle"> -->
                                <p>Written by: <span></span></p>
                            </div>
                        </div>
                        <a href="#"><img src="#" alt="#"></a>
                        <div class="desc">

                        </div>

                        <!-- <div class="bottom">
                            <span class="first"><i class="fa fa-folder"></i><a href="#"> <?php echo ucfirst($categories);?></a></span>|
                            <span class="sec"><i class="fa fa-comment"></i><a href="#"> Comment</a></span>
                        </div> -->
                    </div>

                    <div class="related-posts">
                        <h3>Related News</h3>
                        <hr>
                        <div class="row">

                            <div class="col-sm-4">
                                <a href="#">
                                    <img src="#" alt="Slider One">
                                    <h4><title></title></h4>
                                </a>
                            </div>

                        </div>
                    </div>







                </div>

                <div class="col-md-4  col-lg-4 ">
                    {{-- News side bar --}}
                </div>
            </div>
        </div>
    </section>


@include('includes.footer')
