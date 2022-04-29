<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{-- {{ dd($data['name'])}} --}}
    {{-- @foreach ($users as $user)
    <h1>Hello</h1>
    @endforeach --}}
    {{-- <h1>Hello {{  $data['name']  }}</h1> --}}
    {{-- <p>{{ $plop }}</p> --}}

    <p>Hi {{$plop['name']}}</p>
    <p>Hi {{$plop['email']}}</p>

        

</body>
</html>



