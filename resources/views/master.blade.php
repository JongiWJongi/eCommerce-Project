<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>e-Commerce Project</title>
        <!--Custom CSS-->
        <style>
            
        </style>
        <!--Bootsrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!--jQuery Minified-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        <!--Bootsrap JS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js">
        
    </head>
    <body>
        {{View::make('header')}}
        @yield('content')
        {{View::make('footer')}}
    </body>
    <style>
        .custom-login{
            height: 500px;
            padding-top:50px;
            
        }
    </style>
</html>