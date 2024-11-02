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
    <title>Sinharaja2</title>
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

      <h1 class="my-5 text-center"><b>Sinharaja II</b></h1>

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
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            class="d-block w-100 carousel-image"
            src="image/s21.jpg"
            alt="First slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100 carousel-image"
            src="image/s22.jpg"
            alt="Second slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100 carousel-image"
            src="image/s23.jpg"
            alt="Third slide"
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
        <h5 class="des-p">Sinharaja 2 usually known as Padmasiri Thrimavitharana anushmarana pirimi newasikagaraya and it is consist of 3 floors. Every floor is with the small common area and upper floors consist balcony also. Common area has a table which attach with chairs. hostel consist of 18 rooms. Every room capacity is 6. So full capacity of sinharaja 2 hostel is 108. 2 tables 3 chairs and a towel rack consist for every room. Each floor has a bathrooms and toilets. Usually this hostel is dedicated for 3rd year students.</h5>
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