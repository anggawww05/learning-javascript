@extends('admin.main')

@section('content')
    <div class="ml-72 mt-6 mr-8 bg-white">
        <form action="{{ route('create.category') }}" method="POST">
            @csrf
            <label for="">Name</label>
            <input type="text" class="border border-black p-2 rounded-lg" name="category">
            <div class="flex justify-center mt-4">
                <button class="bg-teal-700 text-white p-2 rounded-lg w-full" type="submit">
                    Save
                </button>
            </div>
        </form>
    </div>
@endsection
