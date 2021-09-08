

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<style>

</style>
</head>
<body>

<div class=""> 

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category list
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         
          @foreach ($categories as $user)
          <a class="dropdown-item" href="#">{{$user->category}}</a>
         @endforeach
        </div>
      </li>
     
    </ul>
    
  </div>
</nav>
</div>
<div class="container mt-5">
  <div class="row">
@foreach ($categories as $user)
<div class="card" style="width: 18rem;">
  <img src="{{$user->gallery}}" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">{{$user->name}}</h5>
    <p class="card-text">{{$user->description}}</p>
    <button onclick="addtocart({{$user->id}})" class="btn btn-primary">Add to cart</button>
  </div>
</div>
@endforeach

</div>
</div>
<!--carttable-->
<div class="carttable">
    <h1>Add to cart</h1>
<table style="width:100%">
  <tr>
  <th>Product ID</th>
    <th>Product Name</th>
    <th>Description</th>
    <th>price</th>
    <th>Category</th>
  </tr>
  <tr id="carttable">
  </tr>
</table>
</div>
<!--carttable End-->

<script type="text/javascript">
var  category= '<?php echo json_encode($categories); ?>'
var cartproduct=[];
var products= JSON.parse(category);
console.log(products);
function addtocart(id){
for(var i=0; i<products.length; i++){
    if(products[i].id == id){
        cartproduct.push(products[i]);
        $("carttable").append(`
    <th>+'products[i].id'+</th>
    <th>+'products[i].name'+</th>
    <th>+'products[i].description'+</th>
    <th>+'products[i].price'+</th>
    <th>+'products[i].category'+</th>`);
    }
    
}

}

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
