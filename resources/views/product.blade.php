
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="text-center">
   <h1> Product Lists</h1><a  href="/add_new" class="btn btn-success float-right">+ Add New</a>
   
   <div class="rows">

@foreach($errors->all() as $error)

<div class="alert alert-danger" role="alert">
{{$error}}
</div>

@endforeach


<table class="table table-dark">
<th>PRODUCT</th>
<th>SKU</th>
<th>DESCRIPTION</th>
<th>INVENTORY</th>
<th>ACTION</th>
@foreach($products as $product)

<tr>
<td>{{$product->name}}</td>
<td>{{$product->sku}}</td>
<td>{{$product->description}}</td>
<td>{{$product->inventory}}</td>
<td>

<a href="deleteproduct/{{$product->id}}" class="btn btn-danger">Delete</a>
<a href="editproduct/{{$product->id}}" class="btn btn-success">Edit</a>
</td>
</tr>
@endforeach
</table>
</div>

   </div>
    </div>
    </div>
</body>
</html>
