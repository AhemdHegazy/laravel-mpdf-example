<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users PDF </title>
</head>
<style>
    #customers {
        font-family: 'cairo';
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
        background-color: #04AA6D;
        color: white;
    }
</style>
<style media="all">
    body,th,td{
        font-size: 0.875rem;
        font-family: 'cairo';
        font-weight: normal;
        direction: rtl;
        text-align: right;
    }

    .text-left{
        text-align:right;
    }
    .text-right{
        text-align:left;
    }
    @page {
        header: page-header;
        footer: page-footer;
    }
</style>
<body>
<table class="table table-striped table-bordered" id="customers">
    <thead>
    <tr>
        <th >ID</th>
        <th >Name</th>
        <th >Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $key=>$user)
        <tr>
            <td >{{ $user->id }}</td>
            <td >{{ $user->name }}</td>
            <td >{{ $user->email }}</td>
        </tr>
        @if($key == 40)
    </tbody>

</table>
<pagebreak></pagebreak>
    <table class="table table-striped table-bordered" id="customers">
        <thead>
        <tr>
            <th >ID</th>
            <th >Name</th>
            <th >Email</th>
        </tr>
        </thead>
        @endif
    @endforeach

    </tbody>

</table>
    <htmlpageheader name="page-header">
        <div style="height: 5%;width: 90%;margin: auto">
            <div style="font-size: 15px;font-weight: bold;color: #545454;margin-top: 25px;color: #545454;border-bottom: 2px solid #ddd">
                My Users Data
            </div>
        </div>
    </htmlpageheader>
    <htmlpagefooter name="page-footer">
        <div style="height: 5%;width: 90%;margin: auto">
            <div style="padding-right: 38px;font-size: 15px;font-weight: bold;color: #545454;margin-top: 0px;color: #545454;border-top: 2px solid #ddd">
                {PAGENO}
            </div>
        </div>
    </htmlpagefooter>
</body>
</html>
