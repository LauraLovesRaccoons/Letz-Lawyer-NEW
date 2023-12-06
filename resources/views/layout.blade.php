
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#00A3E0", // OUR COLOR - to adjust, currently luxembourgish blue #00A3E0
                    },
                },
            },
        };
    </script>
    <title>LetzLawyer | Search and Book Lawyer appointments in Luxembourg</title>
</head>

<!-- NAVBAR -->
<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a href="/">
            <!-- Our Logo -->
            {{-- <img class="w-24 logo" src="{{ asset('images/logo.svg') }}" alt="LetzLawyer Logo" /> --}}
            <img class="w-24 logo" src="{{ asset('images/Logo_V0.3.png') }}" alt="LetzLawyer Logo" />
        </a>
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
                <li>
                    <span class="font-bold uppercase">
                        Welcome {{ auth()->user()->name }}
                    </span>
                </li>
                <li>
                    <a href="/gigs/manage">
                        <i class="fa-solid fa-gear"></i>Manage Gigs
                    </a>
                </li>
                <li>
                    <form method="POST" action="/logout">
                        @csrf
                        <button>
                            <i class="fa-solid fa-door-closed"></i> Logout
                        </button>
                    </form>
                </li>
                @else
                <li>
                    <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i>
                        Register</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a>
                </li>
            @endauth
        </ul>
    </nav>
<!-- END NAVBAR -->

    <main>
        @yield('content')
    </main>

    <x-flash-message />

    <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2023, All Rights reserved - LetzLawyer</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>