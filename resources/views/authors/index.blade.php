@extends('layouts.app')



@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem temporibus optio necessitatibus
                        quisquam itaque consequatur beatae praesentium voluptatem maiores. Laboriosam ducimus minus
                        accusamus laudantium? Facere animi perspiciatis inventore suscipit enim.</p>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <h5 class="card-title">Author List</h5>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>

            <ol class="list-group">

                @foreach ($authors as $author)

                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">{{ $author->name }}</div>
                        {{ $author->address }}
                    </div>
                    <span class="badge bg-primary rounded-pill">14</span>
                </li>

                @endforeach


            </ol>



        </div>
    </div>

</div>

@endsection
