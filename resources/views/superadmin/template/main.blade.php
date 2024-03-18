<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>
    <link rel="icon" href="../assets/images/favicon.png" type="image/png">

    @include('superadmin.template.style')

</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        @include('superadmin.template.sidebar')

        <!-- partial -->
        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            @include('superadmin.template.navbar')

            <!-- partial -->
            <div class="page-content">

                <section class="section">
                    @yield('content')
                </section>

            </div>

            <!-- partial:partials/_footer.html -->
            <footer
                class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
                <p class="text-muted mb-1 mb-md-0">Copyright © 2024 <a href="https://itsk-soepraoen.ac.id/"
                        target="_blank">ITSK Soepraoen</a>.</p>
                <p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm"
                        data-feather="heart"></i></p>
            </footer>
            <!-- partial -->

        </div>
    </div>

    @include('superadmin.template.script')

</body>

</html>
