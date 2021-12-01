<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- fontAwesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <!-- font google -->
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;600&display=swap"
      rel="stylesheet"
    />
    <!-- carousel -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
      integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
    />
    <!-- bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <!-- animated css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <title>BOOK STORE</title>
  </head>
  <body onload="loading()">
    <div id="loader"></div>
    <div class="root" id="root">
    <header>
      <div class="container">
        <a class="logo" href="./index.php"
          ><img src="../dinh/images/icon/book3.svg" alt="logo" />
          <div class="name">
            <span>HDStore</span>
          </div>
        </a>
        <nav class="navbar">
          <a href="#">CATEGORIES</a>
          <!-- <a href="#">SERVICE</a>
          <a href="#">GALLERY</a>
          <a href="#">CLIENTS</a>
          <a href="#">CONTACT</a> -->
          <div class="search">
            <form action="#">
              <input
                type="text"
                id="searchInput"
                placeholder="Tìm Kiếm"
                maxlength="30"
              />
              <i class="fa fa-search" id="iconSearch"></i>
            </form>
          </div>
        </nav>
      </div>
    </header>

      <section class="carousel">
        <div id="demo" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
          </ul>

          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./images/sach1.jpg" alt="Los Angeles" />
            </div>
            <div class="carousel-item">
              <img src="./images/sach2.jpg" alt="Chicago" />
            </div>
            <div class="carousel-item">
              <img src="./images/sach3.jpg" alt="New York" />
            </div>
            <div class="carousel-item">
              <img src="./images/sach4.jpg" alt="New York" />
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </section>

      <section class="slide">
        <h1 class="title">SÁCH BÁN CHẠY</h1>
        <div class="owl-carousel owl-theme owl">
          <div class="item">
            <a href="#"
              ><img
                src="https://salt.tikicdn.com/cache/w444/ts/product/0a/f6/38/bc10734989977da424642a1c4750eee2.jpg"
                alt=""
              />
              <p class="price">19.000 vnđ</p>
            </a>
          </div>
          <div class="item">
            <a href="#"
              ><img
                src="https://salt.tikicdn.com/cache/w444/ts/product/fd/61/1d/a19424cfe9d113c32732d93cf2d5f59a.jpg"
                alt=""
              />
              <p class="price">19.000 vnđ</p>
            </a>
          </div>
          <div class="item">
            <a href="#"
              ><img
                src="https://salt.tikicdn.com/cache/w444/ts/product/eb/62/6b/0e56b45bddc01b57277484865818ab9b.jpg"
                alt=""
              />
              <p class="price">19.000 vnđ</p>
            </a>
          </div>
          <div class="item">
            <a href="#"
              ><img
                src="https://salt.tikicdn.com/cache/w444/ts/product/76/53/da/3598ca9c124e59cd172a612193d643bf.jpg"
                alt=""
              />
              <p class="price">19.000 vnđ</p>
            </a>
          </div>
          <div class="item">
            <a href="#"
              ><img
                src="https://salt.tikicdn.com/cache/w444/ts/product/dd/04/33/6e0910413382398e83754498dfbf725d.png"
                alt=""
              />
              <p class="price">19.000 vnđ</p>
            </a>
          </div>
          <div class="item">
            <a href="#"
              ><img
                src="https://salt.tikicdn.com/cache/w444/ts/product/22/cb/a9/524a27dcd45e8a13ae6eecb3dfacba7c.jpg"
                alt=""
              />
              <p class="price">19.000 vnđ</p>
            </a>
          </div>
          <div class="item">
            <a href="#"
              ><img
                src="https://salt.tikicdn.com/cache/w444/ts/product/b8/b9/5d/1f8e3bf605669021a546f787b1a7cc58.jpg"
                alt=""
              />
              <p class="price">19.000 vnđ</p>
            </a>
          </div>
          <div class="item">
            <a href="#"
              ><img
                src="https://salt.tikicdn.com/cache/w444/ts/product/95/c5/71/f260011660001af960c42d7d2f1c5dc1.jpg"
                alt=""
              />
              <p class="price">19.000 vnđ</p>
            </a>
          </div>
          <div class="item">
            <a href="#"
              ><img
                src="https://salt.tikicdn.com/cache/w444/ts/product/74/d8/4d/58b6f57d6ccc972bae84892f2be7cd9f.png"
                alt=""
              />
              <p class="price">19.000 vnđ</p>
            </a>
          </div>
          <div class="item">
            <a href="#"
              ><img
                src="https://salt.tikicdn.com/cache/w444/ts/product/75/f0/6a/42a84b05e154f7f32acdc7883d30572b.jpg"
                alt=""
              />
              <p class="price">19.000 vnđ</p>
            </a>
          </div>
        </div>
      </section>

      <section class="contact">
        <div class="form">
          <h1>THÔNG TIN LIÊN LẠC</h1>
          <form class="row">
            <div class="col-6 item1">
              <input type="text" placeholder="Name" required />
            </div>
            <div class="col-6 item2">
              <input type="text" placeholder="Last Name" required />
            </div>
            <div class="col-6 item3">
              <input type="email" placeholder="Email" />
            </div>
            <div class="col-6 item4">
              <input type="text" placeholder="Phone" maxlength="15" required />
            </div>
            <div class="col click">
              <div class="genders">
                <input type="radio" name="gender" id="" />
                <span class="label">Nam</span>
                <input type="radio" name="gender" id="" />
                <span class="label">Nữ</span>
                <input type="radio" name="gender" id="" />
                <span class="label">Khác</span>
              </div>
              <div class="noti">
                <input type="checkbox" class="checkbox" />
                <span>Nhận thông báo từ cửa hàng</span>
              </div>
              <button type="submit">SEND</button>
            </div>
          </form>
        </div>

        <div class="map">
          <div class="container">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.787373099626!2d106.71885281462302!3d10.827577492286839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529bf21c641a9%3A0x6a10535079e9b609!2zU2Vuc2UgQ2l0eSBQaOG6oW0gVsSDbiDEkOG7k25n!5e0!3m2!1svi!2s!4v1617551933583!5m2!1svi!2s"
              width="100%"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
        </div>

        <div class="infomation">
          <div class="container">
            <div class="row">
              <div class="col">
                <i class="fa fa-home"></i>
                <h1>Lorem ipsum dolor sit amet.</h1>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
                  odit.
                </p>
              </div>
              <div class="col">
                <i class="fa fa-phone"></i>
                <h1>Lorem ipsum dolor sit amet.</h1>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
                  odit.
                </p>
              </div>
              <div class="col">
                <i class="fa fa-envelope"></i>
                <h1>Lorem ipsum dolor sit amet.</h1>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
                  odit.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer>
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="info">
                <h1>About us</h1>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum
                  vitae expedita, necessitatibus tempora suscipit ratione
                </p>
                <p>distinctio explicabo nemo facere quaeratádsadsadasda?</p>
                <div class="icon">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-google-plus-g"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="schedule">
                <h1>Working Time</h1>
                <div class="date">
                  <p>Monday</p>
                  <span>9:30-18:30</span>
                </div>
                <div class="date">
                  <p>Tuesday</p>
                  <span>9:30-18:30</span>
                </div>
                <div class="date">
                  <p>wednesday</p>
                  <span>9:30-18:30</span>
                </div>
                <div class="date">
                  <p>Thursday</p>
                  <span>9:30-18:30</span>
                </div>
                <div class="date">
                  <p>Friday</p>
                  <span>9:30-18:30</span>
                </div>
                <div class="date">
                  <p>Saturday</p>
                  <span>9:30-18:30</span>
                </div>
                <div class="date">
                  <p>Sunday</p>
                  <span>Closed</span>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="subscribe">
                <h1>SUBSCRIBE US</h1>
                <form class="form">
                  <div class="form-group">
                    <input type="email" placeholder="Email@example.com" />
                  </div>
                  <div class="form-group">
                    <button type="submit">Send</button>
                  </div>
                </form>
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Nostrum sed fuga consequuntur impedit explicabo doloribus.
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- jquery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous"
    ></script>
    <!-- carousel -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
    <script src="./js/carousel.js"></script>
    <!-- wowjs -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
      integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
      crossorigin="anonymous"
    ></script>
    <!-- main -->
    <script src="./js/main.js"></script>
  </body>
</html>
