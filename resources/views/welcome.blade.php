<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Datatables implementation in laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="//code.jquery.com/jquery-1.12.3.js"></script>
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script
            src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet"
            href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet"
            href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
        <script
            src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body>
        <table class="table" id="table">
        <thead>
        <tr>
        <th class="text-center">#</th>
        <th class="text-center">First Name</th>
        <th class="text-center">Last Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Gender</th>
        <th class="text-center">Country</th>
        <th class="text-center">Salary ($)</th>
        <th class="text-center">Actions</th>
        </tr>
        </thead>
<tbody>
    @foreach($data as $item)
    <tr class="item{{$item->id}}">
    <td>{{$item->id}}</td>
    <td>{{$item->first_name}}</td>
    <td>{{$item->last_name}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->gender}}</td>
    <td>{{$item->country}}</td>
    <td>{{$item->salary}}</td>
    <td><button class="edit-modal btn btn-info"
    data-info="{{$item->id}},{{$item->first_name}},{{$item->last_name}},{{$item->email}},{{$item->gender}},{{$item->country}},{{$item->salary}}">
    <span class="glyphicon glyphicon-edit"></span> Edit
    </button>
    <button class="delete-modal btn btn-danger"
    data-info="{{$item->id}},{{$item->first_name}},{{$item->last_name}},{{$item->email}},{{$item->gender}},{{$item->country}},{{$item->salary}}">
    <span class="glyphicon glyphicon-trash"></span> Delete
    </button></td>
    </tr>
    @endforeach
</tbody>
</table>
    </body>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
</html>
