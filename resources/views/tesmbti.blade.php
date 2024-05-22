<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BrainBoost </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/medilab/assets/img/favicon.png" rel="icon">
    <link href="/medilab/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/medilab/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/medilab/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/medilab/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/medilab/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/medilab/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/medilab/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/medilab/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/medilab/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/medilab/assets/css/style.css" rel="stylesheet">
    <style>
*{
    margin: 0 auto;
}


.navigasi>ul>li{
    display: inline;
    list-style-type: none;
    margin-right: 20px;
}

h1{
    color: aqua;
}

body{
    overflow: auto;
}

.header{
    margin: 0px auto;
    display: inline;
}



.jumbotron {
    font-size: 20px;
    padding: 60px;
    background-color: green;
    text-align: center;
    color: white;
 }



.main {
    margin-top: 5px;
    margin-bottom: 20px;
    /*display: flex;*/
    text-align: left;
    height: auto;
}

.content {
    /*flex-basis: 75%;*/
    float: left;
    width: 75%;
    padding: 10px;
    background-color: white;
    color: black;
    margin: 10px;
    border-radius: 5px;
    box-shadow: 3px 3px 3px 3px #666666;
}



@media screen and (max-width: 800px) {
    .main {
        display: flex;
        flex-direction: column;
    }

    .content, aside {
        flex-basis: 1;
        padding: 10px;
        width: 100%;
    } 
    
    table thead {
        width: auto;
    }

 }

#foto{
    width: 60%;
    padding: 10px;
    object-position: center;
    object-fit: cover;
 }

 
 .judul{
    color: #1c84e3;
    text-align: center;
    padding: 10px;
    margin-bottom: 10px;
 }


.tipe-pribadi {
    margin-top: 10px;
    margin-bottom: 20px;
    width: 96%;
    background-color: white;
    color: black;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 3px 3px 3px 3px #666666;
}

.ilustrasi-pribadi{
    height: 150px;
    padding: 10px;
    object-position: center;
    object-fit: cover;
}

.medsos{
    width: 20%;
    padding: 10px;
    object-position: center;
    object-fit: cover;
}

.sosmed-link img:hover{
    width: 30%;
}

table {
    font-family: Arial, Helvetica, sans-serif;
    color: #666;
    background: #eaebec;
    border: #ccc 1px solid;
  }
   
  table thead {
    padding: 5px 5px;
    border-left:1px solid #e0e0e0;
    border-bottom: 1px solid #e0e0e0;
  }
   
  table thead:first-child{  
    border-left:none;  
  }
   
  table thead tr {
    text-align: center;
    padding-left: 5px;
  }

  table thead tr td{
    text-align: center;
    padding-left: 5px;
    background: #1c84e3;
    color: black;
  }

   
  table td:first-child {
    text-align: left;
    padding: 5px;
    border-left: 0;
  }
   
  table td {
    padding: 5px 5px;
    border-top: 1px solid #ffffff;
    border-bottom: 1px solid #e0e0e0;
    border-left: 1px solid #e0e0e0;
    background: #fafafa;
    background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
    background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
  }
   
  table tr:last-child td {
    border-bottom: 0;
  }
   
  table tr:last-child td:first-child {
    -moz-border-radius-bottomleft: 3px;
    -webkit-border-bottom-left-radius: 3px;
    border-bottom-left-radius: 3px;
  }
   
  table tr:last-child td:last-child {
    -moz-border-radius-bottomright: 3px;
    -webkit-border-bottom-right-radius: 3px;
    border-bottom-right-radius: 3px;
  }
   
  table tr:hover td {
    background: #f2f2f2;
    background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
    background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
  }

  #myBtn {
    display: none; 
    position: fixed; 
    bottom: 20px; 
    right: 30px; 
    z-index: 99; 
    border: none; 
    outline: none; 
    background-color: #1c84e3; 
    color: white; 
    cursor: pointer; 
    padding: 10px; 
    border-radius: 5px; 
    font-size: 20px; 
  }
  
  #myBtn:hover {
    background-color:lime; 
  }

p{
    text-indent: 35px;
    text-align: justify;
    padding: 10px;
}
.tombol{
    padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #1977cc;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
.tombol:hover{
    background-color: #eaeaea;
}
.tombol:active{
    background-color: #eaeaea;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

#tabel-hasil > tbody > tr > td > p{
  text-indent: 0px;
  text-align: justify;
  padding: 5px;
}

body>header>div>p{
  font-family: sans-serif;
  text-align: center;
  padding: 20px;
  font-size: 24px;
}

table tbody tr{
  text-align: left;
  padding: 10px;
}
.ilustrasi-pribadi{
    border-radius: 12px;
    border: 5px solid #555;
    border-color: #1977cc;
}

article{
  padding: 10px;
}
    </style>
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top" style="margin-top: -50px">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">BrainBoost</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="/medilab/assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#tes-kepribadian">Tes MBTI</a></li>
                    <li><a class="nav-link scrollto" href="/home">Home</a></li>
                    <li><a class="nav-link scrollto" href="#tipe-mbti">Tipe Kepribadian</a></li>
                    <li><a class="nav-link scrollto" href="/login">Login Admin</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header>
    <main class="main">
        <div class="container">
            <article>
                <figure>
                    <center>
                        <img id="foto" src="../medilab/assets/img/Brain/brainbg.jpg" alt="Tes Kepribadian MBTI">
                        <figcaption>MBTI</figcaption>
                    </center>
                    </figure><br/>
                <p>
                    <strong>MBTI</strong> (Myers-Briggs Type Indicator) adalah psikotes yang dirancang untuk mengukur preferensi dasar murni psikologis seseorang dalam melihat dunia dan membuat keputusan. MBTI dikembangkan oleh Isabel Briggs Myers pada sejak 1940. Psikotes ini dirancang untuk mengukur kecerdasan individu, bakat, dan tipe kepribadian seseorang.</p><br/>
                <p>
                    Dalam Tipe Kepribadian Manusia dalam Psikologi, Myers-Briggs mengelompokkan kepribadian manusia berdasarkan pengembangan teori Carl Jung. Yang mengemukakan dalam kepribadian seorang manusia, terdapat dua pasangan dikotomi fungsi kognitif manusia:
                </p>
                        <ul>
                            <li>Fungsi Rasional  : Thinking (Berpikir) dan Feeling (Merasakan).</li>
                            <li>Fungsi Irasional : Sensasi dan intuisi.</li>
                        </ul>
                        
                    <p><br/>
                <p>Dari dua fungsi tersebut Myers-Briggs mengembangkan teorinya dalam empat pasangan tipe indikator yang kemudian membentuk hingga 16 kepribadian manusia. Selengkapnya sebagai berikut :</p><br/><br/>
                <strong>Extraversion (E) – Introversion (I)</strong><br/>
                    <p>Indicator ini berbicara mengenai respon sesorang dan bagaimana orang tersebut berinteraksi di lingkungan luar mereka. Jika Ektravert menunjukkan minat pada aksi dan interaksi sosial, maka sebaliknya, Introvert menunjukkan minatnya pada pikiran, menyukai interaksi sosial yang mendalam dan lebih berenergi ketika sendiri.</p><br/><br/>
                
                <strong>Sensing (S) – Intuition (N)</strong><br/>
                    
                    <p>Kedua indicator ini memberikan pengetahuan tentang bagaimana karakter seseorang dalam mengumpulkan informasi yang ada di luar. Mereka yang  memilih sensing akan mengutamakan hal yang nyata yang bisa mereka indera langsung. Berorientasi pada fakta dan hal yang mendetail. Intuisi menunjukkan mereka lebih berorientasi pada probabilitas, memprediksikan sesuatu dan senang berpikir sesuatu yang abstrak.</p><br/><br/>
                <strong>Thinking (T) – Feeling (F)</strong><br/>
                    
                    <p>Thinking dan Feeling menggambarkan bagaimana seseorang menentukan keputusan dari informasi yang mereka terima. Pemikir akan menentukan berdasarkan fakta. Mereka ini berkepribadian konsisten dan logis. Ssedangkan perasa akan mengutamakan emosi saat menentukan sesuatu.</p><br/><br/>
                    
                <strong>Judging (J) – Perceiving (P)</strong><br/>

                    <p>Kedua indicator ini berbicara tentang bagaimana individu menunjukkan sikapnya kepada dunia luar. Orang tipe J akan bersikap tegas terhadap keputusannya. Sedangkan tipe P menunjukkan sikap yang lebih fleksibel.</p></p><br/>
                <p>
                    Jika Anda tertarik dengan tipe kepribadian, silahkan ikuti tes kepribadian berikut pada halaman di bawah ini:     
                </p>
            </article><br/><br/>
            <article>
                <header class="judul">
                    <h2 id="tes-mbti"  data-aos="fade-up">Tes Kepribadian MBTI</h2>
                </header>
                <p  data-aos="fade-up">Silahkan jawab pertanyaan-pertanyaan berikut sesuai dengan gambaran diri Anda yang sebenarnya secara <em>jujur</em>! </p><br/>
                <form method="POST" action="#" id="tes-kepribadian" name="tes-kepribadian"  data-aos="zoom-in" data-aos-duration="1000">
                    <table>
                        <thead>
                            <tr>
                                <td width=3%><strong>No</strong></td>
                                <td width=55%><strong>Pertanyaan</strong></td>
                                <td width=42%><strong>Jawaban</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Saya suka menghabiskan waktu sendiri.</td>
                                <td>
                                    <input type="radio" id="jawaban-1 sangat-setuju" name="jawaban-1" value="5" required>
                                    <label for="jawaban-1">Sangat Setuju</label><br/>
                                    <input type="radio" id="jawaban-1 setuju" name="jawaban-1" value="4" required>
                                    <label for="jawaban-1">Setuju</label><br/>
                                    <input type="radio" id="jawaban-1 cukup" name="jawaban-1" value="3" required>
                                    <label for="jawaban-1">Cukup</label><br/>
                                    <input type="radio" id="jawaban-1 tidak setuju" name="jawaban-1" value="2" required>
                                    <label for="jawaban-1">Tidak Setuju</label><br/>
                                    <input type="radio" id="jawaban-1 sangat-tidak-setuju" name="jawaban-1" value="1" required>
                                    <label for="jawaban-1">Sangat Tidak Setuju</label>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Saya suka menghabiskan waktu bersama teman-teman.</td>
                                <td>
                                    <input type="radio" id="jawaban-2 sangat-setuju" name="jawaban-2" value="5" required>
                                    <label for="jawaban-2">Sangat Setuju</label><br/>
                                    <input type="radio" id="jawaban-2 setuju" name="jawaban-2" value="4" required>
                                    <label for="jawaban-2">Setuju</label><br/>
                                    <input type="radio" id="jawaban-2 cukup" name="jawaban-2" value="3" required>
                                    <label for="jawaban-2">Cukup</label><br/>
                                    <input type="radio" id="jawaban-2 tidak-setuju" name="jawaban-2" value="2" required>
                                    <label for="jawaban-2">Tidak Setuju</label><br/>
                                    <input type="radio" id="jawaban-2 sangat-tidak-setuju" name="jawaban-2" value="1" required>
                                    <label for="jawaban-2">Sangat Tidak Setuju</label>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Saya senang bersosialisasi dengan sedikit orang tapi mendalam.</td>
                                <td>
                                    <input type="radio" id="jawaban-3 sangat-setuju" name="jawaban-3" value="5" required>
                                    <label for="jawaban-3">Sangat Setuju</label><br/>
                                    <input type="radio" id="jawaban-3 setuju" name="jawaban-3" value="4" required>
                                    <label for="jawaban-3">Setuju</label><br/>
                                    <input type="radio"id="jawaban-3 cukup" name="jawaban-3" value="3" required>
                                    <label for="jawaban-3">Cukup</label><br/>
                                    <input type="radio" id="jawaban-3 tidak-setuju" name="jawaban-1" value="2" required>
                                    <label for="jawaban-3">Tidak Setuju</label><br/>
                                    <input type="radio" id="jawaban-3 sangat-tidak-setuju" name="jawaban-3" value="1" required>
                                    <label for="jawaban-3">Sangat Tidak Setuju</label>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Saya senang bergabung dan menjalani aktivitas bersama komunitas.</td>
                                <td>
                                    <input type="radio" id="jawaban-4 sangat-setuju" name="jawaban-4" value="5" required>
                                    <label for="jawaban-4">Sangat Setuju</label><br/>
                                    <input type="radio" id="jawaban-4 setuju" name="jawaban-4" value="4" required>
                                    <label for="jawaban-4">Setuju</label><br/>
                                    <input type="radio" id="jawaban-4 cukup" name="jawaban-4" value="3" required>
                                    <label for="jawaban-4">Cukup</label><br/>
                                    <input type="radio" id="jawaban-4 tidak-setuju" name="jawaban-4" value="2" required>
                                    <label for="jawaban-4">Tidak Setuju</label><br/>
                                    <input type="radio" id="jawaban-4 sangat-tidak-setuju" name="jawaban-4" value="1" required>
                                    <label for="jawaban-4">Sangat Tidak Setuju</label>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Saya suka informasi yang mendetail.</td>
                                <td>
                                    <input type="radio" id="jawaban-5 sangat-setuju" name="jawaban-5" value="5" required>
                                    <label for="jawaban-5">Sangat Setuju</label><br/>
                                    <input type="radio" id="jawaban-5 setuju" name="jawaban-5" value="4" required>
                                    <label for="jawaban-5">Setuju</label><br/>
                                    <input type="radio" id="jawaban-5 cukup" name="jawaban-5" value="3" required>
                                    <label for="jawaban-5">Cukup</label><br/>
                                    <input type="radio" id="jawaban-5 tidak-setuju" name="jawaban-5" value="2" required>
                                    <label for="jawaban-5">Tidak Setuju</label><br/>
                                    <input type="radio" id="jawaban-5 sangat-tidak-setuju" name="jawaban-5" value="1" required>
                                    <label for="jawaban-5">Sangat Tidak Setuju</label>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Saya suka informasi yang abstrak.</td>
                                <td>
                                    <input type="radio" id="jawaban-6 sangat-setuju" name="jawaban-6" value="5" required>
                                    <label for="jawaban-6">Sangat Setuju</label><br/>
                                    <input type="radio" id="jawaban-6 setuju" name="jawaban-6" value="4" required>
                                    <label for="jawaban-6">Setuju</label><br/>
                                    <input type="radio" id="jawaban-6 cukup" name="jawaban-6" value="3" required>
                                    <label for="jawaban-6">Cukup</label><br/>
                                    <input type="radio" id="jawaban-6 tidak-setuju" name="jawaban-6" value="2" required>
                                    <label for="jawaban-6">Tidak Setuju</label><br/>
                                    <input type="radio" id="jawaban-6 sangat-tidak-setuju" name="jawaban-6" value="1" required>
                                    <label for="jawaban-6">Sangat Tidak Setuju</label>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Saya berorientasi masa kini.</td>
                                <td>
                                    <input type="radio" id="jawaban-7 sangat-setuju" name="jawaban-7" value="5" required>
                                    <label for="jawaban-7">Sangat Setuju</label><br/>
                                    <input type="radio" id="jawaban-7 setuju" name="jawaban-7" value="4" required>
                                    <label for="jawaban-7">Setuju</label><br/>
                                    <input type="radio" id="jawaban-7 cukup" name="jawaban-7" value="3" required>
                                    <label for="jawaban-7">Cukup</label><br/>
                                    <input type="radio" id="jawaban-7 tidak-setuju" name="jawaban-7" value="2" required>
                                    <label for="jawaban-7">Tidak Setuju</label><br/>
                                    <input type="radio" id="jawaban-7 sangat-tidak-setuju" name="jawaban-7" value="1" required>
                                    <label for="jawaban-7">Sangat Tidak Setuju</label>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Saya berorientasi masa depan.</td>
                                <td>
                                    <input type="radio" cid="jawaban-8 sangat-setuju" name="jawaban-8" value="5" required>
                                    <label for="jawaban-8">Sangat Setuju</label><br/>
                                    <input type="radio" id="jawaban-8 setuju" name="jawaban-8" value="4" required>
                                    <label for="jawaban-8">Setuju</label><br/>
                                    <input type="radio" id="jawaban-8 cukup" name="jawaban-8" value="3" required>
                                    <label for="jawaban-8">Cukup</label><br/>
                                    <input type="radio" id="jawaban-8 tidak-setuju" name="jawaban-8" value="2" required>
                                    <label for="jawaban-8">Tidak Setuju</label><br/>
                                    <input type="radio" id="jawaban-8 sangat-tidak-setuju" name="jawaban-8" value="1" required>
                                    <label for="jawaban-8">Sangat Tidak Setuju</label>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Saya mengambil keputusan berdasarkan fakta.</td>
                                <td>
                                    <input type="radio" id="jawaban-9 sangat-setuju" name="jawaban-9" value="5" required>
                                    <label for="jawaban-9">Sangat Setuju</label><br/>
                                    <input type="radio" id="jawaban-9 setuju" name="jawaban-9" value="4" required>
                                    <label for="jawaban-9">Setuju</label><br/>
                                    <input type="radio" id="jawaban-9 cukup" name="jawaban-9" value="3" required>
                                    <label for="jawaban-9">Cukup</label><br/>
                                    <input type="radio" id="jawaban-9 tidak-setuju" name="jawaban-9" value="2" required>
                                    <label for="jawaban-9">Tidak Setuju</label><br/>
                                    <input type="radio" id="jawaban-9 sangat-tidak-setuju" name="jawaban-9" value="1" required>
                                    <label for="jawaban-9">Sangat Tidak Setuju</label>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Saya mengambil keputusan mempertimbangkan perasaan atau pendapat orang lain.</td>
                                <td>
                                    <input type="radio" id="jawaban-10 sangat-setuju" name="jawaban-10" value="5" required>
                                    <label for="jawaban-10">Sangat Setuju</label><br/>
                                    <input type="radio" id="jawaban-10 setuju" name="jawaban-10" value="4" required>
                                    <label for="jawaban-10">Setuju</label><br/>
                                    <input type="radio" id="jawaban-10 cukup" name="jawaban-10" value="3" required>
                                    <label for="jawaban-10">Cukup</label><br/>
                                    <input type="radio" id="jawaban-10 tidak-setuju" name="jawaban-10" value="2" required>
                                    <label for="jawaban-10">Tidak Setuju</label><br/>
                                    <input type="radio" id="jawaban-10 sangat-tidak-setuju" name="jawaban-10" value="1" required>
                                    <label for="jawaban-10">Sangat Tidak Setuju</label>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Saya mengambil keputusan yang paling menguntungkan, bermanfaat dan menghindari resiko walaupun bisa saja orang lain tidak menyukainya.</td>
                                <td>
                                    <input type="radio" id="jawaban-11 sangat-setuju" name="jawaban-11" value="5" required>
                                    <label for="jawaban-11">Sangat Setuju</label><br/>
                                    <input type="radio" id="jawaban-11 setuju" name="jawaban-11" value="4" required>
                                    <label for="jawaban-11">Setuju</label><br/>
                                    <input type="radio" id="jawaban-11 cukup" name="jawaban-11" value="3" required>
                                    <label for="jawaban-11">Cukup</label><br/>
                                    <input type="radio" id="jawaban-11 tidak-setuju" name="jawaban-11" value="2" required>
                                    <label for="jawaban-11">Tidak Setuju</label><br/>
                                    <input type="radio" id="jawaban-11 sangat-tidak-setuju" name="jawaban-11" value="1" required>
                                    <label for="jawaban-11">Sangat Tidak Setuju</label>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Saya mengambil keputusan yang disukai banyak orang walaupun bisa saja keputusan itu kurang menguntungkan.</td>
                                <td>
                                    <input type="radio" id="jawaban-12 sangat-setuju" name="jawaban-12" value="5" required>
                                    <label for="jawaban-12">Sangat Setuju</label><br/>
                                    <input type="radio" id="jawaban-12 setuju" name="jawaban-12" value="4" required>
                                    <label for="jawaban-12">Setuju</label><br/>
                                    <input type="radio" id="jawaban-12 cukup" name="jawaban-12" value="3" required>
                                    <label for="jawaban-12">Cukup</label><br/>
                                    <input type="radio" id="jawaban-12 tidak-setuju" name="jawaban-12" value="2" required>
                                    <label for="jawaban-12">Tidak Setuju</label><br/>
                                    <input type="radio" id="jawaban-12 sangat-tidak-setuju" name="jawaban-12" value="1" required>
                                    <label for="jawaban-12">Sangat Tidak Setuju</label>
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Keputusan saya tidak bisa diganggu gugat.</td>
                                <td>
                                    <input type="radio" id="jawaban-13 sangat-setuju" name="jawaban-13" value="5" required>
                                    <label for="jawaban-13">Sangat Setuju</label><br/>
                                    <input type="radio" id="jawaban-13 setuju" name="jawaban-13" value="4" required>
                                    <label for="jawaban-13">Setuju</label><br/>
                                    <input type="radio" id="jawaban-13 cukup" name="jawaban-13" value="3" required>
                                    <label for="jawaban-13">Cukup</label><br/>
                                    <input type="radio" id="jawaban-13 tidak-setuju" name="jawaban-13" value="2" required>
                                    <label for="jawaban-13">Tidak Setuju</label><br/>
                                    <input type="radio" id="jawaban-13 sangat-tidak-setuju" name="jawaban-13" value="1" required>
                                    <label for="jawaban-13">Sangat Tidak Setuju</label>
                                </td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Saya mau berkompromi terhadap orang lain walaupun hasilnya sudah diputuskan.</td>
                                <td>
                                    <input type="radio" id="jawaban-14 sangat-setuju" name="jawaban-14" value="5" required>
                                    <label for="jawaban-14">Sangat Setuju</label><br/>
                                    <input type="radio" id="jawaban-14 setuju" name="jawaban-14" value="4" required>
                                    <label for="jawaban-14">Setuju</label><br/>
                                    <input type="radio" id="jawaban-14 cukup" name="jawaban-14" value="3" required>
                                    <label for="jawaban-14">Cukup</label><br/>
                                    <input type="radio" id="jawaban-14 tidak-setuju" name="jawaban-14" value="2" required>
                                    <label for="jawaban-14">Tidak Setuju</label><br/>
                                    <input type="radio" id="jawaban-14 sangat-tidak-setuju" name="jawaban-14" value="1" required>
                                    <label for="jawaban-14">Sangat Tidak Setuju</label>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Saya senang menjalankan aktivitas yang tertata dan teratur.</td>
                                <td>
                                    <input type="radio" id="jawaban-15 sangat-setuju" name="jawaban-15" value="5" required>
                                    <label for="jawaban-15">Sangat Setuju</label><br/>
                                    <input type="radio" id="jawaban-15 setuju" name="jawaban-15" value="4" required>
                                    <label for="jawaban-15">Setuju</label><br/>
                                    <input type="radio" id="jawaban-15 cukup" name="jawaban-15" value="3" required>
                                    <label for="jawaban-15">Cukup</label><br/>
                                    <input type="radio" id="jawaban-15 tidak-setuju" name="jawaban-15" value="2" required>
                                    <label for="jawaban-15">Tidak Setuju</label><br/>
                                    <input type="radio" id="jawaban-15 sangat-tidak-setuju" name="jawaban-15" value="1" required>
                                    <label for="jawaban-15">Sangat Tidak Setuju</label>
                                </td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Saya senang menjalankan aktivitas yang fleksibel, menyesuaikan keadaan.</td>
                                <td>
                                    <input type="radio" id="jawaban-16 sangat-setuju" name="jawaban-16" value="5" required>
                                    <label for="jawaban-16">Sangat Setuju</label><br/>
                                    <input type="radio" id="jawaban-16 setuju" name="jawaban-16" value="4" required>
                                    <label for="jawaban-16">Setuju</label><br/>
                                    <input type="radio" id="jawaban-16 cukup" name="jawaban-16" value="3" required>
                                    <label for="jawaban-16">Cukup</label><br/>
                                    <input type="radio" id="jawaban-16 tidak-setuju" name="jawaban-16" value="2" required>
                                    <label for="jawaban-16">Tidak Setuju</label><br/>
                                    <input type="radio" id="jawaban-16 sangat-tidak-setuju" name="jawaban-16" value="1" required>
                                    <label for="jawaban-16">Sangat Tidak Setuju</label>
                                </td>
                            </tr>
                        </tbody>
                    </table><br/>
                    <center>
                        <button class="tombol" data-aos="zoom-in" data-aos-duration="1000" type="button" onclick="tampilkan();//var result = jawab();alert(result[0]);hide();">Submit</button>
                    </center>
                </form><br/>
                <div id="hasil-tes">
                    <h3 class="judul">Hasil Tes Kepribadian</h3>
                    <p><strong>Perhatian! </strong> Tes ini belum tentu akurat, tergantung bagaimana Anda jujur menjawab instrumen yang ada dan tentunya Anda lebih mengetahui kepribadian Anda. Berikut disajikan ulasannya: </p><br/>
                    <table id="tabel-hasil" class="tabel-hasil">
                        <thead>
                            <tr>
                                <td><strong>No</strong></td>
                                <td><strong>Indikator</strong></td>
                                <td><strong>Hasil</strong></td>
                                <td><strong>Keterangan</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Introvert (I)</td>
                                <td><p id="hasil-introvert"></p></td>
                                <td><p id="keterangan-introvert"></p></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Extrovert (E)</td>
                                <td><p id="hasil-extrovert"></p></td>
                                <td><p id="keterangan-extrovert"></p></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Intuition (N)</td>
                                <td><p id="hasil-intuition"></p></td>
                                <td><p id="keterangan-intuition"></p></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Sensing (S)</td>
                                <td><p id="hasil-sensing"></p></td>
                                <td><p id="keterangan-sensing"></p></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Thinking (T)</td>
                                <td><p id="hasil-thinking"></p></td>
                                <td><p id="keterangan-thinking"></p></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Feeling (F)</td>
                                <td><p id="hasil-feeling"></p></td>
                                <td><p id="keterangan-feeling"></p></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Judging (J)</td>
                                <td><p id="hasil-judging"></p></td>
                                <td><p id="keterangan-judging"></p></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Perceiving (P) </td>
                                <td><p id="hasil-perceiving"></p></td>
                                <td><p id="keterangan-perceiving"></p></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td><strong>Tipe MBTI:</strong></td>
                                <td colspan="2" id="hasil-mbti"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article><br/><br/>
            <article>
                <header class="judul" data-aos="zoom-in" data-aos-duration="1000">
                    <h2 id="tipe-mbti">16 Tipe Kepribadian Menurut MBTI</h2>
                </header>
                    <div class="tipe-pribadi INTJ" data-aos="zoom-in" data-aos-duration="1000" style="background: #b7ebf2">
                        <h3 class="judul">INTJ</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/INTJ.png"></center>
                        <p>INTJ dikenal sebagai "arsitek" merupakan pemikir yang imajinatif dan strategis dengan rencana untuk segala sesuatunya. INTJ cenderung visioner, mandiri, analitris, kritis, kompetitif, tidak terpengaruh terhadap kritik atau konflik. Profesi yang cocok adalah dibidang peneliti, ilmuwan, analis bisnis, pengacara, hakim. Saran Pengembangan yaitu Belajar mengungkapkan emosi, terbuka pada dunia luar, lebih berempati dan peka.</p>
                        <div class="detail INTJ"><p></p></div>
                    </div>
                    <div class="tipe-pribadi INTP"data-aos="zoom-in" data-aos-duration="1200" style="background: #b7ebf2">
                        <h3 class="judul">INTP</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/INTP.png"></center>
                        <p>INTP dikenal sebagai "ahli logika" merupakan penemu yang inovatif dengan kedahagaan akan pengetahuan yang tidak ada habisnya. INTP cenderung penyendiri, tidak suka memimpin, kritis, mudah curiga, pesimis, menyukai hal ilmiah. Profesi yang cocok adalah dibidang ilmuwan, pengacara, jaksa, ahli forensik, penulis buku, programmer, ahli komputer. Saran Pengembangannya yaitu Lebih empati, rileks, focus terhadap satu ide, jangan terlalu banyak memikirkan sesuatu secara berlebihan.</p>
                        <div class="detail INTP"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ENTJ"data-aos="zoom-in" data-aos-duration="1200"style="background: #b7ebf2">
                        <h3 class="judul">ENTJ</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/ENTJ.png"></center>
                        <p>ENTJ dikenal sebagai "komandan" merupakan pemimpin pemberani, imajinatif dan berkemauan kuat selalu menemukan cara atau menciptakan cara. ENTJ cenderung tegas, jujur, tangguh, disiplin, mendominasi, pemimpin, kemauan yang kuat, berkarisma. Profesi yang cocok adalah dibidang entrepreneur, analis bisnis, bagian keuangan, pemimpin organisasi. Saran Pengembangannya yaitu belajar mengungkapkan perasaan, menghargai orang lain, mengelola emosi, hindari sikap arogan atau meremehkan kemampuan orang lain, belajar berpikir lebih luas dengan tidak memandang banar atau salah.</p>
                        <div class="detail ENTJ"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ENTP"data-aos="zoom-in" data-aos-duration="1200"style="background: #b7ebf2">
                        <h3 class="judul">ENTP</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/ENTP.png"></center>
                        <p>ENTP dikenal sebagai "pendebat" merupakan pemikir yang cerdas dan serius yang gatal terhadap tantangan intelektual. ENTP cenderung inovatif, fleksibel, lincah, mau belajar, cenderung melakukan hal baru yang disenangi. Profesi yang cocok adalah dibidang aktor, pengacara, fotografer. Saran Pengembanganya yaitu jangan mau menang sendiri, perhatian pada orang lain, belajar untuk bisa lebih waspada, berusaha hindari perdebatan yang kurang perlu.</p>
                        <div class="detail ENTP"><p></p></div>
                    </div>
                    <div class="tipe-pribadi INFJ"data-aos="zoom-in" data-aos-duration="1200"style="background: #b7ebf2">
                        <h3 class="judul">INFJ</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/INFJ.png"></center>
                        <p>INFJ dikenal sebagai "advokat" merupakan sosok yang pendiam dan mistis, tetapi idealis yang sangat menginspirasi dan tak kenal lelah. INFJ cenderung perhatian, reflektif, perfeksionis, visioner, tekun, empati, berkomitmen dan sensitive. Profesi yang cocok adalah dibidang : psikolog, dokter, pekerja sosial, seniman. Saran Pengembangannya yaitu Berpikir seimbang dengan tidak memandang sisi negatif, Lebih rileks dan bersabar terhadap kesalahan orang lain.</p>
                        <div class="detail INFJ"><p></p></div>
                    </div>
                    <div class="tipe-pribadi INFP"data-aos="zoom-in" data-aos-duration="1200"style="background: #b7ebf2">
                        <h3 class="judul">INFP</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/INFP.png"></center>
                        <p>INFP dikenal sebagai "mediator" merupakan sosok yang puitis, baik hati, dan altruisik selalu ingin membangu aksi kebaikan. INFP cenderung penuh perhatian, peduli, idealis, perfeksionis, win-win solution. Profesi yang cocok adalah dibidang pengajar, penulis, seniman, konselor, psikolog. Saran Pengembangannya yaitu Belajar menerima kritik, tegas, jangan menyalahkan diri.</p>
                        <div class="detail INFP"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ENFJ"data-aos="zoom-in" data-aos-duration="1200"style="background: #b7ebf2">
                        <h3 class="judul">ENFJ</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/ENFJ.png"></center>
                        <p>ENFJ dikenal sebagai "protagonis" merupakan pemimpin yang karismatik dan menginspirasi, mampu memukai pendengarnya. ENFJ cenderung imajinatif, peka, pandai bersosialisasi, loyal, membutuhkan apresiasi. Profesi yang cocok adalah dibidang konsultan, penulis, pengajar, kordinator acara, motivator, pskikolog. Saran Pengembangannya yaitu tidak mengukur harga diri dari penilaian orang, jangan terlalu keras terhadap diri sendiri.</p>
                        <div class="detail ENFJ"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ENFP"data-aos="zoom-in" data-aos-duration="1200"style="background: #b7ebf2">
                        <h3 class="judul">ENFP</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/ENFP.png"></center>
                        <p>ENFP dikenal sebagai "juru kampanye" merupakan seorang yang bersemangat, antusias, kreatif dan bebas bergaul yang selalu dapat menemukan alasan untuk tersenyum. ENFP cenderung optimis, ramah, imajinatif, komunikator yang baik, bisa memahami orang lain. Profesi yang cocok adalah dibidang konselor, psikolog, pengajar, presenter, seniman. Saran Pengembangan yaitu  fokus, disiplin, belajar menghadapi konflik, pikirkan diri sendiri, hemat.</p>
                        <div class="detail ENFP"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ISTJ"data-aos="zoom-in" data-aos-duration="1200"style="background: #b7ebf2">
                        <h3 class="judul">ISTJ</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/ISTJ.png"></center>
                        <p>ISTJ dikenal sebagai "ahli logistik" merupakan pribadi yang praktis dan menggunakan fakta yang keandalannya tidak dapat diragukan. ISTJ cenderung bertanggungjawab, serius, damai, logis, objektif, bisa diandalkan, tekun, disiplin, pendengar yang baik, teguh dalam aturan dan prosedur tertentu. Profesi yang cocok adalah di bidang Manajemen, intelijen, hakim, pengacara, akuntan, programmer, analis. Saran pengembangan : lebih memahami kebutuhan dan perasaan orang, gunakan cara yang baik jika ada orang yang melanggar aturan, lebih terbuka pada perubahan dan bersikap positif terhadap apa yang sudah dilakukan orang lain.</p>
                        <div class="detail ISTJ"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ISFJ"data-aos="zoom-in" data-aos-duration="1200"style="background: #b7ebf2">
                        <h3 class="judul">ISFJ</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/ISFJ.png"></center>
                        <p>ISFJ dikenal sebagai "pembela" merupakan pelindung yang sangat berdedikasi dan hangat selalu siap membela orang yang dicintainya. ISFJ cenderung setia, berhati-hati, stabil, serius, ramah, detail, teliti, bertanggungjawab dan bisa diandalkan. Profesi yang cocok adalah dibidang Arsitek, konselor, penjaga toko, desainer, perawat. Saran Pengembangannya yaitu Belajar untuk menolak sesuatu, jangan ragu untuk mencoba hal baru.</p>
                        <div class="detail ISFJ"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ESTJ"data-aos="zoom-in" data-aos-duration="1200"style="background: #b7ebf2">
                        <h3 class="judul">ESTJ</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/ESTJ.png"></center>
                        <p>ESTJ dikenal sebagai "eksekutif" merupakan administrator istimewa yang tidak ada duanya dalam mengelola sesuatu atau orang. ESTJ cenderung praktis, disiplin, konservatif, suka berorganisasi, disiplin, fokus pada hal yang berguna bagi dirinya, sistematis. Profesi yang cocok adalah dibidang dunia militer (tentara), hakim, polisi, akuntan. Saran Pengembangannya yaitu tidak memaksa orang lain, sabar, mengontrol emosi, belajar memahami orang lain.</p>
                        <div class="detail ESTJ"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ESFJ"data-aos="zoom-in" data-aos-duration="1200"style="background: #b7ebf2">
                        <h3 class="judul">ESFJ</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/ESFJ.png"></center>
                        <p>ESFJ dikenal sebagai "konsul" merupakan orang yang sangat peduli, sosial, dan populer selalu ingin membantu. ESFJ cenderung hangat, populer, teliti, santai, sederhana, rajin, mudah bekerja sama dengan orang lain. Profesi yang cocok adalah dibidang perawat, guru, perencana keuangan, bagian administrasi. Saran Pengembangannya yaitu tidak mengorbankan diri untuk kesenangan orang, tidak lari dari kritik, lebih dewasa, bisa lebih tegas dan tidak ragu untuk meminta pendapat orang lain saat akan mengambil keputusan.</p>
                        <div class="detail ESFJ"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ISTP"data-aos="zoom-in" data-aos-duration="1200"style="background: #b7ebf2">
                        <h3 class="judul">ISTP</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/ISTP.png"></center>
                        <p>ISTP dikenal sebagai "virtuoso" merupakan eksperimenter yang pemberani dan praktis, menguasai berbagai jenis alat. ISTP cenderung pendiam, logis, objektif, cepat beradaptasi, tegas, percaya diri, problem solver. Profesi yang cocok adalah dibidang  Polisi, Pilot, entrepreneur, atlit. Saran Pengembangannya yaitu lebih observatif, belaja rmengenal perasaan diri, belajar percaya..</p>
                        <div class="detail ISTJ"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ISFP"data-aos="zoom-in" data-aos-duration="1200"style="background: #b7ebf2">
                        <h3 class="judul">ISFP</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/ISFP.png"></center>
                        <p>ISFP dikenal sebagai "petualang" merupakan seniman yang fleksibel dan mengagumkan selalu siap menjelajahi dan mengalami hal baru. ISFP cenderung artistik, sederhana, fleksibel, pelaksana yang baik, santai, menghindari konflik. Profesi yang cocok adalah dibidang seniman, pekerja sosial, psikolog. Saran pengembangan yaitu Jangan terus menghindari konflik, berpikir jangka panjang, lebih terbuka.</p>
                        <div class="detail ISFP"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ESTP"data-aos="zoom-in" data-aos-duration="1200"style="background: #b7ebf2">
                        <h3 class="judul">ESTP</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/ESTP.png"></center>
                        <p>ESTP dikenal sebagai "pengusaha" merupakan seorang yang cerdas, bersemangat dan sangat tanggap yang benar-benar menikmati hidup yang menantang. ESTP cenderung aktif, komunikator handal, menyukai olahraga, spontan, mudah beradaptasi. Profesi yang cocok adalah dibidang sales, marketing, pialang saham, entrepreneur. Saran Pengembangannya yaitu lebih memahami perasaan orang, sabar, memikirkan masa depan, lebih detail.</p>
                        <div class="detail ESTP"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ESFP"data-aos="zoom-in" data-aos-duration="1200"style="background: #b7ebf2">
                        <h3 class="judul">ESFP</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/ESFP.png"></center>
                        <p>ESFP dikenal sebagai "penghibur" merupakan seorang yang spontan, bersemangat dan antusias - hidupnya tidak akan membosankan saat berdekatan dengan mereka. ESFP cenderung murah hati, mudah bersosialisasi, optimis, ceria, suka perhatian orang lain. Profesi yang cocok adalah dibidang entertainer, seniman, marketing, bidang anak, pemandu wisata, bagian pelayanan. Saran Pengembangannya yaitu lebih fokus kepada satu hal, tidak gegabah dalam pengambilan putusan, tidak lari dari konflik.</p>
                        <div class="detail ESFP"><p></p></div>
                    </div>                    
            </article>
            <br/>
            <br/>
            <article data-aos="zoom-in" data-aos-duration="1200">
                <header class="judul">
                    <h2 id="referensi">Referensi</h2>
                </header>
                <p>Untuk informasi terkait MBTI lebih lanjut, silahkan kunjungi situs berikut:</p></br/>
                <ol>
                    <li><a target="_blank" href="https://www.16personalities.com/">www.16personalites.com</a></li>
                    <li><a target="_blank" href="https://www.truity.com/page/16-personality-types-myers-briggs">www.truity.com/page/16-personality-types-myers-briggs</a></li>
                    <li><a target="_blank" href="https://dosenpsikologi.com/tipe-kepribadian-manusia">www.dosenpsikologi.com/tipe-kepribadian-manusia</a></li>
                    <li><a target="_blank" href="https://en.wikipedia.org/wiki/Myers%E2%80%93Briggs_Type_Indicator">en.wikipedia.org/wiki/Myers–Briggs_Type_Indicator</a></li>
                </ol>
            </article><br/>    
        </div>     
    </main>
    <script src="/medilab/assets/mbti/asset/js.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
</body>
</html>