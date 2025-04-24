<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>Phone number</th>
                <th>Adress</th>

            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $employee->phone }}</td>
                    <td>{{ $employee->adress }}</td>
                </tr>
        </tbody>
    </table>
</body>
</html>
