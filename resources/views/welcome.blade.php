<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel on PHPSandbox</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .content {
            text-align: left;
        }
    </style>
</head>
<body>
<div class="position-ref full-height">
    <div class="content">
        <div class="flex-center">
           ORDERS
        </div>

        <ul>
        @foreach ($orders as $order)
            <li>{{ $order->id }}</li>
             <ul>
                <li>Manager Full Name: {{ $order->manager->fullname }}</li>
                <li>Status: {{ $order->status }} </li>
                <li>Total: {{ $order->total / 100 }} </li>
            </ul>
        @endforeach
        </ul>
    </div>
</div>
</body>
</html>