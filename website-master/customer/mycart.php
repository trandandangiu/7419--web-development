<!doctype html>
<html lang="en">
  <head>
  	<?php include 'layout_head.php';
    session_start();
   ?>
    <title>MSW SHOW CASE WOOD</title>

  </head>
  <body>
  	<?php include 'layout_header.php';?>
    
	<div class="container-fluid">
    <h1><i> Cart Page </i></h1>
		<!-- Nội dung chính của PAGE ở đây --> 
    <div class="cart-table">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Product name</th>
        <th scope="col">Product price (VNĐ)</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody id="cart-items">
      <!-- Danh sách sản phẩm trong giỏ hàng sẽ được hiển thị tại đây -->
    </tbody>
  </table>
</div>

<div class="total-price">
  <h5>Total money: <span id="total-price">0 VNĐ</span></h5>
</div>

<button id="checkout" class="btn btn-success">Payments</button>
<hr>

      <div class="row">
       <div class="col-lg-3">
        <form  method="POST">
          <div class="card">
            <img src="data:image/jpeg;base64,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" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Ốp Lưng bằng gỗ khắc tên cho Iphone </h5>
              <p class="card-text"><b>Price: 500.000</b></p>
              <p class="card-text"><b>ID: 1</b></p>
              <button type="sumbit" name="Add_To_Cart"z class="btn btn-info">Add To Cart</button>
              <input type="hidden"name="Item_Name" value="Ốp Lưng bằng gỗ khắc tên cho Iphone ">
              <input type="hidden"name="Price" value="500.000">
            </div>
          </div>
        </form>
      </div>

        <div class="col-lg-3">
        <form method="POST">
          <div class="card">
            <img src="https://bizweb.dktcdn.net/100/200/904/products/op-dien-thoai-go-ip7-v2.jpg?v=1541643932050" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Ốp Lưng bằng gỗ điêu khắc theo yêu cầu</h5>
              <p class="card-text"><b>Price: 400.000</b></p>
              <p class="card-text"><b>ID: 2</b></p>
              <button type="sumbit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden"name="Item_Name" value="Ốp Lưng bằng gỗ điêu khắc theo yêu cầu">
              <input type="hidden"name="Price" value="400.000">
            </div>
          </div>
        </form>
        </div>

        <div class="col-lg-3">
        <form  method="POST">
          <div class="card">
            <img src="https://product.hstatic.net/1000309554/product/164a_8bd94e1a1fd442388a5dbbe741423e1c_6e227af2f4f44814b8302b797e73cc99_fe4f713559444f558cdf11cb0939460b_large.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Ốp Lưng Iphone bằng gỗ điêu khắc theo yêu cầu</h5>
              <p class="card-text"><b>Price: 600.000</b></p>
              <p class="card-text"><b>ID: 3</b></p>
              <button type="sumbit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden"name="Item_Name" value="Ốp Lưng Iphone bằng gỗ điêu khắc theo yêu cầu">
              <input type="hidden"name="Price" value="600.000">
            </div>
          </div>
        </form>
        </div>

        <div class="col-lg-3">
        <form  method="POST">
          <div class="card">
            <img src="https://product.hstatic.net/1000309554/product/ac9e_6f695527b54c4f569824f28a5bd6ed20_abb2439909824aa8a2eaaf2881f0cea9_65a9940f470a4a3a9074d117125a4a63_1024x1024.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Ốp Lưng SamSung bằng gỗ điêu khắc theo yêu cầu</h5>
              <p class="card-text"><b>Price: 350.000</b></p>
              <p class="card-text"><b>ID: 4</b></p>
              <button type="sumbit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden"name="Item_Name" value="Ốp Lưng SamSung bằng gỗ điêu khắc theo yêu cầu">
              <input type="hidden"name="Price" value="350.000">
            </div>
          </div>
        </form>
        </div>

        <div class="col-lg-3">
        <form method="POST">
          <div class="card">
            <img src="https://www.dialylacviet.com/uploads/files/2020/09/10/hinh-op-lung-dep-chat-3.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Các mẫu Ốp lưng Iphone độc lạ</h5>
              <p class="card-text"><b>Price: 350.000</b></p>
              <p class="card-text"><b>ID: 5</b></p>
              <button type="sumbit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden"name="Item_Name" value="Cái mẫu Ốp lưng Iphone khác nhau">
              <input type="hidden"name="Price" value="350.000">
            </div>
          </div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="" method="POST">
          <div class="card">
            <img src="data:image/jpeg;base64,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" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Ốp lưng chạm khắc rồng cực kỳ uy tín</h5>
              <p class="card-text"><b>Price: 500.000</b></p>
              <p class="card-text"><b>ID: 6</b></p>
              <button type="sumbit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden"name="Item_Name" value="Cái mẫu Ốp lưng Iphone khác nhau">
              <input type="hidden"name="Price" value="500.000">
            </div>
          </div>
        </form>
        </div>
        <div class="col-lg-3">
        <form method="POST">
          <div class="card">
            <img src="https://product.hstatic.net/1000309554/product/omax_124925d589214cf2a69ef6d7661c93f4_5767b650bed24522a15f1af64585d53f_8f530006020b4a8295c461c8adf0da52_1024x1024.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Ốp lưng Iphone 14 điêu khắc theo yêu cầu</h5>
              <p class="card-text"><b>Price: 600.000</b></p>
              <p class="card-text"><b>ID: 7</b></p>
              <button type="sumbit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden"name="Item_Name" value="Cái mẫu Ốp lưng Iphone khác nhau">
              <input type="hidden"name="Price" value="600.000">
            </div>
          </div>
        </form>
        </div>
  <style>
    .card{
      border-radius:1rem;
      width: 250px;
    }

  </style>
  <script src="cart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
