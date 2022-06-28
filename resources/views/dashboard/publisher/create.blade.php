@extends('layouts.dashboardApp')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h5>Add New Category</h5>
        </div>
        <hr>
        <div class="pull-right mb-3">
            <a class="btn btn-primary" href="{{ route('publisher.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="card-title"></div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('publisher.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="publishername" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="publishername" placeholder="Name">
            </div>

            <div class="mb-3">
                <label for="publisherAddress" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="publisherAddress" placeholder="Address">
            </div>

            <div class="mb-3">
                <label for="publisherPhone" class="form-label">Phone Number</label>
                <input type="text" name="phone_number" class="form-control" id="publisherPhone"
                    placeholder="Phone Number">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>

@endsection
