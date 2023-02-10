<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="navbar.css">
        <link rel="stylesheet" href="test-nav.css">
    </head>
    <body>
        <div class="position-absolute top-0 start-0" style="z-index:2;width:100%">
            <nav class="navbar navbar-expand-lg navbar-light"style="background-color:white;">
            <div class="container-fluid ">
                <a class="navbar-brand d-lg-none" href="#"><img class="logo" src="img\logo.png" alt="Thailand Post"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex  justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav ">
                    <!-- จอใหญ่ -->
                    <li class="nav-item d-none d-lg-block pe-4">
                    <a class="nav-link pt-4" aria-current="page" href="index.php">หน้าแรก</a>
                    </li>
                    <li class="nav-item d-none d-lg-block pe-4">
                            <div class="news3 pt-2">
                                <div class="dro">
                                    <button class="dropbtn nav-link  pt-3">บริการ 
                                    
                                    </button>
                                    <div class="dropdown-content">
                                    <a class=" nav-link " href="service-domestic.php">ไปรษณีย์ในประเทศ</a>
                                    <a class=" nav-link " href="service-abroad.php">ไปรษณีย์ระหว่างประเทศ</a>
                        
                                    </div>
                                </div> 
                            </div>
                    </li>
                    <li class="nav-item d-none d-lg-block pe-4">
                            <div class="news3 pt-2">
                                <div class="dro">
                                    <button class="dropbtn nav-link  pt-3">ร้านค้าไปรษณีย์
                                    
                                    </button>
                                    <div class="dropdown-content">
                                    <a class=" nav-link " href="shop.php">กล่อง/ซอง</a>
                                    <a class=" nav-link " href="shopbox.php">ตู้รับจดหมาย</a>
                                    <a class=" nav-link " href="shopproduct.php">ของที่ระลึก</a>
                        
                                    </div>
                                </div> 
                            </div>
                    </li>
                    <!-- จอเล็ก -->
                    <li class="nav-item d-lg-none ps-4">
                    <a class="nav-link active" aria-current="page" href="#">หน้าแรก</a>
                    </li>
                    <li class="nav-item d-lg-none ps-4">
                    <a class="nav-link" href="#">บริการ</a>
                    </li>
                    <li class="nav-item d-lg-none ps-4">
                    <a class="nav-link" href="#">ร้านค้าไปรษณีย์</a>
                    </li>


                    <img class="logo d-none d-lg-block pt-0" src="img\logo.png" alt="Thailand Post">
                     
                    <!-- จอใหญ่ -->
                    <li class="nav-item d-none d-lg-block ps-4">
                            <div class="news3 pt-2">
                                <div class="dro">
                                    <button class="dropbtn nav-link  pt-3">เครื่องมือ
                                    
                                    </button>
                                    <div class="dropdown-content">
                                    <a class=" nav-link " href="https://track.thailandpost.co.th/" target="_blank">ตรวจสอบสถานะ</a>
                                    <a class=" nav-link " href="https://www.thailandpost.co.th/index.php?page=rate_result_nrs" target="_blank">คำนวณอัตราค่าบริการ</a>
                                    </div>
                                </div> 
                            </div>
                    </li>
                    <li class="nav-item d-none d-lg-block ps-4">
                            <div class="news3 pt-2">
                                <div class="dro">
                                    <button class="dropbtn nav-link  pt-3">เกี่ยวกับเรา
                                    
                                    </button>
                                    <div class="dropdown-content">
                                    <a class=" nav-link " href="personnel.php" >บุคลากร</a>
                                    <a class=" nav-link " href="structure.php" >โครงสร้างองค์กร</a>
                                    <a class=" nav-link " href="history.php" >ประวัติและค่านิยมองค์กร</a>
                                    
                                    </div>
                                </div> 
                            </div>
                  
                    </li>
                    <li class="nav-item d-none d-lg-block ps-4">
                    <a class="nav-link pt-4" href="#">ติดต่อ</a>
                    </li>
                    <!-- จอเล็ก -->
                    <li class="nav-item d-lg-none ps-4">
                    <a class="nav-link" href="#">เครื่องมือ</a>
                    </li>
                    <li class="nav-item d-lg-none ps-4">
                    <a class="nav-link" href="#">เกี่ยวกับเรา</a>
                    </li>
                    <li class="nav-item d-lg-none ps-4">
                    <a class="nav-link" href="#">ติดต่อ</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>