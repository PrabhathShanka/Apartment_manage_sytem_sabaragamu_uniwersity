<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="hostalinfo.css" />
    <title>walawa_C</title>
</head>

<body>
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img
          src="image/boarding_logo.jpg"
          alt="Your Image Description"
          style="
            width: 70px;
            height: 70px;
            vertical-align: middle;
            margin-left: 50px;
          "
        />
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto px-5">
            <a class="nav-item nav-link mr-4" href="index.php">Home</a>
            <a class="nav-item nav-link mr-4" href="#about">About</a>
            <a class="nav-item nav-link mr-4" href="#contact">Contact</a>
            <a class="nav-item nav-link mr-4" href="index.php">Signout</a>
          </div>
        </div>
      </nav>

      <h1 class="my-5 text-center"><b>Walawa C</b></h1>

      <div
      id="carouselExampleIndicators"
      class="carousel slide mb-5"
      data-ride="carousel"
    >
      <ol class="carousel-indicators">
        <li
          data-target="#carouselExampleIndicators"
          data-slide-to="0"
          class="active"
        ></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            class="d-block w-100 carousel-image"
            src="image/wc1.jpg"
            alt="First slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100 carousel-image"
            src="image/wc2.jpg"
            alt="Second slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100 carousel-image"
            src="image/wc3.jpg"
            alt="Third slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100 carousel-image"
            src="image/wc4.jpg"
            alt="fourth slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100 carousel-image"
            src="image/wc5.jpg"
            alt="fifth slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100 carousel-image"
            src="image/wc6.jpg"
            alt="sixth slide"
          />
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="container">
        <h2 class="des-h2"><b>-Description-</b></h2>
        <h5 class="des-p">The ground floor houses approximately 30 bedrooms, while the upper floors accommodate around 45 rooms each. <br>
              Each floor is equipped with a dedicated dining area that includes a sink, boiler, and tables. Additionally, electrical outlets are provided for the use of irons or heaters. The ground floor features a designated TV area with seating, as well as a spacious dining area.<br>
              Each floor is equipped with two spacious washing areas, which include six individual bathing rooms and seven toilets, ensuring ample facilities for residents.<br><br>

              <b>Room Amenities</b>
            <ul>
            <li> A four-person shared bedroom</li>
            <li> Individual beds for each student</li>
            <li> Fan per bedroom</li>
            <li> Two electrical outlets</li>
            <li> Personal cupboards</li>
            <li> Two racks per bedroom</li>
            <li> Two study tables and four chairs per bedroom</li>
            </ul>
              Additionally, each room includes a private balcony, which students can use for drying clothes or for  other practical purposes. These amenities are designed to ensure a comfortable and conducive living environment for female students.</h5>
    </div>

    <div class="container">
        <div class="mb-3" id="about">
            <div class="row d-flex justify-content-center mx-4">
                <div class="col-sm-12 col-lg-6 m-4 p-3">
                    <h2><b>About Stay Sabra</b></h2>
                    <p>If you have any questions, comments, or would like to learn more about our services, please don’t hesitate to get in touch with us. We’re committed to providing you with all the information you need and assisting you throughout the entire process. Whether you need clarification on our platform, have specific concerns, or want to explore more about how we can help you find the ideal boarding house, we’re here for you. Feel free to reach out to us anytime via email at staysabra@gmail.com or give us a call at +94 455666236. Our team is always ready to assist, and we look forward to connecting with you and helping you with any inquiries you might have!</p>
                </div>
                <div class="col-sm-12 col-lg-4 m-4 p-3" id="contact">
                    <h2><b>Contact Us</b></h2>
                    <p><b>Address</b></p>
                    <p>56, Belihuloya, Ratnapura,Sri Lanka</p>
    
                    <p><b>Phone</b></p>
                    <p>+94 4556666236</p>
    
                    <p><b>Email</b></p>
                    <p>staysabra@gmail.com</p>
                </div>
            </div>
            
    </div>
    
</body>
</html>