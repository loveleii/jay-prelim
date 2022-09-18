<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="text-center">
        <div class="header shadow-lg">
                <h1>This is my Application</h1>
       
        </div>
        <div class="body">
            <a href="{{url('/')}}">Home</a>
            <a href="{{url('app')}}">Application</a>
            <a href="{{url('other')}}">Other</a>
            </div>
    </div>
</body>
</html>