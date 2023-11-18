<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>

        th,td{
            font-family: "Gill Sans Extrabold", sans-serif;
            padding: 0px 10px;
            width: max-content;
            max-width: 150px;
            border: 0.5px solid black;
            font-size: 0.85em;
            word-break: break-all;
            word-wrap: break-word
        }
        h1{
            font-family: "Gill Sans Extrabold", sans-serif;
            display:flex;
            justify-content:center;
            color: rgb(211,193,221);

    

        }
        td{
            color: rgb(71,75,78);
            background-color: rgb(211,	193,	221);
            

        }

        th{
            background-color: rgb(211,	193,	221);
            font-size: 0.8em;
            color: rgb(71,75,78);

            
        }
    </style>
   <h1>INFO-USUARIO</h1>

    <table cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>IDENTIFICATION</th>
                <th>ADDRESS</th>
                <th>PHONE</th>
            </tr>
        </thead>
        <tbody>
    
            <tr>



                <td>{{$userFind["id"]}}</td>
                <td style="font-size: 0.8em">{{$userFind["name"]}}</td>
                <td>{{$userFind["identification"]}}</td>
                <td>{{$userFind["address"]}}</td>
                <td style="font-size: 0.8em">{{$userFind["phone"]}}</td>
            </tr>
        </tbody>
    </table>

</body>
</html>