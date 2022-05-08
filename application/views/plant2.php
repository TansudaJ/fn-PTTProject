<div class="container-fluid">

  <h4 class="text"><?php echo $vegetation->n_common_TH; ?></h4>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    body {
      background: #20B2AA;
    }

    .text {
      text-align: center;
      margin-top: 20px;
      margin-bottom: 20px;
      text-decoration: underline wavy #fff;
      color: #fff;
    }

    @media (min-width: 576px) {
      .rounded-nav {
        border-radius: 50rem !important;
      }
    }

    @media (min-width: 576px) {
      .rounded-nav .nav-link {
        border-radius: 50rem !important;
      }
    }

    /* With arrow tabs */

    .with-arrow .nav-link.active {
      position: relative;
    }

    .with-arrow .nav-link.active::after {
      content: '';
      border-left: 6px solid transparent;
      border-right: 6px solid transparent;
      border-top: 6px solid #2b90d9;
      position: absolute;
      bottom: -6px;
      left: 50%;
      transform: translateX(-50%);
      display: block;
    }

    /* lined tabs */

    .lined .nav-link {
      border: none;
      border-bottom: 3px solid transparent;
    }

    .lined .nav-link:hover {
      border: none;
      border-bottom: 3px solid transparent;
    }

    .lined .nav-link.active {
      background: none;
      color: #555;
      border-color: #2b90d9;
    }

    .nav-pills .nav-link {
      color: #555;
    }

    .text-uppercase {
      letter-spacing: 0.1em;
    }
    .card-img-top{
      height: 100px;
      width: auto;
    }
  </style>
  <div class="p-5 bg-white rounded shadow mb-5">
    <!-- Rounded tabs -->
    <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav">
      <li class="nav-item flex-sm-fill">
        <a id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" class="nav-link border-0 text-uppercase font-weight-bold active">ข้อมูล</a>
      </li>
      <li class="nav-item flex-sm-fill">
        <a id="picture-tab" data-toggle="tab" href="#picture" role="tab" aria-controls="picture" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">รูปต้นไม้</a>
      </li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div id="home" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-4 py-5 show active">
        <div class="tab-content" style="background-color: fff;">
          <div id="home" class="container tab-pane active"><br>

            <div id="accordion-2" role="tablist" aria-multiselectable="true" class="o-accordion">
              <div class="card multi">
                <div class="card-header" role="tab" id="headingOne-1">
                  <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne-1" aria-expanded="false" aria-controls="collapseOne-1">
                      ความพิเศษ
                    </a>
                  </h5>
                </div>


                <div id="collapseOne-1" class="collapse" role="tabpanel" aria-labelledby="headingOne-1">
                  <div class="card-block" style="margin: 20px 50px 20px 50px;">
                    <b>ความน่าสนใจ:</b> <?php echo $plant->exclusivity; ?> <br>
                    <b>ขนาดความสูง:</b> <?php echo $plant->height; ?> เมตร <br>
                    <b>ขนาดเส้นผ่าศูนย์กลาง:</b> <?php echo $plant->diameter; ?> เซนติเมตร <br>
                    <b>สถานะปัจจุบัน:</b> <?php echo $plant->actual; ?> <br>
                    <b>QR Code:</b> <img src="<?php echo $this->config->item('bn_base_url') . $plant->QRCode; ?>" class="card-img-top" alt="..." /> <br>
                    <b>ข้อมูลพรรณไม้:</b> <a href="<?php echo $this->config->item('base_url') . "index.php/detail/index/".$vegetation->vegetation_vegetationID; ?>">link ข้อมูลเพิ่มเติม</a> <br>
                  </div>  
                </div>
              </div>
              
            </div>
            <script>
              $('.collapse').collapse()
            </script>
          </div>
        </div>
      </div>
      
      <div id="picture" role="tabpanel" aria-labelledby="picture-tab" class="tab-pane fade px-4 py-5">
        <section>
          <style>
            @import url('https://fonts.googleapis.com/css?family=poppins:200,300,400,500,600,700,800,900&display=swap');

            body {
              background: #20B2AA;
            }

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
            foreach ($imageplant as $row) { ?>
              <div class="itemBox" data-item="<?php echo $row->plantpath_pathID; ?>"><img src="<?php echo $this->config->item('bn_base_url') .$row->URL; ?>"></div>
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
  <!-- End rounded tabs -->
</div>
</div>