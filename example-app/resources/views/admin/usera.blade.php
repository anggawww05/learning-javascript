@extends('admin.main')

@section('content')
    <div class="ml-72 mt-6 mr-8 bg-white">
        <div class="flex gap-4">
            <div>
                <div class="w-72 h-72 bg-gray-200 flex items-center justify-center border border-black">
                    foto 1x1
                </div>
                <input type="file" name="photo" accept="image/*" class="mt-4 border border-black p-2 rounded-lg w-72">
            </div>
            <div class="flex flex-col gap-4 w-full">
                <label for="">Name</label>
                <input type="text" class="border border-black p-2 rounded-lg">
                <label for="">Email</label>
                <input type="email" class="border border-black p-2 rounded-lg ">
                <label for="">Password</label>
                <input type="password" class="border border-black p-2 rounded-lg ">
                <label for="">Address</label>
                <input type="text" class="border border-black p-2 rounded-lg">
            </div>
        </div>
        <div class="flex justify-center mt-4">
            <button class="bg-teal-700 text-white p-2 rounded-lg w-full">
            Save
            </button>
        </div>
    </div>
@endsection
