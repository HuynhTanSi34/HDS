<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./thanhtoan.css" />
    <meta charset="UTF-8" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;600&display=swap"
      rel="stylesheet"
    />
    <!-- bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <title>Thanh toán</title>
</head>
<body style="background-color: #85B8C8;">
<span id="head"></span>
<header>
      <div class="container">
        <a class="logo" href="../dinh/index.php"
          ><img src="../../dinh/images/icon/book3.svg" alt="logo" />
          <div class="name">
            <span>HDStore</span>
          </div>
        </a>
        <nav class="navbar">
          <a href="../../dinh/index.php">Trang Chủ</a>
          <a href="../../dinh/categories/indexCate.php?cate=&timKiem=">Thể Loại</a>
        </nav>
      </div>
    </header>
        <p></p>

    <center>
        <form id="form1" method="post" action=<?php echo "./main.php?id=".$_GET['id'] ?> >
            <div class="phan1">
                <table class="motaa">
                    <caption class="tenbang">
                    <h3>Thông tin cơ bản <img src="./images/in5.jpg" style="width:50px; height:50px;"/> </h3>
                    </caption>
                    <tr>
                        <td>
                            <div class="cochu"><label for="hoten">Họ và tên: </label></div>
                        </td>
                        <td>
                            <div ><input type="text" name="name" required value="" style="width: 275px; height:35px" class="cochu"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cochu" ><label for="email">Email nhận đơn hàng: </label></div>
                        </td>
                        <td>
                            <div class="cochu" ><input type="text" name="email" required value="" style="width: 275px; height:35px;"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cochu" ><label for="tp">Tỉnh/ Thành phố: </label></div>
                        </td>
                        <td><div style="font-size:20px;" >
                            <select id="stt" style="width: 275px; height:35px;" name="city" required value="">
                                <option value="" selected="selected">---------------Chọn TP---------------</option>
                                <option value="Hồ Chí Minh" >Hồ Chí Minh</option>
                                <option value="Hà Nội" >Hà Nội</option>
                                <option value="Hải Phòng" >Hải Phòng</option>
                                <option value="Đà Nẵng" >Đà Nẵng</option>
                                <option value="Cần thơ" >Cần Thơ</option>
                                <option value="An Giang" >An Giang</option>
                                <option value="Bà Rịa - Vũng Tàu" >Bà Rịa - Vũng Tàu</option>
                                <option value="Bắc Giang" >Bắc Giang</option>
                                <option value="Bắc Kạn" >Bắc Kạn</option>
                                <option value="Bạc Liêu" >Bạc Liêu</option>
                                <option value="Bắc Ninh" >Bắc Ninh</option>
                                <option value="Bến Tre" >Bến Tre</option>
                                <option value="Bình Định" >Bình Định</option>
                                <option value="Bình Dương" >Bình Dương</option>
                                <option value="Bình Phước" >Bình Phước</option>
                                <option value="Bình Thuận" >Bình Thuận</option>
                                <option value="Cà Mau" >Cà Mau</option>
                                <option value="Cao Bằng" >Cao Bằng</option>
                                <option value="Đắk Lắk" >Đắk Lắk</option>
                                <option value="Đắk Nông" >Đắk Nông</option>
                                <option value="Điện Biên" >Điện Biên</option>
                                <option value="Đồng Nai" >Đồng Nai</option>
                                <option value="Đồng Tháp" >Đồng Tháp</option>
                                <option value="Gia Lai" >Gia lai</option>
                                <option value="Hà Giang" >Hà Giang</option>
                                <option value="Hà Nam" >Hà Nam</option>
                                <option value="Hà Tĩnh" >Hà Tĩnh</option>
                                <option value="Hải Dương" >Hải Dương</option>
                                <option value="Hậu Giang" >Hậu Giang</option>
                                <option value="Hòa Bình" >Hòa Bình</option>
                                <option value="Hưng Yên" >Hưng Yên</option>
                                <option value="Khánh Hòa" >Khánh Hòa</option>
                                <option value="Kiên Giang" >Kiên Giang</option>
                                <option value="Kom Tum" >Kom Tum</option>
                                <option value="Lai Châu" >Lai Châu</option>
                                <option value="Lâm Đồng" >Lâm Đồng</option>
                                <option value="Lạng Sơn" >Lạng Sơn</option>
                                <option value="Lào Cai" >Lào Cai</option>
                                <option value="Long An" >Long An</option>
                                <option value="Nam Định" >Nam Định</option>
                                <option value="Nghệ An" >Nghệ An</option>
                                <option value="Ninh Bình" >Ninh Bình</option>
                                <option value="Ninh Thuận" >Ninh Thuận</option>
                                <option value="Phú Thọ" >Phú Thọ</option>
                                <option value="Phú Yên" >Phú Yên</option>
                                <option value="Quãng Bình" >Quãng Bình</option>
                                <option value="Quãng Nam" >Quãng Nam</option>
                                <option value="Quãng Ngãi" >Quãng Ngãi</option>
                                <option value="Quãng Ninh" >Quãng Ninh</option>
                                <option value="Quãng Trị" >Quãng Trị</option>
                                <option value="Sóc Trăng" >Sóc Trăng</option>
                                <option value="Sơn La" >Sơn La</option>
                                <option value="Tây Ninh" >Tây Ninh</option>
                                <option value="Thái Bình" >Thái Bình</option>
                                <option value="Thái Nguyên" >Thái Nguyên</option>
                                <option value="Thanh Hóa" >Thanh Hóa</option>
                                <option value="Thừa Thiên Huế" >Thừa Thiên Huế</option>
                                <option value="Tiền Giang" >Tiền Giang</option>
                                <option value="Trà Vinh" >Trà Vinh</option>
                                <option value="Tuyên Quang" >Tuyên Quang</option>
                                <option value="Vĩnh Long" >Vĩnh Long</option>
                                <option value="Vĩnh Phúc" >Vĩnh Phúc</option>
                                <option value="Yên Bái" >Yên Bái</option>
                            </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cochu" ><label for="sonha">Số nhà, tên đường và Quận (Huyện): </label></div>
                        </td>
                        <td>
                            <div class="cochu" ><input type="text" name="address" required value="" style="height: 70px; width: 275px;"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cochu" ><label for="sdtt">Số điện thoại: </label></div>
                        </td>
                        <td>
                            <div class="cochu" ><input type="text" name="phone" required value="" style="width: 275px; height:35px"></div>
                        </td>
                    </tr>
                </table>
            </div>

            <p> </p>

            <div class="phan2">
                <table border="0" class="motaa">
                    <caption class="tenbang">
                    <h3>Thông tin món hàng<img src="./images/sa2.jpg" style="width:50px; height:50px;"/></h3>
                    </caption>
                    <?php include("../../dinh/connect.php");

                      if(isset($_GET['id'])){
                        $sql = "SELECT * FROM `booklist` WHERE ID = ".$_GET['id'];
                      }else{
                        $sql = "SELECT * FROM `booklist` WHERE ID = 123";
                      }
                      // $sql = "SELECT * FROM `booklist` WHERE ID = 142";
                        $result = mysqli_query($conn, $sql);
                       
                        
                        if (mysqli_num_rows($result) > 0) {

                          while($row = mysqli_fetch_assoc($result)) {
                                  echo '<tr style="margin-bottom:10px">
                                          <td>
                                          <div name="namebook"><h1>'.$row['Ten'].'</h1></div>
                                          </td>
                                          <td>
                                          <div align="center" >
                                          <img style="width: 150px; height:150px;" src="'.$row['IMG'].'"/> </div>
                                          </td>
                                      </tr>
                                      <tr> 
                                        <td colspan="2"></td>
                                      </tr>
                                      <tr style="border-style: outset;" >
                                          <td colspan="2">
                                          <div><h3> Thanh toán:</h3></div>
                                          </td>
                                      </tr>
                                      <tr>
                                        <td align="center" style="border-style: outset;"><br>
                                          <table border="0">
                                            <tr style="font-size:25px;">
                                              <td style="width: 100px;">
                                                <div id="giaca" >'.$row['Price'].'</div>
                                              </td>';


                          }
                        } else {
                          echo "0 results";
                        }
                      
                      mysqli_close($conn);
                    ?>
                        <td style="width: 30px;"> X </td>
                        <td>
                          <div id="solo" style="width: 30px;"></div>
                        </td>
                      </tr>
                      <tr >
                        <td colspan="3">
                          <div style="font-size:35px;" id="tien" >
                          
                          </div>
                          <input id="values" value="0" name="money" style="display:none">
                        </td>
                      </tr>
                    </table> <br>
                  </td>
                      <td align="center" style="border-style: outset;">
                      
                      <button type="button" class="nutsl" name="tru" onclick="quatity()">
                        <img src="images/tru.jpg" alt="Dấu trừ">
                      </button>
                      <input id="sl" type="text" value="1" style="height: 30px; width: 50px; text-align: center;"
                       >
                      <button type="button" class="nutsl" name="Cong" onclick="cong()">
                        <img src="images/cong.jpg" alt="Dấu cộng">
                      </button>
                        
                      </td>
                </table>
            </div>
            <div class="warning" align="center"><br>
              <div><button type="submit" name="submit" value="Xác nhận mua hàng" class="submit">Xác nhận mua hàng </botton></div>
                <div>*Vui lòng nhập đầy đủ thông tin trước khi xác nhận. Cảm ơn quý khách. <img src="./images/warning.jpg" style="width:25px; height:25px;"/></div>
            </div>
            </from>
            <p></p>

      
            <p></p>    
    </center>
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
          <a href="#head" class="scroll"><i class="fa fa-arrow-alt-circle-up"></i></a>
        </div>
        </div>
      </footer>
    </div>
        <!--Quatity-->  

        <!-- jquery -->
        <script
          src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
          integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
          crossorigin="anonymous"
        ></script>
        <!-- carousel -->

        <script
          src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
          crossorigin="anonymous"
        ></script>

        <!-- wowjs -->
        <script
          src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
          integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
          crossorigin="anonymous"
        ></script>
        <!-- main -->
        <script src="./main.js">

        </script>
    <script>
        function thanhcong() {
            alert("Xác nhận thành công!!! ");
        }
    </script>
        <!-- <div>
            php 
            $conn = mysqli_connect("localhost","root","","tinhtp");
            $sql = "select stt, ten from quan ";
            $result = mysqli_query($conn,$sql);
            if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
               echo "value: " . $row["stt"]. " - label: " . $row["ten"]."<br>";
                }
            }
            else {
                echo "Lỗi dữ liệu";
            }
            mysqli_close($conn);
            ?> 
        </div> -->
    </body>
</html>