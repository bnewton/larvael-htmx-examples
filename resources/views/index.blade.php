<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/eb55f6d0e7.js" crossorigin="anonymous"></script>

    @vite(['resources/js/app.js'])

    <title>Simple HTMX examples using Laravel</title>
</head>
<body style="min-height: 100vh; display: flex; flex-direction: column;">
<header class="bg-primary p-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-white fs-2">Simple HTMX examples using Laravel</h1>
            </div>
        </div>
    </div>
</header>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col shadow p-3">
            <a href="/searchbox-example" class="text-decoration-none">Simple Searchbox</a>
            <p class="m-0">A simple searchbox that uses htmx to automatically send a post request once the user stops typing.</p>
        </div>
    </div>
</div>


<footer class="footer" style="margin-top: auto">
    <div class="sticky-bottom">
        <div class="text-center mt-5">
            <p>Built using Laravel and HTMX</p>
            <p><a href="" class="text-decoration-none">Browse the code</a></p>
        </div>
    </div>
</footer>


</body>
</html>
