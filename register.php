<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        font-family: 'Poppins', sans-serif;
        box-sizing: border-box;
    }
    body{
       
        color:black;
       background-color: #fff;
    }
    section{
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        /* background-color: blue; */
    }
.card-container{
    display: flex;
    flex-direction: column;
    justify-content: center;
    /* text-align: center; */
    align-items:center;
    /* border:1px solid black; */
    /* height:400px; */
    width: 280px;
    /* margin:auto; */
    /* /* background-color: #073579 ;
     */
     background-image: -webkit-linear-gradient(0deg, #ee390f 0%, #f9b700 100%);
    border-radius: 10px;
    box-shadow: 0px 0px 20px 10px rgba(210,208,208,0.5);
-webkit-box-shadow: 0px 0px 20px 10px rgba(210,208,208,0.5);
-moz-box-shadow: 0px 0px 20px 10px rgba(210,208,208,0.5);
    
}
input{
    border-radius:5px;
    border:1px solid grey;
    height: 30px;
    width:180px;
    padding:0px;
    text-align: center;
}
label{
    text-align: center;
    margin: auto;
}
.input-field{
    /* width:180px; */
    padding:5px 5px 10px  5px;
    margin: auto;
    /* font-size: 10px; */
    /* background-color: blue; */
}
.radio{
    text-align: center;
    justify-content: center;
    align-items: center;
    display: inline-flex;
    margin: auto;
   overflow: hidden;
}
.radio input{
    width: 15px;
}
.radio-label{
  
    padding:0px 5px 0px 5px;
}
div button{
    display: block;
    border-radius: 5px;
    border:1px solid transparent;
    background-color: rgb(255, 72, 6);
    box-shadow: 0px 0px 20px 10px rgba(210,208,208,0.1);
-webkit-box-shadow: 0px 0px 20px 10px rgba(210,208,208,0.1);
-moz-box-shadow: 0px 0px 20px 10px rgba(210,208,208,0.1);
cursor: pointer;
    font-size:10px;
    color: #fff;
    text-align: center;
    margin: auto;
    padding: 5px;
margin-bottom: 10px;
}

/* responsiveness */

@media screen and (min-width:768px) and (max-width:1440px) {
    .card-container{
       
        width: 400px;
       
    }
   
    .card-container .card-item .radio .radio-label{
        font-size:17px;
        
    }
    .card-container .card-item .radio{
    margin-left:10px;
    }
    div button{
        font-size: 20px;
        
    }
    .card-container .register h1{
        font-size:30px;
    }
    .card-container .card-item .input-field{
        padding: 10px;
    }
}

/* @media screen and (max-width:1024px) {
    .card-container{
        margin: auto;
        width: 100px;
        height: 180px;
    }
    .input-field{
        width: 100px;
        height: 15px;
    }
    div button{
        font-size: 15px;
        
    }
    label{
font-size: medium;
    }
    .card-item h1{
        font-size:large;
        margin-top: 10px;
    }
}

@media screen and (max-width:2560px) {
    .card-container{
       
        margin:auto;
        width: 300px;
        height: 450px;
    }
    .input-field{
        width:100px;
        height: 40px;
    }
    div button{
        font-size: 10px;
       
        
    }
    label{
font-size: large;
    }
    .radio-label{
        font-size: medium;
    }
    .card-item h1{
        font-size:x-large;
        margin-top: 10px;
    }
} */

</style>
<body>
    <section>
    <div class="card-container"><br>
        <div class="register"><h1>Register here!</h1></div><br>
        <div class="card-item">
            <form action="register.php" id="register" method="POST">
              
                <div class="input-field"><input type="text" name="name" placeholder="Enter Your Name" required></div>
                
              <div class="radio" >
                  <input type="radio" class="radio-input" value="class12" name="radioname" id="class" required>
                  <label for="class" class="radio-label">Class 12</label>
                  <input type="radio" class="radio-input" value="Dropper" name="radioname" id="dropper">
                  <label for="dropper" class="radio-label">Dropper</label>
              </div>
                
                
                <div class="input-field"><input type="email" placeholder="Enter Your Email" name="emailaddress" required>
                </div>
                
               
                <div class="input-field"><input type="tel" placeholder=" Neet Enrollment Number" name="enrollment_number">
                </div>
               
               <div class="input-field"> <input type="tel" name="mobile_number" placeholder="Enter Your Mobile Number" required>
               </div>
               
                <div class="input-field"><input type="text" name="username" placeholder="Enter Your Username" required>
                </div>
              
                <div class="input-field"><input type="password" name="password" placeholder="Enter Your Password" required>
                </div>

               <div > <button type="submit" name="submit" id="submit-button" >Submit</button></div>

            </form>

        </div>
      




    </div>
</section>
<script>
    // document.getElementById('submit-button').addEventListener('click',alertme());
    // function alertme(){
    //     alert("You have successfully registered!");
    // };
</script>

</body>
</html>

<?php include 'server.php';



?>
