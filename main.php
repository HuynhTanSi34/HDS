<?php
include("../dinh/connect.php");
$ID = $_GET['id'];

$sql = "SELECT * FROM `booklist` WHERE ID = $ID";
// $result = mysqli_query($conn, $sql);

// $sql2 = "SELECT * FROM `booklist` WHERE Quatity <= 10";
// $result2 = mysqli_query($conn, $sql2);
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
            echo 
            '<table border=0 class="bang tam">
            <tr>
                <td rowspan="3" style="background-color: white;">
                    <div style="max-width: 440px; max-height: 440px;">
                            <img src="'.$row['IMG'].'"
                                alt="'.$row['Ten'].'" style="max-width: 440px; max-height: 440px; margin-left: 10px";>
                    </div>
                </td>
                <td style="height: 130px; background-color: white;" class="bot">
                    <div><h1 style="margin: 10px 10px 5px 5px">'.$row['Ten'].'</h1></div>
                    <i class="fa fa-star " style="color:orange; margin-left:5px"></i>
                    <i class="fa fa-star " style="color:orange"></i>
                    <i class="fa fa-star " style="color:orange"></i>
                    <i class="fa fa-star " style="color:orange"></i>
                    <i class="fa fa-star "></i>    
                </td>
            </tr>
            <tr>
                <td style="height: 80px; background-color: white; " >
                    <table class="top" style="background-color: #D1EDE1; width: 300px;">
                        <tr>
                            <td style="text-align: center;">
                                <div><h3 id="price" >'.$row['Price'].' VNĐ</h3></div> 
                            </td>
                        </tr>
                    </table >
                </td>
            </tr>
            <tr>
                <td style="height: 350px; background-color: white;" class="top">
                <p><h2>Số lượng</h2></p>
                <div>
                    <button class="nutsl" onclick="quatity()">
                        <img src="images/tru.jpg" alt="Dấu trừ">
                    </button>
                    <input id="sl" type="text" value="1" style="height: 30px; width: 50px; text-align: center;"
                       >
                    <button class="nutsl" onclick="cong()">
                        <img src="images/cong.jpg" alt="Dấu cộng">
                    </button>
                </div>
                <p ></p>
                <div class="buy">
                <a class="buyPd" href="./thanhToan/Thanhtoan.php?id='.$row['ID'].'" style="text-decoration: none;"><button style="height: 100px; width: 300px">Mua</button></a>
                </div>
                </td>
            </tr>
        </table>
        <p style="height: 70px;"></p>
        <table border="0" class="bang3 tam" style="background-color: white;">
            <caption style="caption-side: top; color: #000;"><h3>Chi tiết sản phẩm</h3></caption>
            <tr>
                <td>
                    <table border="0" class="bang1 tam top thutle" style="background-color: white;">
                            <tr>
                                <td class="o" style="background-color: #e4dace;"><h6>Công ty phát hành</h6></td>
                                <td><h6>'.$row['Cty'].'</h6></td>
                            </tr>
                            <tr>
                                <td class="o" style="background-color: #e4dace;"><h6>Ngày xuất bản</h6></td>
                                <td style="background-color: #e4dace;"><h6>'.$row['day'].'</h6></td>
                            </tr>
                            <tr>
                                <td class="o" style="background-color: #e4dace;"><h6>Kích thước</h6></td>
                                <td><h6>'.$row['kichthuoc'].'</h6></td>
                            </tr>
                            <tr>
                                <td class="o" style="background-color: #e4dace;"><h6>Dịch giả</h6></td>
                                <td style="background-color: #e4dace;"><h6>'.$row['dich'].'</h6></td>
                            </tr>
                            <tr>
                                <td class="o" style="background-color: #e4dace;"><h6>Loại bìa</h6></td>
                                <td><h6>'.$row['loaibia'].'</h6></td>
                            </tr>
                            <tr>
                                <td class="o" style="background-color: #e4dace;"><h6>Số trang</h6></td>
                                <td style="background-color: #e4dace;"><h6>'.$row['trang'].'</h6></td>
                            </tr>
                            <tr>
                                <td class="o" style="background-color: #e4dace;"><h6>Nhà xuất bản</h6></td>
                                <td><h6>'.$row['nhaxb'].'</h6></td>
                            </tr>
                    </table>
                </td>
            </tr>
        </table>
        <p style="height: 70px;"></p>
        <table border="0" class="bang2 tam">
            <caption style="caption-side: top; color: #000;"><h3>Mô tả sản phẩm</h3></caption>
            <tr>
                <td class="mota" style="background-color: white;"><div class="detail"><p>
                '.$row['MoTa'].'</p></div></td>
            </tr>
        </table>';
    }
    return $row;
  } else {
    echo "0 results";
  }


mysqli_close($conn);
?>