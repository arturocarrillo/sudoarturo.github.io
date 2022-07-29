<!doctype html>
<html lang="en">

<head>
  <!-- Requi meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Fonts CSS -->
  <link
    href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;400&family=Roboto+Mono:wght@200;400;500&display=swap"
    rel="stylesheet">
  <!-- Styles -->
  <link rel="stylesheet" href="./public/css/main.css">
  <!-- Icons CSS & JS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/solid.min.css"
    integrity="sha512-EvFBzDO3WBynQTyPJI+wLCiV0DFXzOazn6aoy/bGjuIhGCZFh8ObhV/nVgDgL0HZYC34D89REh6DOfeJEWMwgg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js"
    integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>Modo Nocturno</title>
</head>

<body>

  <div class="col-xl-10 col-lg-11 col-md-12 col-md-12 p-2 mt-4 mb-4 mx-auto">
    <nav class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex flex-wrap justify-content-between p-2">
      <div class="col-xl-3 col-lg-3 col-md-2 col-sm-2 d-flex flex-wrap links">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex flex-wrap justify-content-start">
          <a class="logo" href="#">sudoarturo</a>
        </div>
      </div>
      <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 d-flex flex-wrap links">
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 d-flex flex-wrap justify-content-start">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex flex-wrap justify-content-between">
            <a class="btn-link" href="">About</a>
            <a class="btn-link" href="">Services</a>
            <a class="btn-link" href="">Articles</a>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 d-flex flex-wrap justify-content-end">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
            <button class="switch" id="switch">
              <span><i class="fa-solid fa-sun"></i></span>
              <span><i class="fas fa-moon"></i></span>
            </button>
          </div>
        </div>
      </div>
    </nav>

    <section class="col-xl-10 col-lg-11 col-md-12 col-sm-12 p-2 mt-4 mb-4 mx-auto">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex flex-wrap mt-2 mb-2 p-2">
        <div class="col-xl-10 col-lg-11 col-md-12 col-sm-12 d-flex flex-wrap mx-auto p-2 darkMode">
          <h2 class="text-lg text-uppercase text-justity tfw-bold font-f-roboto text-color-1">
            About
          </h2>
          <p class="text-sm text-justify fw-light lh-base font-f-mukta text-color-2">Lorem ipsum, dolor sit amet
            consectetur
            adipisicing elit. Corrupti minima id ex ullam porro
            temporibus dolor error quibusdam tempora saepe. Veniam, atque. Suscipit quos deleniti explicabo fugit
            adipisci possimus rem animi incidunt, sit ipsum illum odit unde, praesentium, sapiente saepe quo neque non.
            Totam quae, delectus repudiandae beatae corrupti error, molestias ipsam aspernatur voluptatum obcaecati amet
            maiores, sint magni fugit.</p>
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex flex-wrap justify-content-between p-2">
            <a href="" class="btn-social rounded mr-3 ml-2 mt-2 mb-2 p-2"><i class="fa-brands fa-github"></i></a>
            <a href="" class="btn-social rounded mr-3 ml-2 mt-2 mb-2 p-2"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="" class="btn-social rounded mr-3 ml-2 mt-2 mb-2 p-2"><i class="fa-brands fa-instagram"></i></a>
            <a href="" class="btn-social rounded mr-3 ml-2 mt-2 mb-2 p-2"><i class="fa-brands fa-twitter"></i></a>
          </div>
        </div>
      </div>
    </section>

    <section class="col-xl-10 col-lg-11 col-md-12 col-sm-12 p-2 mt-4 mb-4 mx-auto">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex flex-wrap mt-2 mb-2 p-2">
        <div class="col-xl-10 col-lg-11 col-md-12 col-sm-12 d-flex flex-wrap mx-auto p-2 darkMode">
          <h2 class="text-lg text-uppercase text-justity tfw-bold font-f-roboto text-color-1">
            Services
          </h2>
          <p class="text-sm text-justify fw-light lh-base font-f-mukta text-color-2">Lorem ipsum, dolor sit amet
            consectetur
            adipisicing elit. Corrupti minima id ex ullam porro
            temporibus dolor error quibusdam tempora saepe. Veniam, atque. Suscipit quos deleniti explicabo fugit
            adipisci possimus rem animi incidunt, sit ipsum illum odit unde, praesentium, sapiente saepe quo neque non.
            Totam quae, delectus repudiandae beatae corrupti error, molestias ipsam aspernatur voluptatum obcaecati amet
            maiores, sint magni fugit.</p>
        </div>
        <div
          class="col-xl-10 col-lg-11 col-md-12 col-sm-12 d-flex flex-wrap justify-content-between mx-auto p-2 darkMode">
          <div class="col-xl-4 col-lg-4 col-md-8 col-sm-8 d-flex flex-wrap justify-content-between mx-auto p-2">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-1">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex flex-wrap justify-content-center p-1">
                <span class="icon-service text-xxl">
                  <i class="fa-solid fa-server"></i>
                </span>
              </div>
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex flex-wrap justify-content-center p-1">
                <h2 class="text-sm text-color-1 text-center fw-bold font-f-roboto mt-3 mb-3">Network & Servers</h2>
                <p class="text-xs text-color-2 text-justify fw-normal">Configuration and design of networks, deployment
                  of physical
                  and virtual servers</p>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-8 col-sm-8 d-flex flex-wrap justify-content-between mx-auto p-2">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-1">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex flex-wrap justify-content-center p-1">
                <span class="icon-service text-xxl">
                  <i class="fa-solid fa-code"></i>
                </span>
              </div>
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex flex-wrap justify-content-center p-1">
                <h2 class="text-sm text-color-1 text-center fw-bold font-f-roboto mt-3 mb-3">Web developemnt & Web
                  design</h2>
                <p class="text-xs text-color-2 text-justify fw-normal">Developing sites from scratch, it is a pleasure
                  to help you turn your idea into a digital reality.</p>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-8 col-sm-8 d-flex flex-wrap justify-content-between mx-auto p-2">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-1">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex flex-wrap justify-content-center p-1">
                <span class="icon-service text-xxl">
                  <i class="fa-solid fa-laptop-medical"></i>
                </span>
              </div>
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex flex-wrap justify-content-center p-1">
                <h2 class="text-sm text-color-1 text-center fw-bold font-f-roboto mt-3 mb-3">Maintence & Upates</h2>
                <p class="text-xs text-color-2 text-justify fw-normal">If you have problems with your equipment, I help
                  you find and economical and safe solution.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="col-xl-10 col-lg-11 col-md-12 col-sm-12 p-2 mt-4 mb-4 mx-auto">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex flex-wrap mt-2 mb-2 p-2 ">
        <div class="col-xl-10 col-lg-11 col-md-12 col-sm-12 d-flex flex-wrap mx-auto p-2 darkMode">
          <h2 class="text-lg text-uppercase text-justity tfw-bold font-f-roboto text-color-1">
            Articles
          </h2>
          <p class="text-sm text-justify fw-light lh-base font-f-mukta text-color-2">Lorem ipsum, dolor sit amet
            consectetur
            adipisicing elit. Corrupti minima id ex ullam porro
            temporibus dolor error quibusdam tempora saepe. Veniam, atque. Suscipit quos deleniti explicabo fugit
            adipisci possimus rem animi incidunt, sit ipsum illum odit unde, praesentium, sapiente saepe quo neque non.
            Totam quae, delectus repudiandae beatae corrupti error, molestias ipsam aspernatur voluptatum obcaecati amet
            maiores, sint magni fugit.</p>
          <div class="col-xl-6 col-lg-6 col-md-10 col-sm-12 d-flex flex-wrap justify-content-start p-2 ">
            <a href="" class="btn-read rounded mr-3 ml-2 mt-2 mb-2 p-2">Read articles &nbsp;<i
                class="fa-brands fa-readme"></i></a>
          </div>
        </div>
      </div>
    </section>

    <section class="col-xl-10 col-lg-11 col-md-12 col-sm-12 p-2 mt-4 mb-4 mx-auto bg-darklight contact">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex flex-wrap mt-2 mb-2 p-2">
        <div class="col-xl-10 col-lg-11 col-md-12 col-sm-12 d-flex flex-wrap mx-auto p-2">
          <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 d-flex flex-wrap darkMode mx-auto p-2">
            <h2 class="text-xl text-uppercase text-justity tfw-bold font-f-roboto text-white">
              Let's work together on your next project
            </h2>
            <p class="text-sm text-justify fw-light lh-base font-f-mukta text-color-3">Lorem ipsum, dolor sit amet
              consectetur
              adipisicing elit. Corrupti minima id ex ullam porro
              temporibus dolor error quibusdam tempora saepe. Veniam, atque.</p>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-10 col-sm-12 d-flex flex-wrap mx-auto p-2">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center p-3">
              <a href="" class="btn-contact rounded mt-5 mb-5 p-2">Contact me! &nbsp;</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
  </script>
  <!-- JavaScrip -->
  <script src="./public/js/main.js"></script>
</body>

</html>