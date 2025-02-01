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
            <h1 id="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, vel?</h1>
            <button id="tombol" class="bg-blue-400 border border-blue-700 p-2 rounded-lg text-white mt-2">jadi tulisan ini</button>
        </div>
    </section>
    <script>
        const text = document.getElementById('text')
        const tombol = document.getElementById('tombol')

        tombol.addEventListener('click', function(){
            text.innerHTML = tombol.innerHTML
        })
    </script>
</body>

</html>
