<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .edit-btn {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .edit-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h2>Form Data Table</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Meter_Token</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($names as $name)
            <tr>
                <td>{{ $name->id }}</td>
                <td>{{ $name->meter_name}}</td>
                <td>{{ $name->address }}</td>
                <td>{{ $name->meter_token }}</td>
                <td>{{ $name->email }}</td>
                <td>
                    <button><a href="/edit/{{ $name->id }}" class="button">Click Me</a></button>
                </td>
                <td>
                    <form action="/delete/{{ $name->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
          
         
        </tbody>
    </table>

</body>
</html>
