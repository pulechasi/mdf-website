@include('includes.header')

<body>

    <section>
        <div class="container">
            <div class="row">
                <div class=" col-lg-7 col-md-8 col-sm-12">
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
                                    <h5 class="display-4">{{ $operation->name }}</h5>
                                </a>

                            </div>
                        </div>
                        <div class="pt-2 py-2"></div>
     						<div style="width: 700px; height: 400px; overflow: hidden;">
    <img src="{{ asset($operation->image) }}" style="width: 100%; height: 100%; object-fit: cover;" alt="#">
</div>


                        <div class="pt-1 py-3"></div>
                      <div class="desc">
    @php
        // Get the raw HTML content from the database
        $rawContent = $operation->description;
        
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


                        {{-- <div class="bottom">
                            <span class="first"><i class="fa fa-folder"></i><a href="#">
                                    {{ $operation->operation_type }} operation</a></span>|
                            <span class="sec"><i class="fa fa-comment"></i><a href="#"> Comment</a></span>
                        </div> --}}
                    </div>

                    <div class="related-posts">
                        {{-- <h4>Related operations</h4>
                        <hr>
                        <div class="row">

                        </div> --}}
                    </div>


                </div>
                <div class="col-md-4 col-lg-4 ">
                    @include('includes.external_sidebar')
                </div>
            </div>
        </div>
    </section>

    @include('includes.footer')

