<?php
session_start();
// Jika tidak bisa login maka balik ke login.php
// jika masuk ke halaman ini melalui url, maka langsung menuju halaman login
if (!isset($_SESSION['login'])) {
    header('location:login.php');
    exit;
}

// Memanggil atau membutuhkan file function.php
require 'function.php';

// Menampilkan semua data dari table siswa berdasarkan id secara Descending
$siswa = query("SELECT * FROM siswa ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    
    <link rel="stylesheet" href="style.css"/>
  </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
        <div class="container">
               <a class="navbar-brand" href="#">Beranda</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " href="#layanan">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#galeri">Galeri</a>
              </li>    
              <li class="nav-item">
                <a class="nav-link" href="#tentang">Tentang</a>
              </li>   
              <li class="nav-item">
                <a class="nav-link" href="#profile">Profile</a>
              </li>   
              <li class="nav-item">
                <a class="nav-link" href="#kontak">Kontak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#admin">Admin</a>
              </li>
              </li>
             <li class="nav-item">
             <a class="nav-link" href="#about">About</a>
             </li>
            <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
           </li>
          </div>
        </div>
      </nav>
      <div class="container-fluid banner">
        <div class="container text-center">
          <h4 class = "display-6">Selamat Datang di Website Kami</h4>
          <h3 class="display-1"><img src ="https://jobsph-prod-public.s3.ap-southeast-1.amazonaws.com/ASSETS/GLOBAL/GetJobsColoredLogoResized.png"> </h3>
          <a href="#layanan">
            <button type="button" class="btn btn-danger btn-lg"> Cek Layanan</button>
          </a>
        </div>
      </div>
      <div class="countainer-fluid Layanan pt-5 pb-5 ">
        <div class="countainer text-center">
          <h2 class="display-3" id="layanan"> Layanan </h2>
          <p>Penjelasan dasar yang harus Anda ketahui!

          </p>
          <div class="row pt-4">
            <div class="col-md-4">
              <span class="lingkaran"><i class="fas fa-code fa-5x" ></i></span>
              
              <h3 class="mt-3">Programming</h3>
              <p>Programming adalah proses pembuatan program komputer, mulai dari mendesain, mengimplementasikan, menganalisis, hingga menguji program. Program yang dibuat dapat berupa aplikasi, website, software, dan lain-lain

              </p>

            </div>

            <div class="col-md-4">
              <span class="lingkaran"><i class="fa fa-paint-brush fa-5x" aria-hidden="true"></i></span>
              
              <h3 class="mt-3">Design</h3>
              <p>Desain adalah proses perencanaan, pembuatan, dan penyusunan elemen-elemen untuk menciptakan sesuatu yang fungsional, estetis, dan komunikatif. Desain merupakan kegiatan kreatif yang melibatkan penataan garis, bentuk, ukuran, warna, dan nilai suatu objek berdasarkan prinsip-prinsip tertentu.

              </p>

            </div>

            <div class="col-md-4">
              <span class="lingkaran"><i class="fa fa-recycle fa-5x" aria-hidden="true"></i></span>
              
              <h3 class="mt-3">NetWork</h3>
              <p>Network atau jaringan adalah kumpulan perangkat yang terhubung untuk berbagi data dan sumber daya. Perangkat yang terhubung dalam jaringan bisa berupa komputer, tablet, telepon pintar, printer, server, dan lain-lain.

              </p>

            </div>
          </div>
        </div>
      </div>
      <div class="countainer-fluid pt-5 pb-5 bg-light">
        <div class="countainer text-center">

          <h2 class="display-3 " id="galeri">Galeri</h2>
          <p>Jobdesk dari masing-masing bagian</p>
        <div class="row pt-4 gx-4 gy-4 ">
          <div class="col-md-4">
            <div class="card crop-img">
              <img src="https://pasarind.id/assets/media/6528c2fc5cfae.jpg"
        
              height="200"
              
              />
              <div class="card-body">
                <h5 class="card-title">Programmer</h5>
                <p class="card-text">Programmer adalah seseorang yang bertugas untuk membuat program atau perangkat lunak dengan menggunakan bahasa pemrograman. Programmer harus menguasai bahasa pemrograman seperti Java, Python, Javascript, PHP, CSS, SQL, HTML, XML, dan sebagainya.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card crop-img">
              <img src="https://www.rmcad.edu/wp-content/uploads/2024/04/shutterstock_434383288.jpg"
              
              height="200"
              
              />
              <div class="card-body">
                <h5 class="card-title">Designer</h5>
                <p class="card-text">Desainer adalah orang yang merencanakan bentuk atau struktur sesuatu sebelum dibuat, dengan menyiapkan gambar atau rencana. Desainer dapat menciptakan objek, produk, proses, hukum, permainan, grafik, layanan, atau pengalaman yang berwujud atau tidak berwujud.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card crop-img">
              <img src="https://st3.depositphotos.com/2572561/16361/i/450/depositphotos_163612058-stock-photo-male-it-specialist-holds-laptop.jpg"
             
              height="200"
              
              />
              <div class="card-body">
                <h5 class="card-title">Networking</h5>
                <p class="card-text">Networking adalah proses membangun dan memelihara hubungan dengan orang lain, terutama dalam konteks profesional.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="container-fluid banner">
        <div class="container text-center">
        <h2 class="display-3 text-center" id="tentang">Tentang</h2>
        <p class="text-center">Latar belakang GetJobs</p>
        <p>Pencarian pekerjaan di Indonesia telah bergeser dari media konvensional seperti koran dan selebaran ke platform online. Namun, penelitian sebelumnya menunjukkan kekurangan signifikan pada aplikasi pencarian kerja yang ada di Indonesia. Oleh karena itu, penelitian ini bertujuan untuk mengembangkan aplikasi pencarian kerja baru dengan fitur save job, relation, dan create job/post. Fitur save job memungkinkan pengguna menyimpan pekerjaan menarik dan mengembangkan jaringan pekerjaan. Fitur relation membantu menciptakan hubungan yang lebih baik antara perusahaan dan pencari kerja. Sedangkan fitur create job/post memungkinkan perusahaan membuat postingan pekerjaan yang dapat dibagikan ke platform lainnya. Sebanyak 59 responden mengisi kuisioner dengan metode System Usability Scale (SUS) untuk menguji kelayakan prototipe aplikasi GetJob. Hasil menunjukkan nilai rata-rata sebesar 75,4 yang termasuk dalam kategori nilai B dengan percentile range ke-60. Pengembangan dan evaluasi lebih lanjut perlu dilakukan untuk meningkatkan pengalaman pengguna, memperbaiki kelemahan, serta menambah fitur-fitur baru pada aplikasi GetJob. Dengan pengembangan yang tepat, aplikasi GetJob diharapkan dapat membantu pencari kerja di Indonesia untuk lebih mudah menemukan pekerjaan yang sesuai dengan kualifikasi dan keinginan mereka.</p>
    
        </div>
      </div>
    </div>
    <div class="countainer-fluif pt-5 pb-5 bg-light">
      <div class="countainer text-center">
         <h2 class="display-3" id="profile">Profile</h2>
           <p>Profile Manager dari masing-masing bagian</p>
            <div class="row pt-4 gx-4 gy-4">
               <div class="col-md-4 text-center profile ">
                <img src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/810/profiles/19338/profileImage/profile-square-extra-small.png"
                  class="rounded-circle mb-3"
                   />
                   <h4>John Smith S.Kom</h4>
                    <p>Programmer</p>
                    <p>
                      <a href="" class="social">
                        <i class="fab fa-twitter"></i></a>
                        <a href="" class="social">
                          <i class="fab fa-facebook-f"></i></a>
                          <a href="" class="social">
                            <i class="fab fa-linkedin-in"></i></a>
                    </p>
                    </div>
                    <div class="col-md-4 text-center profile ">
                      <img src="https://www.kingrosales.com/wp-content/uploads/2018/05/king-rosales-profile-photo-square.jpg"
                        class="rounded-circle mb-3"
                         />
                         <h4>Fahmi Fakhtur Irawan S.Ars</h4>
                          <p>Designer</p>
                          <p>
                            <a href="" class="social">
                              <i class="fab fa-twitter"></i></a>
                              <a href="" class="social">
                                <i class="fab fa-facebook-f"></i></a>
                                <a href="" class="social">
                                  <i class="fab fa-linkedin-in"></i></a>
                          </p>
                          </div>
                          <div class="col-md-4 text-center profile ">
                            <img src="https://www.famousbirthdays.com/faces/ronaldo-cristiano-image.jpg"
                              class="rounded-circle mb-3"
                               />
                               <h4>C.Ronaldo M.M</h4>
                                <p>Networking</p>
                                <p>
                                  <a href="" class="social">
                                    <i class="fab fa-twitter"></i></a>
                                    <a href="" class="social">
                                      <i class="fab fa-facebook-f"></i></a>
                                      <a href="" class="social">
                                        <i class="fab fa-linkedin-in"></i></a>
                                </p>
                                </div>
                    </div>
                  </div>
                </div>
      <div class="countainer-fluid pt-5 pb-5">
        <div class="countainer">
          <h2 class="display-3 text-center" id="kontak">Kontak</h2>
          <p class="text-center">Silahkan Hubungi Kami</p>
          <h1>Kirim Pesan</h1>
        <form action="https://formspree.io/f/xbljvgav" method="POST" target="_blank">
            <form id="contactForm" action="https://formspree.io/f/xbljvgav" method="POST">
    <input class="form-control form-control-lg mb-2" type="text" name="name" placeholder="Nama Anda" required>
    <input class="form-control form-control-lg mb-2" type="email" name="email" placeholder="Email Anda" required>
    <textarea class="form-control form-control-lg" name="message" placeholder="Tulis pesan Anda di sini..." rows="5" required></textarea>
          <div class="col-md-6">
           <div class="col-md-3 center">
          <button type="submit" class="btn btn-danger btn-lg">
            Kirim Pesan </button>
        </div>
        </div>
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</form>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Bootstrap Icons -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
     <!-- Data Tables -->
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
     <!-- Font Google -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
     <!-- animasi Css Aos -->
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     <!--My CSS -->
     <link rel="stylesheet" href="css/style.css">

     <title>Home</title>
</head>

<body background="img/bg/bck.png">
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
     <div class="countainer">
     <h2 class="display-3 text-center" id="admin">Admin</h2>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="admin">
                    <ul class="navbar-nav ms-auto">
                                                
                    </ul>
               </div>
          </div>
     </nav>
     <!-- Close Navbar -->

     <!-- Container -->
     <div class="container">
          <div class="row my-2">
               <div class="col-md">
                    <h3 class="text-center fw-bold text-uppercase text-light data_siswa"></h3>
                    <hr>
               </div>
          </div>
          <div class="row my-2">
               <div class="col-md">
                    <a href="addData.php" class="btn btn-primary" data-aos="fade-right" data-aos-duration="800"
                         data-aos-delay="1200"><i class="bi bi-person-plus-fill"></i>Tambah Data</a>
                    <a href="export.php" target="_blank" class="btn btn-success ms-1" data-aos="fade-left"
                         data-aos-duration="1000" data-aos-delay="1600"><i
                              class="bi bi-file-earmark-spreadsheet-fill"></i>Ekspor ke Excel</a>
               </div>
          </div>
          <div class="row my-3" data-aos="fade" data-aos-duration="1000" data-aos-delay="2000">
               <div class="col-md">
                    <table id="data" class="table table-striped table-responsive table-hover text-center"
                         style="width:100%">
                         <thead class="table-dark">
                              <tr>
                                   <th>No.</th>
                                   <th>Nama</th>
                                   <th>Jenis Kelamin</th>
                                   <th>Umur</th>
                                   <th>Bidang</th>
                                   <th>Aksi</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php $no = 1; ?>
                              <?php foreach ($siswa as $row) : ?>
                              <tr class="table-secondary text-dark">
                                   <td><?= $no++; ?></td>
                                   <td><?= $row['nama']; ?></td>
                                   <td><?= $row['jekel']; ?></td>
                                   <?php
                                $now = time();
                                $timeTahun = strtotime($row['tgl_Lahir']);
                                $setahun = 31536000;
                                $hitung = ($now - $timeTahun) / $setahun;
                                ?>
                                   <td><?= floor($hitung); ?> Tahun</td>
                                   <td><?= $row['bidang']; ?></td>
                                   <td>
                                        <button class="btn btn-success btn-sm text-white detail"
                                             data-id="<?= $row['id']; ?>" style="font-weight: 600;"><i
                                                  class="bi bi-info-circle-fill" data-aos="fade-right"
                                                  data-aos-duration="800"></i>Detail</button> |

                                        <a href="ubah.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm"
                                             style="font-weight: 600;"><i class="bi bi-pencil-square"></i>Ubah</a> |

                                        <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm"
                                             style="font-weight: 600;"
                                             onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $row['nama']; ?> ?');"><i
                                                  class="bi bi-trash-fill"></i>Hapus</a>
                                   </td>
                              </tr>
                              <?php endforeach; ?>
                         </tbody>
                    </table>
               </div>
          </div>
     </div>
     <!-- Close Container -->

     <!-- Modal Detail Data -->
     <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="detail" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable modal-lg">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title fw-bold text-uppercase" id="detail"></h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center" id="detail-siswa">
                    </div>
               </div>
          </div>
     </div>
     <!-- Close Modal Detail Data -->

     <!-- Footer -->
     <div class="container-fluid">
          <div class="row bg-dark text-white text-center">
               <div class="col my-2" id="about">
                    <h4 class="fw-bold text-uppercase">About</h4>
                    <br><br><br>
                    <p>
                         @ridhowebprogramming-STI202303434
                    
                    </p>
               </div>
          </div>
     </div>

     <!-- Close Footer -->

     <!-- Bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
     </script>

     <!-- Data Tables -->
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

     <script>
     $(document).ready(function() {
          // Fungsi Table
          $('#data').DataTable();
          // Fungsi Table

          // Fungsi Detail
          $('.detail').click(function() {
               var dataSiswa = $(this).attr("data-id");
               $.ajax({
                    url: "detail.php",
                    method: "post",
                    data: {
                         dataSiswa,
                         dataSiswa
                    },
                    success: function(data) {
                         $('#detail-siswa').html(data);
                         $('#detail').modal("show");
                    }
               });
          });
          // Fungsi Detail
     });
     </script>

     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script>
     AOS.init({
          once: true,

     });
     </script>

     <!-- animasi  gsap-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"> </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/TextPlugin.min.js"></script>
     <script>
     gsap.registerPlugin(TextPlugin);
     gsap.to('.data_siswa', {
          duration: 1,
          delay: 0.6,
          text: 'Data Admin :)'
     })
     gsap.from('.navbar', {
          duration: 1,
          y: '-100%',
          opacity: 0,
          ease: 'bounce',
     })
     </script>
</body>

</html>