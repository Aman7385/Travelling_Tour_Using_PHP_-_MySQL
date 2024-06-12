<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <!-- Bootstrap Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
  crossorigin="anonymous"></script>
<!-- Bootstrap Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Travelling Tour</title>
    <link rel="stylesheet" href="assest/style1.css">
    <!-- Font Awesome Cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Font Awesome Cdn -->
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <!-- Google Fonts -->
  <!-- FavIcon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assest/images/FavIcon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assest/images/FavIcon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assest/images/FavIcon/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <!-- FavIcon End -->
   <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    
}



/* Card */

.card{
    
    background-color: rgba(119, 255, 255, 0.407);
    border-radius: 50px;
    margin: 50px 50px 50px;
    text-align: center;
    
}

.cardi img{
    border-radius: 50px 50px 0px 0px;
}

/* Packages */

.box{
    border: 0;
    height: 400px;
    width: 300px;
    margin: 2%;
    box-sizing: border-box;
    border-radius: 10px;
    text-align: center;
    background-color: rgba(82, 238, 249, 0.555);
}
.box img{
    height: 100px;
    width: 100px;
    border-radius: 5px;
    margin-top: 50px;
    box-shadow: inset;
}
.box p{
    padding: 5px;
    font-family: cursive;
    font-size: small;
    font-weight: 100;
}
.box h3{
    font-family: georgia;
    /* padding-top: 15px; */
    font-size: large;
    font-weight: bold;
}

.box:hover,  .card:hover{
    background-image: radial-gradient( rgba(255, 255, 255, 0.306),rgb(0, 238, 255),teal) ;    
    border: 0;
    box-shadow: inset;
    cursor: pointer;
    box-shadow: 7px 7px 5px rgba(118, 105, 105, 0.6);
    /* box-decoration-break: clone; */
}

.box:hover img{
    width: 300px;
    height: 200px;
    /* margin-left: 0; */
    /* margin-right: 0; */
    margin-top: 0px;
    
}
.box:hover p {
  padding: 15px;
    font-family: serif;
 }

.container2{
    /* margin-left: 10%; */
    box-sizing: border-box;
    border-radius: 10px;
    background-color: aliceblue;
    display: flex;
    flex-direction: row;
    justify-content:space-around;
    flex-wrap: wrap;
    width: 100%;
    border-radius: 50px;
}
.box {
  position: relative;
}

.box ul {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  border-top: 1px solid #ccc; /* Optional: Add a border at the top of the ul */
  padding-top: 10px; /* Optional: Add some padding at the top of the ul */
}

.box li {
  margin-bottom: 10px; /* Optional: Add margin between list items */
}
.box {
  position: relative;
  overflow: hidden;
}

.box:hover p {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}

/* Packages */


/* Home Section Start */
.home{
    width: 100%;
    height: 90vh;
    background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.2)), url(assest/images/book.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
}
.home .content{
    text-align: center;
    padding-top: 200px;
}
.home .content h5{
    color: white;
    font-size: 38px;
    font-weight: 550;
    text-shadow: 0px 1px 1px black;
}
.home .content h1{
    color: white;
    font-size: 70px;
    font-weight: 550;
    text-shadow: 0px 1px 1px black;
    margin-top: 5px;
}
.changecontent::after{
    content: ' ';
    color: #ffa500;
    text-shadow: 0px 1px 1px black;
    animation: changetext 10s infinite linear;
}
@keyframes changetext{
    0%{content: "France";}
    10%{content: "Spain";}
    20%{content: "United States";}
    30%{content: "China";}
    40%{content: "India";}
    60%{content: "Italy";}
    70%{content: "Turkey";}
    80%{content: "Mexico";}
    90%{content: "Germany";}
    100%{content: "United kingdom";}
} 
.home .content p{
    color: white;
    font-size: 15px;
    font-weight: 600;
    text-shadow: 0px 1px 1px black;
    margin-bottom: 30px;
    margin-top: 5px;
}
.home .content a{
    padding: 10px;
    background: white;
    color: black;
    letter-spacing: 2px;
    font-weight: 550;
    border-radius: 5px;
    text-decoration: none;
    transition: 0.5s;
}
.home .content a:hover{
    background: #ffa500;
    color: white;
}
@media (max-width:850px){
    .home{
        background-position: 50%;
    }
}
@media (max-width:450px){
    .home .content h5{
        font-size: 25px;
    }
    .home .content h1{
        font-size: 38px;
    }
    .home .content p{
        font-size: 13px;
    }
}
.navbar {
    background-color: #375d96; /* Replace #ffffff with your desired color code */
}
.nav-link,a{
  color : white;
}
.nav-link:hover,a:hover{
  color : yellow;
}
/* Home Section End */</style>
</head>

<body>

<?php 

$logdone = false;
// session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $logdone = true;
}?>
<?php require '_nav.php'?>
<div class="home">
        <div class="content">
            <h5>Welcome To World</h5>
            <h1>Visit <span class="changecontent"></span></h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, nisi.</p>
            <a href="#book">Book Place</a>
        </div>
    </div>

<!-- Cards -->
<div class="card-group container-fluid">
  <div class="card mx-2" style="border-radius: 50px;">
    <img src="assest/images/11.jpeg" class="card-img-top " style="border-radius: 50px 50px 0 0;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Place Name</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto doloremque explicabo aperiam eveniet vitae modi excepturi sed maxime incidunt blanditiis in a quas velit at iure consectetur, tempora est sapiente.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card mx-2" style="border-radius: 50px;">
    <img src="assest/images/package-1.png" class="card-img-top " style="border-radius: 50px 50px 0 0;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Place Name</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ducimus cupiditate autem iure culpa sed natus, et, sunt sit consectetur eius, ratione ex ipsum. Ipsa consequatur architecto animi perferendis enim.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  
  <div class="card mx-2" style="border-radius: 50px;">
    <img src="assest/images/package-2.png" class="card-img-top" style="border-radius: 50px 50px 0 0;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Place Name</h5>
      <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni excepturi inventore voluptatum rem adipisci itaque, ratione aliquam odio, porro harum delectus iusto debitis, necessitatibus provident expedita optio voluptate exercitationem sapiente!</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</div>
<br>
<!-- Packages -->

<div class="container2">
<div class="box">
      <img src="assest/images/2.jpeg">
      <h3>Eiffel Tower, Paris, France</h3>
      <p> The Eiffel Tower is an iconic symbol of Paris and offers stunning views of the city from its observation decks.</p>
      <ul>
        <li><strong>Cost : </strong> ₹1,50,000 - ₹2,00,000</li>
        <li><strong>Tour Duration:</strong> 3-4 days</li>
      </ul>
  </div>
  <div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Grand Canyon, Arizona, USA</h3>
    <p>The Grand Canyon is a natural wonder, showcasing breathtaking vistas carved by the Colorado River over millions of years.</p>
    <ul>
        <li><strong>Cost:</strong> ₹2,00,000 - ₹2,50,000</li>
        <li><strong>Tour Duration:</strong> 5-7 days</li>
    </ul>
</div>
<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Colosseum, Rome, Italy</h3>
    <p>The Colosseum is an ancient amphitheater in the center of Rome, Italy, known for its grandeur, history, and architectural significance.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,70,000 - ₹2,20,000</li>
        <li><strong>Tour Duration:</strong> 4-6 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Mount Fuji, Japan</h3>
    <p>Mount Fuji is Japan's highest peak and an iconic symbol of the country, offering breathtaking views and opportunities for hiking and sightseeing.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,90,000 - ₹2,40,000</li>
        <li><strong>Tour Duration:</strong> 5-7 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Acropolis of Athens, Greece</h3>
    <p>The Acropolis of Athens is an ancient citadel located on a rocky outcrop above the city of Athens, Greece, showcasing magnificent ruins including the Parthenon.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,80,000 - ₹2,30,000</li>
        <li><strong>Tour Duration:</strong> 5-7 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Bagan, Myanmar</h3>
    <p>Bagan is an ancient city in Myanmar (Burma), known for its thousands of well-preserved temples and pagodas, dating back to the 9th to 13th centuries.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,85,000 - ₹2,35,000</li>
        <li><strong>Tour Duration:</strong> 5-7 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Neuschwanstein Castle, Germany</h3>
    <p>Neuschwanstein Castle is a fairytale-like palace in Bavaria, Germany, renowned for its romantic architecture, stunning interiors, and picturesque setting.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,95,000 - ₹2,45,000</li>
        <li><strong>Tour Duration:</strong> 6-8 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Serengeti National Park, Tanzania</h3>
    <p>Serengeti National Park is a UNESCO World Heritage site in Tanzania, famous for its vast savannahs, abundant wildlife, and the annual Great Migration of wildebeest.</p>
    <ul>
        <li><strong>Cost:</strong> ₹2,20,000 - ₹2,70,000</li>
        <li><strong>Tour Duration:</strong> 7-9 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Plitvice Lakes National Park, Croatia</h3>
    <p>Plitvice Lakes National Park is a stunning natural wonder in Croatia, featuring a series of cascading lakes, waterfalls, and lush forests.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,80,000 - ₹2,30,000</li>
        <li><strong>Tour Duration:</strong> 5-7 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Great Barrier Reef, Australia</h3>
    <p>The Great Barrier Reef is the world's largest coral reef system, located off the coast of Queensland, Australia, and renowned for its incredible biodiversity and vibrant marine life.</p>
    <ul>
        <li><strong>Cost:</strong> ₹2,40,000 - ₹2,90,000</li>
        <li><strong>Tour Duration:</strong> 8-10 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Masai Mara National Reserve, Kenya</h3>
    <p>The Masai Mara National Reserve is a renowned safari destination in Kenya, known for its vast plains, abundant wildlife, and the annual wildebeest migration.</p>
    <ul>
        <li><strong>Cost:</strong> ₹2,10,000 - ₹2,60,000</li>
        <li><strong>Tour Duration:</strong> 6-8 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>St. Basil's Cathedral, Moscow, Russia</h3>
    <p>St. Basil's Cathedral is a colorful and iconic landmark in Moscow, Russia, known for its unique onion domes and rich history.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,75,000 - ₹2,25,000</li>
        <li><strong>Tour Duration:</strong> 4-6 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Fiordland National Park, New Zealand</h3>
    <p>Fiordland National Park is a UNESCO World Heritage site in New Zealand, renowned for its stunning fjords, waterfalls, and diverse wildlife.</p>
    <ul>
        <li><strong>Cost:</strong> ₹2,00,000 - ₹2,50,000</li>
        <li><strong>Tour Duration:</strong> 6-8 days</li>
    </ul>
</div>
<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Blue Lagoon, Iceland</h3>
    <p>The Blue Lagoon is a geothermal spa in Iceland, known for its milky blue waters rich in minerals, offering relaxation and rejuvenation in a stunning natural setting.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,90,000 - ₹2,40,000</li>
        <li><strong>Tour Duration:</strong> 5-7 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Taj Mahal, Agra, India</h3>
    <p>The Taj Mahal is an iconic symbol of love and a UNESCO World Heritage site, renowned for its stunning architecture and intricate marble craftsmanship.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,50,000 - ₹2,00,000</li>
        <li><strong>Tour Duration:</strong> 3-4 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Moai Statues, Easter Island, Chile</h3>
    <p>The Moai Statues are ancient stone figures on Easter Island, Chile, carved by the Rapa Nui people and surrounded by mystery and intrigue.</p>
    <ul>
        <li><strong>Cost:</strong> ₹2,30,000 - ₹2,80,000</li>
        <li><strong>Tour Duration:</strong> 7-9 days</li>
    </ul>
</div>
<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Great Wall of China, Beijing, China</h3>
    <p>The Great Wall of China is an ancient marvel, offering a glimpse into China's rich history and providing panoramic views of its landscape.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,80,000 - ₹2,30,000</li>
        <li><strong>Tour Duration:</strong> 4-6 days</li>
    </ul>
</div>
<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Machu Picchu, Peru</h3>
    <p>Machu Picchu is an ancient Incan citadel situated high in the Andes Mountains of Peru, offering breathtaking views of the surrounding valleys and peaks.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,70,000 - ₹2,20,000</li>
        <li><strong>Tour Duration:</strong> 4-5 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Santorini, Greece</h3>
    <p>Santorini is a stunning island in the Aegean Sea known for its whitewashed buildings, beautiful sunsets, and crystal-clear waters.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,80,000 - ₹2,30,000</li>
        <li><strong>Tour Duration:</strong> 5-6 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Victoria Falls, Zambia/Zimbabwe</h3>
    <p>Victoria Falls is one of the largest and most famous waterfalls in the world, offering awe-inspiring views and thrilling adventure activities.</p>
    <ul>
        <li><strong>Cost:</strong> ₹2,10,000 - ₹2,60,000</li>
        <li><strong>Tour Duration:</strong> 6-8 days</li>
    </ul>
</div>
<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Mount Everest Base Camp, Nepal</h3>
    <p>Mount Everest Base Camp is a trekker's paradise, offering stunning views of the world's tallest peak and an opportunity to experience the Himalayan culture.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,90,000 - ₹2,40,000</li>
        <li><strong>Tour Duration:</strong> 14-16 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Amalfi Coast, Italy</h3>
    <p>The Amalfi Coast is a picturesque stretch of coastline in southern Italy, characterized by dramatic cliffs, colorful villages, and stunning sea views.</p>
    <ul>
        <li><strong>Cost:</strong> ₹2,10,000 - ₹2,60,000</li>
        <li><strong>Tour Duration:</strong> 6-8 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Alhambra, Spain</h3>
    <p>The Alhambra is a stunning palace and fortress complex in Granada, Spain, showcasing Moorish architecture, beautiful gardens, and panoramic views of the city.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,80,000 - ₹2,30,000</li>
        <li><strong>Tour Duration:</strong> 5-7 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Banff National Park, Canada</h3>
    <p>Banff National Park is a wilderness area in the Canadian Rockies, known for its stunning mountain scenery, turquoise lakes, and abundant wildlife.</p>
    <ul>
        <li><strong>Cost:</strong> ₹2,20,000 - ₹2,70,000</li>
        <li><strong>Tour Duration:</strong> 7-9 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Amazon Rainforest, Brazil</h3>
    <p>The Amazon Rainforest is the world's largest tropical rainforest, home to an incredible diversity of wildlife, indigenous cultures, and stunning natural landscapes.</p>
    <ul>
        <li><strong>Cost:</strong> ₹2,30,000 - ₹2,80,000</li>
        <li><strong>Tour Duration:</strong> 8-10 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Maasai Mara National Reserve, Kenya</h3>
    <p>The Maasai Mara National Reserve is one of Africa's most famous safari destinations, renowned for its abundant wildlife, including the Big Five, and spectacular annual wildebeest migration.</p>
    <ul>
        <li><strong>Cost:</strong> ₹2,40,000 - ₹2,90,000</li>
        <li><strong>Tour Duration:</strong> 8-11 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Yellowstone National Park, Wyoming, USA</h3>
    <p>Yellowstone National Park is America's first national park, famous for its geothermal wonders, including geysers, hot springs, and bubbling mud pots, as well as its diverse wildlife.</p>
    <ul>
        <li><strong>Cost:</strong> ₹2,00,000 - ₹2,50,000</li>
        <li><strong>Tour Duration:</strong> 6-8 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Swiss Alps, Switzerland</h3>
    <p>The Swiss Alps are a paradise for outdoor enthusiasts, offering world-class skiing, hiking, and mountaineering opportunities amidst stunning alpine scenery.</p>
    <ul>
        <li><strong>Cost:</strong> ₹2,20,000 - ₹2,70,000</li>
        <li><strong>Tour Duration:</strong> 7-9 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Galápagos Islands, Ecuador</h3>
    <p>The Galápagos Islands are a remote archipelago in the Pacific Ocean, famous for their unique wildlife, including giant tortoises, marine iguanas, and blue-footed boobies.</p>
    <ul>
        <li><strong>Cost:</strong> ₹2,50,000 - ₹3,00,000</li>
        <li><strong>Tour Duration:</strong> 9-12 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Dubai, United Arab Emirates</h3>
    <p>Dubai is a futuristic city known for its towering skyscrapers, luxury shopping malls, and extravagant attractions, including the Burj Khalifa, the world's tallest building.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,95,000 - ₹2,45,000</li>
        <li><strong>Tour Duration:</strong> 5-7 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Victoria and Albert Museum, London, UK</h3>
    <p>The Victoria and Albert Museum is the world's leading museum of art, design, and performance, showcasing a vast collection of treasures from around the globe.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,70,000 - ₹2,20,000</li>
        <li><strong>Tour Duration:</strong> 4-6 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Chichen Itza, Mexico</h3>
    <p>Chichen Itza is an ancient Mayan archaeological site in Mexico, featuring iconic structures such as the Pyramid of Kukulcan and the Great Ballcourt.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,80,000 - ₹2,30,000</li>
        <li><strong>Tour Duration:</strong> 5-7 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Pyramids of Giza, Egypt</h3>
    <p>The Pyramids of Giza are ancient Egyptian monuments that have stood for thousands of years, showcasing the ingenuity and architectural prowess of the ancient civilization.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,60,000 - ₹2,10,000</li>
        <li><strong>Tour Duration:</strong> 4-5 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Bora Bora, French Polynesia</h3>
    <p>Bora Bora is a tropical paradise known for its crystal-clear waters, overwater bungalows, and stunning coral reefs, making it a dream destination for honeymooners and beach lovers.</p>
    <ul>
        <li><strong>Cost:</strong> ₹2,20,000 - ₹2,70,000</li>
        <li><strong>Tour Duration:</strong> 7-9 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Uluru (Ayers Rock), Australia</h3>
    <p>Uluru, also known as Ayers Rock, is a massive sandstone monolith in the heart of the Australian Outback, sacred to the indigenous Anangu people and offering spectacular sunrise and sunset views.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,90,000 - ₹2,40,000</li>
        <li><strong>Tour Duration:</strong> 5-7 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Angkor Wat, Cambodia</h3>
    <p>Angkor Wat is a UNESCO World Heritage site and the largest religious monument in the world, showcasing the grandeur of Khmer architecture and the ancient civilization of Cambodia.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,75,000 - ₹2,25,000</li>
        <li><strong>Tour Duration:</strong> 4-6 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Yosemite National Park, California, USA</h3>
    <p>Yosemite National Park is a breathtaking wilderness area in California's Sierra Nevada mountains, renowned for its towering granite cliffs, giant sequoia trees, and stunning waterfalls.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,85,000 - ₹2,35,000</li>
        <li><strong>Tour Duration:</strong> 5-7 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Taj Mahal, Agra, India</h3>
    <p>The Taj Mahal is an iconic symbol of love and a UNESCO World Heritage site, renowned for its stunning architecture and intricate marble craftsmanship.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,50,000 - ₹2,00,000</li>
        <li><strong>Tour Duration:</strong> 3-4 days</li>
    </ul>
</div>

<div class="box">
    <img src="assest/images/2.jpeg">
    <h3>Antelope Canyon, Arizona, USA</h3>
    <p>Antelope Canyon is a slot canyon carved by wind and water over millions of years, known for its stunning light beams and swirling sandstone formations.</p>
    <ul>
        <li><strong>Cost:</strong> ₹1,95,000 - ₹2,45,000</li>
        <li><strong>Tour Duration:</strong> 5-6 days</li>
    </ul>
</div>

</div>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn">
  <div class="container py-5">
    <div class="row g-5">
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-3">Company</h4>
        <a class="btn btn-link" href="">About Us</a>
        <a class="btn btn-link" href="">Privacy Policy</a>
        <a class="btn btn-link" href="">Terms & Condition</a>
        <a class="btn btn-link" href="">FAQs & Help</a>
      </div>
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-3">Contact</h4>
        <p class="mb-2"><i class="fa fa-map-marker-alt me-3">&nbsp;&nbsp;</i>123 Street, , india</p>
        <p class="mb-2"><i class="fa fa-phone-alt me-3">&nbsp;&nbsp;</i>+012 345 67890</p>
        <p class="mb-2"><i class="fa fa-envelope me-3">&nbsp;&nbsp;</i>www.tour.com</p>
        <div class="social-icons">
          <a href="https://twitter.com/" target="_blank"><i class="ri-twitter-fill"></i></a>
          <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a>
          <a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
          <a href="#" target="_blank"><i class="fa-solid fa-location-dot"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-3">Gallery</h4>
        <div class="row g-2 pt-2">
          <div class="col-4">
            <img class="img-fluid bg-light p-1" src="assest/images/package-1.png" alt="">
          </div>
          <div class="col-4">
            <img class="img-fluid bg-light p-1" src="assest/images/package-2.png" alt="">
          </div>
          <div class="col-4">
            <img class="img-fluid bg-light p-1" src="assest/images/package-3.jpg" alt="">
          </div>
          <div class="col-4">
            <img class="img-fluid bg-light p-1" src="assest/images/package-6.jpg" alt="">
          </div>
          <div class="col-4">
            <img class="img-fluid bg-light p-1" src="assest/images/package-5.jpg" alt="">
          </div>
          <div class="col-4">
            <img class="img-fluid bg-light p-1" src="assest/images/package-7.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-3">Newsletter</h4>
        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
        <div class="position-relative mx-auto" style="max-width: 400px;">
          <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
          <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Send</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="copyright">
      <div class="row">
        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
          &copy; <a class="border-bottom" href="#">Travelling Tours</a>, All Right Reserved.


          Designed By <a class="border-bottom" href="#">Akanksha & Aman</a>
        </div>
        <div class="col-md-6 text-center text-md-end">
          <div class="footer-menu">
            <a href="">Home</a>&nbsp;
            <a href="">Cookies</a>&nbsp;
            <a href="">Help</a>&nbsp;
            <a href="">FQAs</a>&nbsp;
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer End -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const homeLink = document.getElementById('homeLink');
            homeLink.addEventListener('click', (event) => {
                const isLoggedIn = <?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'true' : 'false'; ?>;
                if (!isLoggedIn) {
                    event.preventDefault();
                    $('#loginModal').modal('show');
                }
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous "></script>



</body>

</html>