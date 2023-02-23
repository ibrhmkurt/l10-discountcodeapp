<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Code Kontrol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5" style="max-width: 500px">

    <div class="alert alert-warning mb-4 text-center">
        <h2 class="display-6">Laravel Discount Code Control</h2>
    </div>
    <form method="POST" action="{{ url('/code-control')}}">
        @csrf
        <div class="form-group mb-3">
            <input name="used_code" type="text" class="form-control">
            @error("used_code")
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="d-grid mb-3">
            <input type="submit" value="Submit" class="btn btn-primary">
        </div>
    </form>
</div>
</body>
</html>
