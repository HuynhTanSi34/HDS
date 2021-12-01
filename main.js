let a = Number(document.getElementById("sl").value);
let n = document.getElementById("giaca").innerHTML;

document.getElementById("solo").innerHTML = a;

quatity = () => {
  if (a == 0) {
    document.getElementById("sl").value = 0;
    document.getElementById("solo").innerHTML = 0;
    document.getElementById("values").value = 0;
  } else {
    document.getElementById("sl").value = a - 1;
    document.getElementById("solo").innerHTML = a - 1;
    a = a - 1;
    document.getElementById("values").value = n * a;
  }

  document.getElementById("tien").innerHTML = +(n * a) + " Đồng";
  document.getElementById("values").value = n * a;
};

cong = () => {
  let b = document.getElementById("sl").value;
  document.getElementById("sl").value = Number(b) + 1;
  document.getElementById("solo").innerHTML = Number(b) + 1;
  a = a + 1;
  document.getElementById("tien").innerHTML = n * a + " Đồng";
  document.getElementById("values").value = n * a;
};

document.getElementById("tien").innerHTML = n * a + " Đồng";

document.getElementById("values").value = n * a;
