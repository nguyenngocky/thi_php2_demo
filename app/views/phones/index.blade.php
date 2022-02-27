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
                     <th>image</th>
                     <th>brand_id</th>
                     <th>warranty_months</th>
                     <th>manufacturer_date</th>
                     <th>updated_at</th>
                     <th>
                        <a href="{{ BASE_URL. 'phone/tao'}}" class="btn btn-primary">Tạo mới</a>
                     </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($phone as $ph)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$ph->name}}</td>
                    <td><img width="150px" src="{{IMG_URL .$ph->image}}" alt=""></td>
                    <td>{{$ph->brand->name}}</td>
                    <td>{{$ph->warranty_months}}</td>
                    <td>{{$ph->manufacturer_date}}</td>
                    <td>{{$ph->created_at}}</td>
                    <td>{{$ph->updated_at}}</td>
                    <td>
                        <a href="{{ BASE_URL .'phone/sua/'.$ph->id}}" class="btn btn-primary">Sửa</a>
                        <a href="{{ BASE_URL .'phone/xoa/'.$ph->id}}" class="btn btn-primary">Xóa</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>