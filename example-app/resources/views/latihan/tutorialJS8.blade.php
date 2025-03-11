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
        <div class = " w-full m-10 flex flex-col items-center gap-2">
            <img src="{{ asset('images/L1.jpg') }}" alt="" class="gambar1 aspect-video w-full ">
            <div class="images grid grid-cols-4 gap-2">
                <img src="{{ asset('images/L2.jpg') }}" id="images" alt=""
                    class="imgselect w-full aspect-video object-cover">
                <img src="{{ asset('images/L3.jpg') }}" id="images" alt=""
                    class="imgselect w-full aspect-video object-cover">
                <img src="{{ asset('images/L4.jpg') }}" id="images" alt=""
                    class="imgselect w-full aspect-video object-cover">
                <img src="{{ asset('images/L5.jpg') }}" id="images" alt=""
                    class="imgselect w-full aspect-video object-cover">
            </div>
        </div>
    </section>
    <script>
        const display = document.querySelector('.gambar1')
        const selects = document.querySelectorAll('#images')

        // console.log(display)
        selects.forEach(select => {
            // console.log(selects)

            select.addEventListener('mouseover', function() {
                const imgdisplay = display.getAttribute('src')
                const imgselect = select.getAttribute('src')

                display.setAttribute('src', imgselect)

                select.setAttribute('src', imgdisplay)
            })
        });
    </script>
</body>

</html>
