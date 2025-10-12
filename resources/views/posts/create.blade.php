@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h6>CREATE NEW POST</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="name">Title:</label>
                            </div>

                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control" name="title">
                                <span class="text-danger"><strong>@error('title')
                                {{ $message }}
                                @enderror</strong></span>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="name">Content:</label>
                            </div>

                            <div class="col-md-8">
                                <textarea name="content" id="summernote" cols="5" rows="6" class="form-control">
                                </textarea>
                                <span class="text-danger"><strong>@error('content')
                                {{ $message }}
                                @enderror</strong></span>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="category">Select Category:</label>
                            </div>

                            <div class="col-md-8">
                                <select name="category" id="category" class="form-control" onchange="categoryType()">
                                    <option value=""></option>
                                    <option value="News">News</option>
                                    <option value="Events">Events</option>
                                    <option value="Press release">Press release</option>
                                </select>
                                <span class="text-danger"><strong>@error('category')
                                {{ $message }}
                                @enderror</strong></span>

                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="image">Upload Image:</label>
                            </div>

                            <div class="col-md-8">
                                <input type="file" name="image" id="image" class="form-control">
                                <span class="text-danger"><strong>@error('image')
                                {{ $message }}
                                @enderror</strong></span>

                            </div>
                        </div>
                        <div class="row mb-3" id="toshow">
                            <div class="col-md-3">
                                <label for="date">Event date:</label>
                            </div>

                            <div class="col-md-8">
                                <input id="event_date" type="date" class="form-control" name="event_date">
                                <span class="text-danger"><strong>@error('event_date')
                                {{ $message }}
                                @enderror</strong></span>

                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-8 text-center">
                                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> SAVE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

<script>
    $("#toshow").hide();   //which element you want to hide or show
    function categoryType(){
           var category =$("#category").val();

            if(category == 'Events'){

                $("#toshow").show();
            }else{

                $("#toshow").hide();
            }

    }
</script>





