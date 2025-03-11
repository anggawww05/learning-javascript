@extends('admin.main')

@section('content')
    <div class="ml-72 mt-6 bg-white">
        <div>
            <a href="{{ Route('view.add') }}" class="w-20 h-20 bg-teal-700 text-white">Add Category</a>
        </div>
        @if (session()->has('success'))
            <div class="w-full h-10 bg-green-200 rounded-md text-green-950 flex items-center p-2">
                {{ session('success') }}
            </div>
        @endif
        <table class=" w-[1200px] border border-black">
            <thead class="text-left border-b border-black">
                <tr>
                    <th class="border-r border-black">No</th>
                    <th class="border-r border-black">Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="border-b border-black">
                        <td class="border-r border-black">{{ $category->id }}</td>
                        <td class="border-r border-black">{{ $category->name }}</td>
                        <td>
                            <a href="{{ Route('view.detail', $category->id) }}" class="text-green-500">View</a>
                            <a href="{{ Route('view.edit', $category->id) }}" class="text-blue-500">Edit</a>
                            <form action="{{ route('delete.category', $category->id) }}" method="POST">
                                @csrf
                                <button class="text-red-500">Delete</button>

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
