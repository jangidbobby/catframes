<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$data['title']}}</title>
</head>
<body>

    <p>{{ $data['body'] }}</p>
    <br>
    <p>Thank You!</p>

</body>
</html>
<script src="{{ asset('vendor/global/global.min.js')}}"></script>
<script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('js/custom.min.js')}}"></script>
<script src="{{ asset('js/deznav-init.js')}}"></script>
<link rel="icon" type="{{asset('image/png')}}" sizes="16x16" href="images/favicon.png">
<link href="{{ asset('css/style.css')}}" rel="stylesheet">