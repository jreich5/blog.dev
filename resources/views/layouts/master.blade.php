<!DOCTYPE html>
<html lang="en">

@include('layouts.partials._head')

<body>


    @include('layouts.partials._navbar')

    <main class="container">
        @yield('content')
    </main>

    @include('layouts.partials._footer')
    
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> <!-- jQuery Version 1.11.1 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> <!-- Bootstrap Core JavaScript -->
    @yield('bottom-scripts')

</body>

</html>
