<?php
include("../Config/DB.php");

$id = $_GET['id'];
$stmt = $conn->query("SELECT * FROM village WHERE Id = $id");
$stmt->execute();
$data = $stmt->fetch();

$village = $conn->query("SELECT * FROM setfood WHERE VillageSet = $id");
$village->execute();
$setfood = $village->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>หมู่บ้าน</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../css/home.css" />
  <link rel="stylesheet" href="../css/tailwind.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Niramit:wght@500&family=Taviraj&display=swap" rel="stylesheet">
  <style>
    .font-body {
      font-family: 'Taviraj', serif;
      font-family: 'Niramit', sans-serif;
    }
  </style>
</head>

<body class="font-body">
  <?php include '../include/navbar.php' ?>
  <div class="content">
    <div class="content_village">
      <h1 class="text-content">หมู่บ้านในโครงการ</h1>
    </div>
  </div>
  <!--  -->
  <div class="container-main">
    <div class="box-main">
      <div class="image-main">
        <div>
          <div class="img-main">
            <img <?php echo 'src="data:image/jpeg;base64,' . base64_encode($data['Img1']) . '" ' ?> alt="" />
          </div>
          <div class="image-flex">
            <!-- <div class="flex">
              <img src="https://images.unsplash.com/photo-1684610525381-34b7e6a098ef?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDI0fENEd3V3WEpBYkV3fHxlbnwwfHx8fHw%3D" alt="" />
            </div> -->
            <!-- <div class="flex">
              <img src="https://images.unsplash.com/photo-1699614614449-d19235e38574?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" />
            </div>
            <div class="flex">
              <img src="https://images.unsplash.com/photo-1700578075560-ebacba6e5d22?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" />
            </div>
            <div class="flex">
              <img src="https://images.unsplash.com/photo-1700403748616-94e54842caf1?q=80&w=1933&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" />
            </div> -->
          </div>
        </div>
      </div>
      <div class="popup-image">
        <span>&times;</span>
        <img src="https://images.unsplash.com/photo-1699614614449-d19235e38574?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" />
      </div>
      <div class="text-main">
        <div class="">
          <input type="checkbox" id="menu-sub_1">
          <label class="sub_1 text-respon" for="menu-sub_1"><i class="fa-regular fa-circle-down mr-3"></i><b>คำขวัญ หมู่<?php echo $data['Name']; ?> หมู่ที่ 7 ตำบล ปากชม อำเภอปากชม จังหวัดเลย</b></label>
          <div class="main-cen">
          <p class="text-respon text-cen text_sub1">
            แดนดินหินประดับ งามระยับแก่งฟ้า<br>
            สวยสุดตาลำโขง เชื่อมโยงอารยะธรรม<br>
            สายแร่ทองคํา ล้ำค่า นําพาวิถีอัตลักษณ์ชุมชน
          </p>
          </div>
          
        </div>
       
        <input type="checkbox" id="menu-sub_2">
        <label class="sub_2 text-respon" for="menu-sub_2"><i class="fa-regular fa-circle-down mr-3"></i><b>ประวัติความเป็นมา หมู่บ้านหาดเบี้ย หมู่ที่ 7 ตำบลปากชม อำเภอปากชม จังหวัดเลย</b></label><br>
        <div class="submenu_2">
          <p class="text-respon">
            &nbsp; &nbsp; &nbsp; &nbsp; เมื่อประมาณ 60 ปีมาแล้ว ได้มีสองครอบครัว คือ 1. ครอบครัวนายสังข์-นางเภา ไชยพรหม และ 2. ครอบครัวนายแว่น-นางใส ผิวป้อง ทั้งสองครอบครัวได้มาหาปลาตามลำน้ำโขง และได้ประกอบอาชีพทำสวนครัว ปลูกพริก-มะเขือ อยู่บริเวณปากห้วยตาดจาง และปากห้วยเบี้ย และในเวลาต่อมาได้มีราษฎรย้ายเข้ามาสมทบจากที่ต่าง ๆ จนกลายเป็นกลุ่ม/ชุมชน บ้านขึ้นบริเวณห้วยเบี้ย<br>
            &nbsp; &nbsp; &nbsp; &nbsp; ซึ่งมีต้นเบี้ยอยู่ยอดด้วย พอถึงฤดูฝนตก น้ำป่าไหลหลากได้พัดเอาหมากเบี้ย มากองอยู่ที่บริเวณหาดทรายริมแม่น้ำโขง เมื่อเวลาน้ำโขงลงจะมองเห็นหาดทราย และหมากเบี้ย เลยได้นำสองอย่างมารวมตั้งชื่อหมู่บ้านอันเป็นที่มาของชื่อหมู่บ้าน “หาดเบี้ย”<br>
            &nbsp; &nbsp; &nbsp; &nbsp; ขณะนั้นมี นายบท อาศัย เป็นผู้นำหมู่บ้าน ขึ้นการปกครองของอำเภอเชียงคาน หมู่ที่ 10 จนกระทั่ง ปี พ.ศ. 2516 ได้มีการเลือกตั้งผู้ใหญ่บ้านคนแรก ซึ่งมีนายสม สีดี ได้รับเลือกตั้งเป็นผู้ใหญ่ บ้านคนแรก และได้สร้างวัด ชื่อวัดหาดทรายคำ และโรงเรียนบ้านหาดเบี้ยขึ้น ต่อมาได้ย้ายขึ้นมาอยู่ ในการปกครองของ อำเภอปากชม หมู่ที่ 7 จนถึงปัจจุบัน<br>
            &nbsp; &nbsp; &nbsp; &nbsp; ปีพ.ศ. 2537 ได้เลือกตั้งผู้ใหญ่บ้าน คนที่ 2 คือ นายร่วม เถียรสายออ ได้รับเลือกตั้งเป็นผู้ใหญ่บ้านจนถึง ปี พ.ศ. 2541 จึงได้หมดวาระ<br>
            &nbsp; &nbsp; &nbsp; &nbsp; ปีพ.ศ. 2541 ได้ทำการเลือกตั้งผู้ใหญ่บ้าน มี นาย วีระ ป้องที ได้รับการเลือกตั้งเป็นผู้ใหญ่บ้าน หาดเบี้ย คนที่ 3 ซึ่งได้ดำรงตำแหน่งเป็นผู้ใหญ่บ้านอยู่ 3 สมัย จนกระทั่ง เมื่อวันที่ 9 มิถุนายน พ.ศ. 2555 ได้เสียชีวิตลง และต่อมา เมื่อวันที่ 28 มิถุนายน พ.ศ. 2555 ได้ทำการเลือกตั้งผู้ใหญ่บ้านขึ้นใหม่ และมี นางรัชนี จันทร์ปุย ได้รับการเลือกตั้งเป็นผู้ใหญ่บ้านหาดเบี้ย คนที่ 4 จนถึงปัจจุบัน
          </p>
        </div>
       
        <input type="checkbox" id="menu-sub_3">
        <label class="sub_3 text-respon" for="menu-sub_3"><i class="fa-regular fa-circle-down mr-3"></i><b>ข้อมูลทั่วไปบ้านหาดเบี้ย หมู่ที่ 7 ตำบลปากชม อำเภอปากชม จังหวัดเลย</b></label><br>
        <div class="submenu_3">
            <p class="text-respon">
              1. ข้อมูลประชากร จำนวนครัวเรือนทั้งหมด 150 ครัวเรือน<br>
              - ประชากรทั้งหมด 524 คน แบ่งเป็นชาย 262 คน หญิง 262 คน<br>
              2. แผนผังและแนวเขตหมู่บ้าน<br>
              - ทิศเหนือ จรดแม่น้ำโขง<br>
              - ทิศใต้ จรดเขตป่าภูเขาแก้ว<br>
              - ทิศตะวันออก จรดเขตบ้านคกไผ่ หมู่ที่ 5 ตำบลปากชม อำเภอปากชม<br>
              - ทิศตะวันตก จรดเขตบ้านห้วยซวก หมู่ที่ ๔ ตำบลบุฮม อำเภอเชียงคาน<br>
              3. อาชีพ<br>
              - อาชีพ หลักของคนในชุมชน คืออาชีพเกษตรกร<br>
              - อาชีพ เสริม คือการเก็บหินชาย ร่อนทอง ทอผ้า รับจ้างทั่วไป<br>
              4. สถานศึกษา 1 แห่ง คือ โรงเรียนบ้านหาดเบี้ย<br>
              5. วัดจำนวน 2 แห่ง คือ<br>
              - วัดหาดทรายคำ และวัดผาสามยอด<br>
              6. สถานที่ท่องเที่ยว<br>
              - แก่งศิลป์<br>
              - สวนศิลป์ริมโขง<br>
              7. กลุ่มอาชีพในชุมชน<br>
              - กลุ่มอาชีพทอผ้า นางรัชนี จันทร์ปุย เป็นประธานกลุ่ม<br>
              - กลุ่มแปรรูปหินแม่น้ำโขง นายเกียรติศักดิ์ เรืองชัย ประธานกลุ่ม<br>
              - กลุ่มวิสาหกิจชุมชน ร้อยแก่งพันเกาะ นางรัชนี จันทร์ปุย ประธาน<br>
              - กลุ่มขายหิน นายสว่าง มีพันธุ์ ประธาน<br>
              &nbsp; &nbsp; &nbsp; &nbsp;นอกจากนี้คนในชุมชนยังมีอาชีพดั่งเดิมอีกอาชีพหนึ่งคือ เมื่อถึงฤดูแล้ง น้ำโขงแห้ง สมาชิกในชุมชน จะลงไปในหาดทราย ไปร่อนทองคำ (ชาวบ้านเรียกว่า เล่น) เป็นการหารายได้ในฤดูแล้ง ซึ่งสิ่งเหล่านี้นำมาประกอบกัน ทำให้เป็นชุมที่น่าสนใจ ควรแก่การพัฒนาส่งเสริมการท่องเที่ยวและพัฒนาเศรษฐกิจชุมชน<br>
              &nbsp; &nbsp; &nbsp; &nbsp;ปัจจุบันบ้านหาดเบี้ย ตำบลปากชม อำเภอปากชม จังหวัดเลย ได้รับการสนับสนุนจากหน่วยงานของรัฐ ในการพัฒนาพื้นที่เพื่อส่งเสริมการท่องเที่ยวและในขณะเดียวกันก็มีการพัฒนาทางด้านอาชีพโดยใช้ภูมิปัญญาท้องถิ่น ส่งเสริมให้ชุมชนมีการพัฒนาอาชีพให้เศรษฐกิจชุมชนบ้านหาดเบี้ยดีขึ้น<br>
              &nbsp; &nbsp; &nbsp; &nbsp;มหาวิทยาลัยราชภัฏเลย โดยสาขาอาหารและโภชนาการ คณะวิทยาศาสตร์และเทคโนโลยี ได้มีส่วนร่วมในการพัฒนาเศรษฐกิจชุมชนบ้านหาดเบี้ยโดยได้รับงบประมาณสนับสนุนจากรัฐบาล ซึ่งได้รับความร่วมมือจัดเป็นทีมงานประกอบด้วยคณาจารย์และนักศึกษา สาขาวิชาอาหารและโภชนาการ ได้เข้ามาลงพื้นที่ เพื่อทำการสืบค้นหาภูมิปัญญาในด้านอาหารท้องถิ่น ซึ่งได้รับความร่วมมือเป็นอย่างดีจากปราชญ์ด้านอาหารของชุมชน การค้นหาข้อมูลเกี่ยวกับภูมิปัญญาอาหารท้องถิ่นของชุมชนบ้านหาดเบี้ย เพื่อนำข้อมูลมาพัฒนาตำรับและสำรับอาหารของชุมชน ให้ได้ต้นแบบของอาหารท้องถิ่นโดยชุมชนเพื่อชุมชน เพื่อสืบสานภูมิปัญญาท้องถิ่นอาหารไทเลย ในการส่งเสริมการท่องเที่ยวโดยใช้ทรัพยากรของท้องถิ่นที่มีอยู่แล้วเป็นทุนเดิม จากพืชผักสวนครัว วัตถุดิบอาหารที่หาได้ในชีวิตประจำวัน พืชผักจากการปลูกในครัวเรือน พืชผักที่หาได้จากป่าชุมชน สัตว์น้ำ จากลำห้วย และจากแม่น้ำโขง<br>
              &nbsp; &nbsp; &nbsp; &nbsp;ซึ่งแม่น้ำโขงเป็นสายน้ำแห่งชีวิตของชาวชุมชนบ้านหาดเบี้ย อุดมไปด้วยสัตว์น้ำนานาชนิด ได้แก่ ปลาชนิดต่าง ๆ เช่น ปลากระบอก ปลาขาวน้อย ปลานาง ปลาสร้อย และปลาคัง และปลาชนิดอื่น ๆ นอกจากนี้ยังมีกุ้งน้ำโขง กุ้งฝอย และสัตว์น้ำอื่น ๆ ซึ่งสามารถนำมาประกอบอาหารในครัวเรือนเพื่อการดำรงชีวิต ปัจจุบันมีการปลูกไม้ผลเพื่อการค้ามากมาย ได้แก่ มะม่วง พันธุ์ต่าง ๆ สำหรับบริโภคดิบ เช่น มะม่วงมัน มะม่วงเขียวเสวย สำหรับบริโภคสุก มะม่วงน้ำดอกไม้ นอกจากนี้ยังมีมะม่วงดิบที่ขายส่งผลสดเพื่อการแปรรูป เช่น มะม่วงแก้วขมิ้น มะม่วงโชคอนันต์ อีกทั้งยังมีกล้วยน้ำว้า กล้วยหอมส้ม มะขามหวาน และเงาะเมืองเลยที่ปลูกเพื่อบริโภคและการค้า<br>
              &nbsp; &nbsp; &nbsp; &nbsp;จากพื้นฐานทรัพยากรธรรมชาติวัตถุดิบอาหารจากธรรมชาติ พืชผักสมุนไพร ผลไม้ สัตว์บก สัตว์น้ำ ประกอบกับสภาพแวดล้อมหาดทรายสวยงาม จึงควรนำสิ่งเหล่านี้มาเป็นแนวทางในการเสริมอาชีพให้มีอาชีพเสริมเพิ่มจากอาชีพหลัก ซึ่งการนำภูมิปัญญาการทำอาหารท้องถิ่น (ทำอาหารแบบบ้านบ้าน) นำมาสู่การท่องเที่ยว ให้นักท่องเที่ยวได้สัมผัสกับวิถีชีวิตความเป็นอยู่และอาหารการกินที่เรียบง่าย ใหม่สด สะอาด ปลอดภัย เป็นธรรมชาติ เป็นอาหารเพื่อสุขภาพและส่งเสริมเศรษฐกิจชุมชน
            </p>
        </div>


        <input type="checkbox" id="menu-sub_4">
        <label class="sub_4 text-respon" for="menu-sub_4"><i class="fa-regular fa-circle-down mr-3"></i><b>ประเภทของตำรับและสำรับภูมิปัญญาท้องถิ่นอาหารไทเลย</b></label><br>
        <div class="submenu_4">
                <p class="text-respon">
                &nbsp; &nbsp; &nbsp; &nbsp;จากภูมิปัญญาอาหารท้องถิ่นมีการทำอาหารจากพืชสมุนไพรและผักพื้นบ้าน ซึ่งมีพืชสมุนไพรและผักพื้นบ้านต่าง ๆ ที่หาได้ในพื้นที่เป็นพืชสมุนไพรและผักพื้นบ้านที่ปลูกไว้ในครัวเรือน พืชสมุนไพรและผักพื้นบ้านที่นิยมนำมาประกอบเป็นอาหารท้องถิ่นได้แก่ ตะไคร้ หอมแดง กระเทียม ขิง ใบมะกรูด หอมบั่ว (ต้นหอม) ผักอีตู่ (ใบแมงลัก) หอมป้อม (ผักชี) ผักชี (ผักชีลาว) ใบย่านาง ผักอีแงะ (สะแงะ) ผักส้าง หมอน้อย (หมาน้อย) ผักไข่เขียด ผักคาด ผักหนาม ผักติ้ว ผักเน่า (ซะอม) หนามพย่า (ผักกาดย่า ผักปู่ย่า) ดอกแคป่า ผักก้านจอง ผักบุ้งนา มะแขว่น ปลีกล้วย ผำ (ไขน้ำ) ใบผักกระโดน ผักอิฮุม (ใบ ยอดมะรุม) ยอดกระถิน ใบขี้เหล็ก (ยอดอ่อน) ผักกาดเขียวปลี ผักขม ผักหวาน บอนหวาน ผักเพี้ยฟาน ผักกูด ใบมะกรูด ผักอีเลิด (ใบชะพลู) ยอดแค ยอดอินทา ดอกแคบ้าน ดอกฟักทอง ดอกผักบัว (ดอกหอม) ผักชีใบเรื่อย ผักแพรว มะเขือขื่น (มะเขือเหลือง) หมากแค้งขม (มะแว้ง) ผักผ่อง หมากแค้ง (มะเขือพวง) มะเขือเครือ (มะเขือส้ม มะเขือเทศผลเล็ก) บักแปบ (ถั่วแปบ) ฟักทองอ่อน หมากผักใส่ หมากกอก (มะกอก) ถั่วฝักยาว กระเจี๊ยบเขียว บวบหอม ฟักทอง หน่อข่า หน่อไม้ บักน้ำ (น้ำเต้า) แตงกวา มะละกอ พริกสด พริกแห้ง มะนาว มะขามเปียก ถั่วแดง งาขาว ส้มปอน ข่าอ่อน เทา (สาหร่ายสีเขียว) เห็ดขาว เห็ดนางฟ้า เขียวเห็ดบด (เห็ดลม) เห็ดสะหนุ่น (หูหนู) เห็ดฟาง เห็นไค เห็ดระโงก เห็ดดิน หยวกกล้วย มันเทศ เผือก ข้าวโพดข้าวเหนียว มะพร้าว (ขูดเนื้อคั้นกะทิ) มะพร้าวกะจา (มะพร้าวทึนทึก) พืชสมุนไพรและผักพื้นบ้านที่กล่าวข้างต้นสามารถนำมาทำเป็นตำรับอาหารต่าง ๆ ได้ดังนี้
                  <br> &nbsp; &nbsp; &nbsp; &nbsp;ตำรับอาหารอาหารท้องถิ่นไทเลยที่นิยมปรุงประกอบเพื่อบริโภค จัดแบ่งเป็นประเภทต่าง ๆ ดังนี้
                </p>
              


              <p class="text-respon">
                <b>1. อาหารประเภทต้ม/แกง </b>
                เป็นการปรุงอาหารที่ นิยมใส่เครื่องเทศ ตะไคร้ทุบ หัวหอมทุบ พริกหักเม็ดครึ่งหนึ่ง ใส่หม้อต้มในน้ำปริมาณมากในหม้อ อาหารท้องถิ่นไทเลยประเภทแกง แบ่งได้ดังนี้<br>
                &nbsp; &nbsp; &nbsp; &nbsp;1.1 แกงประเภทมีน้ำมาก มีลักษณะน้ำใส่ เป็นแกงที่มีรสอ่อน ๆ ไม่เผ็ดมาก ไม่เค็มมาก สามารถชดน้ำแกงได้ ซึ่งจะเรียกชื่อแกงแตกต่างกันไปตามวัตถุดิบที่นำมาปรุงประกอบ เช่น แกงผักอิเยอะอิแยะ (ผักมากชนิดรวมกันอย่างละเล็กละน้อย) แกงปลี แกงหน่อไม้ แกงเห็ด แกงขนุน แกงผักหวาน ฯลฯ<br>
                &nbsp; &nbsp; &nbsp; &nbsp;1.1.1 ต้มใส่ส้ม หรือ ต้มส้ม เป็นแกงที่มีน้ำมากคล้ายแกงน้ำมากทั่วไป แต่เติมรสเปรี้ยวลงไป อาจเป็นยอดส้มปอน ยอดกระเจี๊ยบแดง ยอดมะขาม มะขามอ่อน มะขามเปียก มะเขือเครือ (มะเขือส้ม) แกงจะมีรสเค็มอ่อน ๆ และมีรสเปรี้ยวไม่มากนัก คนในท้องถิ่นไม่นิยมรสเปรี้ยวจัด นิยมรสเค็มอ่อนๆ และเปี้ยวอ่อนๆ เพื่อให้ซดน้ำแกงได้ เช่น ต้มส้มปลา ต้มส้มไก่<br>
                &nbsp; &nbsp; &nbsp; &nbsp;1.1.2 แกงซั้ว แกงประเภทมีน้ำมากแต่มีการเพิ่มเครื่องเทศสมุนไพรที่เผ็ดร้อนมากขึ้น ได้แก่ ขิง และกระเทียม รสชาติของแกง และกลิ่นจะเปลี่ยนไปจะมีกลิ่นฉุนของขิงและกระเทียมเพิ่มมากขึ้น นอกเหนือจาก กลิ่นหัวหอม ตะไคร้ พริก แต่แกงซั้วจะไม่ใส่ส้ม (รสเปรี้ยว) แกงซั่วมีความเป็นเอกลักษณ์เฉพาะตัว ซึ่งจะมีรสจัดจ้าน เผ็ดร้อน มากกว่าแกงน้ำมากในกลุ่มแรก ลักษณะเด่นของแกงซั้วคือ มีเครื่องเทศสมุนไพร ขิง และกระเทียม ทำให้ออกรสเผ็ดร้อน ช่วยขับเหงื่อและขับลมได้ เป็นเอกลักษณ์ของจังหวัดเลย ที่ไม่เหมือนจังหวัดอื่น ๆ ในภาคอีสาน เช่น ซั้วเห็ดฟาง ซั้วหอยตาก ซั้วไก่
              </p>
              <p class="text-respon">
              &nbsp; &nbsp; &nbsp; &nbsp;<b>1.2 แกงน้ำน้อยข้นคลุกคลิก </b><br>
              &nbsp; &nbsp; &nbsp; &nbsp;เป็นแกงที่มีเครื่องเทศสมุนไพรนำมาโขลกเป็นเครื่องพริกแกง ได้แก่ พริก ตะไคร้ หัวหอม กระเทียม (หัวหอมมากกว่ากระเทียม) ถ้าเนื้อสัตว์มีกลิ่นคาวจะนิยมแต่งกลิ่นด้วยใบมะกรูด แกงน้ำน้อยแบ่งออกเป็น 2 ชนิด คือ<br>
              &nbsp; &nbsp; &nbsp; &nbsp;1.2.1 คั่ว เป็นแกงชนิดหนึ่งที่มีน้ำน้อย รสเค็ม เผ็ด ไม่มีรสเปรี้ยว มีเครื่องโขลกพริกแกง มีส่วนประกอบของเนื้อสัตว์ จะต้องนำเนื้อสัตว์ลงไปคนกับเครื่องแกงในหม้อที่ตั้งไฟให้ร้อน คนให้เนื้อสัตว์และเครื่องแกงหอม จึงเติมน้ำลงไปทำเป็นน้ำแกง ซึ่งใส่น้ำไม่มากนัก เมื่อน้ำเดือดจึงปรุงรส และใส่ผักตามชอบ เมื่อแกงสุกจะมีน้ำเล็กน้อย แต่ไม่ข้นขลุกขลิก ยังสามารถชดน้ำแกงได้บ้างเล็กน้อย เพราะรสจะเค็มมากกว่าแกงน้ำมาก เช่น คั่วไก่บ้าน คั่วไก่ คั่วเนื้อ<br>
              &nbsp; &nbsp; &nbsp; &nbsp;1.2.2 เอาะ เป็นแกงที่ปรุงด้วยเครื่องแกงเหมือนกับคั่ว แต่ไม่ต้องนำเครื่องแกงไปคั่วกับเนื้อสัตว์ เป็นแกงที่มีปริมาณน้ำน้อย ใส่ข้าวเบื่อ (ข้าวเหนียวแช่น้ำให้นิ่ม แล้วโขลกให้ละเอียด ละลายน้ำแล้วใส่ในน้ำแกง)แกงน้ำน้อยมีลักษณะคลุกคลิกจากข้าวเบื่อ เช่น เอาะหอย เอาะแมงอิเนี้ยว เอาะแมงงุ้มหน้า เอาะหน่อไม้ แกงผำ (เผาะผำ)<br>
              &nbsp; &nbsp; &nbsp; &nbsp;1.2.3 อ่อม เป็นแกงชนิดหนึ่งที่มีน้ำน้อยข้นคลุกคลิก มีลักษณะเนื้อวัตถุดิบอาหารที่นำมาปรุง จะต้มเคี้ยวจนเละจึงทำให้แกงมีลักษณะน้ำข้นคลุกคลิกโดยไม่ต้องใส่ข้าวเบื่อ เช่น แกงบอน (อ่อมบอน) แกงผักขี้เหล็ก (อ่อมขี้เหล็ก)
              </p>




              <p class="text-respon">
                <b>2. อาหารประเภทยำ </b><br>
                &nbsp; &nbsp; &nbsp; &nbsp;อาหารท้องถิ่นมีการปรุงประกอบคล้าย ๆ ยำอยู่หลายอย่าง ซึ่งเรียกชื่อแตกต่างกันไป ได้แก่ ตำส้ม (ส้มตำ) ส้า ก้อย ลาบ ซุบ ซึ่งจะเรียกชื่ออาหารไปตามวัตถุดิบที่ใช้ในการปรุงประกอบ เช่น ตำส้ม (ส้มตำมะละกอ) ตำแตง ตำถั่ว ส้าแตง ส้ากุ้ง ลาบเทา ลาบหมู ลาบปลา ลาบไก่ ลาบเนื้อ ซุบผัก ซุบหน่อไม้ส้ม (หน่อไม้ดอง) ฯลฯ ซึ่งเป็นการปรุงอาหารโดยการโขลกรวมกัน หรือผสมคนรวมกันปรุงรส มีรสเค็ม เผ็ด ไม่นิยมเติมน้ำตาล อาจจะมีรสเปรี้ยวมาก เปรี้ยวน้อยหรืออาจจะไม่มีรถเปรี้ยวก็ได้ อาหารเหล่านี้มีรสจัดจ้าน จึงนิยมรับประทานคู่กับผัก อาจเป็นผักสด หรือผักสุกก็ได้ตามชอบ
              </p>
              <p class="text-respon">
                <b>3. อาหารประเภทหมก  </b><br>
                &nbsp; &nbsp; &nbsp; &nbsp;เป็นอาหารที่มีส่วนประกอบของเครื่องโขลกพริกแกง มีส่วนประกอบของเครื่องเทศสมุนไพร ได้แก่ พริก หอมแดง กระเทียม ตะไคร้ ถ้าเนื้อสัตว์มีกลิ่นคาวมาจะเพิ่ม ข่า ลงในเครื่องโขลกพริกแกง ใส่ข้าวเบื่อเพื่อให้ข้น และใส่ใบมะกรูด 
                เพิ่มลงไปด้วย ผสมเครื่องโขลกพริกแกงกับเนื้อสัตว์ ปรุงรส แต่งกลิ่นด้วยใบแมงลัก ต้นหอม ผักชีลาว แล้วใช้ใบตองหรือใบไม้ห่อแล้วนำไปนึ่ง หรือปิ้ง หรือย่างไฟให้สุก เรียกชื่ออาหารประเภทหมกจะเรียกชื่อตามวัตถุดิบที่ทำ เช่น หมกปลา หมกหน่อไม้ หมกหยวก หมกปลี หมกลาบ หมกกบ ฯลฯ 
              </p>
              <p class="text-respon">
                <b>4. อาหารประเภทอั่ว   </b><br>
                &nbsp; &nbsp; &nbsp; &nbsp;เป็นอาหารที่มีส่วนประกอบของเครื่องโขลกพริกแกงที่มีส่วนประกอบของเครื่องเทศสมุนไพร ได้แก่ พริก หอมแดง กระเทียม ตะไคร้ โขลกเครื่องพริกแกงรวมกันให้ละเอียดใส่ข้าวเบื่อ คล้ายกับหมก แต่แตกต่างกันตรงที่เมื่อเครื่องโขลกพริกแกงแล้ว ส่วนผสมอื่น ๆ เช่น เนื้อสัตว์ ผัก จะต้องนำมาผสมให้เป็นเนื้อเดียวกัน บางซนิดอาจโขลกรวมกันให้เข้าเนื้อเหนียว ปรุงรส แล้วบรรจุลงในวัตถุดิบที่ต้องการทำอาหารชนิดนั้น เช่น บรรจุลงในไส้หมู เรียกว่าไส้อั่ว บรรจุลงในเม็ดพริก เรียกว่าอั่วพริก บรรจุเข้าไปในตัวปลา เรียกว่าอั่วปลา บรรจุลงในดอกแค เรียกว่าอั่วดอกแค จากนั้นห่อด้วยใบน้ำเต้า และใบตองแล้วนำไปย่างหรือนึ่งให้สุก 
              </p>
              <p class="text-respon">
                <b>5. อาหารประเภทปิ้งย่าง</b><br>
                &nbsp; &nbsp; &nbsp; &nbsp;เป็นอาหารที่ทำให้สุกด้วยการวางไว้เหนือไฟ มักใช้กับของแห้ง หรืออาหารที่มีขนาดไม่ใหญ่มาก โดยปกติใช้เวลาน้อยกว่าย่าง ปิ้งเนื้อเค็ม ปิ้งปลา การย่างเป็นการทำให้อาหารสุกด้วยการวางไว้เหนือไฟ เพื่อให้สุกระอุทั่วกัน หรือให้แห้งมักใช้กับของสด โดยปกติใช้เวลานานกว่าปิ้ง เช่น ย่างไก่ ย่างหมู ที่ทำให้สุกด้วยวิธีย่าง เรียกว่า ไก่ย่าง หมูย่าง 
              </p>
              <p class="text-respon">
                <b>6. อาหารประเภททอด</b><br>
                &nbsp; &nbsp; &nbsp; &nbsp;เป็นการนำชิ้นอาหารใส่ลงในน้ำมันขณะร้อน ผิวนอกของอาหารจะมีอุณหภูมิสูงขึ้นอย่างรวดเร็ว ทำให้น้ำที่เป็นส่วนประกอบในชิ้นอาหารระเหยกลายเป็นไอผิวนอกอาหารจะแห้ง ระยะเวลาที่ใช้ทอดอาหารขึ้นอยู่กับ ชนิดของอาหาร อุณหภูมิน้ำมัน วิธีการทอด ความหนาของชิ้นอาหาร คุณภาพการบริโภคของอาหารทอดที่ต้องการ เช่น ทอดปลาน้ำโขง ทอดหมูแดดเดียว ทอดเนื้อแดดเดียว 
              </p>
              <p class="text-respon">
                <b>7. อาหารประเภทเครื่องจิ้ม</b><br>
                &nbsp; &nbsp; &nbsp; &nbsp;ภาษาท้องถิ่นเรียก แจ่ว หรือป่น หรือน้ำพริก แบ่งเป็นประเภทมีเนื้อสัตว์และไม่มีเนื้อสัตว์เป็นส่วนประกอบ แจ่วและป่น นิยมรับประทานคู่กับผักนึ่ง ผักลวก หรืออาจเป็นผักสด ตามชอบ เช่น แจ่วเห็ดฟางคู่กับผักลวก แจ่วพริกหยวกคู่กับผักนึ่ง ป่นปลาใส่หมอน้อย แจ่วดำคู่กับผักต้ม ป่นปลาคู่กับผักสด  แจ่วดำคู่กับผักนึ่งและผักสด แจ่วกบคู่กับผักสดและผักนึ่ง แจ่วผักรวม แจ่วส้มคู่กับผักสดและผักลวก แจ่วพริกแดงคู่กับผักลวกและผักสด
              </p>
              <p class="text-respon">
                <b>8. อาหารประเภทการถนอมอาหาร</b><br>
                &nbsp; &nbsp; &nbsp; &nbsp;เป็นการนำผักที่มีอยู่มีคั้นกับเกลือและน้ำข้าวหม่า หมักทิ้งไว้ 1-3 วัน จึงสามารถรับประทานได้ จะมีรสเปรี้ยว รสชาติเปรี้ยวจะขึ้นอยู่กับอุณภูมิและระยะเวลาในการหมักดอง เช่น ส้มผักกาด ผักเขียวปลีดอง 
              </p>
              <p class="text-respon">
                <b>9. ขนมหวาน</b><br>
                &nbsp; &nbsp; &nbsp; &nbsp;เป็นการทำขนมหวานจากข้าว แป้ง ผัก ผลไม้ กะทิ และน้ำตาล นำมาปรุงประกอบให้เกิดเป็นเมนูขนมหวานตามวัตถุดิบที่นำมาเป็นส่วนประกอบ เช่น กล้วยบวชชี หวานถั่วแดง หวานถั่วดำ บวดฟักทอง ข้าวต้มข้าวโพด ข้าวต้มผัด ข้าวต้มหัวหงอก ถั่วแดงต้ม ข้าวปาด ข้าวทิพย์ และหวานแตงไทย ซึ่งเมนูขนมหวานส่วนใหญ่จะนิยมทำเมือมีงานบุญหรือเทศการสำคัญ กรณีที่ไม่มีขนมหวานในสำรับอาหารก็จะจัดผลไม้ตามฤดูกาลแทนขนมหวานใส่ในสำรับอาหาร ซึ่งเป็นการใช้ทรัพยากรที่มีอยู่ให้คุ้มค่า เนื่องจากชุมชนบ้านหาดเบี้ยมีการปลูกผลไม้หลากหลายชนิด เช่น งานบุญตามประเพณีและเทศกาลต่าง ๆ จึงจะทำขนมในการจัดเลี้ยง 
              </p>
          </div>


        <input type="checkbox" id="menu-sub_5">
        <label class="sub_5 text-respon" for="menu-sub_5"><i class="fa-regular fa-circle-down mr-3"></i><b>ลักษณะที่ตั้งของหมู่บ้าน</b></label><br>
        <div class="submenu_5">
            <p class="text-respon">
              <?php echo $data['Location']; ?>
            </p>
        </div>


        <input type="checkbox" id="menu-sub_6">
        <label class="sub_6 text-respon" for="menu-sub_6"><i class="fa-regular fa-circle-down mr-3"></i><b>แผนที่ตั้ง</b></label><br>
        <div class="submenu_6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60693.436276518485!2d101.72303655059622!3d18.05581904876049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3126bdfd8a9645a5%3A0xd47507d089c977bd!2z4Lir4Liy4LiU4LmA4Lia4Li14LmJ4LiiIOC4leC4s-C4muC4pSDguJvguLLguIHguIrguKEg4Lit4Liz4LmA4Lig4LitIOC4m-C4suC4geC4iuC4oSDguYDguKXguKI!5e0!3m2!1sth!2sth!4v1696868529644!5m2!1sth!2sth" width="400" height="300" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </div>
    </div>
  </div>
  <!--  -->
  <?php include '../include/footer.php' ?>
  <script>
    document.querySelectorAll(".image-main img").forEach((image) => {
      image.onclick = () => {
        document.querySelector(".popup-image").style.display = "block";
        document.querySelector(".popup-image img").src =
          image.getAttribute("src");
      };
    });
    document.querySelector(".popup-image span").onclick = () => {
      document.querySelector(".popup-image").style.display = "none";
    };
  </script>
</body>

</html>