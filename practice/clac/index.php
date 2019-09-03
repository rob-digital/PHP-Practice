<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    </head>
    <body>
       

    <div class="row" style="
        
        align-items: center;
        position: absolute;
        top: 50%;
        z-index: 100;
        width: 100%;
        text-align: center;
        transform: translate(0, -100%);
      
        ">
        
        <form align="center" class="col s12" action="calculator.php" method="post"
        
        >
        <div 
        style="display: flex;
        align-items: center;">

                <div class="col s2"
                    style="width:20%;
                    border: 1px solid #333;
                    margin-left:25%"
                    >

                            <label for="firstNum"
                            style="padding-bottom: 2rem"
                            >First Number</label>

                            <input 
                            type="text" 
                            name="firstNum" 
                            id="firstNum"
                            class="toBeProcessed"
                            style="text-align: center;
                            font-size: 5em;
                            height: auto;
                            ">
                </div>

                <div class="col s2"
                    style="width:20%;
                    border: 1px solid #333;
                    margin-right:25%"
                    >

                            <label for="secondNum">Second Number</label>
                            <input 
                            class="toBeProcessed"
                            type="text" 
                            name="secondNum" 
                            id="secondNum"
                            style="text-align: center;
                            font-size: 5em;
                            height: auto;
                            ">
                            
                </div>
        </div>
<br>
                <button type="submit" name="add" class="btn-floating btn-large waves-effect waves-light red" ><i class="material-icons">add</i></button> 
                <button type="submit" name="sub" class="btn-floating btn-large waves-effect waves-light orange"><i class="material-icons">remove</i></button>  
                <button type="submit" name="mul" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">clear</i></button>  
                <button type="submit" name="div" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">border_horizontal</i></button>  
        </form>
        
            </div>
           
            
                    <p name="score" id="score">The value is
                       
                    </p>
                  
            
    </div>
         
        <script type="text/javascript" src="script.js" ></script>

    </body>
</html>
<?php


//require_once  'count.php';