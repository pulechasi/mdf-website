@include('includes.header')



<body>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-lg-8">
                    <div class="post">
                        <div class="row">
                            <div class="col-md-12 post-title">
                                <a href="#" style="text-decoration: none">
                                    <h4 class="display-4">{{ $post->title }}</h4>
                                </a>

                            </div>
                            {{-- <div class="col-md-4 post-date">
                                <div class="day">
                                    <i class="bx bxs-time-five"></i> {{ $post->created_at->toFormattedDateString() }}</div>
                            </div> --}}


                        </div>
                        <div class="pt-2 py-2"></div>
                        <div class="image-container">
                            <div style="width: 700px; height: 400px; overflow: hidden;">
                                <img src="{{ asset($post->image) }}" style="width: 100%; height: 100%; object-fit: cover;" style="margin-bottom: 10px" alt="#">
                            </div>
                            <div class="caption">
                                <span class="animated-text">{{ $post->title }}</span>
                            </div>
                        </div>


                        <div class="pt-3 py-3">

                        </div>
                        <div class="desc">

                          {{-- {{ str_replace('&nbsp;','',strip_tags($post->content)) }} --}}
                          @php
                          // Get the raw HTML content from the database
                          $rawContent = $post->content;

                          // Remove all tags except for <p> tags
                          $content = strip_tags($rawContent, '<p>');

                          // Remove styles and other unwanted attributes from <p> tags
                          $content = preg_replace('/<p[^>]*>/', '<p>', $content);

                          // Replace non-breaking spaces with regular spaces
                          $content = str_replace('&nbsp;', ' ', $content);

                          // Split the content into an array of paragraphs based on <p> tags
                          $paragraphs = preg_split('/<\/p>\s*<p>/', $content);

                          // Remove leading and trailing <p> tags from each paragraph
                          $paragraphs = array_map(function($paragraph) {
                              return trim($paragraph, "<p></p>\n\r");
                          }, $paragraphs);

                          // Trim each paragraph and ensure it's not empty
                          $paragraphs = array_filter(array_map('trim', $paragraphs));
                      @endphp

                      @foreach($paragraphs as $paragraph)
                          <p>{{ $paragraph }}</p>
                      @endforeach
                        </div>


                    </div>

                    <div class="related-posts mt-4">
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
                    </div>







                </div>

                <div class="col-md-4  col-lg-4 ">
                    @include('includes.post_sidebar')
                </div>
            </div>
        </div>
    </section>


@include('includes.footer')
