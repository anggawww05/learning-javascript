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
            <form action="{{ route('create.register') }}" method="POST" class="w-1/2 p-12 flex flex-col gap-10">
                @csrf
                @if (session()->has('error'))
                    <div class="w-full h-10 bg-red-200 rounded-md text-red-950 flex items-center p-2">
                        {{ session('error') }}
                    </div>
                @endif
                <div>
                    <h1 class="text-[32px] font-bold">Sign Up</h1>
                    <p>Make your account first!</p>
                </div>
                <div>
                    <label for="" class="font-semibold">Username</label>
                    <input type="text"
                        class="w-full border-b-2 border-gray-300 focus:outline-none focus:border-[#FFA239]"
                        name="username">
                </div>
                <div>
                    <label for="" class="font-semibold">Email</label>
                    <input type="email"
                        class="w-full border-b-2 border-gray-300 focus:outline-none focus:border-[#FFA239]"
                        name="email">
                </div>
                <div>
                    <label for="" class="font-semibold">Phone Number</label>
                    <input type="text"
                        class="w-full border-b-2 border-gray-300 focus:outline-none focus:border-[#FFA239]"
                        name="number">
                </div>
                <div class="flex gap-4">
                    <div>
                        <label for="" class="font-semibold">Password</label>
                        <input type="password"
                            class="w-full border-b-2 border-gray-300 focus:outline-none focus:border-[#FFA239]"
                            name="password">
                    </div>
                    <div>
                        <label for="" class="font-semibold">Confirm Password</label>
                        <input type="password"
                            class="w-full border-b-2 border-gray-300 focus:outline-none focus:border-[#FFA239]"
                            name="confirmpassword">
                    </div>
                </div>
                <button class="bg-black p-3 rounded-[10px] text-white font-semibold" type="submit">
                    Sign Up
                </button>
            </form>
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
