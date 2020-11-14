<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<table id="customers">
    <tr>
        <th style="text-align: center">Name</th>
        <th style="text-align: center">Email</th>
        <th style="text-align: center">Email Verified</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td style="text-align: center">{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td style="text-align: right">{{$user->email_verified_at !=null ? 'مفعل' : 'غير مفعل'}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .container{
        border: 10px double #ddd;
        width: 100%;
        height: 1125px;
    }
</style>
<body>
<div class="container">
    <table>

    </table>

</div>
</body>
</html>
