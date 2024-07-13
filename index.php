<?php
session_start();
if (!isset($_SESSION['user'])) {
  return header('Location: https://rizkym.amisbudi.cloud/web-porto/si-admin/views/Login/');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- my css -->
  <link rel="stylesheet" href="style.css" />
  <title>My Portofolio | Rizky Maulana</title>
  <link href="img/user.png" rel="icon" />
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
</head>

<body id="home">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: #8a2be2">
    <div class="container">
      <a class="navbar-brand fw-bold" style="font-family: 'Roboto', sans-serif" href="index.php">My Portofolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="navbar-nav ms-auto nav-kanan fw-bold">
            <a class="nav-link text-white" href="https://rizkym.amisbudi.cloud/web-porto/si-admin/api/auth/logout.php">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <!-- Jumbotron -->
  <section class="jumbotron text-center" style="background-color: #e6d5f5;">
    <div class="container" data-aos="zoom-in-up">
      <img src="img/saya_sendiri.jpg" alt="rizky" width="200" class="rounded-circle img-thumbnail" />
      <h3 class="mt-3">I'm</h3>
      <h1 id="full_name" class="display-4"></h1>
      <!-- tentukan ID dengan nama  -->
      <p id="job" class="lead"></p>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,160L40,170.7C80,181,160,203,240,218.7C320,235,400,245,480,240C560,235,640,213,720,181.3C800,149,880,107,960,112C1040,117,1120,171,1200,186.7C1280,203,1360,181,1400,170.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>
  </section>
  <!-- End Jumbotron -->
  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <img src="img/tentang.svg" class="img-fluid d-none d-md-block" data-aos="fade-right" />
        </div>
        <div class="col-lg-6 col-sm-12 d-none d-lg-block">
          <div class="text-about" data-aos="fade-left">
            <h1 class="fw-bold">About Me</h1>
            <p class="mt-3">
              Perkenalkan Saya Rizky Maulana Saya lahir di Bekasi pada 11
              September 2003. Tempat tinggal Saya di Link. Jelat kota Banjar
              Jawa Barat. Sekarang Saya kuliah di Universitas Galuh Ciamis
              jurusan Sistem Informasi dan selama di jurusan Sistem Informasi
              Saya mampu menguasai dasar pembuatan website, selain belajar
              tentang website di Sistem Informasi juga mempelajari cara
              pembuatan aplikasi desktop dan bahasa pemograman yang sudah
              dipelajari adalah HTML, CSS, PHP, dan LARAVEL.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Skills Progress Bars -->
    <div class="container mt-5">
      <h2 class="text text-center mb-4">Kemampuan Yang Di Kuasai</h2>
      <div class="row justify-content-center">
        <div class="col-md-6" id="skills-column-1">
          <!-- Skills Progress Bars Column 1 -->
        </div>
        <div class="col-md-6" id="skills-column-2">
          <!-- Skills Progress Bars Column 2 -->
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#e6d5f5" fill-opacity="1" d="M0,160L48,181.3C96,203,192,245,288,266.7C384,288,480,288,576,245.3C672,203,768,117,864,106.7C960,96,1056,160,1152,197.3C1248,235,1344,245,1392,250.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </section>
  <!-- End About -->

  <!-- Projects -->
  <section id="projects">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h1 class="fw-bold">My Projects</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
          <div class="card" data-aos="flip-up">
            <img src="img/projects/ujikom.jpg" class="card-img-top" alt="projects1" />
            <div class="card-body">
              <p class="card-text">Website Pemesanan Hotel</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" data-aos="flip-up">
            <img src="img/projects/2.jpg" class="card-img-top" alt="projects2" />
            <div class="card-body">
              <p class="card-text">Form Login</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" data-aos="flip-up">
            <img src="img/projects/3.jpg" class="card-img-top" alt="projects3" />
            <div class="card-body">
              <p class="card-text">Website Resep Makanan dan Minuman</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" data-aos="flip-up">
            <img src="img/projects/1.jpg" class="card-img-top" alt="projects4" />
            <div class="card-body">
              <p class="card-text">Aplikasi Kasir Sederhana</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,32L48,58.7C96,85,192,139,288,165.3C384,192,480,192,576,165.3C672,139,768,85,864,96C960,107,1056,181,1152,181.3C1248,181,1344,107,1392,69.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </section>
  <!-- End Projects -->

  <!-- tabel -->
  <section id="skills">
    <div class="container">
      <div id="message"></div>
      <h1 class="mt-4 mb-4 text-center text">SKILLS CRUD</h1>
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col col-sm-9">SKILLS</div>
            <div class="col col-sm-3">
              <button type="button" id="add_data" class="btn btn-primary btn-sm float-end"><i class="bi bi-plus-lg"></i>ADD</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered" id="sample_data">
              <thead>
                <tr>
                  <th>User Id</th>
                  <th>Skill Name</th>
                  <th>Rating</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="modal" tabindex="-1" id="action_modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="post" id="sample_form">
              <div class="modal-header">
                <h5 class="modal-title" id="dynamic_modal_title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label class="form-label">User Id</label>
                  <input type="text" name="user_id" id="user_id" class="form-control" />
                  <span id="user_id_error" class="text-danger"></span>
                </div>
                <div class="mb-3">
                  <label class="form-label">Skill Name</label>
                  <input type="skill_name" name="skill_name" id="skill_name" class="form-control" />
                  <span id="skill_name_error" class="text-danger"></span>
                </div>
                <div class="mb-3">
                  <label class="form-label">Rating</label>
                  <input type="rating" name="rating" id="rating" class="form-control" />
                  <span id="rating_error" class="text-danger"></span>
                </div>
                <div class="mb-3">
                  <label class="form-label">Description</label>
                  <input type="text" name="description" id="description" class="form-control" />
                  <span id="description_error" class="text-danger"></span>
                </div>
              </div>
              <div class="modal-footer">
                <input type="hidden" name="id" id="id" />
                <input type="hidden" name="action" id="action" value="Add" />
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                  Close
                </button>
                <button type="submit" class="btn btn-primary" id="action_button">
                  Add
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end tabel -->
  <!-- Contact -->
  <section id="contact">
    <div class="container">
      <div class="row text-center my-4 py-3">
        <div class="col">
          <h1 class="fw-bold">Contact Me</h1>
        </div>
      </div>
      <div class="row justify-content-center mb-3">
        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" />
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" rows="3"></textarea>
            </div>
            <button type="submit" class="btn text-white" style="background-color: #8a2be2">
              Kirim
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact -->
  <!-- Footer -->
  <footer class="p-0 mt-5" style="margin-bottom: -20px">
    <div class="footer-bawah" style="background-color: #8a2be2">
      <p class="link p-3 text-center">
        © Copyright 2024
        <a class="text-white text-decoration-none" href="https://www.instagram.com/_rizkym1_/">Rizky Maulana</a>
      </p>
    </div>
  </footer>
  <!-- End Footer -->

  <script>
    $(document).ready(function() {
      showAll();

      $("#add_data").click(function() {
        $("#dynamic_modal_title").text("Add Biodata Skill");
        $("#sample_form")[0].reset();
        $("#action").val("Add");
        $("#action_button").text("Add");
        $(".text-danger").text("");
        $("#action_modal").modal("show");
      });

      $("#sample_form").on("submit", function(event) {
        event.preventDefault();
        if ($("#action").val() == "Add") {
          var formData = {
            user_id: $("#user_id").val(),
            skill_name: $("#skill_name").val(),
            rating: $("#rating").val(),
            description: $("#description").val(),
          };

          $.ajax({
            url: "https://rizkym.amisbudi.cloud/web-porto/si-admin/api/skills/create.php",
            method: "POST",
            data: JSON.stringify(formData),
            success: function(data) {
              $("#action_button").attr("disabled", false);
              $("#message").html(
                '<div class="alert alert-success">' + data.message + "</div>"
              );
              $("#action_modal").modal("hide");
              $("#sample_data").DataTable().destroy();
              showAll();
            },
            error: function(err) {
              console.log(err);
            },
          });
        } else if ($("#action").val() == "Update") {
          var formData = {
            id: $("#id").val(),
            user_id: $("#user_id").val(),
            skill_name: $("#skill_name").val(),
            rating: $("#rating").val(),
            description: $("#description").val(),
          };

          $.ajax({
            url: "https://rizkym.amisbudi.cloud/web-porto/si-admin/api/skills/update.php",
            method: "PUT",
            data: JSON.stringify(formData),
            success: function(data) {
              $("#action_button").attr("disabled", false);
              $("#message").html(
                '<div class="alert alert-success">' + data.message + "</div>"
              );
              $("#action_modal").modal("hide");
              $("#sample_data").DataTable().destroy();
              showAll();
            },
            error: function(err) {
              console.log(err);
            },
          });
        }
      });
    });

    function showAll() {
      $.ajax({
        type: "GET",
        contentType: "application/json",
        url: "https://rizkym.amisbudi.cloud/web-porto/si-admin/api/skills/read.php",
        success: function(response) {
          // console.log(response);
          var json = response.body;
          var dataSet = [];
          for (var i = 0; i < json.length; i++) {
            var sub_array = {
              user_id: json[i].user_id,
              skill_name: json[i].skill_name,
              rating: json[i].rating,
              description: json[i].description,
              action: '<button onclick="showOne(' +
                json[i].id +
                ')" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i>Edit</button>' +
                '<button onclick="deleteOne(' +
                json[i].id +
                ')" class="btn btn-sm btn-danger mx-2"> <i class="bi bi-trash3"></i>Delete</button>',
            };
            dataSet.push(sub_array);
          }
          $("#sample_data").DataTable({
            data: dataSet,
            columns: [{
                data: "user_id",
              },
              {
                data: "skill_name",
              },
              {
                data: "rating",
              },
              {
                data: "description",
              },
              {
                data: "action",
              },
            ],
          });
        },
        error: function(err) {
          console.log(err);
        },
      });
    }

    function showOne(id) {
      $("#dynamic_modal_title").text("Edit Biodata Skill");
      $("#sample_form")[0].reset();
      $("#action").val("Update");
      $("#action_button").text("Update");
      $(".text-danger").text("");
      $("#action_modal").modal("show");

      $.ajax({
        type: "GET",
        contentType: "application/json",
        url: "https://rizkym.amisbudi.cloud/web-porto/si-admin/api/skills/read.php?id=" + id,
        success: function(response) {
          $("#id").val(response.id);
          $("#user_id").val(response.user_id);
          $("#skill_name").val(response.skill_name);
          $("#rating").val(response.rating);
          $("#description").val(response.description);
        },
        error: function(err) {
          console.log(err);
        },
      });
    }

    function deleteOne(id) {
      var konfirmasiUser = confirm("Yakin untuk hapus data ?");
      if (konfirmasiUser) {
        $.ajax({
          url: "https://rizkym.amisbudi.cloud/web-porto/si-admin/api/skills/delete.php",
          method: "DELETE",
          data: JSON.stringify({
            id: id,
          }),
          success: function(data) {
            $("#action_button").attr("disabled", false);
            $("#message").html('<div class="alert alert-success">' + data + "</div>");
            $("#action_modal").modal("hide");
            $("#sample_data").DataTable().destroy();
            showAll();
          },
          error: function(err) {
            console.log(err);
            $("#message").html('<div class="alert alert-danger">' + err.responseJSON + '</div>');
          },
        });
      }
    }


    $(document).ready(function() {
      // Fungsi untuk merubah full_name, job sesuai id serta mengambil user_id
      getUserIDAndShowAll();

      function getUserIDAndShowAll() {
        $.ajax({
          type: "GET",
          contentType: "application/json",
          url: "https://rizkym.amisbudi.cloud/web-porto/si-admin/api/getUserID.php",
          success: function(response) {
            if (response.user_id) {
              const userID = response.user_id;
              showAll(userID);
              fetchSkills(userID);
            } else {
              console.log(response.error);
            }
          },
          error: function(err) {
            console.log("Error fetching user ID", err);
          }
        });
      }

      function showAll(userID) {
        $.ajax({
          type: "GET",
          contentType: "application/json",
          url: "https://rizkym.amisbudi.cloud/web-porto/si-admin/api/users/read.php?id=" + userID,
          success: function(response) {
            $("#full_name").text(response.full_name);
            $("#job").text(response.job + " | " + response.expected_position);

          },
          error: function(err) {
            console.log("Error fetching user data", err);
          }
        });
      }

      // Fungsi untuk mengambil data dan menampilkan skills di progress bars sesuai user_id
      function fetchSkills(userID) {
        $.ajax({
          type: "GET",
          url: "https://rizkym.amisbudi.cloud/web-porto/si-admin/api/skills/read.php",
          success: function(response) {
            const skills = response.body;
            // Filter skills sesuai dengan user_id
            const filteredSkills = skills.filter(skill => skill.user_id === userID);
            let skillsHtmlColumn1 = '';
            let skillsHtmlColumn2 = '';
            filteredSkills.forEach((skill, index) => {
              const skillHtml = `
                        <div class="mb-3">
                            <h6>${skill.skill_name}</h6>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: ${skill.rating}%" aria-valuenow="${skill.rating}" aria-valuemin="0" aria-valuemax="100">${skill.rating}%</div>
                            </div>
                        </div>`;
              if (index % 2 === 0) {
                skillsHtmlColumn1 += skillHtml;
              } else {
                skillsHtmlColumn2 += skillHtml;
              }
            });
            $('#skills-column-1').html(skillsHtmlColumn1);
            $('#skills-column-2').html(skillsHtmlColumn2);
          },
          error: function(err) {
            console.error('Error fetching skills:', err);
          }
        });
      }
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
    });
  </script>
</body>

</html>