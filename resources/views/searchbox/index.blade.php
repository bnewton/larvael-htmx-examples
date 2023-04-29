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
                <p class="text-white fs-5 m-0 p-0">A simple SearchBox 'component' example</p>
            </div>
        </div>
    </div>
</header>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col bg-light rounded p-3">
            <form class="p-2">
                <input type="email" class="form-control form-control-lg" placeholder="Enter text to search for something." autofocus>
            </form>

            <div class="p-2">
                <div class="bg-white rounded shadow-sm px-3 py-3">
                    <div class="pb-3 border-bottom">
                        <a href="" class="text-decoration-none">First search result.</a>
                    </div>
                    <div class="pt-3 pb-3 border-bottom">
                        <a href="" class="text-decoration-none">Second search result.</a>
                    </div>
                    <div class="pt-3 pb-3 border-bottom">
                        <a href="" class="text-decoration-none">Third search result.</a>
                    </div>
                    <div class="pt-3 pb-2">
                        <a href="" class="text-decoration-none">You get the idea...</a>
                    </div>
                </div>
            </div>

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
