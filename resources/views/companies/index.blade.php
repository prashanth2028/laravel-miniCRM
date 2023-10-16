
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 10 company Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <strong>Company List</strong>
                        <a href="{{route('company.create')}} " class="btn btn-primary btn-xs float-end py-0">Create Company</a>
                        <a href="{{route('home')}} " class="btn btn-primary btn-xs float-end py-0">DashBoard</a>

                        <table class="table table-responsive table-bordered table-stripped" style="margin-top:10px;">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    {{-- <th>Logo</th> --}}
                                    <th>Web Site</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $companies as $key => $company )
                                <tr>
                                    <td>{{$key +1}}</td>
                                    <td>{{$company->name}} </td>
                                    <td>{{$company->email}} </td>
                                    {{-- <td>{{$company->logo}} </td> --}}
                                    <td>{{$company->website_link}} </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href=" {{route('company.show',$company->id)}}" class="btn btn-primary btn-xs py-0 mx-1">Show</a>
                                            <a href="{{route('company.edit',$company->id)}}" class="btn btn-warning btn-xs py-0 mx-1">Edit</a>

                                            <form action="{{route('company.destroy',$company->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-xs py-0">Delete</button>
                                            </form>
                                        </div>
                                        </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{$companies->links()}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>



