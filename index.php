<title>GETTING REAL IP OF THE VISITOR</title>
<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:100);
    body{
        background: #34495e;
        text-align: center;
        font-size:20px;
        margin-top:100px;
        color:white;
        font-family:'Raleway', sans-serif;
    }

    .submit{
        width:105px;
        height:30px;
        background: #2dffdf;
        font-size: 17px;
        color:black;
        font-family: monospace;
    }
    input#userInput{
        height:30px;
        width: 250px;
        font-size: 15px;
        color:black;
    }
    a{
        color:white;
        text-decoration: underline;
    }
</style>


<?php 
if(isset($_POST["name"])){
    $name = $_POST["name"];
    if( !empty($name)){
        $handle = fopen("name.txt" , "a");
        fwrite($handle, $name."\n"); 
        fclose($handle);
        $gettingName = file("name.txt");
        $count = 0;
        echo "<strong>Names you already put: </strong>";
        //getting the file from the array
        foreach ($gettingName as $names){
            $names = trim($names);
            $nameCount = count($gettingName);
            echo $names;
            if( $count < $nameCount ){
                echo ", ";
            }
            $count++ ;
        }
    }
}


?>

<h1>Please name the file that you want to create</h1>
<form method="POST">
   <input type="text" name="name" id="userInput">
   <input type="submit" value="Creat file" name="createCommand" class="submit">

</form>