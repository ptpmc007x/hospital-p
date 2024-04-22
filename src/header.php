<?php
// กำหนด URL สำหรับแต่ละเมนู
$services_step_url = "src/pages/services/steps-for-treatment.php";
$doctor_schedule_url = "src/pages/services/doctor-schedule.php";
$special_services_url = "src/pages/services/special-services.php";
$doctor_list_url = "src/pages/services/doctor-list.php";

$about_about_url = "src/pages/about/about.php";
$about_structure_url = "src/pages/about/structure.php";
$about_vision_url = "src/pages/about/vision-mission.php";
$about_strategic_url = "src/pages/about/strategic-plan.php";
$about_projects_url = "src/pages/about/projects-budget.php";
$about_awards_url = "src/pages/about/awards-pride.php";
$about_activities_url = "./calendar.php";
$about_reports_url = "src/pages/about/annual-reports.php";
$about_contact_url = "src/pages/about/contact-us.php";

$medical_research_url = "src/pages/medical/research-technology.php";
$medical_training_url = "src/pages/medical/training-education.php";
$medical_rax_url = "src/pages/medical/rax-checkpoint.php";
$medical_hosxp_structure_url = "src/pages/medical/hosxp-structure-adjustment-documents.php";
$medical_hosxp_export_url = "src/pages/medical/hosxp-2566-export-list.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--css -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <meta name="theme-color" content="#563d7c" />
    <!-- <link rel="stylesheet" href="headerstyle.css"> -->

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
    </style>
</head>

<header>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="http://www.puahospital.go.th/wp-content/uploads/2019/11/cropped-loogo-600x745-242x300.png" width="30" height="30" class="d-inline-block align-center" alt="" loading="lazy">
            โรงพยาบาลสมเด็จพระยุพราชปัว
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        บริการของเรา
                    </a>
                    <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <a class="dropdown-item" href="<?php echo $services_step_url; ?>">ขั้นตอนการเข้ารับการรักษา</a>
                        <a class="dropdown-item" href="<?php echo $doctor_schedule_url; ?>">ตารางแพทย์ออกตรวจ</a>
                        <a class="dropdown-item" href="<?php echo $special_services_url; ?>">Special Services</a>
                        <a class="dropdown-item" href="<?php echo $doctor_list_url; ?>">รายชื่อแพทย์</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="nav-link dropdown-toggle" href="#" id="MedicalDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        สำหรับบุคลากรทางการแพทย์
                    </a>
                    <div class="dropdown-menu" aria-labelledby="MedicalDropdown">
                        <a class="dropdown-item" href="<?php echo $medical_research_url; ?>">วิจัยและเทคโนโลยีด้านการแพทย์</a>
                        <a class="dropdown-item" href="<?php echo $medical_training_url; ?>">การอบรมการศึกษา</a>
                        <a class="dropdown-item" href="<?php echo $medical_rax_url; ?>">Rax Check Point</a>
                        <a class="dropdown-item" href="<?php echo $medical_hosxp_structure_url; ?>">เอกสารสำหรับปรับโครงสร้าง HOSXP
                            2566</a>
                        <a class="dropdown-item" href="<?php echo $medical_hosxp_export_url; ?>">รายการตามหมวด
                            EXPORT
                            HOSXP 2566</a>
                    </div>
                </li>
            </ul>

        </div>
    </nav>
</header>