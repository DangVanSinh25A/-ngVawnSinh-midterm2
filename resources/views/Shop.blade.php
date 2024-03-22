<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="tiny-slider.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
@extends('master')  
    @section('card')
    <div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">
    <?php foreach ($products as $product) :?>

		      		<!-- Start Column 1 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="{{asset('images/'.$product['img'])}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">{{$product['Name']}}</h3>
							<strong class="product-price">{{$product['price']}}</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 1 -->


       <?php endforeach ?>
       </div>
		    </div>
		</div>
    @endsection
</body>
</html>