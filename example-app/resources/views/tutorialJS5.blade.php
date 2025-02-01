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
            <h1 id="text">Klik tombol dibawah</h1>
            <div class="flex gap-2">
                <button id="tombol" class="bg-blue-400 border border-blue-700 p-2 rounded-lg text-white mt-2">
                    1</button>
                <button id="tombol" class="bg-blue-400 border border-blue-700 p-2 rounded-lg text-white mt-2">
                    2</button>
                <button id="tombol" class="bg-blue-400 border border-blue-700 p-2 rounded-lg text-white mt-2">
                    3</button>
                <button id="tombol" class="bg-blue-400 border border-blue-700 p-2 rounded-lg text-white mt-2">
                    4</button>
            </div>
        </div>
    </section>
    <script>
        const text = document.querySelector('h1')
        const buttons = document.querySelectorAll('button')

        buttons.forEach(button => {
            console.log(button)
            button.addEventListener('click', function(){
                text.innerHTML = button.innerHTML
            })
        });
    </script>
</body>

</html>
