<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class = "flex flex-col justify-center items-center mt-4">
        <h1 class = "text-2xl">Welcome to HireMe <i class="fa-solid fa-screwdriver-wrench"></i></h1>
        <div class = "flex flex-row gap-2 mt-4">
            <a href = "{{route('add-page')}}" class="cursor-pointer bg-sky-500 text-white rounded-lg p-4 transition ease-in-out hover:scale-105 hover:bg-sky-700"><i class="fa-solid fa-wrench"></i> Create new service</a>
        </div>
    </div>

    <div class = "flex flex-col justify-center items-center mt-8">
        <h1 class = "text-2xl">Services</h1>
        <div class = "grid grid-cols-1 md:grid-cols-3 gap-8 mx-8 mt-4">

        @foreach ($services as $service)
            <div class="w-full block rounded-2xl bg-white shadow-lg dark:bg-neutral-700 text-center">
                <div class="pt-6 px-6">
                    <div class = "flex flex-row gap-16 justify-around">
                        <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800 dark:text-neutral-50">
                            {{$service->service}}
                        </h5>

                        <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800 dark:text-neutral-50">
                            {{$service->categoryPull->category}}
                        </h5>
                    </div>
                    <p class="mb-2 text-base text-neutral-500 dark:text-neutral-300">
                        {{$service->description}}
                    </p>
                    <a href="#"
                        class="mt-3 inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                        Book now
                    </a>
                </div>
                <p class = "py-2 text-white text-sm">Created by {{$service->firstName}} {{$service->lastName}}</p>
                <p class = "py-2 text-white text-sm">{{$service->email}}</p>
            </div>

        @endforeach
        </div>
    </div>
</body>
</html>