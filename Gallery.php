<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallary</title>
    <link rel="stylesheet" href="assest/gallerystyle.css">
    <link rel="stylesheet" href="assest/style1.css">
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!-- Bootstrap Link -->
    <!-- FavIcon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assest/FavIcon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assest/FavIcon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assest/FavIcon/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <!-- FavIcon End -->
</head>

<body>
<?php require '_nav.php'?>
    <div class="gallerys">
        <div class="left-text">
            <h2 class="heading">Gallary</h2>
            <p class="subheading">When words become unclear, I shall focus with photographs. When images become inadequate, I shall be content with silence.</p>
        </div>
        <div class="gallery">
        <div class="boxc boxrow-2"  style="background-image: url(assest/images/1.jpeg);"></div>
            <div class="boxc boxcol-2" style="background-image: url(assest/images/2.jpeg);"></div>
            <div class="boxc" style="background-image: url(assest/images/3.jpeg);"></div>
            <div class="boxc boxrow-2" style="background-image: url(assest/images/4.jpeg);"></div>
            <div class="boxc boxcol-2" style="background-image: url(assest/images/5.jpeg);"></div>
            <div class="boxc" style="background-image: url(assest/images/6.jpeg);"></div>
            <div class="boxc boxcol-2" style="background-image: url(assest/images/8.jpeg);"></div>
        </div>
    </div>


   
    <script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const homeLinks = document.getElementsByClassName('homeLink');
        
        // Loop through each element with the class 'homeLink'
        Array.from(homeLinks).forEach((link) => {
            link.addEventListener('click', (event) => {
                const isLoggedIn = <?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'true' : 'false'; ?>;
                if (!isLoggedIn) {
                    event.preventDefault();
                    $('#loginModal').modal('show');
                }
            });
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>