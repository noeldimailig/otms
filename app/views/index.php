<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico?v=2">
    <title>Home</title>
    <?php include('header.php'); ?>
</head>

<body>
    <?php include('navigator.php'); ?>
    <div id="myCarousel" class="carousel slide p-0 m-0" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">

                <img src="<?= BASE_URL . PUBLIC_DIR . '/assets/img/banner.png'; ?>" width="100%" alt="">

                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Focussed on Research Learning</h1>
                        <p>The platform will be solely for research classes. It will draw more attention to student's needs on the development of their research projects.
                            </p>
                        <p><a class="btn btn-sm btn-danger" href="">Sign up Now!</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">

                <img src="<?= BASE_URL . PUBLIC_DIR . '/assets/img/banner.png'; ?>" width="100%" alt="">

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Interactive Environment</h1>
                        <p>Students and research teachers could efficiently interact with each others regarding with each others concern. Faculty and research and development
                            office could work and collaborate hand on hand for the complilation of the files needed to be handed over under the care of the school.</p>
                        <p><a class="btn btn-sm btn-danger" href="">Sign up Now!</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">

                <img src="<?= BASE_URL . PUBLIC_DIR . '/assets/img/banner.png'; ?>" width="100%" alt="">

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Safe and Sound</h1>
                        <p>The platorm will ensure the safety of the files being stored to the archive or library of the system. </p>
                        <p><a class="btn btn-sm btn-danger" href="">Sign up Now!</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <main class="container pb-5">
  <div class="row g-5 mt-3">
  <hr class="my-4">
    <div class="container-fluid padding" >
      <div class="row padding">

        <div class="col-lg-4">
          <img src="<?= BASE_URL . PUBLIC_DIR . '/assets/img/books.png'; ?>" class="img-fluid">
        </div>
        <div class="col-md-12 col-lg-8">
        <br><br><br>
          <h1>Archive</h1>
          <p>Files are created into a digital format and then transfered to a didgital library, an archive.
            It is where the completed researches, thesis, dissesrtations, narratives and such related papers are stored.
          </p>
          <a href="archive.php" class="btn btn-outline-secondary">Go to</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row g-5 mt-3">
    <div class="container-fluid padding" >
      <div class="row padding">

        
        <div class="col-md-12 col-lg-8">
        <br><br><br><br>
          <h1>Virtual Classroom</h1>
          <p> The platform also has an available feature or tool for a new learning environment, it will be 
            exclusive for research subject that will enable a unified research learning with virtual online classs.
          </p>
          <a href="mainclass.php" class="btn btn-outline-secondary">Go to</a>
        </div>
        <div class="col-lg-4">
          <img src="<?= BASE_URL . PUBLIC_DIR . '/assets/img/notebook.png'; ?>" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <div class="row g-5 mt-3">
    <div class="container-fluid padding" >
      <div class="row padding">

        <div class="col-lg-4">
          <img src="<?= BASE_URL . PUBLIC_DIR . '/assets/img/online-class.png'; ?>" class="img-fluid">
        </div>
        <div class="col-md-12 col-lg-8">
        <br><br><br><br>
          <h1>Conference Room</h1>
          <p>The platform will serve with an online video conferencing feature that could open oppurtunities 
            for the students and teachers to have a collaborative and healthy kind of learning.
          </p>
          <a href="conference.php" class="btn btn-outline-secondary">Go to</a>
        </div>
      </div>
    </div>
    <hr class="my-4">
  </div>



<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Connect</h2>
		</div>
		<div class="col-12 social padding">
			<a href="#"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-google-plus-g"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
	</div>
</div>

</main>
    <?php include('footer.php'); ?>
</body>

</html>