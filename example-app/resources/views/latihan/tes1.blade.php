<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://kit.fontawesome.com/867cb793ac.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <main>
        <section class="section">
            <h1>Explore Our Gallery</h1>
            <div class="position">
                <img src="{{asset('images/1.png')}}" alt="1" class="images row-span-2 md:row-span-2 lg:row-span-2">
                <img src="{{asset('images/2.png')}}" alt="2" class="images">
                <img src="{{asset('images/7.png')}}" alt="7" class="images md:row-span-2 lg-row-span-2 lg:col-span-2">
                <img src="{{asset('images/3.png')}}" alt="3" class="images col-span-2 md:col-span-1 ">
                <img src="{{asset('images/4.png')}}" alt="4" class="images col-span-2 md:col-span-1 md:row-span-2 lg:row-span-2 lg:col-span-2">
                <img src="{{asset('images/5.png')}}" alt="5" class="images row-span-2 md:row-span-1">
                <img src="{{asset('images/6.png')}}" alt="6" class="images md:row-span-2 lg:row-span-2">
                <img src="{{asset('images/8.png')}}" alt="8" class="images">
            </div>
            <button type="button" class="buttons group">
                <span class="group-hover:text-blue-500">More Documentations</span>
                <i class="group-hover:text-blue-500 fa-solid fa-arrow-right"></i>
            </button>
        </section>
    </main>
    
    <script>

        const buttons = document.querySelectorAll('[type="button"]');
        buttons.forEach(element => {
            element.addEventListener('click', function(){
                element.classList.toggle('active');
            })
        });
    </script>
</body>
</html>
