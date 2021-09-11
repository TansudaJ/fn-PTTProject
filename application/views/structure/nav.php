<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">
<img src="https://www.pttplc.com/uploads/About/logo_PTT_3.png" alt="Logo" style="width:70px;">
  </a>

  <a class="navbar-brand" href="#">&nbsp;ระบบจัดการข้อมูลพรรณไม้</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">หน้าหลัก <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php if ($activebar == "vegetation"){echo "active";} ?>">
        <a class="nav-link" href="<?php echo site_url("vegetation/index"); ?>">ข้อมูลพรรณไม้</a>
      </li>
      <li class="nav-item <?php if ($activebar == "plant"){echo "active";} ?>">
        <a class="nav-link" href="<?php echo site_url("plant/index"); ?>">ข้อมูลต้นไม้</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link" href="#">การติดต่อ</a>
        <!--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ช่องทางการติดต่อ
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>-->
      </li>
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
  </div>
</nav>