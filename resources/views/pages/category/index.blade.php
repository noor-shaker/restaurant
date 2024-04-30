@extends('dashboard.layout.dashboard')
@section('body')
    <a href="{{ route('category.create') }}">
        <div class="btn" style="background:orangered;color:#fff;letter-spacing: 2px;border-radius: 50px">
            <img src="{{ asset('dashboardasset/images/layout_img/add.png') }}" width="40">
            Add a new meal
        </div>
    </a>
    <br><br>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table">
                        <thead>
                            <tr style="color: black;background:#eee">
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $index => $category)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><img src="{{ asset('images/' . $category->image) }}" alt="{{ $category->name }}"
                                            width="100" height="100"></td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>{{ $category->price }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('category.edit', ['id' => $category->id]) }}">
                                                <div class="btn btn-success mr-1" style="letter-spacing: 1px">Edit <i
                                                        class="fa fa-edit"></i></div>
                                            </a>

                                            <form action="{{ route('category.remove', ['id' => $category->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger" style="letter-spacing: 1px">
                                                    Delete <i class="fa fa-remove"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <div style="display:flex;justify-content: center">
                {{-- pagination --}}
                {{ $categories->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
