<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="{{route('products.store')}}" method="post">
    
   @csrf


    <div class="container">
      <label for="product_name"><b>product name </b></label>
      <input type="text" placeholder="Enter product name" name="product_name" >

      <label for="description"><b>product description </b></label>
      <input type="text" placeholder="Enter description" name="description" >

      
      <label for="category_id"><b>category_id </b></label>
      <input type="text" placeholder="Enter category_id" name="category_id" >

      <label for="price"><b>price </b></label>
      <input type="text" placeholder="Enter price" name="price" >

      
  
  
      <button type="submit">store</button>
 
  </form>


  <form action="{{route('cat.store')}}" method="post">

    @csrf
    <label for="category_name"><b>category name </b></label>
      <input type="text" placeholder="Enter category name" name="category_name" >

      <button type="submit">store</button>
  </form>

</body>
</html>