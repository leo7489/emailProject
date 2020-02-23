<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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

            h2 {
                margin-left:60px;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 50px;
            }

            .m-b-md {
                margin: 30px;
            }
        </style>
    </head>
    
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Leo's Coding Test
                </div>

                <div class="container">
                    <h2>Please enter email addresses below,  separated by whitespace:</h2>
                    
                    <form class="form-horizontal" action="/" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                        </div>

                        <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="container">
                    <table class="table table-bordered" style="width:80%; margin-left:200px; font-size:1.5em;"> 
                        <tbody>
                            @if(isset($domains))
                                @foreach($domains as $index=>$domain)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $domain }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </body>
</html>
