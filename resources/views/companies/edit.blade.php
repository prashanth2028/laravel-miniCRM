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
@if(session()->has('success'))
<div class="alert alert-success">
    {{session()->get('success')}}
</div>
@endif
<a class="text-light" href="{{route('company.index')}}">Back to List</a>
<div class="card">
    <div class="card-body">
        <p style="font-size:20px; font-weight:bold;">Update company</p>

        <form action="{{route('company.update',$company->id)}}" class="was-validated" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group has-validation">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control {{$errors->has('name')?'is-invalid':''}}" value="{{$company->name}}" required>
                @if($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-validation">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control {{$errors->has('email')?'is-invalid':''}}" value="{{$company->email}}" required>
                @if($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('email')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-validation">
                <label for="logo">logo</label>
                <input type="file" name="logo" id="logo" class="form-control {{$errors->has('logo')?'is-invalid':''}}" value="{{$company->logo}}" required>
                @if($errors->has('logo'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('logo')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-validation   ">
                <label for="website_link">Web Site</label>
                <input type="text" name="website_link" id="website_link" class="form-control {{$errors->has('website_link')?'is-invalid':''}}" value="{{$company->website_link}}" required>
                @if($errors->has('website_link'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('website_link')}}</strong>
                    </span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update Employee</button>
        </form>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

