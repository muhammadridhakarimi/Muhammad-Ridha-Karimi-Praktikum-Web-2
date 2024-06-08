<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link href = "https://fonts.googleapis.com/css?family=Lato:100" rel = "stylesheet">
        type = "text/css">
    <style>
        html, body {
            height: 100%;
        }
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font_family: 'Lato';
        }
        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
            
    </style>    
</head>
<body>
    
</body>
</html>
 
@extends('layouts.main')
@section('title','Page Title')
@section('content')
<p>This is my body content.</p>
@endsection