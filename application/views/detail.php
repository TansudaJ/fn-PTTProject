<div class="container-fluid">
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">ข้อมูลทั่วไป</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">ลักษณะทางพฤกษศาสตร์</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">การใช้ประโยชน์</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3">การดูแลรักษา</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu4">รูปภาพ</a>
    </li>
  </ul>





  <!-- Tab panes -->
  <div class="tab-content" style="background-color: fff;">
    <div id="home" class="container tab-pane active"><br>

      <div id="accordion-2" role="tablist" aria-multiselectable="true" class="o-accordion">
        <div class="card multi">
          <div class="card-header" role="tab" id="headingOne-1">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne-1" aria-expanded="false" aria-controls="collapseOne-1">
                ข้อมูลพรรณไม้
              </a>
            </h5>
          </div>


          <div id="collapseOne-1" class="collapse" role="tabpanel" aria-labelledby="headingOne-1">
            <div class="card-block" style="margin: 20px 50px 20px 50px;">
              <b>ชื่อไทย:</b> <?php echo $vegetation->n_common_TH; ?> <br>
              <b>ชื่อสามัญ:</b> <?php echo $vegetation->n_common_ENG; ?> <br>
              <b>ชื่อวิทยาศาสตร์:</b> <?php echo $vegetation->n_scientific; ?> <br>
              <b>ชื่อวงศ์:</b> <?php echo $vegetation->n_family; ?><br>
              <!--<b>ชื่ออื่นๆ:</b> SAPOTACEAE<br>-->
              <b>กลุ่มพรรณไม้:</b> <?php echo $vegetation->type; ?><br>
            </div>
          </div>
        </div>
        <div class="card multi">
          <div class="card-header" role="tab" id="headingTwo-1">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
                เขตกระจายพันธุ์
              </a>
            </h5>
          </div>
          <div id="collapseTwo-1" class="collapse show" role="tabpanel" aria-labelledby="headingTwo-1">
            <div class="card-block" style="margin: 20px 50px 20px 50px;">
            <?php echo $vegetation->distribution; ?>
            </div>
          </div>
        </div>
        <div class="card multi">
          <div class="card-header" role="tab" id="headingThree-1">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree-1" aria-expanded="true" aria-controls="collapseThree-1">
                ถิ่นกำเนิด
              </a>
            </h5>
          </div>
          <div id="collapseThree-1" class="collapse show" role="tabpanel" aria-labelledby="headingThree-1">
            <div class="card-block" style="margin: 20px 50px 20px 50px;">
            <?php echo $vegetation->plant_origin; ?>
            </div>
          </div>
        </div>
      </div>
      <script>
        $('.collapse').collapse()
      </script>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <p><?php echo $vegetation->appearance; ?></p>
    </div>


    <div id="menu2" class="container tab-pane fade"><br>
      <p><?php
          //var_dump($medicinalProperties);
          foreach ($medicinalProperties as $row) {
            echo "<b>" . $row->plantpathname . ":</b> " . $row->properties . "<br>";
          }
          ?>
      </p>
    </div>
    <div id="menu3" class="container tab-pane fade"><br>
      <p>
        <b>การปลูกและการขยายพันธุ์:</b> <?php echo $vegetation->propagation; ?><br>
        <b>ระยะเวลาการติดดอก:</b> ตลอดปี<br>
        <b>ระยะเวลาการติดผล:</b> ตลอดปี<br>
        <b>สภาพนิเวศ:</b> กลางแจ้ง<br>
        <b>สภาพนิเวศวิทยา:</b> เจริญเติบโตได้ดีในดินทุกชนิด ต้องกาน้ำและความชื้นปานกลาง ชอบแสงแดดจัด<br>
      </p>
    </div>

    <div id="menu4" class="container tab-pane fade"><br>
      <section>
        <style>
          @import url('https://fonts.googleapis.com/css?family=poppins:200,300,400,500,600,700,800,900&display=swap');

          * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins', sans-serif;
          }

          section {
            padding: 20px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 40px auto;
          }

          section ul {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 20px;
          }

          section ul li {
            list-style: none;
            background: #eee;
            padding: 12px 20px;
            margin: 5px;
            letter-spacing: 1px;
            cursor: pointer;
          }

          section ul li.active {
            background: #03a9f4;
            color: #fff;
          }

          .product {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
          }

          .product .itemBox {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 5px;
            display: block;
          }

          .product .itemBox.hide {
            display: none;
          }

          .product .itemBox img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
          }
        </style>
        <ul>
          <li class="list active" data-filter="all">ทั้งหมด</li>
          <?php
          foreach ($plantpathname as $row) {
            echo '<li class="list" data-filter="' . $row->pathID . '">' . $row->plantpathname . '</li>';
          } ?>

        </ul>
        <div class="product">

          <?php
          foreach ($imagevegetation as $row) { ?>
            <div class="itemBox" data-item="<?php echo $row->plantpath_pathID; ?>"><img src="<?php echo $row->URL; ?>"></div>
          <?php
          } ?>

        </div>
      </section>
      <script>
        let list = document.querySelectorAll('.list');
        let itemBox = document.querySelectorAll('.itemBox');

        for (let i = 0; i < list.length; i++) {
          list[i].addEventListener('click', function() {
            for (let j = 0; j < list.length; j++) {
              list[j].classList.remove('active');
            }
            this.classList.add('active');

            let dataFilter = this.getAttribute('data-filter');

            for (let k = 0; k < itemBox.length; k++) {
              itemBox[k].classList.remove('active');
              itemBox[k].classList.add('hide');

              if (itemBox[k].getAttribute('data-item') == dataFilter || dataFilter == "all") {
                itemBox[k].classList.remove('hide');
                itemBox[k].classList.add('active');
              }
            }
          })
        }
      </script>
    </div>
  </div>
</div>