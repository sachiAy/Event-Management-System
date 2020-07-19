<!DOCTYPE html>
<html>
    <head>
    <style>
    .button {
        background-color: blue; 
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }
            
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial;
    }

    .header {
        text-align: center;
        padding: 32px;
    }

    .row {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
        padding: 0 4px;
    }

    /* Create four equal columns that sits next to each other */
    .column {
        -ms-flex: 25%; /* IE10 */
        flex: 25%;
        max-width: 25%;
        padding: 0 4px;
    }

    .column img {
        margin-top: 8px;
        vertical-align: middle;
    }

    /* Responsive layout - makes a two column-layout instead of four columns */
    @media screen and (max-width: 800px) {
        .column {
            -ms-flex: 50%;
            flex: 50%;
            max-width: 50%;
        }
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .column {
            -ms-flex: 100%;
            flex: 100%;
            max-width: 100%;
        }
    }
    </style>
</head>
<body>
    <body background="./img/bc.jpg">
        <table align="right">
                <td><a href="homepage.php"><input type="button" class="button" value="HOME"/></a><br></td>
                <td><a href="login.php"><input type="button" class="button" value="ABOUT"/></a><br></td>
                <td><a href="help.html"><input type="button" class="button" value="HELP"/></a><br></td>
                <td><a href="logout.php"><input type="button" class="button" value="LOG OUT"/></a><br></td>
        </table>
        <!-- Header -->
        <div class="header">
        <h1>Photos by Himash</h1>
        
        </div>

        <!-- Photo Grid -->
        <div class="row"> 
        <div class="column">
            <img src="./img/1.jpg" style="width:100%">
            <img src="./img/2.jpg" style="width:100%">
            <img src="./img/3.jpg" style="width:100%">
            <img src="./img/4.jpg" style="width:100%">
            
            
            
        </div>
        <div class="column">
            <img src="./img/8.jpg" style="width:100%">
            <img src="./img/9.jpg" style="width:100%">
            <img src="./img/10.jpg" style="width:100%">
            <img src="./img/11.jpg" style="width:100%">
            <img src="./img/12.jpg" style="width:100%">
            <img src="./img/13.jpg" style="width:100%">
        </div>  
        <div class="column">
            <img src="./img/14.jpg" style="width:100%">
            <img src="./img/15.jpg" style="width:100%">
            <img src="./img/16.jpg" style="width:100%">
            <img src="./img/17.jpg" style="width:100%">
            
            
            
        </div>
        <div class="column">
        <img src="./img/20.jpg" style="width:100%">
            <img src="./img/19.jpg" style="width:100%">
        <img src="./img/18.jpg" style="width:100%">
            <img src="./img/7.jpg" style="width:100%">
            
        </div>
        </div>

    </body>
</html>