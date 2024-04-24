<?php
// กำหนด URL ของหน้าต่างๆที่ต้องการให้เมนูลิงค์ไป
$services_step_url = "../../pages/services/steps-for-treatment.php";
$doctor_schedule_url = "../../pages/services/doctor-schedule.php";
$special_services_url = "../../pages/services/special-services.php";
$doctor_list_url = "../../pages/services/doctor-list.php";

$about_about_url = "../../pages/about/about.php";
$about_structure_url = "../../pages/about/structure.php";
$about_vision_url = "../../pages/about/vision-mission.php";
$about_strategic_url = "../../pages/about/strategic-plan.php";
$about_projects_url = "../../pages/about/projects-budget.php";
$about_awards_url = "../../pages/about/awards-pride.php";
$about_activities_url = "../../pages/about/activities.php";
$about_reports_url = "../../pages/about/annual-reports.php";
$about_contact_url = "../../pages/about/contact-us.php";

$medical_research_url = "../../pages/medical/research-technology.php";
$medical_training_url = "../../pages/medical/training-education.php";
$medical_rax_url = "../../pages/medical/rax-checkpoint.php";
$medical_hosxp_structure_url = "../../pages/medical/hosxp-structure-adjustment-documents.php";
$medical_hosxp_export_url = "../../pages/medical/hosxp-2566-export-list.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Hospital Landing page" />
    <meta name="author" content="Abhishek Keshri" />
    <title>บริการของเรา</title>



    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <meta name="theme-color" content="#563d7c" />

    <style>
    @import url("https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@500&display=swap");



    /* .navbar {
        background-color: #f8f9fa;
        padding-top: 12px;
        padding-bottom: 12px;
        display: flex;
        justify-content: space-between;

    } */

    .navbar-brand {
        color: #0056b3 !important;
        display: flex;
        align-items: center;
        font-family: "IBM Plex Sans Thai", sans-serif;
        /* เลือกใช้ฟอนต์ */
    }

    .navbar-brand img {
        width: 50px;
        height: auto;
        margin-right: 10px;
        margin-left: 20px;
        transition: transform 0.3s;
        cursor: pointer;
    }

    .navbar-brand:hover {
        color: #007bff;
    }

    .navbar-nav .nav-link:hover {
        color: #007bff;
        font-size: 18px;
        margin-right: 20px;
        margin-left: 20px;
        font-family: "IBM Plex Sans Thai", sans-serif;
        /* เลือกใช้ฟอนต์ */
    }

    .navbar-nav .nav-link {
        color: #0056b3 !important;
    }

    /* 
        .btn-dark {
            background-color: #343a40;
            border-color: #343a40;
            color: #ffffff;
            font-weight: bold;
        } */

    /* ระยะห่างระหว่างเมนู */
    .nav-item {
        margin-left: 25px;

    }

    /* ให้ Navbar อยู่ด้านหน้าสุด */
    /* .navbar {
        position: fixed;
        width: 100%;
        top: 0;
        transition: top 0.3s;
        z-index: 1000;

    } */

    /* ซ่อน Navbar ไปด้านบน */
    /* .navbar-hidden {
        top: -100px;

    } */



    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(52, 58, 64, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }


    /* footerstyle */

    .footer {
        background-color: #5BA1E1;
        padding: 50px 0;
        color: white;
    }

    .link-list li {
        margin-bottom: 10px;
    }

    .link-list li a {
        color: white;
        text-decoration: none;
    }

    .link-list li a:hover {
        color: #0056b3;
    }

    .map-img {
        text-align: right;
    }

    /* .copy {
        background-color: #343a40;
        color: #f8f9fa;
        padding: 15px 0;
    } */

    .social-media-icons {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .social-media-icon {
        margin: 0 10px;
        font-size: 24px;
        color: #343a40;
        transition: color 0.3s;
    }

    .social-media-icon:hover {
        color: #007bff;
    }



    /*Nav  */
    .navbar-brand {
        display: flex;
        align-items: center;
        /* margin-right: auto; */
        /* ชิดซ้าย */
    }

    /* ปรับระยะห่างของโลโก้จากขอบขวา */
    .navbar-brand {
        margin-right: 20px;

    }


    .navbar-brand {
        white-space: normal;
        word-wrap: break-word;
    }





    @media (max-width: 768px) {
        .navbar-brand {
            font-size: 14px;
            /* ปรับขนาดตัวอักษรเมื่อหน้าจอมีขนาดเล็กกว่า 768px */
        }
    }

    @media (max-width: 576px) {
        .navbar-brand img {
            width: 25px;
            /* ปรับขนาดของโลโก้เมื่อหน้าจอมีขนาดเล็กกว่า 576px */
            height: 25px;
        }
    }

    .social-media-icons {
        display: flex;
        align-items: center;
        /* margin-left: auto; */
        /* ชิดขวา */
    }

    .social-media-icon {
        margin-right: 10px;
        /* ระยะห่างระหว่างไอคอน */
    }

    /* ปรับขนาดข้อความของ List Items ใน Footer ในขนาดหน้าจอที่เล็กกว่า */
    @media (max-width: 768px) {
        .link-list li {
            font-size: 14px;
        }
    }

    /* ปรับการจัดวางของข้อมูลใน Footer ในขนาดหน้าจอที่เล็กกว่า */
    @media (max-width: 576px) {
        .map-img {
            text-align: center;
        }
    }


    /* ปรับขนาดของ Social media icons ในขนาดหน้าจอที่เล็กกว่า */
    .social-media-icons {
        text-align: center;
    }

    .social-media-icon {
        display: inline-block;
        margin: 0 10px;
    }

    /* ปรับการจัดวางของข้อความใน Footer ในขนาดหน้าจอที่เล็กกว่า */
    @media (max-width: 768px) {
        .col-md-6 {
            text-align: center;
        }
    }



    /* ribbins */
    #ribbin {
        width: 200px;
        height: 40px;
        position: relative;
        background: blue;
        color: #fff;
    }

    #ribbin:after {
        content: "";
        position: absolute;
        right: 0;
        bottom: 0;
        width: 0;
        height: 0;
        border-right: 20px solid white;
        border-top: 20px solid transparent;
        border-bottom: 20px solid transparent;
    }

    .postext {
        text-align: center;
        position: relative;
        top: 10px;
        right: 10px;
    }
    </style>

    <!-- Custom styles for this template -->
    <link href="./styles/aboutstyle.css" rel="stylesheet" />

</head>

<body>

    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="../../../index.php">
                <img src="http://www.puahospital.go.th/wp-content/uploads/2019/11/cropped-loogo-600x745-242x300.png"
                    width="30" height="30" class="d-inline-block align-center" alt="" loading="lazy">
                โรงพยาบาลสมเด็จพระยุพราชปัว
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            บริการของเรา
                        </a>
                        <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <a class="dropdown-item"
                                href="<?php echo $services_step_url; ?>">ขั้นตอนการเข้ารับการรักษา</a>
                            <a class="dropdown-item" href="<?php echo $doctor_schedule_url; ?>">ตารางแพทย์ออกตรวจ</a>
                            <a class="dropdown-item" href="<?php echo $special_services_url; ?>">Special Services</a>
                            <a class="dropdown-item" href="<?php echo $doctor_list_url; ?>">รายชื่อแพทย์</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            เกี่ยวกับ รพร.ปัว
                        </a>
                        <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <a class="dropdown-item" href="<?php echo $about_about_url; ?>">เกี่ยวกับ รพร.ปัว</a>
                            <a class="dropdown-item" href="<?php echo $about_structure_url; ?>">โครงสร้างผู้บริหาร</a>
                            <a class="dropdown-item" href="<?php echo $about_vision_url; ?>">วิสัยทัศน์ พันธกิจ</a>
                            <a class="dropdown-item" href="<?php echo $about_strategic_url; ?>">แผนยุทธศาสตร์
                                และตัวชี้วัด</a>
                            <a class="dropdown-item" href="<?php echo $about_projects_url; ?>">แผนโครงการ
                                และงบประมาณ</a>
                            <a class="dropdown-item" href="<?php echo $about_awards_url; ?>">รางวัลและความภาคภูมิใจ</a>
                            <a class="dropdown-item" href="<?php echo $about_activities_url; ?>">ภาพกิจกรรม</a>
                            <a class="dropdown-item" href="<?php echo $about_reports_url; ?>">รายงานประจำปี</a>
                            <a class="dropdown-item" href="<?php echo $about_contact_url; ?>">ติดต่อเรา/ข้อเสนอแนะ</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="MedicalDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            สำหรับบุคลากรทางการแพทย์
                        </a>
                        <div class="dropdown-menu" aria-labelledby="MedicalDropdown">
                            <a class="dropdown-item"
                                href="<?php echo $medical_research_url; ?>">วิจัยและเทคโนโลยีด้านการแพทย์</a>
                            <a class="dropdown-item" href="<?php echo $medical_training_url; ?>">การอบรมการศึกษา</a>
                            <a class="dropdown-item" href="<?php echo $medical_rax_url; ?>">Rax Check Point</a>
                            <a class="dropdown-item"
                                href="<?php echo $medical_hosxp_structure_url; ?>">เอกสารสำหรับปรับโครงสร้าง HOSXP
                                2566</a>
                            <a class="dropdown-item" href="<?php echo $medical_hosxp_export_url; ?>">รายการตามหมวด
                                EXPORT
                                HOSXP 2566</a>
                        </div>
                    </li>
                </ul>
                <!-- <a class="btn btn-dark" href="logout.php">Logout</a> -->
            </div>
        </nav>
    </header>

    <br>
    <main>
        <div class="container">
            <div class="container" id="ribbin">
                <p class="postext">รางวัลและความภาคภูมิใจ</p>
            </div>
            <div><br>
                <h6>คุณคือความภาคภูมิใจของเรา</h6>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <figure class="figure">
                        <img src="https://placehold.co/500x500" class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption"></figcaption>
                    </figure>
                </div>
                <div class="col-md-6">
                    <h5>โรงพยาบาลสมเด็จพระยุพราชปัว</h5>
                    <p>ขอส่งกำลังใจให้ทีมเจ้าหน้าที่ร่วมอาสาไปปฏิบัติหน้าที่ ณ โรงพยาบาลบุษราคัม จังหวัดนนทบุรี วันที่ 6
                        - 21 กรกฎาคม 2564 จำนวน 4 ท่าน</p>
                    <ol>
                        <li>ภก.ดุริยะ กุณรินทร์ เภสัชกรปฏิบัติการ</li>
                        <li>พว.กฤตธิชา เชี่ยวรอบ พยาบาลวิชาชีพชำนาญการ ตึกสามัญหญิง</li>
                        <li>พว.ศรินธร มะจินะ พยาบาลวิชาชีพชำนาญการ ตึกสามัญชาย</li>
                        <li>พว.วรางคณา เชื้อหมอ พยาบาลวิชาชีพปฏิบัติการ <br>
                            ตึกอุบัติเหตุฉุกเฉิน ร่วมกับทีมเจ้าหน้าที่จากโรงพยาบาลชุมชนในจังหวัดน่านประกอบด้วย แพทย์<br>
                            เภสัชกร พยาบาล เวชกิจฉุกเฉิน ผู้ช่วยเหลือคนไข้ ทั้งหมดจำนวน 15 ท่าน<br>
                            จาก...<br>
                            โรงพยาบาลท่าวังผา<br>
                            โรงพยาบาลเฉลิมพระเกียรติ<br>
                            โรงพยาบาลสองแคว<br>
                            โรงพยาบาลสันติสุข<br>
                            โรงพยาบาลนาหมื่น<br>
                            โรงพยาบาลบ่อเกลือ<br>
                            การไปปฏิบัติหน้าที่ครั้งนี้<br>
                            เป็นการทำงานเพื่อชาติ<br>
                            เป็นตัวแทนของชาวน่านที่ไปช่วยแบ่งเบาความเดือดร้อน
                        </li>
                    </ol>
                </div>
            </div><br>
            <h5 class="text-center text-primary">ถอดรหัส รพ.สมเด็จพระยุพราชปัว เจ้าของรางวัล SHA AWARD ยกหัวใจสำคัญ
                HA-SHA
                สร้างสมดุลงานจากฐานราก สร้างคุณภาพงานให้เกิดความยั่งยืน</h5>

            <br>

            <figure class="figure">
                <img src="https://placehold.co/1500x500" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption"></figcaption>
            </figure>

            <br>
            <h6 class="text-center">ผอ.รพ.สมเด็จพระยุพราชปัวยังได้รับรางวัลแพทย์ดีเด่นในชนบท ประจำปี 2561
                คณะแพทยศาสตร์ศิริราชพยาบาล</h6>
        </div>


    </main>

    <br>


























    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="social-media-icons">
                        <a href="#" class="social-media-icon"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-media-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-media-icon"><i class="fab fa-line"></i></a>
                        <!-- <a href="#" class="social-media-icon"><i class="bi bi-facebook"></i></a> -->

                    </div>
                    <a class="navbar-brand" href="#">
                        <img src="http://www.puahospital.go.th/wp-content/uploads/2019/11/cropped-loogo-600x745-242x300.png"
                            width="30" height="30" class="d-inline-block align-center" alt="" loading="lazy">
                        Pua Crown Prince Hospital
                        โรงพยาบาลสมเด็จพระยุพราชปัว
                    </a>
                    <p> <br>
                        70 หมู่ 6 ถนนปัว-น้ำยาว ตำบลวรนคร อำเภอปัว จังหวัดน่าน 55120</p>
                </div>
                <div class="col-md-6 col-sm-12 map-img">
                    <!-- <h2>ข้อมูลการติดต่อ</h2> -->
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled link-list">
                                <li><a href="../../../index.php" class="custom-link">หน้าเเรก</a> <i
                                        class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $services_step_url; ?>"
                                        class="custom-link">ขั้นตอนการเข้ารับการรักษา</a> <i class="fa fa-angle-right"
                                        style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $doctor_schedule_url; ?>"
                                        class="custom-link">ตารางเเพทย์ออกตรวจ</a> <i class="fa fa-angle-right"
                                        style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $special_services_url; ?>" class="custom-link">บริการเด่น</a> <i
                                        class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $doctor_list_url; ?>" class="custom-link">รายชื่อเเพทย์</a> <i
                                        class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $about_about_url; ?>" class="custom-link">ความเป็นมา</a> <i
                                        class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $about_structure_url; ?>"
                                        class="custom-link">โครงสร้างผู้บริหาร</a> <i class="fa fa-angle-right"
                                        style="font-size: 14px;"></i></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled link-list">
                                <li><a href="<?php echo $about_vision_url; ?>" class="custom-link">วิสัยทัศน์
                                        พันธกิจ</a> <i class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $about_reports_url; ?>" class="custom-link">รายงานประจำปี</a> <i
                                        class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $medical_training_url; ?>"
                                        class="custom-link">การอบรมการศึกษา</a> <i class="fa fa-angle-right"
                                        style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $about_projects_url; ?>" class="custom-link">แผนโครงการ
                                        และงบประมาณ</a> <i class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $about_awards_url; ?>"
                                        class="custom-link">รางวัลเเละความภาคภูมิใจ</a> <i class="fa fa-angle-right"
                                        style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $about_activities_url; ?>" class="custom-link">ภาพกิจกรรม</a> <i
                                        class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $about_reports_url; ?>"
                                        class="custom-link">ติดต่อเราข้อเสนอเเนะ</a> <i class="fa fa-angle-right"
                                        style="font-size: 14px;"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>



    <div class="copy text-center py-3 bg-primary text-white">
        <div class="container">
            <p>โรงพยาบาลสมเด็จพระยุพราชปัว Copyright © 2019. All rights reserved.</p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>







</body>


</html>