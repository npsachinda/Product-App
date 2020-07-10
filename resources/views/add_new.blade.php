<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <div class="rows">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a new Product</div>
                <div class="panel-body">
               
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/saveproduct') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                            <label for="product_name" class="col-md-4 control-label">Product Name*</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control" name="product_name" >

                                @if ($errors->has('product_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('product_sku') ? ' has-error' : '' }}">
                            <label for="product_sku" class="col-md-4 control-label">Product SKU*</label>

                            <div class="col-md-6">
                                <input id="product_sku" type="text" class="form-control" name="product_sku" >

                                @if ($errors->has('product_sku'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_sku') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Product Description*</label>

                            <div class="col-md-6">
                          
                                <textarea rows="4", cols="54" class="form-control" id="description" name="description" style="resize:none, "></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('inventory') ? ' has-error' : '' }}">
                            <label for="inventory" class="col-md-4 control-label">Inventory*</label>

                            <div class="col-md-6">
                                <input id="inventory" type="text" class="form-control" name="inventory" >

                                @if ($errors->has('inventory'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('inventory') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <a style="color:red" class="col-md-4 control-label">* Required Fields </a>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> SAVE
                                </button>
                                <button type="reset" class="btn btn-warning">
                                    <i class="fa fa-btn fa-sign-in"></i> CLEAR
                                </button>
                                <a  href="/products" class="btn btn-danger">BACK</a>

                                 </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>