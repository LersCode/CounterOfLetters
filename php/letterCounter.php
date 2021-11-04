<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CounterOfLetters</title>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="styles.6227730b5ba152f73865.css">
</head>
<body>
<div class="header">
    <a href="/">
        <p class="logo"><span>Count</span>er&nbsp;of&nbsp;<span>Letters</span></p>
    </a>
</div>
<div class="form">
    <h1 class="heading">Counter</h1>
    <p class="info">Fill in the letter you are searching and the word you want to search in.</p>
    <?php
    //caqlculate lettercount
    $count = substr_count($_POST['word'], $_POST['letter']);
    //if count > 0 fontcolor is green, else its red
    if($count>0){
        echo '<p class="text" style="color:#2ecc71">';
    }else{
        echo '<p class="text" style="color:#e74c3c">';
    }   
    //output the result sentence    
    echo ($count.'x');
        
    echo '</p>';
    ?>
   <a href="/"><input type="button" class="button" value="count again"></a>
</div>
<div class="footer">
    <p class="footer-text">©&nbsp;Copyright</p>
</div>

<style>
.header{
    display: block;
    background-color: #ffffff;
    border: 0px solid #e67e22;
    border-bottom-width: 3px;
    padding: 1%;
}
p.logo{
    font-size: 2rem;
    color: #34495e;
    font-family: "Bebas", sans-serif;
    font-weight: bold;
    margin: 0;    
}
span{
        color: #e67e22;
    }
.form{
    background-color: #ffffff;
    position: absolute;
    max-width: 400px;
    height: 400px;
    padding: 2%;
    border: 2px solid #e67e22;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    margin: auto;
    border-radius: 10px;
    text-align: center;
    font-family: "Bebas", sans-serif;
}
h1.heading{
    margin-top: 0;
    color: #34495e;
}
    

p.info{
    visibility: hidden;
    width: 90%;
    margin: auto;
    margin-bottom: 5%;
    text-align: center;
    font-family: "Lato", sans-serif;
    color: #34495e;
}   
.text,.button{
    font-size: 1.5rem;
}       

.text{
    width: 90%;
    height: 50px;
    /*border-radius: 10px;
    border: 2px solid #34495e;*/
    margin: 2% 0;
    /*color: #34495e;*/
    font-family: "Lato", sans-serif;
}
.button,
.button:visited{
    width: 50%;
    height: 50px;
    border-radius: 10px;
    border: 2px solid #34495e;
    margin: 5% 0;
    color: #ffffff;
    font-family: "Bebas", sans-serif;
    background-color: #34495e;
    cursor: pointer;
}
.button:active,
.button:hover{
    background-color: #e67e22;
    border-color: #e67e22;
}
.text:focus,
.button:focus{
    outline: none;
    border: 2px solid #e67e22;
}

.footer{
    display: flex;
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 50px;
    background-color: #ffffff;
    border: 0px solid #e67e22;  
    border-top-width: 3px;
}
p{
    font-size: 1rem;
    color: #95a5a6;
    margin: auto 1%;
    font-family: "Bebas", sans-serif;
    font-weight: bold;
}
</style>
</body>
</html>

