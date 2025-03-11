<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://kit.fontawesome.com/867cb793ac.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <section>
        <div class = "h-screen w-screen m-5 flex flex-col justify-center items-center">
            <h1 id="display" class="text-[42px]">0</h1>
            <div class="mt-3">
                <button id="tambah" class = "w-36 h-16 bg-green-500 rounded-lg">tambah</button>
                <button id="kurang" class = "w-36 h-16 rounded-lg bg-green-500 ">kurang</button>
                {{-- <div class="border flex justify-center p-2 bg-blue-200 rounded-lg">Berhasil ditambah</div> --}}
            </div>
        </div>
    </section>
    <script>
        const display = document.getElementById('display')
        const tambah = document.getElementById('tambah')
        const kurang = document.getElementById('kurang')

        tambah.addEventListener('click', function(){
            display.innerHTML = parseInt(display.innerHTML) + 1
        })

        kurang.addEventListener('click', function(){
            if (display.innerHTML <= 0){
                alert('angka tidak boleh kurang dari 0')
            } else {
                display.innerHTML = parseInt(display.innerHTML) -1
            }

        })


    </script>
</body>

</html>
