<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR</title>
</head>
<body>
<style>
*{
    margin: 0;
    padding: 0;

}
body{
    background-image: url("https://wallpaperaccess.com/full/13644.jpg");
    
    
    background-size: cover;
    background-position: center;
    /* margin-top: 0px; */
    
}
.main{
    width: 400px;
    margin: 100px auto 0px auto;
    margin-top: 30px;
}
.btnn{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border:none;
    margin-top: 30px;
    margin-left: 40px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;
}

.btnn:hover{
    background: #fff;
    color:#ff7200;
}

.btnn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}

h2{
    text-align: center;
    padding: 25px;
    font-family: Verdana;

}
.register{
    background-color: rgba(0,0,0,0.7);
    width: 150%;
    font-size: 20px;
    border-radius: 5px;
    border: 1px solid rgba(255,255,255,0.3);
    box-shadow: 2px 2px 15px rgba(0,0,0,0.3);
    color: #fff;
    margin: auto;

}

form#register{
    margin: 40px;
    margin-top: 10px;

}

label{
    font-family: Verdana;
    font-size: 18px;
    font-style: normal;
}

input#name{
    width:450px;
    border:1px solid #ddd;
    border-radius: 3px;
    outline: 0;
    padding: 7px;
    background-color: #fff;
    box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3);
}


#back{
    width: 100px;
    height: 40px;
    background: #ff7200;
    border:none;
    margin-top: 10px;
    margin-left: 20px;
    font-size: 18px;
   

}


#back a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}

#fam{
    color: #ff7200;
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top:-10px;
    text-align: center;
    letter-spacing: 4px;
    display: inline;
    margin-left: 250px;
}

.reg{
    width: 100%;
}



</style>






<button id="back"><a href="adminvehicle.php">HOME</a></button> 
    
 <div class="main">
        
        <div class="register">
        <h2>Enter Details Of New Car</h2>
        <form id="register"  action="upload.php" method="POST" enctype="multipart/form-data">    
          <label><font face="Verdana" size="5" color=white>Name of the car : </font></label>
            <br>
            <input type ="text" name="carname"
            id="name" placeholder="Enter Car Name" required>
            <br><br>

          <label><font face="Verdana" size="5" color=white>Fuel Type : </font></label>
            <br>
            <input type ="text" name="ftype"
            id="name" placeholder="Enter Fuel Type" required>
            <br><br>

          <label><font face="Verdana" size="5" color=white>Capacity : </font></label>
            <br>
            <input type="number" name="capacity" min="1"
            id="name" placeholder="Enter Capacity Of Car" required>
            <br><br>
            
          <label><font face="Verdana" size="5" color=white>Price : </font></label>
            <br>
            <input type="number" name="price" min="1"
            id="name" placeholder="Enter Price Of Car for One Day(in rupees)" required>
            <br><br>

          <label><font face="Verdana" size="5" color=white>Car Image : </font></label>
            <br>
            <input type="file" name="image" required>
           <br><br>

            <input type="submit" class="btnn"  value="ADD CAR" name="addcar">
            
        
        
        </input>
            
        </form>
        </div> 
    </div.main>
</body>
</html>