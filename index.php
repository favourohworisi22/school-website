<?php include "includes/header.php"; ?>

<style>
  body {
    font-family: 'Segoe UI', sans-serif;
    line-height: 1.8;
  }

  /* Carousel */
  .carousel-item img {
    height: 85vh;
    object-fit: cover;
  }

  .carousel-caption {
    background: rgba(0,0,0,0.5);
    padding: 20px;
    border-radius: 10px;
  }

  .section-title {
    font-weight: 700;
    margin-bottom: 25px;
  }
</style>

<!-- ================= HERO CAROUSEL ================= -->
<div id="schoolCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="assets/images/banner 7.jpg" class="d-block w-100" alt="School Environment">
      <div class="carousel-caption">
        <h1>Victory Favour International Schools</h1>
        <p>Building Excellence Through Knowledge, Discipline & Character</p>
      </div>
    </div>

    <div class="carousel-item">
        <img src="assets/images/banner 8.jpg" class="d-block w-100" alt="classroom">
      <div class="carousel-caption">
        <h2>Quality Academic Environment</h2>
        <p>Modern learning with experienced educators</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="assets/images/banner 3.jpg" class="d-block w-100" alt="Students">
      <div class="carousel-caption">
        <h2>Raising Future Leaders</h2>
        <p>Educating minds, shaping destinies</p>
      </div>
    </div>

  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#schoolCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#schoolCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- ================= ABOUT US ================= -->
<div class="container my-5">
  <h2 class="section-title text-center">Welcome to Victory Favour International Schools</h2>

  <p>
    Victory Favour International Schools is a reputable institution committed to academic excellence,
    moral discipline, and holistic development. We provide a nurturing and stimulating environment
    where children are encouraged to discover their talents, develop confidence, and achieve their full potential.
  </p>

  <p>
    Our school blends strong academics with character building, leadership training, and creativity.
    With modern facilities and qualified teachers, we ensure that every child receives quality education
    tailored to global standards.
  </p>

  <p>
    From Nursery through Primary to Secondary education, we focus on raising disciplined, intelligent,
    and responsible individuals prepared for future challenges.
  </p>
</div>

<!-- ================= WHY CHOOSE US ================= -->
<div class="bg-light py-5">
  <div class="container">
    <h2 class="section-title text-center">Why Choose Us</h2>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="assets/images/banner 8.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Experienced Teachers</h5>
            <p>Our teachers are highly trained, passionate, and committed to nurturing academic excellence.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="assets/images/banner 12.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Modern Facilities</h5>
            <p>Well-equipped classrooms, laboratories, ICT rooms, library, and safe playgrounds.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="assets/images/banner 11.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Moral & Discipline</h5>
            <p>We instill discipline, integrity, leadership, and respect in every student.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ================= ACADEMIC LEVELS ================= -->
<div class="container my-5">
  <h2 class="section-title text-center">Our Academic Levels</h2>

  <div class="row align-items-center mb-5">
    <div class="col-md-6">
      <img src="assets/images/banner 7.jpg" class="img-fluid rounded shadow">
    </div>
    <div class="col-md-6">
      <h4>Nursery School</h4>
      <p>
        Our nursery program focuses on early childhood development through play, creativity,
        storytelling, and guided learning in a safe and loving environment.
      </p>
    </div>
  </div>

  <div class="row align-items-center mb-5 flex-md-row-reverse">
    <div class="col-md-6">
      <img src="assets/images/banner 8.jpg" class="img-fluid rounded shadow">
    </div>
    <div class="col-md-6">
      <h4>Primary School</h4>
      <p>
        We build strong foundations in literacy, numeracy, science, and moral values,
        encouraging curiosity and independent thinking.
      </p>
    </div>
  </div>

  <div class="row align-items-center">
    <div class="col-md-6">
      <img src="assets/images/banner 9.jpg" class="img-fluid rounded shadow">
    </div>
    <div class="col-md-6">
      <h4>Secondary School</h4>
      <p>
        Our secondary program prepares students for WAEC, NECO, and international examinations,
        equipping them with leadership skills and academic excellence.
      </p>
    </div>
  </div>
</div>

<!-- ================= ACTIVITIES ================= -->
<div class="bg-light py-5">
  <div class="container">
    <h2 class="section-title text-center">School Life & Activities</h2>

    <div class="row g-4">
      <div class="col-md-3"><img src="assets/images/banner 10.jpg" class="img-fluid rounded shadow"></div>
      <div class="col-md-3"><img src="assets/images/banner 11.jpg" class="img-fluid rounded shadow"></div>
      <div class="col-md-3"><img src="assets/images/banner 12.jpg" class="img-fluid rounded shadow"></div>
      <div class="col-md-3"><img src="assets/images/banner 6.jpg" class="img-fluid rounded shadow"></div>
    </div>
  </div>
</div>

<!-- ================= CALL TO ACTION ================= -->
<div class="bg-primary text-white py-5">
  <div class="container text-center">
    <h2>Enroll Your Child Today</h2>
    <p>
      Give your child the gift of quality education, discipline, and a bright future.
      Admissions are now open.
    </p>
    <a href="admissions.php" class="btn btn-light btn-lg me-2">Apply for Admission</a>
    <a href="payment.php" class="btn btn-outline-light btn-lg">Pay School Fees</a>
  </div>
</div>

<?php include "includes/footer.php"; ?>


