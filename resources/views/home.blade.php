<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Query Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid p-5 bg-light shadow my-5">
        <div class="row">
            <div class="col-sm-6">
                <form method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name='name'>
                      </div>
                      <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name='city'>
                      </div>
                      <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="number" class="form-control" id="marks" name='marks'>
                      </div>
                    <button type="submit" class="btn btn-primary mb-3">Submit</button>
                  </form>
                  @if (session()->has('status'))
                  <p class="alert alert-success">
                    {{session('status')}}
                </p>
                  @endif
            </div>
            <div class="col-sm-6">
                <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">City</th>
                        <th scope="col">Marks</th>
                        <th colspan="2" >Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $stu)
                        <tr>
                            <td>{{$stu->id}}</td>
                            <td>{{$stu->name}}</td>
                            <td>{{$stu->city}}</td>
                            <td>{{$stu->marks}}</td>
                            <td>
                                <a href="{{route('edit',$stu->id)}}" class="btn btn-info btn-sm">Edit</a>
                                <a href="{{route('delete',$stu->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</body>
</html>