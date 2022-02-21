<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Touch5</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg navbar-light bg-light font-family: 'Poppins'"
    >
      <div class="container ps-0 pe-0">
        <div class="con">
          <a class="navbar-brand" href="#">Navbar</a>
        </div>

        <div class="con">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Link</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- enquiry form -->
    <div class="container">
      <div class="d-flex justify-content-center">
        <span style="font-size: xx-large; font-family: poppins"
          >Enquiry Form</span
        >
      </div>

      <div class="row">
        <div class="col-md-6 col-12 ps-0 pe-0">
          <div class="data">
            <form class="my-4">
              <div class="mb-3">
                <input
                  type="email"
                  class="form-control border-0 border-dark border-bottom"
                  placeholder="full name"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  name="full_name"
                />
              </div>
              <div class="mb-3">
                <input
                  type="password"
                  class="form-control border-0 border-dark border-bottom"
                  placeholder="phone number"
                  id="exampleInputPassword1"
                  name="phone"
                />
              </div>
              <div class="mb-3">
                <input
                  type="password"
                  class="form-control border-0 border-dark border-bottom"
                  placeholder="Email"
                  id="exampleInputPassword1"
                  name="email"
                />
              </div>
              <div class="mb-3">
                <input
                  type="Text"
                  class="form-control border-0 border-dark border-bottom"
                  placeholder="Your Enquiry"
                  id="exampleInputPassword1"
                  name="enquiry"
                />
              </div>

              <button type="submit" class="btn btn-outline-secondary">
                Submit
              </button>
            </form>
            
            
            <?php
              $full_name=$_POST["full_name"];
              $phone=$_POST["phone"];
              $email=$_POST["email"];
              $enquiry=$_POST["enquiry"];

              $servername = "localhost";
              $username = "username";
              $password = "password";

              $conn = new mysqli($servername, $username, $password);
              $cmd="INSERT INTO `details` ( `Name`, `Phone no`, `Email`, `Enquiry`) VALUES ('$full_name', '$phone', '$email', '$enquiry')";

              if(!$cmd == TRUE){
                echo "alert('Fail to add')";
              }
            ?>

          </div>
        </div>
        <div class="col-md-6 col-12 ps-0 pe-0">
          <div class="img">
            <img src="img/form.jpg" style="width: 100%" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- TEXT -->
    <p class="text-center fs-2 font-family: 'Poppins'">
      Your any kind of enquiry or questions or request will be resolved or will
      be accepted very soon
    </p>
    <!-- QUESTION -->
    <p class="text-center fs-1 font-family: 'Poppins'">
      Was the above form helpful to you ?
    </p>
    <div class="btn" style="margin-left: 30%">
      <button type="Yes" class="btn btn-outline-secondary">Yes</button>
      <button type="No" class="btn btn-outline-secondary">No</button>
    </div>
    <!-- FOOTER -->

    <footer
      class="con font-family: 'Poppins'"
      style="
        background-color: rgba(45, 209, 209, 0.822);
        margin-top: 3%;
        margin-bottom: 3%;
      "
    >
      <p class="text-center fs-1" style="padding-top: 1%">
        Plan your travel now and get in touch with us.
      </p>
      <p class="text-center fs-6">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla,
        perspiciatis.
      </p>
      <button
        type="button"
        class="btn btn-outline-secondary rounded-pill d-grid gap-2 mx-auto"
        style="margin-bottom: 3%"
      >
        Plan Your Trip
      </button>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
