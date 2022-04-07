<style>
    /* === Google Font Import - Poppins === */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}


.container{
  display: flex;
  justify-content: center;
}
section{
  position: relative;  
  height: 450px;
  width: 1075px;
  display: flex;
  align-items: center;
}

.swiper{
  width: 950px;
}

.card{
  position: relative;
  background: #fff;
  border-radius: 20px;
  margin: 20px 0;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.card::before{
  content: "";
  position: absolute;
  height: 40%;
  width: 100%;
  background: #20B2AA;
  border-radius: 20px 20px 0 0;
}

.card .card-content{
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 30px;
  position: relative;
  z-index: 100;
}

section .card .image{

  width: 100%;
   max-height: 200px;
  
  padding: 5px;
  background: #20B2AA;
}

section .card .image img{
    max-height: 150px;
  width: 100%;
  object-fit: cover;
  
  border: 3px solid #fff;
}


.card .name-profession{
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 10px;
  color: #000;
} 

.name-profession .name{
  font-size: 20px;
  font-weight: 600;
}

.name-profession .profession{
  font-size:15px;
  font-weight: 500;
}

.card .button{
  width: 100%;
  display: flex;
  justify-content: space-around;
  margin-top: 20px;
}

.card .button button{
  background: #20B2AA;
  outline: none;
  border: none;
  color: #fff;
  padding: 8px 22px;
  border-radius: 20px;
  font-size: 14px;
  transition: all 0.3s ease;
  cursor: pointer;
}

.button button:hover{
  background: #007bff;
}

.swiper-pagination{
  position: absolute;
}

.swiper-pagination-bullet{
  height: 7px;
  width: 26px;
  border-radius: 25px;
  background: #20B2AA;
}

.swiper-button-next, .swiper-button-prev{
  opacity: 0.7;
  color: #20B2AA;
  transition: all 0.3s ease;
}
.swiper-button-next:hover, .swiper-button-prev:hover{
  opacity: 1;
  color: #20B2AA;
}

</style>
<div class="container">
<section>
    
    <div class="swiper mySwiper container">
      <div class="swiper-wrapper content">

        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="http://localhost/bn-PTTProject/image/vegetation/flower1-Orang%20Jessamine.jpg" alt="">
            </div>


            <div class="name-profession">
              <span class="name">Someone Name</span>
              <span class="profession">Web Developer</span>
            </div>

            <div class="button">
              <button class="aboutMe">รายละเอียด</button>

            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="http://localhost/bn-PTTProject/image/vegetation/produce-pomelo.jpg" alt="">
            </div>

            <div class="name-profession">
              <span class="name">Someone Name</span>
              <span class="profession">Web Developer</span>
            </div>

            <div class="button">
              <button class="aboutMe">รายละเอียด</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="http://localhost/bn-PTTProject/image/vegetation/leaf-Snake%20Plant.jpg" alt="">
            </div>

            <div class="name-profession">
              <span class="name">Someone Name</span>
              <span class="profession">Web Developer</span>
            </div>

            <div class="button">
              <button class="aboutMe">รายละเอียด</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="images/img4.jpg" alt="">
            </div>

            <div class="name-profession">
              <span class="name">Someone Name</span>
              <span class="profession">Web Developer</span>
            </div>

            <div class="button">
              <button class="aboutMe">รายละเอียด</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="images/img5.jpg" alt="">
            </div>

            <div class="name-profession">
              <span class="name">Someone Name</span>
              <span class="profession">Web Developer</span>
            </div>

            <div class="button">
              <button class="aboutMe">รายละเอียด</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="images/img6.jpg" alt="">
            </div>

            <div class="name-profession">
              <span class="name">Someone Name</span>
              <span class="profession">Web Developer</span>
            </div>

            <div class="button">
              <button class="aboutMe">รายละเอียด</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="images/img7.jpg" alt="">
            </div>

            <div class="name-profession">
              <span class="name">Someone Name</span>
              <span class="profession">Web Developer</span>
            </div>

            <div class="button">
              <button class="aboutMe">รายละเอียด</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="images/img8.jpg" alt="">
            </div>

            <div class="name-profession">
              <span class="name">Someone Name</span>
              <span class="profession">Web Developer</span>
            </div>
           <div class="button">
              <button class="aboutMe">รายละเอียด</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="images/img9.jpg" alt="">
            </div>

            <div class="name-profession">
              <span class="name">Someone Name</span>
              <span class="profession">Web Developer</span>
            </div>

            <div class="button">
              <button class="aboutMe">รายละเอีย</button>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
  </section>
</div>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>