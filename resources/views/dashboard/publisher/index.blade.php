@extends('layouts.dashboardApp')

@section('content')

<div class="row">
    <div class="col-md-12 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem temporibus optio necessitatibus
                    quisquam itaque consequatur beatae praesentium voluptatem maiores. Laboriosam ducimus minus
                    accusamus laudantium? Facere animi perspiciatis inventore suscipit enim.</p>

                @can('category-create')
                <a class="btn btn-primary" href="{{ route('publisher.create') }}"> Create New Publisher</a>
                @endcan
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif


                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Options</th>
                        </tr>
                    </thead>

                    @foreach ($publishers as $publisher)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $publisher->name }}</td>
                        <td>{{ $publisher->description }}</td>
                        <td>
                            <form action="{{ route('category.destroy',$publisher->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('category.show',$publisher->id) }}">Show</a>

                                @can('category-edit')
                                <a class="btn btn-primary" href="{{ route('category.edit',$publisher->id) }}">Edit</a>
                                @endcan

                                @csrf
                                @method('DELETE')
                                @can('category-delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>


                {!! $publishers->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
