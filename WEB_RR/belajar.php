<center><b><?php
 $nilai_rasya = 100;
 if($nilai_rasya >= 90 && $nilai_rasya <= 100 ){
    echo "Grade A";

 }elseif ( $nilai_rasya >= 80 && $nilai_rasya <= 89) {
  echo "Grade B";

}elseif ( $nilai_rasya >= 70 && $nilai_rasya <= 79) {
  echo "Grade C";

  }elseif ( $nilai_rasya >= 60 && $nilai_rasya <= 69) {
  echo "Grade D";

   }elseif ( $nilai_rasya >= 0 && $nilai_rasya <= 59) {
  echo "Grade E";

  }else{ 
  echo "Maaf terjadi kesalahan input Nilai";
 }
 //INI FUNCTION
 function tampilkan_nama() { //bisa memakai yang simpel yaitu "nama" saja
 
  echo "<br>Nama saya LiRas<br>";
 }
 tampilkan_nama();

//switch case
 $angka = 4;
 switch ($angka) {
  case '1':
    echo "Isi variabel angka adalah satu";
    break;
    case '2':
    echo "Isi variabel angka adalah dua";
    break;
    case '3':
    echo "Isi variabel angka adalah tiga";
    break;
    case '4':
    echo "Isi variabel angka adalah empat";
    break;
    case '5':
    echo "Isi variabel angka adalah lima";
    break;
    case '6':
    echo "Isi variabel angka adalah enam";
    break;
    default;
    echo "Isi variabel tidak ditemukan";
    break;

 }
 //Ini perulangan while
 
?></b>