<?php
    session_start();

    include("server.php");

    if(isset($_GET["up"])){
        $id = $_GET["up"] ;
        $sel = mysqli_query($conn ,"SELECT * from data where id=$id");
        $selecte = mysqli_fetch_array($sel);
    
        $name = $selecte["name"];
        $_SESSION["name"] = $name;

        $province = $selecte["province"];
        $_SESSION["province"] = $province;

        $id = $selecte["id"];
        $_SESSION["id"] = $id;

        $start = $selecte["startDate"];
        $_SESSION["start"] = $start;

        $end = $selecte["endDate"];
        $_SESSION["end"] = $end;
    
        $detail = $selecte["detail"];
        $_SESSION["detail"] = $detail;
    
        $type = $selecte["projectType"];
        $_SESSION["type"] = $type;
    
        $budget = $selecte["budget"];
        $_SESSION["budget"] = $budget;

        $issup = $selecte["isSupport"];
        $_SESSION["issup"] = $issup;
    
        $bs = $selecte["budgetSupport"];
        $_SESSION["bs"] = $bs;
    
        
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-light bg-light border-bottom border-5">
        <span class="navbar-brand mb-0 h1 p-2">ProjectForm</span>
    </nav>

    <p class="h4 text-center">อัพเดทโปรเจค</p>

    <form action="update_db.php" method="POST" class="w-50 p-3 mx-auto">
    <div class="form-group">
        <input type="hidden" name="id" class="form-control" value="<?php echo $_SESSION["id"] ;?>">
    </div>

    <div class="form-group">
        ชื่อโครงการ  <input type="text" class="form-control" name="name" value="<?php echo $_SESSION["name"] ;?>">
    </div>

    <div class="form-group">
        รายละเอียดโครงการ <br><textarea name="detail" id="detail" class="form-control" cols="20" rows="5" style="resize: none;"><?php echo $_SESSION["detail"]; ?></textarea>
    </div>

    <div class="form-group">
        ประเภท  <select name="projectType" class="form-control" >
            <option value="" selected><?php echo $_SESSION["type"] ?></option>
            <option value="เดี่ยว">เดี่ยว</option>
            <option value="คู่">คู่</option>
            <option value="กลุ่ม">กลุ่ม</option>
            <option value="วิจัย">วิจัย</option>
        </select>
    </div>
    
    <div class="form-group">
        จังหวัด : <select name="province" class="form-control" >
            <option value="" selected><?php echo  $_SESSION["province"];?></option>
            <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
            <option value="กระบี่">กระบี่ </option>
            <option value="กาญจนบุรี">กาญจนบุรี </option>
            <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
            <option value="กำแพงเพชร">กำแพงเพชร </option>
            <option value="ขอนแก่น">ขอนแก่น</option>
            <option value="จันทบุรี">จันทบุรี</option>
            <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
            <option value="ชัยนาท">ชัยนาท </option>
            <option value="ชัยภูมิ">ชัยภูมิ </option>
            <option value="ชุมพร">ชุมพร </option>
            <option value="ชลบุรี">ชลบุรี </option>
            <option value="เชียงใหม่">เชียงใหม่ </option>
            <option value="เชียงราย">เชียงราย </option>
            <option value="ตรัง">ตรัง </option>
            <option value="ตราด">ตราด </option>
            <option value="ตาก">ตาก </option>
            <option value="นครนายก">นครนายก </option>
            <option value="นครปฐม">นครปฐม </option>
            <option value="นครพนม">นครพนม </option>
            <option value="นครราชสีมา">นครราชสีมา </option>
            <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
            <option value="นครสวรรค์">นครสวรรค์ </option>
            <option value="นราธิวาส">นราธิวาส </option>
            <option value="น่าน">น่าน </option>
            <option value="นนทบุรี">นนทบุรี </option>
            <option value="บึงกาฬ">บึงกาฬ</option>
            <option value="บุรีรัมย์">บุรีรัมย์</option>
            <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
            <option value="ปทุมธานี">ปทุมธานี </option>
            <option value="ปราจีนบุรี">ปราจีนบุรี </option>
            <option value="ปัตตานี">ปัตตานี </option>
            <option value="พะเยา">พะเยา </option>
            <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
            <option value="พังงา">พังงา </option>
            <option value="พิจิตร">พิจิตร </option>
            <option value="พิษณุโลก">พิษณุโลก </option>
            <option value="เพชรบุรี">เพชรบุรี </option>
            <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
            <option value="แพร่">แพร่ </option>
            <option value="พัทลุง">พัทลุง </option>
            <option value="ภูเก็ต">ภูเก็ต </option>
            <option value="มหาสารคาม">มหาสารคาม </option>
            <option value="มุกดาหาร">มุกดาหาร </option>
            <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
            <option value="ยโสธร">ยโสธร </option>
            <option value="ยะลา">ยะลา </option>
            <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
            <option value="ระนอง">ระนอง </option>
            <option value="ระยอง">ระยอง </option>
            <option value="ราชบุรี">ราชบุรี</option>
            <option value="ลพบุรี">ลพบุรี </option>
            <option value="ลำปาง">ลำปาง </option>
            <option value="ลำพูน">ลำพูน </option>
            <option value="เลย">เลย </option>
            <option value="ศรีสะเกษ">ศรีสะเกษ</option>
            <option value="สกลนคร">สกลนคร</option>
            <option value="สงขลา">สงขลา </option>
            <option value="สมุทรสาคร">สมุทรสาคร </option>
            <option value="สมุทรปราการ">สมุทรปราการ </option>
            <option value="สมุทรสงคราม">สมุทรสงคราม </option>
            <option value="สระแก้ว">สระแก้ว </option>
            <option value="สระบุรี">สระบุรี </option>
            <option value="สิงห์บุรี">สิงห์บุรี </option>
            <option value="สุโขทัย">สุโขทัย </option>
            <option value="สุพรรณบุรี">สุพรรณบุรี </option>
            <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
            <option value="สุรินทร์">สุรินทร์ </option>
            <option value="สตูล">สตูล </option>
            <option value="หนองคาย">หนองคาย </option>
            <option value="หนองบัวลำภู">หนองบัวลำภู </option>
            <option value="อำนาจเจริญ">อำนาจเจริญ </option>
            <option value="อุดรธานี">อุดรธานี </option>
            <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
            <option value="อุทัยธานี">อุทัยธานี </option>
            <option value="อุบลราชธานี">อุบลราชธานี</option>
            <option value="อ่างทอง">อ่างทอง </option>
            <option value="อื่นๆ">อื่นๆ</option>
        </select>
    </div>

    <div class="form-group">
        เริ่ม  <input type="date" name="start" class="form-control" value="<?php echo $_SESSION['start'];?>"> 
        สิ้นสุด  <input type="date" name="end" class="form-control" value="<?php echo $_SESSION['end'];?>">
    </div>

    <div class="form-group">
        งบประมาณ  <input type="text" name="budget" class="form-control" value="<?php echo $_SESSION["budget"]?>">
    </div>

        มีงบสนับสนุนอื่นๆ<br>  
        <input type="radio" name="isSupport" class="orm-check-input" value="<?php echo $_SESSION["issup"];?>" onclick="h1() , h2()">มี  
        <input type="radio" name="isSupport" class="orm-check-input" value="<?php echo $_SESSION["issup"];?>" onclick="s1() , s2()">ไม่มี
        <br>
        <label id="1" style="display: none;">งบประมาณ
        <input type="text" class="form-control" name="budgetSupport" id="2" style="display: none;" value="<?php echo $_SESSION["bs"]?>">
        </label>
        <br>
        <label>ลักษณะโครงการ</label>
        <div class="form-check">
        <input type="checkbox" class="form-check-input position-static" name="project1" value="a" >โครงการกำลังพัฒนา <br>
        <input type="checkbox" class="form-check-input position-static" name="project2" value="a" >โครงการนวัตกรรม <br>
        <input type="checkbox" class="form-check-input position-static" name="project3" value="a" >โครงการวิจัย
        </div>
        <br><br>
        <button type="submit" name="update" class="btn btn-primary">อัพเดท</button>
        <button class="btn btn-outline-light">
            <a href="index.php" class="btn btn-secondary">กลับ</a>
        </button>

    </form>
    
    <script>
        
        function h1(){
            $budgethide = document.getElementById("1");
            if($budgethide.style.display = "none"){

                $budgethide.style.display = "block";

            }
        }

        function h2(){
            $budgethide = document.getElementById("2");
            if($budgethide.style.display = "none"){

                $budgethide.style.display = "block";

            }
        }

        function s1(){
            $budgethide = document.getElementById("1");
            if($budgethide.style.display = "block"){

                $budgethide.style.display = "none";

            }
        }

        function s2(){
            $budgethide = document.getElementById("2");
            if($budgethide.style.display = "block"){

                $budgethide.style.display = "none";

            }
        }


    </script>
</body>
</html>