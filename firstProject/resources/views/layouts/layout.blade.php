<!DOCTYPE html>
<html lang="en">

<head>
    <x-head />
</head>

<body>
    <x-nav-bar />
    @yield("titlePage")
    @yield('content')
    <x-footer />
</body>

</html>
