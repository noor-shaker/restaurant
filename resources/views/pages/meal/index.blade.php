@extends('dashboard.layout.dashboard')
@section('body')
    <a href="{{ route('create') }}">
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
                            @foreach ($meals as $index => $meal)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><img src="{{ asset('images/' . $meal->image) }}" alt="{{ $meal->name }}"
                                            width="100" height="100"></td>
                                    <td>{{ $meal->name }}</td>
                                    <td>{{ $meal->description }}</td>
                                    <td>{{ $meal->price }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('edit', ['id' => $meal->id]) }}">
                                                <div class="btn btn-success mr-1" style="letter-spacing: 1px">Edit <i
                                                        class="fa fa-edit"></i></div>
                                            </a>

                                            <form action="{{ route('remove', ['id' => $meal->id]) }}" method="POST">
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
                {{ $meals->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
