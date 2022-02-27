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
              <input type="text" name="name" class="form-control" id="" placeholder="Nhập vào name">
            </div>
            
            <div class="mb-3">
              <label for="" class="form-label">Image</label>
              <input type="file" name="img" class="form-control" id="" >
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Hãng</label>
                <select class="form-select" name="brand_id" id="">
                  @foreach($brand as $br)
                  <option value="{{$br->id}}">{{$br->name}}</option>
                  @endforeach
                </select>
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Bảo hành</label>
                <input type="number" name="warranty_months" class="form-control"  placeholder="Nhập vào warranty_months" >
              </div>

              <div class="mb-3">
                <label for="" class="form-label">	NSX</label>
                <input type="date" name="manufacturer_date" class="form-control"  placeholder="Nhập vào manufacturer_date" >
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>