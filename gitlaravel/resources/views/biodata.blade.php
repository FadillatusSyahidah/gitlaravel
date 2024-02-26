<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <body>
        <h2>biodata saya</h2>
        <br>
        <h1>my name is :</h1> 
        <p>{{$nama}}</p>
        <br>
        <h1>I am : </h1>
        <p> 
            {{$umur}}
        </p>
        <br>
        <h2>my hobby is : </h2>
        <ul>
            @foreach ($hobi as $hb )
            <li>
                {{$hb}}
            </li>
            @endforeach
        </ul>
</body>
</html>