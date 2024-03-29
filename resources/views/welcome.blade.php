<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('store')}}" method="POST">
    @csrf
    <label for="course">Curso:</label>
    <input type="text" name="course" id="course" value="{{old('course')}}">

    <label for="workload">Carga horária:</label>
    <input type="text" name="workload" id="workload" value="{{old('workload')}}">

    <button>Enviar</button>
</form>
</body>
</html>
