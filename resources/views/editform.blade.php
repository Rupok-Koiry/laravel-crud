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
            <div class="col-sm-6 m-auto">
                <form method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name='name' value="{{$student->name}}">
                      </div>
                      <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name='city' value="{{$student->city}}">
                      </div>
                      <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="number" class="form-control" id="marks" name='marks' value="{{$student->marks}}">
                      </div>
                    <button type="submit" class="btn btn-primary mb-3">Submit</button>
                  </form>
                  @if (session()->has('status'))
                  <p class="alert alert-success text-center">
                    {{session('status')}}
                </p>
                  @endif
            </div>
        </div>
    </div>
</body>
</html>