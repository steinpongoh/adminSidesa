<!DOCTYPE html>
<html lang="en">

<head>
    <link href="/adminSidesa/styles/styles.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/adminSidesa/assets/village.png" type="image/x-icon">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" type="text/css" />
    <script src="https://kit.fontawesome.com/5af47de50f.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
    <title>Admin SIDESA</title>
</head>
<body>
<!-- <script type="text/javascript">
    function preventBack(){
      window.history.forward()
    };
    setTimeout("preventBack()",0);
    window.onunload=function(){
      null;
    }
</script> -->
<section id="login" class="">
  <div class="container">
    <div class="row justify-content-center" data-aos="fade-down-left">
      <form id="form" method="post" action="ceklogin.php" class="col-md-8 col-10 " enctype="multipart/form-data">
        <h1 class="text-center">Login</h1>
        <div class="container-form shadow p-5 mt-4 mb-4 rounded-2 border-top border-success border-3 bg-light">
        <div class="alert alert-primary" style="text-align:center;"role="alert"> Silahkan masukkan Nama dan Password untuk login.</div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input name="username" type="text" class="form-control form-control-sm border border border-black p-2 mb-2 border-opacity-50" autocomplete="off" required placeholder="Silahkan isikan nama anda!" id="nama">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control form-control-sm border border-black p-2 mb-2 border-opacity-50" required placeholder="Password" id="password">
          </div>
          <div class="mt-3 d-flex justify-content-center">
            <button type="submit" id="masuk" name="masuk" class="btn btn-success">Masuk</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<script src="/adminSidesa/scripts/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
</body>
</html>