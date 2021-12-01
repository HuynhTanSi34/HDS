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
    <!--Ngôi sao-->
    <link 
      rel="stylesheet" 
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="icon" href="../dinh/images/icon/book3.svg" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Chi tiết</title>
  </head>
  <body style="background-color: #85B8C8;" onload="loading()">

    <header>
      <div class="container">
        <a class="logo" href="../dinh/index.php"
          ><img src="../dinh/images/icon/book3.svg" alt="logo" />
          <div class="name">
            <span>HDStore</span>
          </div>
        </a>
        <nav class="navbar">
          <a href="../dinh/index.php">Trang Chủ</a>
          <a href="../dinh/categories/indexCate.php?cate=&timKiem=">Thể Loại</a>
        </nav>
      </div>
    </header>
    <div id="loader">
      <img src="../dinh/images/loading2.gif" alt="" />
    </div>
    <div class="root" id="root">
      <?php include("./main.php"); ?>
        <p style="height: 70px;"></p>
        <section class="slide">
            <h1 class="title">SẢN PHẨM TƯƠNG TỰ</h1>
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
        <footer>
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="info">
                <h2>About us</h2>
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
                <h2>Working Time</h2>
                <div class="date">
                  <p>Monday</p>
                  <span>07:30-22:00</span>
                </div>
                <div class="date">
                  <p>Tuesday</p>
                  <span>07:30-22:00</span>
                </div>
                <div class="date">
                  <p>wednesday</p>
                  <span>07:30-22:00</span>
                </div>
                <div class="date">
                  <p>Thursday</p>
                  <span>07:30-22:00</span>
                </div>
                <div class="date">
                  <p>Friday</p>
                  <span>07:30-22:00</span>
                </div>
                <div class="date">
                  <p>Saturday</p>
                  <span>07:30-22:00</span>
                </div>
                <div class="date">
                  <p>Sunday</p>
                  <span>08:30-22:00</span>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="subscribe">
                <h2>SUBSCRIBE US</h2>
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
        <!--Quatity-->
        <script>
          quatity = () => {
            let a = document.getElementById("sl").value;
            if (a == 0){
              document.getElementById("sl").value=0;
            }
            else{
              document.getElementById("sl").value= a-1 ;
            }
          }
          cong = () => {
            let b = document.getElementById("sl").value;
            document.getElementById("sl").value= Number(b) + 1;
          }
        </script>
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
