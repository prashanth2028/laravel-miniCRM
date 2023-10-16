<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 10 Employee Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="bg-secondary">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <p style="font-size:20px; font-weight:bold;">Employee details</p>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" value="{{$company->name}} " readonly>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" value="{{$company->email}} " readonly>
                </div>

                <div class="form-group">
                    <label for="logo">logo</label>
                    <input type="file" class="form-control" value="{{$company->logo}} " readonly>
                </div>

                <div class="form-group">
                    <label for="website_link">Joining date</label>
                    <input type="text" class="form-control" value="{{$company->website_link}} " readonly>
                </div>


                <a href="{{route('company.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>


