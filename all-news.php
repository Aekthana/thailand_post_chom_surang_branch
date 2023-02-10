<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข่าวประชาสัมพันธ์</title>
    <link rel="stylesheet" href="style-all-news.css">
</head>
<body>
    <?php 
         include("navbar.php");
    ?>
    
    <div class="container">
        <div class="row pt-4">
            <div class="col-12 border-bottom">
                <h5>ข่าวประชาสัมพันธ์</h5>
            </div>
            <div class="col-12 d-flex flex-row-reverse">
                <nav aria-label="Page navigation example" >
                    <ul class="pagination">
                        <li class="page-item">
                        <a class="page-link" style="color:#EE2B47" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                        </li>
                        <li class="page-item"><a class="page-link" style="color:#EE2B47" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" style="color:#EE2B47" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" style="color:#EE2B47" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#" style="color:#EE2B47" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                        </li>
                    </ul>
                </nav>  
            </div>
        </div>
    </div>

   
</body>
</html>