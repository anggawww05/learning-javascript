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
            <button class="tombolutama">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, nobis.</button>
        </div>
    </section>
    <script>
        const tombol = document.querySelector('button')
        tombol.addEventListener('click', function(){
            tombol.setAttribute('class', 'tombolkedua')
        })
    </script>
</body>

</html>
