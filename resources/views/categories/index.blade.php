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
        <div class="col">
            <h5 class="card-title">Category List</h5>
            <ol class="list-group">
                @foreach ($categories as $category)

                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">{{ $category->name }}</div>
                        {{ $category->description }}
                    </div>
                    <span class="badge bg-primary rounded-pill">14</span>
                </li>

                @endforeach
            </ol>
        </div>

    </div>
</div>
@endsection
