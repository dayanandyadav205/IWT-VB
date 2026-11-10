<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>

    <style>
        table, th, td{
            border: 2px solid black;
            padding: 10px;
        }

        table{
            border-collapse: collapse;
            width: 100%;
            /* border-spacing: 10px; */
        }
    </style>
</head>

<body>
    <h1>HTML Table</h1>
    <table>
        <tr>
            <th rowspan="2">S. No</th>
            <th rowspan="2">Name of student</th>
            <th rowspan="2">Roll No</th>
            <th rowspan="2">Branch</th>
            <th rowspan="2">Class & Section</th>
            <th colspan="5">SGPA</th>
        </tr>

        <tr>
            <td>I</td>
            <td>II</td>
            <td>III</td>
            <td>IV</td>
            <td>V</td>
            
        </tr>

        <tr>
            <td>1</td>
            <td>Amit Kumar</td>
            <td>0425CS2410005</td>
            <td>CSE</td>
            <td> CSE Vth A</td>
            <td>7.5</td>
            <td>7.5</td>
            <td>7.5</td>
            <td>7.5</td>
            <td>7.5</td>
        </tr>

        <tr>
            <td>1</td>
            <td>Amit Kumar</td>
            <td>0425CS2410005</td>
            <td>CSE</td>
            <td> CSE Vth A</td>
            <td>7.5</td>
            <td>7.5</td>
            <td>7.5</td>
            <td>7.5</td>
            <td>7.5</td>
            
        </tr>

        <tr>
            <td>1</td>
            <td>Amit Kumar</td>
            <td>0425CS2410005</td>
            <td>CSE</td>
            <td> CSE Vth A</td>
            <td>7.5</td>
             <td>7.5</td>
            <td>7.5</td>
            <td>7.5</td>
            <td>7.5</td>
        </tr>

    </table>
</body>

</html>