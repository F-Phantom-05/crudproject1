<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 9 CRUD Tutorial Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container mt-2 d-flex flex-column align-items-center justify-content-center">
        <div class="row">
            <div class="col-lg-12 margin-tb d-flex flex-column align-items-center mb-3">
                <div class="pull-left mt-5">
                    <h2>CRUD COMPANY</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('companies.create') }}"> Create Company</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr class="rows">
                    <th>S.No</th>
                    <th>Company logo</th>
                    <th>Company Name</th>
                    <th>Company Email</th>
                    <th>Company Address</th>
                    <th width="180px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#myModal{{$company->id}}">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ $company->photo }}"  style="width: 100px; height: 100px;">
                                </div>
                            </a>
                        </td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->address }}</td>
                        <td>
                            <form action="{{ route('companies.destroy',$company->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $companies->links() !!}
    </div>
</body>
</html>