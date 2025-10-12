@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h6>EDIT ADVERT</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('adverts.update', $advert->id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="title">Title:</label>
                                </div>

                                <div class="col-md-8">

                                    <input type="text" id="title" name="title" class="form-control"
                                        value="{{ $advert->title }}">
                                    <span class="text-danger"><strong>
                                            @error('title')
                                                {{ $message }}
                                            @enderror
                                        </strong></span>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="description">Description:</label>
                                </div>

                                <div class="col-md-8">
                                    <textarea name="description" id="" cols="5" rows="6" class="form-control">
                                    {{ $advert->description }}
                                </textarea>
                                    <span class="text-danger"><strong>
                                            @error('description')
                                                {{ $message }}
                                            @enderror
                                        </strong></span>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="due_date">Due date:</label>
                                </div>

                                <div class="col-md-8">

                                    <input type="date" id="due_date" name="due_date" class="form-control"
                                        value="{{ $advert->due_date }}">
                                    <span class="text-danger"><strong>
                                            @error('due_date')
                                                {{ $message }}
                                            @enderror
                                        </strong></span>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="advert_type">Select advert type:</label>
                                </div>

                                <div class="col-md-8">
                                    <select name="advert_type" id="operation_type" class="form-control">

                                        <option value="vacancies"
                                            {{ $advert->advert_type === 'vacancy' ? 'Selected' : '' }}>Vacancies</option>
                                        <option value="bids" {{ $advert->advert_type == 'tender' ? 'Selected' : '' }}>
                                            Tenders</option>

                                    </select>
                                    <span class="text-danger"><strong>
                                            @error('operation_type')
                                                {{ $message }}
                                            @enderror
                                        </strong></span>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="image">Attach a file:</label>
                                </div>

                                <div class="col-md-8">
                                    <input type="file" name="file" id="file" class="form-control">
                                    <span class="text-danger"><strong>
                                            @error('file')
                                                {{ $message }}
                                            @enderror
                                        </strong></span>

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
