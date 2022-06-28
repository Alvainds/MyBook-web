@extends('layouts.dashboardApp')


@section('content')
<a class="btn btn-primary mb-3" href="{{ route('book.index') }}"> Back</a>
<div class="row">
    <div class="col">
        <h5 class="mb-3">{{ $book->title }}</h5>
    </div>
    <div class="col ">
        <a class="float-end text-decoration-none" href="">Edit</a>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <img class="img-fluid" src="{{ asset('images/'.$book->cover) }}" style="
                                            width: 225px;
                                            border-radius: 8px;
                                            height: 315px;
                                            object-fit: cover;" alt="{{ $book->title }}" srcset="">
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <div class="card-title"></div>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">Details</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                            type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                            type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                        <section class="my-3">

                            <dl>
                                <dt>Information</dt>
                                <dd>Title : {{ $book->title }}</dd>
                                <dd>Category : {{ $book->categories->name }}</dd>
                                <dd>Author : {{ $book->authors->name }}</dd>
                                <dd>Publisher : {{ $book->publishers->name }}</dd>
                                <dd>Release Date : {{ $book->date_of_issue }}</dd>

                                <dt>Description</dt>
                                <dd>{!! $book->description !!}</dd>
                            </dl>



                        </section>

                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
