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
                <a class="btn btn-primary" href="{{ route('book.create') }}"> Create New Book</a>
                @endcan
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <table class="table mt-0">
                    <tr>
                        <th>No</th>
                        <th>Cover</th>
                        <th>Title</th>
                        <th>Publisher</th>
                        <th>Author</th>
                        <th>Date Release</th>
                        <th>Options</th>
                    </tr>
                    @foreach ($books as $book)

                    <img src="{{ $book->cover }}" alt="" srcset="">
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('images/'.$book->cover) }}" style="
                            width: 80px;
                            border-radius: 8px;
                            height: 100px;
                            object-fit: cover;" alt="" srcset="">
                        </td>
                        <td>
                            <h6>{{ $book->title }}</h6>
                            <p class="text-muted">{{ $book->categories->name }}</p>
                            <a class="text-decoration-none" href="{{ route('book.edit',$book->id) }}">Edit</a> - <a
                                class="text-decoration-none" href="{{ route('book.show',$book->id) }}">More</a>
                        </td>
                        <td>{{ $book->publishers->name }}</td>
                        <td>{{ $book->authors->name }}</td>
                        <td>{{ $book->date_of_issue }}</td>
                        <td>
                            <form action="{{ route('book.destroy',$book->id) }}" method="POST">

                                {{-- @can('category-edit')
                                <a class="btn btn-primary" href="{{ route('category.edit',$book->id) }}">Edit</a>
                                @endcan --}}

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


                {!! $books->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
