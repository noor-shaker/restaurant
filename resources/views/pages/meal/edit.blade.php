{{-- امتداد لصفحة الداشبورد يتم عرض هذا الجزء في صفحة الداشبورد --}}
@extends('dashboard.layout.dashboard')
{{-- هذا السكشن مستدعى من قبل في صفحة الداشبورد في@yield('body') --}}
@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <!-- form start -->
                    {{-- طلب للداتا بيس --}}
                    <form method="POST" action="{{ route('update', ['id' => $meal->id]) }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf {{-- للاضافة الى قاعدة البيانات --}}

                        <div class="card-body">

                            <div class="form-group">
                                @if ($meal->image > 0)
                                    <img src="{{ asset('images/' . $meal->image) }}" width="100vh" alt="">
                                @else
                                    <img src="{{ asset('images/default.jpg') }}" width="100vh" alt="">
                                @endif
                                <input type="file" class="form-control" placeholder="Upload the image" name="image">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name"> Name</label>
                                <input type="text" class="form-control" id="name"
                                    placeholder="enter the name of the meal" name="name" value="{{ $meal->name }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="description">Description </label>
                                <textarea name="description" id="description" cols="10" rows="4" class="form-control">{{ $meal->description }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="price"> Price </label>
                                <input type="number" class="form-control" id="price" placeholder="enter the price "
                                    name="price" value="{{ $meal->price }}">
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn"
                        style="background: orangered;color:#fff;letter-spacing: 2px">Edit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
