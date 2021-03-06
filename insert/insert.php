<?php
    session_start();

    include("server.php");


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

    <p class="h4 text-center">เพิ่มโปรเจค</p>

    <form action="insert_db.php" method="POST" class="w-50 p-3 mx-auto">
        <input type="hidden" name="id">
        <div class="form-group">
            <label>ชื่อโครงการ</label>
            <input type="text" name="name" class="form-control" required >
        </div>

        <div class="form-group">
            <label>รายละเอียดโครงการ</label> 
            <textarea name="detail" id="detail" class="form-control" rows="5" style="resize: none;" required></textarea>
        </div>

        <div class="form-group">
        <label>ประเภท</label>
        <select name="projectType" class="form-control" required >
            <option value="" selected>โปรดเลือก</option>
            <option value="เดี่ยว">เดี่ยว</option>
            <option value="คู่">คู่</option>
            <option value="กลุ่ม">กลุ่ม</option>
            <option value="วิจัย">วิจัย</option>
        </select>
        </div>

        <div class="form-group">
        <label>จังหวัด</label>
        <select name="province" class="form-control" required>
            <option value="" selected>โปรดเลือก</option>
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
        <label>เริ่ม</label> 
        <input type="date" name="start" class="form-control" required> 
        
        <label>สิ้นสุด</label> 
        <input type="date" name="end" class="form-control" required>
        </div>

        <div class="form-group">
        <label>งบประมาณ</label>
        <input type="text" name="budget" class="form-control" required>
        </div>

        <div class="form-group">
        <label>มีงบสนับสนุนอื่นๆ</label><br>
        <input type="radio" name="isSupport" class="orm-check-input" value="true" onclick="h1() , h2()">มี  
        <input type="radio" name="isSupport" class="orm-check-input" value="false" onclick="s1() , s2()">ไม่มี <br>
        </div>

        <label id="1" style="display: none;">งบประมาณ</label>
        <input type="text" class="form-control" name="budgetSupport" id="2" style="display: none;">

        <label>ลักษณะโครงการ</label>
        <div class="form-check">
        <input type="checkbox" class="form-check-input position-static" name="project1" value="a" >โครงการกำลังพัฒนา<br>
        <input type="checkbox" class="form-check-input position-static" name="project2" value="a" >โครงการนวัตกรรม<br>
        <input type="checkbox" class="form-check-input position-static" name="project3" value="a" >โครงการวิจัย
        </div>
        <br><br>

        <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary">บันทึก</button>
        <button class="btn btn-outline-light"><a href="index.php" class="btn btn-secondary">กลับ</a></button>
        </div>

    </form>
    </div>
    
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