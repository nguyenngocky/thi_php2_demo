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
      <a href="{{BASE_URL. 'brands'}}" class="btn btn-primary">Quay  lại</a>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="" placeholder="Nhập vào name">
              <span style="color:red; font-size: 14px"><?php if(isset($_GET['name-err'])) echo $_GET['name-err']?></span>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="" placeholder="Nhập vào address">
                <span style="color:red; font-size: 14px"><?php if(isset($_GET['address-err'])) echo $_GET['address-err']?></span>
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Logo</label>
                <input type="file" name="img" class="form-control" id="" >
                <span style="color:red; font-size: 14px"><?php if(isset($_GET['img-err'])) echo $_GET['img-err']?></span>
              </div>

              <div class="mb-3">
                <label for="" class="form-label">founding_year</label>
                <input type="number" name="founding_year" class="form-control" id="" placeholder="Nhập vào founding_year">
                <span style="color:red; font-size: 14px"><?php if(isset($_GET['founding_year-err'])) echo $_GET['founding_year-err']?></span>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>