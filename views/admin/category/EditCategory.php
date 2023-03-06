<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
    

    <header>



    
    <?php
        $conn =new PDO("mysql:host=localhost;dbname=btth01_cse485;charset=utf8","root","");
        $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $url_components = parse_url($url);
        parse_str($url_components['query'], $params);


        $sql3 = "SELECT ten_tloai FROM theloai WHERE ma_tloai= ?";
        $stmt3 = $conn->prepare($sql3);
        $stmt3->execute([$params['id']]);
        $data3= $stmt3->fetch();
        // print_r($data3[0]);    
        // print_r($params['id']);
        try {
            $conn =new PDO("mysql:host=localhost;dbname=btth01_cse485;charset=utf8","root","");
          // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // if(isset($_POST['update_theloai'])){
            //     $ma_tloai =$_POST['ma_tloai'];
            //     $ten_tloai =$_POST['ten_tloai'];
            // }
        
        //   $sql = "UPDATE theloai SET ten_tloai='rap'  WHERE ma_tloai=1";
        
          // Prepare statement
        //   $stmt = $conn->prepare($sql);
        
          // execute the query
        //   $stmt->execute();
           // echo a message to say the UPDATE succeeded
            // echo $stmt->rowCount() . "Sửa thành công ";
        } catch(PDOException $e) {
          echo $sql . "<br>" . $e->getMessage();
        }
        

    
        
        $conn = null;
    ?>    


        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="h3">
                    <a class="navbar-brand" href="#">Administration</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Trang ngoài</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="category.php">Thể loại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="author.php">Tác giả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="article.php">Bài viết</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

    </header>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa thông tin thể loại</h3>
                <?php
                echo   "<form method='post' action='edit_category.php?id=".$params['id']."'>"
                ?>
                <!-- <form method="post" action="edit_category.php?id="> -->
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Mã thể loại</span>
                        <?php
                            echo  "<input type='text' class='form-control' name='ma_tloai' readonly value='".$params['id']."'  >";
                        ?>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên thể loại</span>
                        <?php
                        echo "<input type='text' class='form-control' name='ten_tloai' placeholder='".$data3[0]."'>";
                        ?>
                    </div>
                    <div class="form-group  float-end ">
                        <input value="Lưu lại"  class="btn btn-success" type="submit">
                        
                        <a href="category.php" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
                <!-- <p style="color:green" >Lưu thành công</p>  -->
                <?php
                    $conn =new PDO("mysql:host=localhost;dbname=btth01_cse485;charset=utf8","root","");
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        $ma_tloai =$_POST['ma_tloai'];
                        $ten_tloai =$_POST['ten_tloai'];
                        // echo $ma_tloai;
                        // echo $ten_tloai;
                        $sql = "UPDATE theloai SET ten_tloai='$ten_tloai'  WHERE ma_tloai='$ma_tloai'";   
                        // Prepare statement
                        $stmt = $conn->prepare($sql);
                        // execute the query
                        $stmt->execute();
                        echo "<p style='color:green' >Lưu thành công</p> ";
                    }
                ?>
            </div>
        </div>
    </main>
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>