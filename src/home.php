<?php
    // กำหนด URL ของหน้าต่างๆที่ต้องการให้เมนูลิงค์ไป
    $services_step_url = "
    ./pages/services/sersteps-for-treatment.php";
    $doctor_schedule_url = "./pages/services/doctor-schedule.php";
    $special_services_url = "./pages/services/special-services.php";
    $doctor_list_url = "./pages/services/doctor-list.php";

    $about_about_url = "./pages/about/about.php";
    $about_structure_url = "./pages/about/structure.php";
    $about_vision_url = "./pages/about/vision-mission.php";
    $about_strategic_url = "./pages/about/strategic-plan.php";
    $about_projects_url = "./pages/about/projects-budget.php";
    $about_awards_url = "./pages/about/awards-pride.php";
    $about_activities_url = "./pages/about/activities.php";
    $about_reports_url = "./pages/about/annual-reports.php";
    $about_contact_url = "./pages/about/contact-us.php";

    $medical_research_url = "./pages/medical/research-technology.php";
    $medical_training_url = "./pages/medical/training-education.php";
    $medical_rax_url = "./pages/medical/rax-checkpoint.php";
    $medical_hosxp_structure_url = "./pages/medical/hosxp-structure-adjustment-documents.php";
    $medical_hosxp_export_url = "./pages/medical/hosxp-2566-export-list.php";
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Hospital Landing page" />
    <meta name="author" content="Abhishek Keshri" />
    <title>Pua Hospital</title>



    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <meta name="theme-color" content="#563d7c" />

    <style></style>
    <!-- Custom styles for this template -->
    <link href="styles/home.css" rel="stylesheet" />

</head>

<body>
    <!-- เรียกใช้หน้า header -->
    <?php include 'includes/header.php'; ?>

    <main role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="http://www.puahospital.go.th/wp-content/uploads/2023/12/405333895_736872355153679_4013414099186887279_n.jpg"
                        class="img-responsive" />
                    <div class="carousel-caption">
                        <div class="container">
                            <!-- นำเนื้อหาที่ต้องการใส่ในสไลด์ 1 มาวางที่นี่ -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="http://www.puahospital.go.th/wp-content/uploads/2023/12/2023120702.png"
                        class="img-responsive" />
                    <div class="carousel-caption">
                        <div class="container">
                            <!-- นำเนื้อหาที่ต้องการใส่ในสไลด์ 2 มาวางที่นี่ -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="http://www.puahospital.go.th/wp-content/uploads/2023/12/405166521_736872388487009_4880090658364807048_n.jpg"
                        class="img-responsive" />
                    <div class="carousel-caption">
                        <div class="container">
                            <!-- นำเนื้อหาที่ต้องการใส่ในสไลด์ 3 มาวางที่นี่ -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="http://www.puahospital.go.th/wp-content/uploads/2023/12/405204503_736872325153682_2880091393100128885_n.jpg"
                        class="img-responsive" />
                    <div class="carousel-caption">
                        <div class="container">
                            <!-- นำเนื้อหาที่ต้องการใส่ในสไลด์ 3 มาวางที่นี่ -->
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </main>


    <!-- Image thumbnails -->
    <!-- <img src="https://placehold.co/350x262" alt="..." class="img-thumbnail"><br> -->

    <!-- figure -->

    <div class="container-b">
        <div class="container-f">
            <div class="figure-container-f">
                <h4>ข่าวสารประชาสัมพันธ์</h4>
                <img src="https://placehold.co/600x400" class="figure-img img-fluid rounded" alt="...">
                <!-- <a href="link-to-other-page.html" class="figure-link">Link to other page</a> -->
            </div>
            <figcaption class="figure-caption">
                <h4>ข่าวสารประชาสัมพันธ์</h4>
                <ul>
                    <li><a href="MOIT13">MOIT13</a> 28 มีนาคม 2567</li>
                    <li><a href="#">MOIT22</a> 28 มีนาคม 2567</li>
                    <li><a href="#">MOIT21</a> 28 มีนาคม 2567</li>
                    <li><a href="#">MOIT19</a> 28 มีนาคม 2567</li>
                    <li><a href="#">MOIT18</a> 28 มีนาคม 2567</li>
                    <li><a href="#">MOIT17</a> 28 มีนาคม 2567</li>
                    <li><a href="#">MOIT16</a> 28 มีนาคม 2567</li>
                </ul>
            </figcaption>
        </div>
    </div>

    <!-- card  -->
    <div class="container">
        <h4>ข่าวสารสุขภาพ</h4><br>
        <div class="card-deck" style="overflow-x: auto; overflow-scroll: auto; white-space: nowrap;">
            <div class="card card-md" style="display: inline-block;">

                <img src="https://placehold.co/350x262" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with .</p>
                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                </div>
            </div>
            <div class="card card-md" style="display: inline-block;">
                <img src="https://placehold.co/350x262" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text
                    </p>
                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                </div>
            </div>
            <div class="card card-md" style="display: inline-block;">
                <img src="https://placehold.co/350x262" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with.</p>
                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                </div>
            </div>
            <div class="card card-md" style="display: inline-block;">
                <img src="https://placehold.co/350x262" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting
                        .</p>
                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                </div>
            </div>

        </div>
    </div> <br> <br>













    <!-- table -->
    <div class="table-container">
        <table class="table">
            <h4>ประกาศประกวดราคา สอบราคา</h4>
            <br>
            <!-- <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead> -->
            <tbody>
                <tr>
                    <th scope="row">17 มกราคม 2567</th>
                    <td><a href="#">ประกาศผลผู้ชนะการจัดซื้อจัดจ้างหรือผู้ได้รับการคัดเลือก
                            และสาระสำคัญของสัญญาหรือข้อตกลงเป็นหนังสือ ประจำไตรมาสที่ 1 ปีงบประมาณ 2567</a></td>
                    <!-- <td><a href="#">Otto</a></td>
                    <td><a href="#">@mdo</a></td> -->
                </tr>
                <tr>
                    <th scope="row">24 พฤศจิกายน 2566</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาจ้างก่อสร้างปรับปรุงห้องผ่าตัด OR4
                            และห้องพักฟื้นพร้อมระบบปรับอากาศและระบายอากาศ โรงพยาบาลสมเด็จพระยุพราชปัว จำนวน 1 รายการ
                            ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (ebidding)</a></td>
                    <!-- <td><a href="#">Thornton</a></td>
                    <td><a href="#">@fat</a></td> -->
                </tr>
                <tr>
                    <th scope="row">12 ตุลาคม 2566</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาจ้างก่อสร้างปรับปรุงและต่อเติมอาคารและโครงสร้างคสล. 1 ชั้น
                            สำหรับอาคารผู้ป่วยนอก โรงพยาบาลสมเด็จพระยุพราชปัว จำนวน 1 รายการ
                            ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (ebidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">22 กันยายน 2566</th>
                    <td><a href="#">ร่างประกาศจังหวัดน่าน เรื่อง ประกวดราคาก่อสร้างปรับปรุงห้องผ่าตัด OR4
                            และห้องพักฟื้นพร้อมระบบปรับอากาศและระบายอากาศ โรงพยาบาลสมเด็จพระยุพราชปัว จำนวน 1 รายการ</a>
                    </td>

                </tr>
                <tr>
                    <th scope="row">20 กันยายน 2566</th>
                    <td><a href="#"> ประกาศผู้ชนะการเสนอราคาซื้อ ครุภัณฑ์วิทยาศาสตร์และการแพทย์ จำนวน 1 รายการ
                            ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (ebidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">22 สิงหาคม 2566</th>
                    <td><a href="#">ร่างประกาศจังหวัดน่าน เรื่อง ประกวดราคาจ้างเหมาบริการฟอกเลือดผู้ป่วยโรคไต
                            ด้วยเครื่องไตเทียม โรงพยาบาลสมเด็จพระยุพราชปัว อำเภอปัว จังหวัดน่าน จำนวน 1 รายการ</a></td>

                </tr>
                <tr>
                    <th scope="row">11 กรกฎาคม 2566</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาซื้อ ครุภัณฑ์คอมพิวเตอร์ จำนวน 4 รายการ
                            ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (ebidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">27 มิถุนายน 2566</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาซื้อ ครุภัณฑ์วิทยาศาสตร์และการแพทย์ จำนวน 1 รายการ
                            ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">26 มิถุนายน 2566</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาซื้อ ครุภัณฑ์วิทยาศาสตร์และการแพทย์ จำนวน 1 รายการ
                            ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">19 มิถุนายน 2566</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาจ้างเหมาทำความสะอาดอาคารภายในโรงพยาบาลสมเด็จพระยุพราชปัว
                            จำนวน 1 รายการ ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (ebidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">28 เมษายน 2566</th>
                    <td><a href="#">
                            ประกาศผู้ชนะการเสนอราคาเครื่องตรวจหาสารชีวเคมีในเลือดและสารคัดหลั่งอัตโนมัติพร้อมน้ำยา จำนวน
                            23 รายการ ประจำปีงบประมาณ 2566 โดยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">2 มีนาคม 2566</th>
                    <td><a href="#">ยกเลิกประกาศ ประกวดราคาจ้างเหมาทำความสะอาดอาคารภายในโรงพยาบาลสมเด็จพระยุพราชปัว
                            ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">15 ธันวาคม 2565</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาเช่าเครื่องตรวจทางภูมิคุ้มกันวิทยาอัตโนมัติ พร้อมน้ำยา จำนวน
                            9 รายการ ประจำปีงบประมาณ 2566 โดยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">4 สิงหาคม 2565</th>
                    <td><a href="#">ประกาศเผยแพร่แผนการจัดซื้อจัดจ้าง ประจำปีงบประมาณ พ.ศ. 2565</a></td>

                </tr>
                <tr>
                    <th scope="row">3 สิงหาคม 2565</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาจัดซื้อครุภัณฑ์คอมพิวเตอร์ จำนวน ๒ รายการ
                            โดยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)</a></td>

                </tr>


            </tbody>



        </table>
    </div>
    <br>

    <!-- table 02 -->
    <div class="table-container">
        <table class="table">
            <h4>ITA 2567</h4>
            <br>
            <tbody>
                <tr>
                    <th scope="row">28 มีนาคม 2567</th>
                    <td><a href="#">MOIT13</a></td>

                </tr>
                <tr>
                    <th scope="row">28 มีนาคม 2567</th>
                    <td><a href="#">MOIT22</a></td>

                </tr>
                <tr>
                    <th scope="row">28 มีนาคม 2567</th>
                    <td><a href="#">MOIT21</a>
                    </td>

                </tr>
                <tr>
                    <th scope="row">28 มีนาคม 2567</th>
                    <td><a href="#">MOIT19</a></td>

                </tr>
                <tr>
                    <th scope="row">28 มีนาคม 2567</th>
                    <td><a href="#">MOIT18</a></td>

                </tr>
                <tr>
                    <th scope="row">28 มีนาคม 2567</th>
                    <td><a href="#">MOIT17</a></td>

                </tr>
                <tr>
                    <th scope="row">28 มีนาคม 2567</th>
                    <td><a href="#">MOIT16</a></td>

                </tr>
                <tr>
                    <th scope="row">28 มีนาคม 2567</th>
                    <td><a href="#">MOIT15</a></td>

                </tr>
                <tr>
                    <th scope="row">27 มีนาคม 2567</th>
                    <td><a href="#">MOIT14</a></td>

                </tr>
                <tr>
                    <th scope="row">27 มีนาคม 2567</th>
                    <td><a href="#">MOIT12</a></td>

                </tr>

            </tbody>
        </table>
    </div> <br>


    <!-- container   3-->
    <div class="table-container">
        <table class="table">
            <h4>ITA 2566</h4>
            <br>
            <tbody>
                <tr>
                    <th scope="row">27 มิถุนายน 2566</th>
                    <td><a href="#">MOIT 20 หน่วยงานมีการอบรมให้ความรู้ภายในหน่วยงาน
                            เรื่องการป้องกันผลประโยชน์ทับซ้อน
                            โดยใช้หลักสูตรต้านทุจริตศึกษา</a></td>

                </tr>
                <tr>
                    <th scope="row">27 มิถุนายน 2566</th>
                    <td><a href="#">MOIT 17
                            หน่วยงานมีการวิเคราะห์ความเสี่ยงเกี่ยวกับผลประโยชน์ทับซ้อนประจำปีของหน่วยงาน</a></td>

                </tr>
                <tr>
                    <th scope="row">26 มิถุนายน 2566</th>
                    <td><a href="#">MOIT 11
                            หน่วยงานของท่านเปิดโอกาสให้ผู้มีส่วนได้ส่วนเสียมีโอกาสเข้ามามีส่วนร่วมในการดำเนินงานตามภารกิจของหน่วยงาน</a>
                    </td>

                </tr>
                <tr>
                    <th scope="row">25 มิถุนายน 2566</th>
                    <td><a href="#">MOIT 8
                            หน่วยงานมีการรายงานการประเมินและเกี่ยวกับการประเมินผลการปฏิบัติราชการของบุคลากรในหน่วยงาน
                            และเปิดเผยผลการปฏิบัติราชการ ระดับดีเด่น และระดับดีมาก ในที่เปิดเผยให้ทราบ รอบปีงบประมาณ
                            พ.ศ. 2564 และรอบปีงบประมาณ พ.ศ. 2565</a></td>

                </tr>
                <tr>
                    <th scope="row">31 มีนาคม 2566</th>
                    <td><a href="#">MOIT 16 หน่วยงานมีรายงานการกำกับติดตามการดำเนินงานตามแผนปฏิบัติการป้องกัน
                            ปราบปรามการทุจริตและประพฤติมิชอบ ประจำปีของหน่วยงาน
                            และแผนปฏิบัติการส่งเสริมคุณธรรมของชมรมจริยธรรม ประจำปีของหน่วยงาน</a></td>

                </tr>
            </tbody>
        </table>
    </div> <br>


    <!--table 4 -->
    <div class="table-container">
        <table class="table">
            <h4>ITA 2565</h4>
            <br>
            <tbody>
                <tr>
                    <th scope="row">30 มิถุนายน 2565</th>
                    <td><a href="#">MOIT21 หน่วยงานมีการอบรมให้ความรู้ภายในหน่วยงาน เรื่องการป้องกันผลประโยชน์ทับซ้อน
                            โดยใช้หลักสูตรต้านทุจริตศึกษา</a></td>

                </tr>
                <tr>
                    <th scope="row">30 มิถุนายน 2565</th>
                    <td><a href="#">MOIT19
                            หน่วยงานมีการกำหนดมาตรการเพื่อจัดการความเสี่ยงเกี่ยวกับผลประโยชน์ทับซ้อนของหน่วยงาน
                            และมีการรวมกลุ่มในนามชมรม STRONG</a></td>

                </tr>
                <tr>
                    <th scope="row">30 มิถุนายน 2565</th>
                    <td><a href="#">MOIT18
                            หน่วยงานมีการวิเคราะห์ความเสี่ยงเกี่ยวกับผลประโยชน์ทับซ้อนประจำปีของหน่วยงาน</a>
                    </td>

                </tr>
                <tr>
                    <th scope="row">30 มิถุนายน 2565</th>
                    <td><a href="#">MOIT12
                            หน่วยงานของท่านเปิดโอกาสให้ผู้มีส่วนได้ส่วนเสียมีโอกาสเข้ามามีส่วนร่วมในการดำเนินงานตามภารกิจของหน่วยงาน</a>
                    </td>

                </tr>
                <tr>
                    <th scope="row">30 มิถุนายน 2565</th>
                    <td><a href="#">MOIT9
                            หน่วยงานมีการอบรมให้ความรู้แก่เจ้าหน้าที่ภายในหน่วยงานเกี่ยวกับการเสริมสร้างและพัฒนาทางด้านจริยธรรม
                            และการรักษาวินัยรวมทั้งการป้องกันมิให้กระทำผิดวินัย</a></td>

                </tr>
            </tbody>
        </table>
    </div>
    <br>

    <!-- /.container -->

    <!-- เรียกใช้ FOOTER -->
    <?php include 'includes/footer.php'; ?>





    </br>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>







</body>


</html>