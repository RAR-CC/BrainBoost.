<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BrainBoost </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/medilab/assets/img/faviconBrain.png" rel="icon">
    <link href="/medilab/assets/img/icontouchbrain.png" rel="apple-touch-icon">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
    background-color: #f7fdfd;
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
    color: #1977cc;
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
    padding: 17px 40px;
    border-radius: 12px;
    cursor: pointer;
    border: 0;
    background-color: #1977cc;
    box-shadow: 0px 2px 12px rgba(44, 73, 100, 0.50);
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: white;
    font-size: 15px;
    transition: all 0.5s ease;
}
.tombol:hover{
    letter-spacing: 3px;
    background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%);
    color: hsl(0, 0%, 100%);
    box-shadow: rgb(93 24 220) 0px 7px 29px 0px;
}
.tombol:active{
    letter-spacing: 3px;
    background-color: hsl(261deg 80% 48%);
    color: hsl(0, 0%, 100%);
    box-shadow: rgb(93 24 220) 0px 0px 0px 0px;
    transform: translateY(10px);
    transition: 100ms;
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
    border-color: white;
}
article{
  padding: 10px;
}

.section_our_solution .row {
  align-items: center;
}

.our_solution_category {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}

.our_solution_category .solution_cards_box {
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.solution_cards_box .solution_card {
  flex: 0 50%;
  background: #fff;
  box-shadow: 0 2px 4px 0 rgba(136, 144, 195, 0.2),
    0 5px 15px 0 rgba(37, 44, 97, 0.15);
  border-radius: 15px;
  margin: 8px;
  padding: 10px 15px;
  position: relative;
  z-index: 1;
  overflow: hidden;
  min-height: 265px;
  transition: 0.7s;
}

.solution_cards_box .solution_card:hover {
  background: #309df0;
  color: #fff;
  transform: scale(1.1);
  z-index: 9;
}

.solution_cards_box .solution_card:hover::before {
  background: rgb(85 108 214 / 10%);
}

.solution_cards_box .solution_card:hover .solu_title h3,
.solution_cards_box .solution_card:hover .solu_description p {
  color: #fff;
}

.solution_cards_box .solution_card:before {
  content: "";
  position: absolute;
  background: rgb(85 108 214 / 5%);
  width: 170px;
  height: 400px;
  z-index: -1;
  transform: rotate(42deg);
  right: -56px;
  top: -23px;
  border-radius: 35px;
}

.solution_cards_box .solution_card:hover .solu_description button {
  background: #fff !important;
  color: #309df0;
}

.solution_card .so_top_icon {
}

.solution_card .solu_title div {
  color: #212121;
  font-size: 1.3rem;
  margin-top: 13px;
  margin-bottom: 13px;
}

.solution_card .solu_description p {
  font-size: 15px;
  margin-bottom: 15px;
}

.solution_card .solu_description button {
  border: 0;
  border-radius: 15px;
  background: linear-gradient(
    140deg,
    #42c3ca 0%,
    #42c3ca 50%,
    #42c3cac7 75%
  ) !important;
  color: #fff;
  font-weight: 500;
  font-size: 1rem;
  padding: 5px 16px;
}

.our_solution_content div {
  text-transform: capitalize;
  margin-bottom: 1rem;
  font-size: 2.5rem;
}

.our_solution_content p {
}

.hover_color_bubble {
  position: absolute;
  background: rgb(54 81 207 / 15%);
  width: 100rem;
  height: 100rem;
  left: 0;
  right: 0;
  z-index: -1;
  top: 16rem;
  border-radius: 50%;
  transform: rotate(-36deg);
  left: -18rem;
  transition: 0.7s;
}

.solution_cards_box .solution_card:hover .hover_color_bubble {
  top: 0rem;
}

.solution_cards_box .solution_card .so_top_icon {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background: #fff;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.solution_cards_box .solution_card .so_top_icon img {
  width: 40px;
  height: 50px;
  object-fit: contain;
}

/*start media query*/
@media screen and (min-width: 320px) {
  .sol_card_top_3 {
    position: relative;
    top: 0;
  }

  .our_solution_category {
    width: 100%;
    margin: 0 auto;
  }

  .our_solution_category .solution_cards_box {
    flex: auto;
  }
}

@media only screen and (min-width: 768px) {
  .our_solution_category .solution_cards_box {
    flex: 1;
  }
}

@media only screen and (min-width: 1024px) {
  .sol_card_top_3 {
    position: relative;
    top: -3rem;
  }

  .our_solution_category {
    width: 80%;
    margin: 0 auto;
  }
}
/**crdb */
.cardb {
  width: 1200px;
  height: 500px;
  backdrop-filter: blur(7px);
  background-color: rgba(255, 255, 255, 0.5);
  border-radius: 20px;
  box-shadow: 35px 35px 68px 0px rgba(157, 177, 255, 0.2), inset -8px -8px 16px 0px rgba(157, 177, 255, 0.6), inset 0px 11px 28px 0px rgb(255, 255, 255);
  transition: all 0.3s;
  cursor: pointer;
}

.cardb:hover {
  box-shadow: 35px 35px 68px 0px rgba(157, 177, 255, 0.5);
}

.cardb:active {
  transform: scale(0.95);
  border: 1px solid blue;
}
    </style>
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top" style="margin-top: -50px">
        <div class="container d-flex align-items-center">
            <div class="logoicon" style="margin-left: -20px">
                <img src="/medilab/assets/img/iconBrain1.png" alt="">
            </div>

            <h1 class="logo me-auto" style="margin-left: -260px"><a href="/#">BrainBoost</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="/medilab/assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0" style="margin-right: 150px">
                <ul>
                    <li><a class="nav-link scrollto" href="#tes-kepribadian">Tes MBTI</a></li>
                    <li><a class="nav-link scrollto" href="/#">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#tipe-mbti">Tipe Kepribadian</a></li>
                    <li><a class="nav-link scrollto" href="/#">Register</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header>
    <main class="main">
        <div class="container">
        <section>
        <a href="https://wa.me/6281287107157?text=Hi%20Ada%20Yang%20Bisa%20Dibantu?" class="floating" target="_blank" style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); box-shadow: 0px 2px 12px rgba(44, 73, 100, 1.00);">
            <i class="fab fa-whatsapp fab-icon"></i>
        </a>
        </section>
            <article>
                <figure>
                    <center>
                    <h4>Tes MBTI</h4>
                    <div class="fotombti">
                        <img id="foto" src="../medilab/assets/img/gallery/Testing4.jpg" alt="Tes Kepribadian MBTI">
                    </div>
                    </center>
                    </figure><br/>
                    <div class="cardb"data-aos="zoom-in"data-aos-duration="1500">
                        <br>
                    <p style="text-align: center;">
                    <strong>MBTI</strong> (Myers-Briggs Type Indicator) adalah psikotes yang dirancang untuk mengukur preferensi dasar murni psikologis seseorang dalam melihat dunia dan membuat keputusan. MBTI dikembangkan oleh Isabel Briggs Myers pada sejak 1940. Psikotes ini dirancang untuk mengukur kecerdasan individu, bakat, dan tipe kepribadian seseorang.</p><br/>
                <p>
                    Dalam Tipe Kepribadian Manusia dalam Psikologi, Myers-Briggs mengelompokkan kepribadian manusia berdasarkan pengembangan teori Carl Jung. Yang mengemukakan dalam kepribadian seorang manusia, terdapat dua pasangan dikotomi fungsi kognitif manusia:
                </p>
                        <ul>
                            <li >Fungsi Rasional  : Thinking (Berpikir) dan Feeling (Merasakan).</li>
                            <li>Fungsi Irasional : Sensasi dan intuisi.</li>
                        </ul>
                        
                    <p><br/>
                <p style="text-align: center;">Dari dua fungsi tersebut Myers-Briggs mengembangkan teorinya dalam empat pasangan tipe indikator yang kemudian membentuk hingga 16 kepribadian manusia. Selengkapnya sebagai berikut :</p><br/><br/>
                    </div><br>
            </article><br/><br/>
            <div class="section_our_solution"data-aos="fade-right" data-aos-duration="2000">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="our_solution_category">
                            <div class="solution_cards_box">
                            <div class="solution_card">
                                <div class="hover_color_bubble"></div>
                                <div class="so_top_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 512 512" height="50" id="Layer_1">
                                    <g>
                                    <g>
                                        <g>
                                        <g>
                                            <path fill="#fae19e" d="m47.478 452.317 295.441 19.76c5.511.369 10.277-3.8 10.645-9.31l28.393-424.517c.369-5.511-3.8-10.276-9.31-10.645l-295.441-19.76c-5.511-.369-10.276 3.8-10.645 9.31l-28.394 424.517c-.368 5.511 3.8 10.277 9.311 10.645z"></path>
                                        </g>
                                        <g>
                                            <g>
                                            <g>
                                                <g>
                                                <g>
                                                    <path fill="#fff9e9" d="m17.5 504.177h226.14l79.96-79.605v-355.86c0-5.523-4.477-10-10-10h-296.1c-5.523 0-10 4.477-10 10v425.466c0 5.522 4.477 9.999 10 9.999z"></path>
                                                </g>
                                                <path fill="#fff4d6" d="m313.601 58.712h-40c5.523 0 10 4.477 10 10v355.861l-.258 40.078 40.258-40.078v-355.861c0-5.523-4.477-10-10-10z"></path>
                                                </g>
                                            </g>
                                            </g>
                                            <path fill="#ffeec2" d="m243.64 504.177v-70.253c0-5.523 4.477-10 10-10h69.96z"></path>
                                        </g>
                                        </g>
                                        <g>
                                        <path fill="#fed23a" d="m468.636 248.58-33.372.165v-50.826c0-9.183 7.463-16.662 16.673-16.708h.007c9.217-.046 16.693 7.371 16.693 16.562v50.807z"></path>
                                        <path fill="#54b1ff" d="m451.96 504.177c-10.362-10.277-16.196-24.263-16.208-38.857l-.062-73.973c0-.644.524-1.169 1.171-1.173l30.038-.149c.647-.003 1.171.517 1.171 1.161l.062 74.079c.012 14.531-5.749 28.472-16.015 38.756z"></path>
                                        <path fill="#fdf385" d="m451.959 469.333h-.01c-14.434.072-26.14-11.542-26.14-25.935v-213.527c0-6.778 5.477-12.283 12.255-12.316l27.626-.137c6.826-.034 12.378 5.49 12.378 12.316v213.436c0 14.38-11.687 26.091-26.109 26.163z"></path>
                                        <path fill="#faee6e" d="m465.69 217.417-23.769.118c6.037.79 10.708 5.94 10.708 12.198v213.437c0 9.823-5.455 18.397-13.507 22.87 3.79 2.115 8.164 3.317 12.826 3.293h.01c14.422-.072 26.109-11.783 26.109-26.163v-213.436c.001-6.826-5.551-12.351-12.377-12.317z"></path>
                                        <path fill="#54b1ff" d="m491.274 247.925-71.615.355c-7.305.036-13.226 5.968-13.226 13.248 0 7.281 5.921 13.153 13.226 13.117l58.389-.29v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c0-7.28-5.922-13.152-13.226-13.116z"></path>
                                        <g>
                                            <path fill="#3da7ff" d="m491.274 247.925-38.441.188-.167 26.311 25.381-.067v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c.001-7.282-5.921-13.154-13.225-13.118z"></path>
                                        </g>
                                        </g>
                                    </g>
                                    <g fill="#060606">
                                        <path d="m373.147 20.122-295.44-19.761c-9.631-.638-17.984 6.665-18.629 16.293l-2.311 34.557h-39.267c-9.649 0-17.5 7.851-17.5 17.5v425.466c0 9.649 7.851 17.5 17.5 17.5h226.141c1.96 0 3.902-.801 5.292-2.185l34.138-33.987c.347.074.701.133 1.065.157l58.282 3.898c9.302.614 18.005-6.952 18.629-16.293l28.393-424.515c.639-9.528-6.766-17.993-16.293-18.63zm-122.006 465.902v-52.1c0-1.378 1.122-2.5 2.5-2.5h51.9zm94.939-23.757c-.244 1.51-1.131 2.286-2.66 2.327l-46.28-3.096 31.752-31.611c1.414-1.407 2.209-3.32 2.209-5.315v-355.86c0-9.649-7.851-17.5-17.5-17.5h-77.993c-9.697 0-9.697 15 0 15h77.993c1.379 0 2.5 1.122 2.5 2.5v347.712h-62.46c-9.649 0-17.5 7.851-17.5 17.5v62.753h-218.641c-1.378 0-2.5-1.122-2.5-2.5v-425.465c0-1.378 1.122-2.5 2.5-2.5h178.168c9.697 0 9.697-15 0-15h-123.868l2.244-33.556c.244-1.511 1.131-2.286 2.661-2.327l295.44 19.76c1.511.244 2.287 1.131 2.328 2.661z"></path>
                                        <path d="m267.827 237.047h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z"></path>
                                        <path d="m267.827 289.332h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z"></path>
                                        <path d="m55.774 192.262c0 4.142 3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-204.553c-4.142 0-7.5 3.358-7.5 7.5z"></path>
                                        <path d="m91.807 139.977c0 4.142 3.358 7.5 7.5 7.5h132.487c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-132.487c-4.142 0-7.5 3.358-7.5 7.5z"></path>
                                        <path d="m194.755 438.787c-13.489.036-26.978.065-40.467.086-4.534.007-9.067.013-13.6.016-8.215.006-13.75-1.643-15.59-10.679-1.556-7.64-12.364-6.613-14.464 0-5.19 16.337-13.774 9.936-18.582-1.053-4.797-10.963-6.027-23.233-8.122-34.9-1.54-8.573-14.506-6.17-14.732 1.994-.298 10.751-1.302 21.331-4.031 31.758-2.815 10.758-7.034 21.097-11.222 31.376-3.651 8.961 10.867 12.816 14.464 3.988 3.711-9.108 7.427-18.266 10.193-27.714 5.14 12.36 15.774 26.34 30.927 18.101 2.819-1.533 5.452-3.712 7.763-6.253 7.88 9.106 19.609 8.388 30.584 8.375 15.627-.02 31.254-.054 46.881-.095 9.649-.025 9.667-15.025-.002-15z"></path>
                                        <path d="m505.932 246.439c-3.897-3.878-9.255-5.867-14.695-6.014l-5.668.028v-10.719c0-6.529-3.878-13.427-9.433-16.862v-15.098c0-31.069-48.372-30.934-48.372.146v15.1c-5.659 3.498-9.455 9.741-9.455 16.852v10.982c-24.966 1.7-25.037 39.745.028 41.232.16 33.575.152 66.6-.028 100.737-.049 9.414 14.949 9.966 15 .079.18-34.166.188-67.22.029-100.823l37.211-.185s-.048 110.848-.048 160.784c0 24.338-37.219 24.5-37.219-.253l.013-13.677c.585-9.68-14.387-10.583-14.973-.904v12.834c0 11 3.402 20.316 9.988 26.869.586 15.693 7.198 30.878 18.369 41.956 3.205 3.18 7.642 2.208 10.744-.182 11.365-11.385 17.769-26.394 18.169-42.414 4.951-4.931 9.908-9.896 9.908-26.896l.006-68.351c12.97 3.689 26.494-6.348 26.494-19.946v-90.672c0-5.523-2.155-10.709-6.068-14.603zm-72.623-5.727v-10.841c0-2.219 1.523-4.08 3.573-4.633l30.025-.149c.84.208 1.615.605 2.243 1.231.915.911 1.419 2.123 1.419 3.414v10.794zm18.671-52c4.604 0 9.155 4.514 9.155 9.062v12.166l-18.372.091v-12.111c.001-5.053 4.133-9.183 9.217-9.208zm-.011 303.901c-3.487-4.942-6.009-10.531-7.417-16.406 2.322.503 4.674.765 7.027.765 2.627 0 5.253-.326 7.839-.957-1.374 5.964-3.892 11.587-7.449 16.598zm45.031-140.899c0 7.101-11.452 7.66-11.452.131 0 0 .013-70.974.021-77.48.005-4.196-3.483-7.509-7.558-7.509l-58.389.29c-7.242 0-7.073-11.331.074-11.366l71.615-.355c3.463.295 5.359 2.168 5.688 5.617v90.672z"></path>
                                    </g>
                                    </g>
                                </svg>
                                </div>
                                <div class="solu_title">
                                <div>Extraversion (E) – Introversion (I)</div>
                                </div>
                                <div class="solu_description">
                                <p>Indicator ini berbicara mengenai respon sesorang dan bagaimana orang tersebut berinteraksi di lingkungan luar mereka. Jika Ektravert menunjukkan minat pada aksi dan interaksi sosial, maka sebaliknya, Introvert menunjukkan minatnya pada pikiran, menyukai interaksi sosial yang mendalam dan lebih berenergi ketika sendiri.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div><br><br>
            <div class="section_our_solution"data-aos="fade-left" data-aos-duration="2000">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="our_solution_category">
                            <div class="solution_cards_box">
                            <div class="solution_card">
                                <div class="hover_color_bubble"></div>
                                <div class="so_top_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 512 512" height="50" id="Layer_1">
                                    <g>
                                    <g>
                                        <g>
                                        <g>
                                            <path fill="#fae19e" d="m47.478 452.317 295.441 19.76c5.511.369 10.277-3.8 10.645-9.31l28.393-424.517c.369-5.511-3.8-10.276-9.31-10.645l-295.441-19.76c-5.511-.369-10.276 3.8-10.645 9.31l-28.394 424.517c-.368 5.511 3.8 10.277 9.311 10.645z"></path>
                                        </g>
                                        <g>
                                            <g>
                                            <g>
                                                <g>
                                                <g>
                                                    <path fill="#fff9e9" d="m17.5 504.177h226.14l79.96-79.605v-355.86c0-5.523-4.477-10-10-10h-296.1c-5.523 0-10 4.477-10 10v425.466c0 5.522 4.477 9.999 10 9.999z"></path>
                                                </g>
                                                <path fill="#fff4d6" d="m313.601 58.712h-40c5.523 0 10 4.477 10 10v355.861l-.258 40.078 40.258-40.078v-355.861c0-5.523-4.477-10-10-10z"></path>
                                                </g>
                                            </g>
                                            </g>
                                            <path fill="#ffeec2" d="m243.64 504.177v-70.253c0-5.523 4.477-10 10-10h69.96z"></path>
                                        </g>
                                        </g>
                                        <g>
                                        <path fill="#fed23a" d="m468.636 248.58-33.372.165v-50.826c0-9.183 7.463-16.662 16.673-16.708h.007c9.217-.046 16.693 7.371 16.693 16.562v50.807z"></path>
                                        <path fill="#54b1ff" d="m451.96 504.177c-10.362-10.277-16.196-24.263-16.208-38.857l-.062-73.973c0-.644.524-1.169 1.171-1.173l30.038-.149c.647-.003 1.171.517 1.171 1.161l.062 74.079c.012 14.531-5.749 28.472-16.015 38.756z"></path>
                                        <path fill="#fdf385" d="m451.959 469.333h-.01c-14.434.072-26.14-11.542-26.14-25.935v-213.527c0-6.778 5.477-12.283 12.255-12.316l27.626-.137c6.826-.034 12.378 5.49 12.378 12.316v213.436c0 14.38-11.687 26.091-26.109 26.163z"></path>
                                        <path fill="#faee6e" d="m465.69 217.417-23.769.118c6.037.79 10.708 5.94 10.708 12.198v213.437c0 9.823-5.455 18.397-13.507 22.87 3.79 2.115 8.164 3.317 12.826 3.293h.01c14.422-.072 26.109-11.783 26.109-26.163v-213.436c.001-6.826-5.551-12.351-12.377-12.317z"></path>
                                        <path fill="#54b1ff" d="m491.274 247.925-71.615.355c-7.305.036-13.226 5.968-13.226 13.248 0 7.281 5.921 13.153 13.226 13.117l58.389-.29v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c0-7.28-5.922-13.152-13.226-13.116z"></path>
                                        <g>
                                            <path fill="#3da7ff" d="m491.274 247.925-38.441.188-.167 26.311 25.381-.067v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c.001-7.282-5.921-13.154-13.225-13.118z"></path>
                                        </g>
                                        </g>
                                    </g>
                                    <g fill="#060606">
                                        <path d="m373.147 20.122-295.44-19.761c-9.631-.638-17.984 6.665-18.629 16.293l-2.311 34.557h-39.267c-9.649 0-17.5 7.851-17.5 17.5v425.466c0 9.649 7.851 17.5 17.5 17.5h226.141c1.96 0 3.902-.801 5.292-2.185l34.138-33.987c.347.074.701.133 1.065.157l58.282 3.898c9.302.614 18.005-6.952 18.629-16.293l28.393-424.515c.639-9.528-6.766-17.993-16.293-18.63zm-122.006 465.902v-52.1c0-1.378 1.122-2.5 2.5-2.5h51.9zm94.939-23.757c-.244 1.51-1.131 2.286-2.66 2.327l-46.28-3.096 31.752-31.611c1.414-1.407 2.209-3.32 2.209-5.315v-355.86c0-9.649-7.851-17.5-17.5-17.5h-77.993c-9.697 0-9.697 15 0 15h77.993c1.379 0 2.5 1.122 2.5 2.5v347.712h-62.46c-9.649 0-17.5 7.851-17.5 17.5v62.753h-218.641c-1.378 0-2.5-1.122-2.5-2.5v-425.465c0-1.378 1.122-2.5 2.5-2.5h178.168c9.697 0 9.697-15 0-15h-123.868l2.244-33.556c.244-1.511 1.131-2.286 2.661-2.327l295.44 19.76c1.511.244 2.287 1.131 2.328 2.661z"></path>
                                        <path d="m267.827 237.047h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z"></path>
                                        <path d="m267.827 289.332h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z"></path>
                                        <path d="m55.774 192.262c0 4.142 3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-204.553c-4.142 0-7.5 3.358-7.5 7.5z"></path>
                                        <path d="m91.807 139.977c0 4.142 3.358 7.5 7.5 7.5h132.487c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-132.487c-4.142 0-7.5 3.358-7.5 7.5z"></path>
                                        <path d="m194.755 438.787c-13.489.036-26.978.065-40.467.086-4.534.007-9.067.013-13.6.016-8.215.006-13.75-1.643-15.59-10.679-1.556-7.64-12.364-6.613-14.464 0-5.19 16.337-13.774 9.936-18.582-1.053-4.797-10.963-6.027-23.233-8.122-34.9-1.54-8.573-14.506-6.17-14.732 1.994-.298 10.751-1.302 21.331-4.031 31.758-2.815 10.758-7.034 21.097-11.222 31.376-3.651 8.961 10.867 12.816 14.464 3.988 3.711-9.108 7.427-18.266 10.193-27.714 5.14 12.36 15.774 26.34 30.927 18.101 2.819-1.533 5.452-3.712 7.763-6.253 7.88 9.106 19.609 8.388 30.584 8.375 15.627-.02 31.254-.054 46.881-.095 9.649-.025 9.667-15.025-.002-15z"></path>
                                        <path d="m505.932 246.439c-3.897-3.878-9.255-5.867-14.695-6.014l-5.668.028v-10.719c0-6.529-3.878-13.427-9.433-16.862v-15.098c0-31.069-48.372-30.934-48.372.146v15.1c-5.659 3.498-9.455 9.741-9.455 16.852v10.982c-24.966 1.7-25.037 39.745.028 41.232.16 33.575.152 66.6-.028 100.737-.049 9.414 14.949 9.966 15 .079.18-34.166.188-67.22.029-100.823l37.211-.185s-.048 110.848-.048 160.784c0 24.338-37.219 24.5-37.219-.253l.013-13.677c.585-9.68-14.387-10.583-14.973-.904v12.834c0 11 3.402 20.316 9.988 26.869.586 15.693 7.198 30.878 18.369 41.956 3.205 3.18 7.642 2.208 10.744-.182 11.365-11.385 17.769-26.394 18.169-42.414 4.951-4.931 9.908-9.896 9.908-26.896l.006-68.351c12.97 3.689 26.494-6.348 26.494-19.946v-90.672c0-5.523-2.155-10.709-6.068-14.603zm-72.623-5.727v-10.841c0-2.219 1.523-4.08 3.573-4.633l30.025-.149c.84.208 1.615.605 2.243 1.231.915.911 1.419 2.123 1.419 3.414v10.794zm18.671-52c4.604 0 9.155 4.514 9.155 9.062v12.166l-18.372.091v-12.111c.001-5.053 4.133-9.183 9.217-9.208zm-.011 303.901c-3.487-4.942-6.009-10.531-7.417-16.406 2.322.503 4.674.765 7.027.765 2.627 0 5.253-.326 7.839-.957-1.374 5.964-3.892 11.587-7.449 16.598zm45.031-140.899c0 7.101-11.452 7.66-11.452.131 0 0 .013-70.974.021-77.48.005-4.196-3.483-7.509-7.558-7.509l-58.389.29c-7.242 0-7.073-11.331.074-11.366l71.615-.355c3.463.295 5.359 2.168 5.688 5.617v90.672z"></path>
                                    </g>
                                    </g>
                                </svg>
                                </div>
                                <div class="solu_title">
                                <div>Sensing (S) – Intuition (N)</div>
                                </div>
                                <div class="solu_description">
                                <p>Kedua indicator ini memberikan pengetahuan tentang bagaimana karakter seseorang dalam mengumpulkan informasi yang ada di luar. Mereka yang  memilih sensing akan mengutamakan hal yang nyata yang bisa mereka indera langsung. Berorientasi pada fakta dan hal yang mendetail. Intuisi menunjukkan mereka lebih berorientasi pada probabilitas, memprediksikan sesuatu dan senang berpikir sesuatu yang abstrak.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div><br><br>
            <div class="section_our_solution"data-aos="fade-right" data-aos-duration="2000">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="our_solution_category">
                            <div class="solution_cards_box">
                            <div class="solution_card">
                                <div class="hover_color_bubble"></div>
                                <div class="so_top_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 512 512" height="50" id="Layer_1">
                                    <g>
                                    <g>
                                        <g>
                                        <g>
                                            <path fill="#fae19e" d="m47.478 452.317 295.441 19.76c5.511.369 10.277-3.8 10.645-9.31l28.393-424.517c.369-5.511-3.8-10.276-9.31-10.645l-295.441-19.76c-5.511-.369-10.276 3.8-10.645 9.31l-28.394 424.517c-.368 5.511 3.8 10.277 9.311 10.645z"></path>
                                        </g>
                                        <g>
                                            <g>
                                            <g>
                                                <g>
                                                <g>
                                                    <path fill="#fff9e9" d="m17.5 504.177h226.14l79.96-79.605v-355.86c0-5.523-4.477-10-10-10h-296.1c-5.523 0-10 4.477-10 10v425.466c0 5.522 4.477 9.999 10 9.999z"></path>
                                                </g>
                                                <path fill="#fff4d6" d="m313.601 58.712h-40c5.523 0 10 4.477 10 10v355.861l-.258 40.078 40.258-40.078v-355.861c0-5.523-4.477-10-10-10z"></path>
                                                </g>
                                            </g>
                                            </g>
                                            <path fill="#ffeec2" d="m243.64 504.177v-70.253c0-5.523 4.477-10 10-10h69.96z"></path>
                                        </g>
                                        </g>
                                        <g>
                                        <path fill="#fed23a" d="m468.636 248.58-33.372.165v-50.826c0-9.183 7.463-16.662 16.673-16.708h.007c9.217-.046 16.693 7.371 16.693 16.562v50.807z"></path>
                                        <path fill="#54b1ff" d="m451.96 504.177c-10.362-10.277-16.196-24.263-16.208-38.857l-.062-73.973c0-.644.524-1.169 1.171-1.173l30.038-.149c.647-.003 1.171.517 1.171 1.161l.062 74.079c.012 14.531-5.749 28.472-16.015 38.756z"></path>
                                        <path fill="#fdf385" d="m451.959 469.333h-.01c-14.434.072-26.14-11.542-26.14-25.935v-213.527c0-6.778 5.477-12.283 12.255-12.316l27.626-.137c6.826-.034 12.378 5.49 12.378 12.316v213.436c0 14.38-11.687 26.091-26.109 26.163z"></path>
                                        <path fill="#faee6e" d="m465.69 217.417-23.769.118c6.037.79 10.708 5.94 10.708 12.198v213.437c0 9.823-5.455 18.397-13.507 22.87 3.79 2.115 8.164 3.317 12.826 3.293h.01c14.422-.072 26.109-11.783 26.109-26.163v-213.436c.001-6.826-5.551-12.351-12.377-12.317z"></path>
                                        <path fill="#54b1ff" d="m491.274 247.925-71.615.355c-7.305.036-13.226 5.968-13.226 13.248 0 7.281 5.921 13.153 13.226 13.117l58.389-.29v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c0-7.28-5.922-13.152-13.226-13.116z"></path>
                                        <g>
                                            <path fill="#3da7ff" d="m491.274 247.925-38.441.188-.167 26.311 25.381-.067v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c.001-7.282-5.921-13.154-13.225-13.118z"></path>
                                        </g>
                                        </g>
                                    </g>
                                    <g fill="#060606">
                                        <path d="m373.147 20.122-295.44-19.761c-9.631-.638-17.984 6.665-18.629 16.293l-2.311 34.557h-39.267c-9.649 0-17.5 7.851-17.5 17.5v425.466c0 9.649 7.851 17.5 17.5 17.5h226.141c1.96 0 3.902-.801 5.292-2.185l34.138-33.987c.347.074.701.133 1.065.157l58.282 3.898c9.302.614 18.005-6.952 18.629-16.293l28.393-424.515c.639-9.528-6.766-17.993-16.293-18.63zm-122.006 465.902v-52.1c0-1.378 1.122-2.5 2.5-2.5h51.9zm94.939-23.757c-.244 1.51-1.131 2.286-2.66 2.327l-46.28-3.096 31.752-31.611c1.414-1.407 2.209-3.32 2.209-5.315v-355.86c0-9.649-7.851-17.5-17.5-17.5h-77.993c-9.697 0-9.697 15 0 15h77.993c1.379 0 2.5 1.122 2.5 2.5v347.712h-62.46c-9.649 0-17.5 7.851-17.5 17.5v62.753h-218.641c-1.378 0-2.5-1.122-2.5-2.5v-425.465c0-1.378 1.122-2.5 2.5-2.5h178.168c9.697 0 9.697-15 0-15h-123.868l2.244-33.556c.244-1.511 1.131-2.286 2.661-2.327l295.44 19.76c1.511.244 2.287 1.131 2.328 2.661z"></path>
                                        <path d="m267.827 237.047h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z"></path>
                                        <path d="m267.827 289.332h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z"></path>
                                        <path d="m55.774 192.262c0 4.142 3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-204.553c-4.142 0-7.5 3.358-7.5 7.5z"></path>
                                        <path d="m91.807 139.977c0 4.142 3.358 7.5 7.5 7.5h132.487c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-132.487c-4.142 0-7.5 3.358-7.5 7.5z"></path>
                                        <path d="m194.755 438.787c-13.489.036-26.978.065-40.467.086-4.534.007-9.067.013-13.6.016-8.215.006-13.75-1.643-15.59-10.679-1.556-7.64-12.364-6.613-14.464 0-5.19 16.337-13.774 9.936-18.582-1.053-4.797-10.963-6.027-23.233-8.122-34.9-1.54-8.573-14.506-6.17-14.732 1.994-.298 10.751-1.302 21.331-4.031 31.758-2.815 10.758-7.034 21.097-11.222 31.376-3.651 8.961 10.867 12.816 14.464 3.988 3.711-9.108 7.427-18.266 10.193-27.714 5.14 12.36 15.774 26.34 30.927 18.101 2.819-1.533 5.452-3.712 7.763-6.253 7.88 9.106 19.609 8.388 30.584 8.375 15.627-.02 31.254-.054 46.881-.095 9.649-.025 9.667-15.025-.002-15z"></path>
                                        <path d="m505.932 246.439c-3.897-3.878-9.255-5.867-14.695-6.014l-5.668.028v-10.719c0-6.529-3.878-13.427-9.433-16.862v-15.098c0-31.069-48.372-30.934-48.372.146v15.1c-5.659 3.498-9.455 9.741-9.455 16.852v10.982c-24.966 1.7-25.037 39.745.028 41.232.16 33.575.152 66.6-.028 100.737-.049 9.414 14.949 9.966 15 .079.18-34.166.188-67.22.029-100.823l37.211-.185s-.048 110.848-.048 160.784c0 24.338-37.219 24.5-37.219-.253l.013-13.677c.585-9.68-14.387-10.583-14.973-.904v12.834c0 11 3.402 20.316 9.988 26.869.586 15.693 7.198 30.878 18.369 41.956 3.205 3.18 7.642 2.208 10.744-.182 11.365-11.385 17.769-26.394 18.169-42.414 4.951-4.931 9.908-9.896 9.908-26.896l.006-68.351c12.97 3.689 26.494-6.348 26.494-19.946v-90.672c0-5.523-2.155-10.709-6.068-14.603zm-72.623-5.727v-10.841c0-2.219 1.523-4.08 3.573-4.633l30.025-.149c.84.208 1.615.605 2.243 1.231.915.911 1.419 2.123 1.419 3.414v10.794zm18.671-52c4.604 0 9.155 4.514 9.155 9.062v12.166l-18.372.091v-12.111c.001-5.053 4.133-9.183 9.217-9.208zm-.011 303.901c-3.487-4.942-6.009-10.531-7.417-16.406 2.322.503 4.674.765 7.027.765 2.627 0 5.253-.326 7.839-.957-1.374 5.964-3.892 11.587-7.449 16.598zm45.031-140.899c0 7.101-11.452 7.66-11.452.131 0 0 .013-70.974.021-77.48.005-4.196-3.483-7.509-7.558-7.509l-58.389.29c-7.242 0-7.073-11.331.074-11.366l71.615-.355c3.463.295 5.359 2.168 5.688 5.617v90.672z"></path>
                                    </g>
                                    </g>
                                </svg>
                                </div>
                                <div class="solu_title">
                                <div>Thinking (T) – Feeling (F)</div>
                                </div>
                                <div class="solu_description">
                                <p>Thinking dan Feeling menggambarkan bagaimana seseorang menentukan keputusan dari informasi yang mereka terima. Pemikir akan menentukan berdasarkan fakta. Mereka ini berkepribadian konsisten dan logis. Ssedangkan perasa akan mengutamakan emosi saat menentukan sesuatu.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div><br><br>
            <div class="section_our_solution"data-aos="fade-left" data-aos-duration="2000">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="our_solution_category">
                            <div class="solution_cards_box">
                            <div class="solution_card">
                                <div class="hover_color_bubble"></div>
                                <div class="so_top_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 512 512" height="50" id="Layer_1">
                                    <g>
                                    <g>
                                        <g>
                                        <g>
                                            <path fill="#fae19e" d="m47.478 452.317 295.441 19.76c5.511.369 10.277-3.8 10.645-9.31l28.393-424.517c.369-5.511-3.8-10.276-9.31-10.645l-295.441-19.76c-5.511-.369-10.276 3.8-10.645 9.31l-28.394 424.517c-.368 5.511 3.8 10.277 9.311 10.645z"></path>
                                        </g>
                                        <g>
                                            <g>
                                            <g>
                                                <g>
                                                <g>
                                                    <path fill="#fff9e9" d="m17.5 504.177h226.14l79.96-79.605v-355.86c0-5.523-4.477-10-10-10h-296.1c-5.523 0-10 4.477-10 10v425.466c0 5.522 4.477 9.999 10 9.999z"></path>
                                                </g>
                                                <path fill="#fff4d6" d="m313.601 58.712h-40c5.523 0 10 4.477 10 10v355.861l-.258 40.078 40.258-40.078v-355.861c0-5.523-4.477-10-10-10z"></path>
                                                </g>
                                            </g>
                                            </g>
                                            <path fill="#ffeec2" d="m243.64 504.177v-70.253c0-5.523 4.477-10 10-10h69.96z"></path>
                                        </g>
                                        </g>
                                        <g>
                                        <path fill="#fed23a" d="m468.636 248.58-33.372.165v-50.826c0-9.183 7.463-16.662 16.673-16.708h.007c9.217-.046 16.693 7.371 16.693 16.562v50.807z"></path>
                                        <path fill="#54b1ff" d="m451.96 504.177c-10.362-10.277-16.196-24.263-16.208-38.857l-.062-73.973c0-.644.524-1.169 1.171-1.173l30.038-.149c.647-.003 1.171.517 1.171 1.161l.062 74.079c.012 14.531-5.749 28.472-16.015 38.756z"></path>
                                        <path fill="#fdf385" d="m451.959 469.333h-.01c-14.434.072-26.14-11.542-26.14-25.935v-213.527c0-6.778 5.477-12.283 12.255-12.316l27.626-.137c6.826-.034 12.378 5.49 12.378 12.316v213.436c0 14.38-11.687 26.091-26.109 26.163z"></path>
                                        <path fill="#faee6e" d="m465.69 217.417-23.769.118c6.037.79 10.708 5.94 10.708 12.198v213.437c0 9.823-5.455 18.397-13.507 22.87 3.79 2.115 8.164 3.317 12.826 3.293h.01c14.422-.072 26.109-11.783 26.109-26.163v-213.436c.001-6.826-5.551-12.351-12.377-12.317z"></path>
                                        <path fill="#54b1ff" d="m491.274 247.925-71.615.355c-7.305.036-13.226 5.968-13.226 13.248 0 7.281 5.921 13.153 13.226 13.117l58.389-.29v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c0-7.28-5.922-13.152-13.226-13.116z"></path>
                                        <g>
                                            <path fill="#3da7ff" d="m491.274 247.925-38.441.188-.167 26.311 25.381-.067v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c.001-7.282-5.921-13.154-13.225-13.118z"></path>
                                        </g>
                                        </g>
                                    </g>
                                    <g fill="#060606">
                                        <path d="m373.147 20.122-295.44-19.761c-9.631-.638-17.984 6.665-18.629 16.293l-2.311 34.557h-39.267c-9.649 0-17.5 7.851-17.5 17.5v425.466c0 9.649 7.851 17.5 17.5 17.5h226.141c1.96 0 3.902-.801 5.292-2.185l34.138-33.987c.347.074.701.133 1.065.157l58.282 3.898c9.302.614 18.005-6.952 18.629-16.293l28.393-424.515c.639-9.528-6.766-17.993-16.293-18.63zm-122.006 465.902v-52.1c0-1.378 1.122-2.5 2.5-2.5h51.9zm94.939-23.757c-.244 1.51-1.131 2.286-2.66 2.327l-46.28-3.096 31.752-31.611c1.414-1.407 2.209-3.32 2.209-5.315v-355.86c0-9.649-7.851-17.5-17.5-17.5h-77.993c-9.697 0-9.697 15 0 15h77.993c1.379 0 2.5 1.122 2.5 2.5v347.712h-62.46c-9.649 0-17.5 7.851-17.5 17.5v62.753h-218.641c-1.378 0-2.5-1.122-2.5-2.5v-425.465c0-1.378 1.122-2.5 2.5-2.5h178.168c9.697 0 9.697-15 0-15h-123.868l2.244-33.556c.244-1.511 1.131-2.286 2.661-2.327l295.44 19.76c1.511.244 2.287 1.131 2.328 2.661z"></path>
                                        <path d="m267.827 237.047h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z"></path>
                                        <path d="m267.827 289.332h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z"></path>
                                        <path d="m55.774 192.262c0 4.142 3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-204.553c-4.142 0-7.5 3.358-7.5 7.5z"></path>
                                        <path d="m91.807 139.977c0 4.142 3.358 7.5 7.5 7.5h132.487c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-132.487c-4.142 0-7.5 3.358-7.5 7.5z"></path>
                                        <path d="m194.755 438.787c-13.489.036-26.978.065-40.467.086-4.534.007-9.067.013-13.6.016-8.215.006-13.75-1.643-15.59-10.679-1.556-7.64-12.364-6.613-14.464 0-5.19 16.337-13.774 9.936-18.582-1.053-4.797-10.963-6.027-23.233-8.122-34.9-1.54-8.573-14.506-6.17-14.732 1.994-.298 10.751-1.302 21.331-4.031 31.758-2.815 10.758-7.034 21.097-11.222 31.376-3.651 8.961 10.867 12.816 14.464 3.988 3.711-9.108 7.427-18.266 10.193-27.714 5.14 12.36 15.774 26.34 30.927 18.101 2.819-1.533 5.452-3.712 7.763-6.253 7.88 9.106 19.609 8.388 30.584 8.375 15.627-.02 31.254-.054 46.881-.095 9.649-.025 9.667-15.025-.002-15z"></path>
                                        <path d="m505.932 246.439c-3.897-3.878-9.255-5.867-14.695-6.014l-5.668.028v-10.719c0-6.529-3.878-13.427-9.433-16.862v-15.098c0-31.069-48.372-30.934-48.372.146v15.1c-5.659 3.498-9.455 9.741-9.455 16.852v10.982c-24.966 1.7-25.037 39.745.028 41.232.16 33.575.152 66.6-.028 100.737-.049 9.414 14.949 9.966 15 .079.18-34.166.188-67.22.029-100.823l37.211-.185s-.048 110.848-.048 160.784c0 24.338-37.219 24.5-37.219-.253l.013-13.677c.585-9.68-14.387-10.583-14.973-.904v12.834c0 11 3.402 20.316 9.988 26.869.586 15.693 7.198 30.878 18.369 41.956 3.205 3.18 7.642 2.208 10.744-.182 11.365-11.385 17.769-26.394 18.169-42.414 4.951-4.931 9.908-9.896 9.908-26.896l.006-68.351c12.97 3.689 26.494-6.348 26.494-19.946v-90.672c0-5.523-2.155-10.709-6.068-14.603zm-72.623-5.727v-10.841c0-2.219 1.523-4.08 3.573-4.633l30.025-.149c.84.208 1.615.605 2.243 1.231.915.911 1.419 2.123 1.419 3.414v10.794zm18.671-52c4.604 0 9.155 4.514 9.155 9.062v12.166l-18.372.091v-12.111c.001-5.053 4.133-9.183 9.217-9.208zm-.011 303.901c-3.487-4.942-6.009-10.531-7.417-16.406 2.322.503 4.674.765 7.027.765 2.627 0 5.253-.326 7.839-.957-1.374 5.964-3.892 11.587-7.449 16.598zm45.031-140.899c0 7.101-11.452 7.66-11.452.131 0 0 .013-70.974.021-77.48.005-4.196-3.483-7.509-7.558-7.509l-58.389.29c-7.242 0-7.073-11.331.074-11.366l71.615-.355c3.463.295 5.359 2.168 5.688 5.617v90.672z"></path>
                                    </g>
                                    </g>
                                </svg>
                                </div>
                                <div class="solu_title">
                                <div>Judging (J) – Perceiving (P)</div>
                                </div>
                                <div class="solu_description">
                                <p>Kedua indicator ini berbicara tentang bagaimana individu menunjukkan sikapnya kepada dunia luar. Orang tipe J akan bersikap tegas terhadap keputusannya. Sedangkan tipe P menunjukkan sikap yang lebih fleksibel.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div><br><br>
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
                    <div class="tipe-pribadi INTJ" data-aos="zoom-in" data-aos-duration="1000" style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); color: white;">
                        <h3 class="judul" style="color: white;">INTJ</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/tipe1.jpg"></center>
                        <p>INTJ dikenal sebagai "arsitek" merupakan pemikir yang imajinatif dan strategis dengan rencana untuk segala sesuatunya. INTJ cenderung visioner, mandiri, analitris, kritis, kompetitif, tidak terpengaruh terhadap kritik atau konflik. Profesi yang cocok adalah dibidang peneliti, ilmuwan, analis bisnis, pengacara, hakim. Saran Pengembangan yaitu Belajar mengungkapkan emosi, terbuka pada dunia luar, lebih berempati dan peka.</p>
                        <div class="detail INTJ"><p></p></div>
                    </div>
                    <div class="tipe-pribadi INTP"data-aos="zoom-in" data-aos-duration="1200" style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); color: white;">
                        <h3 class="judul" style="color: white;">INTP</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/tipe2.jpg"></center>
                        <p>INTP dikenal sebagai "ahli logika" merupakan penemu yang inovatif dengan kedahagaan akan pengetahuan yang tidak ada habisnya. INTP cenderung penyendiri, tidak suka memimpin, kritis, mudah curiga, pesimis, menyukai hal ilmiah. Profesi yang cocok adalah dibidang ilmuwan, pengacara, jaksa, ahli forensik, penulis buku, programmer, ahli komputer. Saran Pengembangannya yaitu Lebih empati, rileks, focus terhadap satu ide, jangan terlalu banyak memikirkan sesuatu secara berlebihan.</p>
                        <div class="detail INTP"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ENTJ"data-aos="zoom-in" data-aos-duration="1200"style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); color: white;">
                        <h3 class="judul"style="color: white;">ENTJ</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/tipe3.jpg"></center>
                        <p>ENTJ dikenal sebagai "komandan" merupakan pemimpin pemberani, imajinatif dan berkemauan kuat selalu menemukan cara atau menciptakan cara. ENTJ cenderung tegas, jujur, tangguh, disiplin, mendominasi, pemimpin, kemauan yang kuat, berkarisma. Profesi yang cocok adalah dibidang entrepreneur, analis bisnis, bagian keuangan, pemimpin organisasi. Saran Pengembangannya yaitu belajar mengungkapkan perasaan, menghargai orang lain, mengelola emosi, hindari sikap arogan atau meremehkan kemampuan orang lain, belajar berpikir lebih luas dengan tidak memandang banar atau salah.</p>
                        <div class="detail ENTJ"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ENTP"data-aos="zoom-in" data-aos-duration="1200"style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); color: white;">
                        <h3 class="judul"style="color: white;">ENTP</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/tipe4.jpg"></center>
                        <p>ENTP dikenal sebagai "pendebat" merupakan pemikir yang cerdas dan serius yang gatal terhadap tantangan intelektual. ENTP cenderung inovatif, fleksibel, lincah, mau belajar, cenderung melakukan hal baru yang disenangi. Profesi yang cocok adalah dibidang aktor, pengacara, fotografer. Saran Pengembanganya yaitu jangan mau menang sendiri, perhatian pada orang lain, belajar untuk bisa lebih waspada, berusaha hindari perdebatan yang kurang perlu.</p>
                        <div class="detail ENTP"><p></p></div>
                    </div>
                    <div class="tipe-pribadi INFJ"data-aos="zoom-in" data-aos-duration="1200"style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); color: white;">
                        <h3 class="judul"style="color: white;">INFJ</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/tipe5.jpg"></center>
                        <p>INFJ dikenal sebagai "advokat" merupakan sosok yang pendiam dan mistis, tetapi idealis yang sangat menginspirasi dan tak kenal lelah. INFJ cenderung perhatian, reflektif, perfeksionis, visioner, tekun, empati, berkomitmen dan sensitive. Profesi yang cocok adalah dibidang : psikolog, dokter, pekerja sosial, seniman. Saran Pengembangannya yaitu Berpikir seimbang dengan tidak memandang sisi negatif, Lebih rileks dan bersabar terhadap kesalahan orang lain.</p>
                        <div class="detail INFJ"><p></p></div>
                    </div>
                    <div class="tipe-pribadi INFP"data-aos="zoom-in" data-aos-duration="1200"style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); color: white;">
                        <h3 class="judul"style="color: white;">INFP</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/tipe6.jpg"></center>
                        <p>INFP dikenal sebagai "mediator" merupakan sosok yang puitis, baik hati, dan altruisik selalu ingin membangu aksi kebaikan. INFP cenderung penuh perhatian, peduli, idealis, perfeksionis, win-win solution. Profesi yang cocok adalah dibidang pengajar, penulis, seniman, konselor, psikolog. Saran Pengembangannya yaitu Belajar menerima kritik, tegas, jangan menyalahkan diri.</p>
                        <div class="detail INFP"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ENFJ"data-aos="zoom-in" data-aos-duration="1200"style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); color: white;">
                        <h3 class="judul"style="color: white;">ENFJ</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/tipe7.jpg"></center>
                        <p>ENFJ dikenal sebagai "protagonis" merupakan pemimpin yang karismatik dan menginspirasi, mampu memukai pendengarnya. ENFJ cenderung imajinatif, peka, pandai bersosialisasi, loyal, membutuhkan apresiasi. Profesi yang cocok adalah dibidang konsultan, penulis, pengajar, kordinator acara, motivator, pskikolog. Saran Pengembangannya yaitu tidak mengukur harga diri dari penilaian orang, jangan terlalu keras terhadap diri sendiri.</p>
                        <div class="detail ENFJ"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ENFP"data-aos="zoom-in" data-aos-duration="1200"style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); color: white;">
                        <h3 class="judul"style="color: white;">ENFP</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/tipe8.jpg"></center>
                        <p>ENFP dikenal sebagai "juru kampanye" merupakan seorang yang bersemangat, antusias, kreatif dan bebas bergaul yang selalu dapat menemukan alasan untuk tersenyum. ENFP cenderung optimis, ramah, imajinatif, komunikator yang baik, bisa memahami orang lain. Profesi yang cocok adalah dibidang konselor, psikolog, pengajar, presenter, seniman. Saran Pengembangan yaitu  fokus, disiplin, belajar menghadapi konflik, pikirkan diri sendiri, hemat.</p>
                        <div class="detail ENFP"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ISTJ"data-aos="zoom-in" data-aos-duration="1200"style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); color: white;">
                        <h3 class="judul"style="color: white;">ISTJ</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/tipe9.jpg"></center>
                        <p>ISTJ dikenal sebagai "ahli logistik" merupakan pribadi yang praktis dan menggunakan fakta yang keandalannya tidak dapat diragukan. ISTJ cenderung bertanggungjawab, serius, damai, logis, objektif, bisa diandalkan, tekun, disiplin, pendengar yang baik, teguh dalam aturan dan prosedur tertentu. Profesi yang cocok adalah di bidang Manajemen, intelijen, hakim, pengacara, akuntan, programmer, analis. Saran pengembangan : lebih memahami kebutuhan dan perasaan orang, gunakan cara yang baik jika ada orang yang melanggar aturan, lebih terbuka pada perubahan dan bersikap positif terhadap apa yang sudah dilakukan orang lain.</p>
                        <div class="detail ISTJ"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ISFJ"data-aos="zoom-in" data-aos-duration="1200"style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); color: white;">
                        <h3 class="judul"style="color: white;">ISFJ</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/tipe10.jpg"></center>
                        <p>ISFJ dikenal sebagai "pembela" merupakan pelindung yang sangat berdedikasi dan hangat selalu siap membela orang yang dicintainya. ISFJ cenderung setia, berhati-hati, stabil, serius, ramah, detail, teliti, bertanggungjawab dan bisa diandalkan. Profesi yang cocok adalah dibidang Arsitek, konselor, penjaga toko, desainer, perawat. Saran Pengembangannya yaitu Belajar untuk menolak sesuatu, jangan ragu untuk mencoba hal baru.</p>
                        <div class="detail ISFJ"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ESTJ"data-aos="zoom-in" data-aos-duration="1200"style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); color: white;">
                        <h3 class="judul"style="color: white;">ESTJ</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/tipe11.jpg"></center>
                        <p>ESTJ dikenal sebagai "eksekutif" merupakan administrator istimewa yang tidak ada duanya dalam mengelola sesuatu atau orang. ESTJ cenderung praktis, disiplin, konservatif, suka berorganisasi, disiplin, fokus pada hal yang berguna bagi dirinya, sistematis. Profesi yang cocok adalah dibidang dunia militer (tentara), hakim, polisi, akuntan. Saran Pengembangannya yaitu tidak memaksa orang lain, sabar, mengontrol emosi, belajar memahami orang lain.</p>
                        <div class="detail ESTJ"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ESFJ"data-aos="zoom-in" data-aos-duration="1200"style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); color: white;">
                        <h3 class="judul"style="color: white;">ESFJ</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/tipe12.jpg"></center>
                        <p>ESFJ dikenal sebagai "konsul" merupakan orang yang sangat peduli, sosial, dan populer selalu ingin membantu. ESFJ cenderung hangat, populer, teliti, santai, sederhana, rajin, mudah bekerja sama dengan orang lain. Profesi yang cocok adalah dibidang perawat, guru, perencana keuangan, bagian administrasi. Saran Pengembangannya yaitu tidak mengorbankan diri untuk kesenangan orang, tidak lari dari kritik, lebih dewasa, bisa lebih tegas dan tidak ragu untuk meminta pendapat orang lain saat akan mengambil keputusan.</p>
                        <div class="detail ESFJ"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ISTP"data-aos="zoom-in" data-aos-duration="1200"style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); color: white;">
                        <h3 class="judul"style="color: white;">ISTP</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/tipe13.jpg"></center>
                        <p>ISTP dikenal sebagai "virtuoso" merupakan eksperimenter yang pemberani dan praktis, menguasai berbagai jenis alat. ISTP cenderung pendiam, logis, objektif, cepat beradaptasi, tegas, percaya diri, problem solver. Profesi yang cocok adalah dibidang  Polisi, Pilot, entrepreneur, atlit. Saran Pengembangannya yaitu lebih observatif, belajar rmengenal perasaan diri, belajar percaya pada diri sendiri dan orang lain.</p>
                        <div class="detail ISTJ"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ISFP"data-aos="zoom-in" data-aos-duration="1200"style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); color: white;">
                        <h3 class="judul"style="color: white;">ISFP</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/tipe14.jpg"></center>
                        <p>ISFP dikenal sebagai "petualang" merupakan seniman yang fleksibel dan mengagumkan selalu siap menjelajahi dan mengalami hal baru. ISFP cenderung artistik, sederhana, fleksibel, pelaksana yang baik, santai, menghindari konflik. Profesi yang cocok adalah dibidang seniman, pekerja sosial, psikolog. Saran pengembangan yaitu Jangan terus menghindari konflik, berpikir jangka panjang, lebih terbuka.</p>
                        <div class="detail ISFP"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ESTP"data-aos="zoom-in" data-aos-duration="1200"style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); color: white;">
                        <h3 class="judul"style="color: white;">ESTP</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/tipe15.jpg"></center>
                        <p>ESTP dikenal sebagai "pengusaha" merupakan seorang yang cerdas, bersemangat dan sangat tanggap yang benar-benar menikmati hidup yang menantang. ESTP cenderung aktif, komunikator handal, menyukai olahraga, spontan, mudah beradaptasi. Profesi yang cocok adalah dibidang sales, marketing, pialang saham, entrepreneur. Saran Pengembangannya yaitu lebih memahami perasaan orang, sabar, memikirkan masa depan, lebih detail.</p>
                        <div class="detail ESTP"><p></p></div>
                    </div>
                    <div class="tipe-pribadi ESFP"data-aos="zoom-in" data-aos-duration="1200"style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); color: white;">
                        <h3 class="judul"style="color: white;">ESFP</h3>
                        <center><img class="ilustrasi-pribadi" src="/medilab/assets/mbti/asset/images/tipe16.jpg"></center>
                        <p>ESFP dikenal sebagai "penghibur" merupakan seorang yang spontan, bersemangat dan antusias - hidupnya tidak akan membosankan saat berdekatan dengan mereka. ESFP cenderung murah hati, mudah bersosialisasi, optimis, ceria, suka perhatian orang lain. Profesi yang cocok adalah dibidang entertainer, seniman, marketing, bidang anak, pemandu wisata, bagian pelayanan. Saran Pengembangannya yaitu lebih fokus kepada satu hal, tidak gegabah dalam pengambilan putusan, tidak lari dari konflik.</p>
                        <div class="detail ESFP"><p></p></div>
                    </div>                    
            </article>
            <br/>
            <br/>
               
        </div>     
    </main>
    <script src="/medilab/assets/mbti/asset/js.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
  AOS.init();
</script>
</body>
</html>