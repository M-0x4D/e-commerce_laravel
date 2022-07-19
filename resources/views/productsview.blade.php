<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    @foreach ($products as $item)
    <div class="card" style="width: 18rem;">
        <img width="100px" class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1024px-Image_created_with_a_mobile_phone.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$item->id}}</h5>
          <p class="card-text"> {{$item->product_name}}</p>
          <p class="card-text"> {{$item->price}}</p>
          <p class="card-text"> {{$item->description}}</p>
          <a href="{{Route('products.show' , $item->id)}}" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    @endforeach


    @foreach ($category as $cat)
    <div class="card" style="width: 18rem;">
        <img width="100px" class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1024px-Image_created_with_a_mobile_phone.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$cat->id}}</h5>
          <p class="card-text"> {{$cat->category_name}}</p>
          
          <a href="{{Route('cat.show' , $cat->id)}}" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    @endforeach


    {{-- @for ($i = 0; $i < 6; $i++)
    <div class="card" style="width: 18rem;">
        <img width="100px" class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1024px-Image_created_with_a_mobile_phone.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">card name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    @endfor --}}
    
</body>
</html>