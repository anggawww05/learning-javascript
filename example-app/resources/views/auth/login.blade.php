<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://kit.fontawesome.com/867cb793ac.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <title>Register</title>
</head>

<body>
    <section class="w-screen min-h-screen flex items-center justify-center bg-[#FFA239]">
        <div class="w-[1145px] h-[815px] bg-white flex rounded-[40px] shadow-lg">
            <form action='{{route('post.login')}}' method="POST" class="w-1/2 p-12 flex flex-col gap-10">
                @csrf
                @if (session()->has('success'))
                    <div class="w-full h-10 bg-green-200 rounded-md text-green-950 flex items-center p-2">
                        {{ session('success') }}
                    </div>
                @elseif (session()->has('error'))
                    <div class="w-full h-10 bg-red-200 rounded-md text-red-950 flex items-center p-2">
                        {{ session('error') }}
                    </div>
                @endif
                <div>
                    <h1 class="text-[32px] font-bold">Sign In</h1>
                    <p>Complete the input!</p>
                </div>
                <div>
                    <label for="" class="font-semibold">Email</label>
                    <input type="email"
                        class="w-full border-b-2 border-gray-300 focus:outline-none focus:border-[#FFA239]" name="email">
                </div>
                <div>
                    <label for="" class="font-semibold">Password</label>
                    <input type="password"
                        class="w-full border-b-2 border-gray-300 focus:outline-none focus:border-[#FFA239]" name="password">
                </div>
                <button class="bg-black p-3 rounded-[10px] text-white font-semibold" type="submit">
                    Sign In
                </button>
            </form>
            <!-- Bagian Gambar -->
            <div class="w-1/2 relative">
                <img src="{{ asset('images/L3.jpg') }}" alt="Signup Image"
                    class="w-full h-[815px] object-cover rounded-r-[40px]">
                <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50 rounded-r-[40px]"></div>
                <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center">
                    <h1 class="text-white text-6xl font-bold">AAGAPW</h1>
                </div>
            </div>

        </div>
    </section>
</body>

</html>
