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
                <p style="font-size:20px; font-weight:bold;">Create New Employee</p>
                <form action="{{route('company.store')}} " class="was-validated" method="POST" novalidate>
                    @csrf
                    <div class="form-group has-validation">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control {{$errors->has('name')?'is-invalid':''}}" required value="{{old('name')}}">
                        @if($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                @endif
                    </div>
                    <div class="form-group has-validation">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control  {{$errors->has('email')?'is-invalid':''}}" required value="{{old('email')}}">
                        @if($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('email')}}</strong>
                    </span>
                @endif
                    </div>
                    <div class="form-group has-validation">
                        <label for="logo">logo</label>
                        <input type="file" name="logo" id="logo" class="form-control  {{$errors->has('logo')?'is-invalid':''}}" required value="{{old('logo')}}">
                        @if($errors->has('logo'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('logo')}}</strong>
                    </span>
                @endif
                    </div>
                    <div class="form-group has-validation">
                        <label for="website_link">Website</label>
                        <input type="text" name="website_link" id="website_link" class="form-control  {{$errors->has('website_link')?'is-invalid':''}}" required value="{{old('website_link')}}">
                        @if($errors->has('website_link'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('website_link')}}</strong>
                        </span>
                    @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Create Employee</button>
                    <a href="{{route('company.index')}}" class="btn btn-primary">GO Back</a>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
