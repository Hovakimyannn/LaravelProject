<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>
    <style>
        * {
            text-align: center;
        }

        a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            font-size: 25px;
            border: 2px solid black;
            border-radius: 5px;
            padding: 5px 10px;
        }

        table {
            border-collapse: collapse;
            width: 60%;
            margin: 100px auto;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #D6EEEE;
        }

        .hidden {
            display: none;
        }

        .delete-button:hover {
            color: whitesmoke;
            background-color: red;
        }

        .delete-button{
            border-radius: 5px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>User_Name</th>
        <th>user Email</th>
        <th>Password</th>
    </tr>
</table>
<a href="{{route('logout')}}">Log Out</a>
</body>
</html>
