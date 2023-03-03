<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="test.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hiển thị sản phẩm</title>
 
</head>
<body>
<style>
    #forml{
            padding-left: 400px;
            padding-top:30px;
            width: 400px;
    }
    .tinhtien{
        background: greenyellow ;
        position: relative;
        top:22px;
    }
    .hienthi{
            background-color:Azure;
            width: 380px;
            height: 150px;
            margin-left: 400px;
            padding-top:20px;
            padding-left: 20px;
            padding-top: 20px;

    .body{
        background: #FFFFCC;
        padding-left:20px  ;
        padding-bottom: 10px ;
        width: 500px;
    }
    .input{
        border-radius: 10px;
        height: 20px;
        left: 20px;
    }
    .bt1{
        border-radius:10px;
    }
</style>
    <?php 
        ini_set('display_errors', 0);
        session_start(); // bắt đầu session
        if (!empty($_POST['img']) && !empty($_POST['name']) && !empty($_POST['code']) && !empty($_POST['Price'])) { // lưu thông tin khách hàng vào mảng
            $sanpham = array(
                'img' => $_POST['img'],
                'name' => $_POST['name'],
                'code' => $_POST['code'],
                'Price' => $_POST['Price']
            );
            // kiểm tra xem mảng "sản phẩm" đã tồn tại trong session hay chưa
            if (!isset($_SESSION['sanpham'])) {
                $_SESSION['sanpham'] = array();
            };
            array_push($_SESSION['sanpham'], $sanpham); //thêm thông tin khách hàng vào mảng "sản phẩm" trong session
        };
        foreach ($_SESSION['sanpham'] as $sanpham) { // hiển thị thông tin sản phẩm
            echo "<div class='hienthi'>";
            echo "<p  >Thông tin chi tiết của sản phẩm  </p></br>";
            echo $sanpham['img']. ' - ' . $sanpham['name'] . ' - ' . $sanpham['code'] . ' - ' . $sanpham['Price'] . '<br>';
            echo "</div>";
        };        
    ?>
    <form id="forml" name="forml" method="post" action="test.php">
        <table class = "body">
            <tr>
            <td><div class="tinhtien" ></td>
            <td><h1 class="tinhtienh1">Thông tin đăng nhập</h1></td>
            </tr>
            <tr>
                <td>Hình ảnh :</td>
                <td><input class="input"  type="text" name="img"value="<?php if(isset($_POST['img']))  echo $sanpham['img']; ?>" ></td>
            </tr>
            <tr>
                <td>Tên:</td>
                <td><input class="input" type="text" name="name" value="<?php if(isset($_POST['name']))  echo $sanpham['name']; ?>"></td>
            </tr>
            <tr>
                <td>Mã sản phẩm:</td>
                <td><input class="input" type="text" name="code" value="<?php if(isset($_POST['code']))  echo $sanpham['code']; ?>"></td>
            </tr>
            <br>
            <tr>
                <td>  Giá:</td>
                <td><input class="input" type="text" name="Price" value="<?php if(isset($_POST['Price']))  echo $sanpham['Price']; ?>"></td>
            </tr>
            <tr>
            <td>    <button type="submit" class="bt1" >Submit</button></td>
            </tr>

        </table>   
    </form>
     <br> <br>   










    <?php 
        $sanpham=array(
            'Thời trang nam'=>array(
                'sp1'=>array(
                    'img'=>'<img src="https://i.pinimg.com/236x/7e/70/42/7e704256d9ba2fbf17e16b1a19248a8d.jpg"/>',
                    'name'=>'Quần thời trang nam',
                    'code'=> 'QN12304',
                    'Price'=>399090,
                ),
                'sp2'=>array(
                    'img'=>'<img src="https://i.pinimg.com/236x/6a/f8/4d/6af84dcfc9d6d4c1e8797a7f25611fd9.jpg"/>',
                    'name'=>'Quần thời trang nam',
                    'code'=> 'QN12304',
                    'Price'=>3990900,
                ),
                'sp3'=>array(
                    'img'=>'<img src="https://i.pinimg.com/236x/74/00/f6/7400f671ab9158eb07e49a9b9cdf1d39.jpg"/>',
                    'name'=>'Quần thời trang nam',
                    'code'=> 'QN12304',
                    'Price'=>399090,
                )
                ),

                'THời trang nữ'=>array(
                    'sp01'=>array(
                        'img'=>'<img src="https://i.pinimg.com/236x/12/d9/c8/12d9c817e84b7196265853ab2bf5faa6.jpg"/>',
                        'name'=>'Quần thời trang nu',
                        'code'=> 'QN12304',
                        'Price'=>399090,
                    ),
                    'sp02'=>array(
                        'img'=>'<img src="https://i.pinimg.com/236x/d8/66/8a/d8668a1ba6e060ef445283ec2ce97a8b.jpg"/>',
                        'name'=>'Quần thời trang nu',
                        'code'=> 'QN12304',
                        'Price'=>3990900,
                    ),
                    'sp03'=>array(
                        'img'=>'<img src="https://i.pinimg.com/236x/c1/7e/bd/c17ebdccc72a0a086bae4f65aa33a618.jpg"/>',
                        'name'=>'Quần thời trang nu',
                        'code'=> 'QN12304',
                        'Price'=>399090,
                    )
                )
        )
    ?>
    <?php 
        foreach($sanpham as $k=>$vl){ 
        ?>
        <div class="container"> <div class="titles"><?php echo $k ?></div></div>
        <div class="container">
                <div class="row">
                    <?php foreach($vl as $k1=>$vl1){ 
                    ?>
                       <div class="col-sm-4">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $vl1['img']  ?></h5>
                                <p class="card-text"><?php echo $vl1['name'] ?></p>
                                <p class="card-text"><?php echo $vl1['code'] ?></p>
                                <p class="card-text"> <div class="price"><?php echo $vl1['Price'] ?> <span style="text-decoration:underline">đ</span></div></p>
                                <p class="card-text"> <button> Mua hàng</button></p>
                            </div>
                            </div>
                    
                        </div>
                    <?php
                    }
                    ?>
                    </div>
                </div>
        </div>
     
    <?php
    }
    ?>


<style>

        .titles{
            text-align:left;
            color: orange;
            font-size:  30px;
        }
        .price{
            color: red;
        }
        button{
            background: orange;
        }
       
    </style>
</body>
</html>