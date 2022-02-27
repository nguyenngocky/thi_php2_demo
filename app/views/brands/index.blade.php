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
        <a href="{{BASE_URL .'/'}}" class="btn btn-primary">Quay lại trang chủ</a>
        <table class="table">
            <thead>
                <tr>
                     <th>STT</th>
                     <th>name</th>
                     <th>address</th>
                     <th>logo</th>
                     <th>founding_year</th>
                     <th>created_at</th>
                     <th>updated_at</th>
                     <th>
                        <a href="{{ BASE_URL. 'brands/tao'}}" class="btn btn-primary">Tạo mới</a>
                     </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brand as $br)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$br->name}}</td>
                    <td>{{$br->address}}</td>
                    <td><img width="150px" src="{{IMG_URL .$br->logo}}" alt=""></td>
                    <td>{{$br->founding_year}}</td>
                    <td>{{$br->created_at}}</td>
                    <td>{{$br->updated_at}}</td>
                    <td>
                        <a href="{{ BASE_URL .'brands/sua/'.$br->id}}" class="btn btn-primary">Sửa</a>
                        <a href="{{ BASE_URL .'brands/xoa/'.$br->id}}" class="btn btn-primary">Xóa</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>