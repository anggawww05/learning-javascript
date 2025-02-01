<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/867cb793ac.js" crossorigin="anonymous"></script>

    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <section>
        <div class="flex flex-col">
            <div class = "h-screen w-screen m-5 flex flex-col justify-center items-center">
                <h1 id="text" class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, vel?</h1>
                <button id="tombol" class="bg-blue-400 border border-blue-700 p-2 rounded-lg text-white mt-2">jadi tulisan ini</button>
            </div>
        </div>
    </section>

    <script>
        const tombol = document.getElementById('tombol');
        const text = document.getElementById('text');

        tombol.addEventListener('click', function(){
            text.classList.toggle('active');
            tombol.classList.remove('bg-blue-400');
        })
    </script>
</body>

</html>
