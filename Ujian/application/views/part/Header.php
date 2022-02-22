<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" />
    <title>Ujian Pemrograman Web</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
      body{
        font-family: Poppins, sans-serif;
      }
      .navbar{
        background-color: #24495e;
      }
      .nav-item .active::after{
        font-weight: bold; 
        content: "";
        display: block;
        height: 3px;
        width: 100%;
        background-color: #1abc9c;
        border-radius: 3px;
        margin-bottom: -3px; 
      }
      .nav-link:hover::after{
        content: "";
        display: block;
        height: 3px;
        width: 100%;
        background-color: #1abc9c;
        border-radius: 3px;
        margin-bottom: -3px;
      }
      .const{
        margin-top: 5%;
      }
      /* .card{
        box-shadow: 2px 2px 2px #000;
      } */
      .breadcrumb{
        margin-top: 29px;
      }
      .breadcrumb-item.active{
        font-weight: bold;
        color: #363f47;
      }
      .breadcrumb-item a{
        text-decoration: none;
        display: inline-block;
        color: #363f47;
        font-weight: 300;
      }
      .form-border{
        border-radius: 0;
      }
      .btn-tutup{
        background-color: #A317FD;
        color: white;
      }
      /* .form-tulisan{
        font-size: 12px;
      } */
      
    </style>
  </head>
  <body id="page-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand text-white" href="#">CRUD || <b>CODEIGNITER</b> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item text-center me-3 ">
              <a class="nav-link active text-white " aria-current="page" href="<?=base_url('example/index')?>">HOME</a>
            </li>
            <li class="nav-item text-center me-3">
              <a class="nav-link text-white " href="<?=base_url('example/dataBuku')?>">BUKU PERPUPSTAKAAN</a>
            </li>
            <li class="nav-item text-center me-3">
              <a class="nav-link text-white " href="<?=base_url('logout')?>"><i class="bi bi-box-arrow-right"></i>&nbsp;LOGOUT</a>
            </li>
          </ul>
      </div>
  </div>
</nav>
  </body>
</html>