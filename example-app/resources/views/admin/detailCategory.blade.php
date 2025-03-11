@extends('admin.main')

@section('content')
    <div class="ml-72 mt-6 mr-8 bg-white">
        <div action="{{ route('create.category') }}" method="POST">

            <label for="">Name</label>
            <input type="text" class="border border-black p-2 rounded-lg" name="category" value="{{$category->name}}" readonly>
            <div class="flex justify-center mt-4">
                <a href="{{route('view.crud')}}">back</a>
            </div>
        </div>
    </div>
@endsection
