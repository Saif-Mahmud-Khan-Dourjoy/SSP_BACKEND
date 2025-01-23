<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <table>
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Name(BN)</th>
        </tr>
        @foreach($months as $index=>$month)
        <tr>
            <td>{{$index+1}}</td>
            <td>{{$month->name}}</td>
            <td>{{$month->name_bn}}</td>
            <td></td>
        </tr>
        @endforeach
    </table>
</body>
</html>