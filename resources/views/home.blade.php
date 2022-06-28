@extends('layouts.app')

<link href="{{ asset('bootstrap/css/blog.css') }}" rel="stylesheet">

<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>

@section('content')

<div class="container">
    <div class="nav-scroller  py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-decoration-none text-muted" href="#">World</a>
            <a class="p-2 text-decoration-none text-muted" href="#">U.S.</a>
            <a class="p-2 text-decoration-none text-muted" href="#">Technology</a>
            <a class="p-2 text-decoration-none text-muted" href="#">Design</a>
            <a class="p-2 text-decoration-none text-muted" href="#">Culture</a>
            <a class="p-2 text-decoration-none text-muted" href="#">Business</a>
            <a class="p-2 text-decoration-none text-muted" href="#">Politics</a>
            <a class="p-2 text-decoration-none text-muted" href="#">Opinion</a>
            <a class="p-2 text-decoration-none text-muted" href="#">Science</a>
            <a class="p-2 text-decoration-none text-muted" href="#">Health</a>
            <a class="p-2 text-decoration-none text-muted" href="#">Style</a>
            <a class="p-2 text-decoration-none text-muted" href="#">Travel</a>
        </nav>
    </div>
    <div class="p-4 p-md-5 mb-4 text-white rounded"
        style="background-image: url('https://images.unsplash.com/photo-1580192270066-bed2e3055024?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80')">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                efficiently
                about what’s most interesting in this post’s contents.</p>
            <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
        </div>
    </div>

    <div class="row g-5">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                From the Firehose
            </h3>

            @foreach ($books as $book)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-2">
                        <img src="{{ asset('images/'.$book->cover) }}" class="img-fluid rounded-start" alt="books">
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">{!! $book->description !!}</p>
                            <p class="card-text"><small class="text-muted">{!! $book->date_of_issue !!}</small></p>

                        </div>
                    </div>
                </div>
            </div>

            @endforeach



            <nav class="blog-pagination" aria-label="Pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
            </nav>

        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst-italic">About</h4>
                    <p class="mb-0">Customize this section to tell your visitors a little bit about your publication,
                        writers,
                        content, or something else entirely. Totally up to you.</p>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2021</a></li>
                        <li><a href="#">February 2021</a></li>
                        <li><a href="#">January 2021</a></li>
                        <li><a href="#">December 2020</a></li>
                        <li><a href="#">November 2020</a></li>
                        <li><a href="#">October 2020</a></li>
                        <li><a href="#">September 2020</a></li>
                        <li><a href="#">August 2020</a></li>
                        <li><a href="#">July 2020</a></li>
                        <li><a href="#">June 2020</a></li>
                        <li><a href="#">May 2020</a></li>
                        <li><a href="#">April 2020</a></li>
                    </ol>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    </main>


</div>
@endsection
