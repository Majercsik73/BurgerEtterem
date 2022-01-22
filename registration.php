
<?php
    $conn = new mysqli("localhost","root","","burgeretterem");
    // $sql = "SELECT * FROM felhasznalo";
    // $result = $conn->query($sql);

    // if($_SERVER["REQUEST_METHOD"] == "POST")
    // {
    //     if(isset($_POST["id"]))
    //     {
    //         $id = $_POST["id"];
    //         $torolcmd = "DELETE FROM erme WHERE ermeid = $id";
    //         $conn->query($torolcmd);
    //         header("Refresh:0");
    //     }
    // }



    // $valasz = "";

    $firstName = "";
    $lastName = "";
    $zipCode = "";
    $city = "";
    $street = "";
    $houseNumber = "";
    $email = "";
    $phone = "";
    $password = "";
    $rePassword = "";
    
    // $usertext = "Kiskakas";
    // $pswtext = "ABC_123";
    

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset($_POST['firstname']) && !empty($_POST['firstname']))
			$firstName = $_POST['firstname'];
        if(isset($_POST['lastname']) && !empty($_POST['lastname']))
			$lastName = $_POST['lastname'];

        $fullName = $firstName." ".$lastName;

        if(isset($_POST['zipcode']) && !empty($_POST['zipcode']))
			$zipCode = $_POST['zipcode'];
        if(isset($_POST['city']) && !empty($_POST['city']))
			$city = $_POST['city'];
        if(isset($_POST['street']) && !empty($_POST['street']))
			$street = $_POST['street'];
        if(isset($_POST['housenum']) && !empty($_POST['housenum']))
            $houseNumber = $_POST['housenum'];

        $fullAddress = $zipCode." ".$city." ".$street." ".$houseNumber;

        if(isset($_POST['email']) && !empty($_POST['email']))
            $email = $_POST['email'];
        if(isset($_POST['phone']) && !empty($_POST['phone']))
            $phone = $_POST['phone'];

        if(isset($_POST['password']) && !empty($_POST['password']))
            $password = $_POST['password'];
        if(isset($_POST['repassword']) && !empty($_POST['repassword']))
            $rePassword = $_POST['repassword'];


        if($fullName && $fullAddress && $email && $password && $rePassword)
        {
            if($password == $rePassword)
            {
                //$id = "";
                $pwhash = md5($password);
                $authorize = 0;
                $sql = "INSERT INTO felhasznalo (nev, lak, tel, email, jog, pw) VALUES (".$fullName.", ".$fullAddress.", ".$phone.", ".$email.", ".$authorize.", ".$pwhash.")";
                // $sql = "INSERT INTO felhasznalo (nev, lak, tel, email, jog, pw) VALUES ('$fullName', '$fullAddress', '$phone', '$email', '$authorize', '$pwhash')";

                // $result = mysqli_query($conn, $sql);
                $result = $conn->query($sql);
                // $id++;
                // echo "Sikeres regisztráció!";
            }
        }

        $conn->close();


        
        // if($user == $usertext)
        //     if($psw == $pswtext)
        //         $valasz = "Belépés engedélyezve";
        //     else
        //         $valasz = "Helytelen jelszó";
        // else
        //     $valasz = ("Helytelen jelszó");
    }
?>






<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
      .wrapper
      {
          display: flex;
          flex-direction: column;
          vertical-align: middle;
          margin-top: 15%;
      }
      .content
      {
          display: flex;
          justify-content: center;
          vertical-align: middle;
          margin-top: 30px;
      }
      #send
      {
          text-align: center;
          margin-left: 50%;
          margin-right: auto;
          margin-top: 30px;
          justify-content: center;
          /* padding: 10px; */
      }
      .label
      {
          margin-left: 20px;
          font-size: large;
      }
      h1
      {
        text-align: center;
      }
      table,th,tr,td
      {
        /* border: 1px solid black; */
      }
    </style>
    <title>Regisztráció</title>
  </head>


  <body>

    <div class="wrapper">
      <div class="content">
        <form action="registration.php" method="post">
            <table class="content">
                <tr>
                    <th colspan="9"><h1>Regisztráció</h1></th>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: right;">
                        <label for="firstname" class="label">Vezetéknév: </label>
                    </td>
                    <td>
                        <input type="text" id="firstname" name="firstname" required/>
                    </td>
                    <td colspan="2" style="text-align: right;">
                        <label for="lastname" class="label">Keresztnév: </label>
                    </td>
                    <td>
                        <input type="text" id="lastname" name="lastname" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="zipcode" class="label">Irányítószám: </label>
                    </td>
                    <td>
                        <input type="number" id="zipcode" name="zipcode" max="9999" required/>
                    </td>
                    <td style="text-align: right;">
                        <label for="city" class="label">Város: </label>
                    </td>
                    <td >
                        <input type="text" id="city" name="city" required/>
                    </td>
                    <td>
                        
                    </td>
                    <td style="text-align: right;">
                        <label for="street" class="label">Utca: </label>
                    </td>
                    <td>
                        <input type="text" id="street" name="street" required/>
                    </td>
                    <td>
                        <label for="housenum" class="label">Házszám: </label>
                    </td>
                    <td>
                        <input type="number" id="housenum" name="housenum" max="1999" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td colspan="2" style="text-align: right;">
                        <label for="email" class="label">Email: </label>
                    </td>
                    <td >
                        <input type="email" id="email" name="email" required/>
                    </td>
                    <td colspan="2" style="text-align: right;">
                        <label for="phone" class="label">Telefon: </label>
                    </td>
                    <td>
                        <input type="tel" id="phone" name="phone" placeholder="06-30-123-4567" pattern="[0-9]{2}-[0-9]{2}-[0-9]{3}-[0-9]{4}"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td colspan="2" style="text-align: right;">
                        <label for="password" class="label">Jelszó: </label>
                    </td>
                    <td>
                        <input type="password" id="password" name="password" required/>
                    </td>
                    <td colspan="2" style="text-align: right;">
                        <label for="repassword" class="label">Jelszó újra: </label>
                    </td>
                    <td>
                        <input type="password" id="repassword" name="repassword" required/>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input type="button" id="send" value="Vissza">
                    </td>
                    <td colspan="5">
                        <input type="submit" id="send" value="Elküld">
                    </td>
                </tr>
            </table>


          <!-- <button id="send">Elküld</button> -->
          

        </form> 
      </div>
    </div>





    
    


  </body>
</html>