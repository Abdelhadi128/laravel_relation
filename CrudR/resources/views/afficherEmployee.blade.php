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
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Employer details</th>
                <th>Suprimer</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->employeeId }}</td>
                    <td>{{ $employee->nom }}</td>
                    <td>{{ $employee->email }}</td>
                    <td><a href="{{ route('relation.show',$employee->employeeId) }}">Afficher details</a></td>
                    <td>
                        <form action="{{ route('relation.edit', $employee->employeeId)}}" method="GET">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Suprimer</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('relation.destroy',$employee->employeeId) }}" class="btn btn-success">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $employees->links() }}
    </div>
</body>
</html>
