<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="" class="form-label">Name</label>
              <input type="text" value="{{$model->name}}" name="name" class="form-control" id="" placeholder="Nhập vào name">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Address</label>
                <input type="text" value="{{$model->address}}" name="address" class="form-control" id="" placeholder="Nhập vào address">
              </div>

              <div class="mb-3">
                  <img width="150px" src="{{$model->logo}}" alt="">
                <label for="" class="form-label">Logo</label>
                <input type="file" name="img" class="form-control" id="" >
              </div>

              <div class="mb-3">
                <label for="" value="{{$model->founding_year}}" class="form-label">founding_year</label>
                <input type="number" name="founding_year" class="form-control" id="" placeholder="Nhập vào founding_year">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>