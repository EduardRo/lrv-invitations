<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Default Title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @media (min-width: 640px) {
            .lg\:hidden {
                display: none;
            }
        
            .lg\:flex {
                display: flex;
            }
        }
        </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    
    <!-- Your head content goes here -->
</head>
<body>

    <x-admin.testmenu /> <!-- Include the admin menu component -->

    <div class="content">
        @yield('content')
    </div>
    

    <!-- Your scripts and other footer content go here -->

</body>
</html>