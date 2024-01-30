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
    <div class = "flex justify-center items-center m-4">
        <h1 class = "text-2xl">Create new service</h1>
    </div>
    
    <div class = "flex justify-center items-center">
        <form class = "flex flex-col" action="">
            <label for="service">Service name</label>
            <input name = "service" class = "border border-gray-500 rounded p-2" placeholder="Your service name..." type="text">

            <label for="description" class = "mt-4">Service description</label>
            <textarea name = "description" class = "border border-gray-500 rounded p-2 resize-none w-full" placeholder="Your service description..." type="text"></textarea>

            <div class = "flex flex-row gap-8">
                <div class = "flex flex-col">
                    <label for="firstName" class = "mt-4">First name</label>
                    <input name = "service" class = "border border-gray-500 rounded p-2" placeholder="Your first name..." type="text">
                </div>

                <div class = "flex flex-col">
                    <label for="service" class = "mt-4">Last name</label>
                    <input name = "lastName" class = "border border-gray-500 rounded p-2" placeholder="Your last name..." type="text">
                </div>
            </div>

            <label for="service" class = "mt-4">E-mail</label>
            <input name = "email" class = "border border-gray-500 rounded p-2" placeholder="Your e-mail..." type="text">

            <label for="service" class = "mt-4">Select category</label>
            <select name="categoryId">
                <option value="0" selected disabled>Choose a category</option>
                @foreach ($categories as $category)
                @endforeach
            </select>
        </form>
    </div>
</body>
</html>