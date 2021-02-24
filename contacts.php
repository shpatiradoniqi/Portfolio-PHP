<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Questions</title>
    <link rel="stylesheet" href="css.css" />
</head>


<?php 
include './components/header.php';
?>



<?php
 require './databaseconfig2.php';
 ?>

 <?php
if(isset($_POST['submit'])){
$emriplote=$_POST['user_name'];
$email=$_POST['user_email'];
$adresa=$_POST['adresa'];
$numri=$_POST['numri'];
$mesazhi=$_POST['mesazhi'];


$sql='INSERT INTO kontaktformaa (emri_plote,email,adresa,Numri_telefonit,Mesazhi) VALUES (:user_name,:user_email,:adresa,:numri,:mesazhi)';
    $query = $pdo->prepare($sql);
    $query->bindParam('user_name', $emriplote);
    $query->bindParam('user_email', $email);
    $query->bindParam('adresa', $adresa);
    $query->bindParam('numri', $numri);
    $query->bindParam('mesazhi', $mesazhi);

   
    $query->execute();
  }
?>
<form action="contacts.php" method="POST">
<section class="intro" id="home">
    <h1 class="section__titulli section_titulli--intro">
        You can write   <strong>Here</strong>
    </h1>

    <div class="outside">
       
            <legend>Personal Info</legend>

            <div>
                <label id="emri" for="name">Full Name:</label>
                <input type="text" name="user_name" placeholder="Enter your full name" />
            </div>

            <div>
                <label id="email" for="email">Email:</label>
                <input type="email" name="user_email" placeholder="Enter your email" />
            </div>

            <div>
                <label id="adresa" for="adresa">Address</label>
                <input type="address" name="adresa"  placeholder="Enter your address" />
            </div>

            <div>
                <label id="number" for="number">Phone number:</label>
                <input type="number" name="numri" placeholder="Enter your number" />

            </div>


            <div>
                <label for="Gjinia">Gender</label>
                <p>
                    <input type="radio" name="gender" value="male" checked>Male<br>
                    <input type="radio" name="gender" value="female" checked>Female<br>
                    <input type="radio" name="gender" value="other" checked>Other<br>

                </p>
            </div>

            <fieldset>
                <label for="niveliAkademik">Education Level: </label>
                <select id="dropdown">
                    <option value="University">University</option>
                    <option value="College">College</option>
                    <option value="Edukim i mesem">High School</option>
                    <option value="None">None</option>
                </select>
            </fieldset>

            <fieldset>
                <label id="tekst">Ask or tell the problem?</label>
                <textarea id="mesazhi"  name="mesazhi" cols="50" placeholder="Enter the text here"></textarea>
            </fieldset>

            <fieldset>
                <p>Upload what you think it is important</p>
                <input type="file" name="filename" />
            </fieldset>

            <div id="submitbutton">
                <button type="submit" name="submit" id="submit">Send your application</button>
            </div>


        </form>
        </from>
    </div>
  
    

</section>
<?php

include './components/footer.php' ?>

<script>
    const navToggle = document.querySelector(".nav-toggle");
    const navLinks = document.querySelectorAll(".nav__link");

    navToggle.addEventListener("click", () => {
        document.body.classList.toggle('nav-open');
    });

    navLinks.forEach(link => {
        link.addEventListener("click", () => {
            document.body.classList.remove("nav-open");
        });
    });


   
    
</script>
<body>

</body>
</html>