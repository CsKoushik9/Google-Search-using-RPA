<html>
    <head>
        <title>Home Page</title>
        <style>
           
          
body{
    margin-top: 40px;
  font-family: 'Lato', sans-serif;
   
}
div.foo{
  width: 90%;
  margin: 0 auto;
  text-align: center;
}
.letter{
  display: inline-block;
  font-weight: 900;
  font-size: 8em;
  margin: 0.2em;
  position: relative;
  color: blue;
  transform-style: preserve-3d;
  perspective: 400;
  z-index: 1;
}
.letter:before, .letter:after{
  position:absolute;
  content: attr(data-letter);
  transform-origin: top left;
  top:0;
  left:0;
}
.letter, .letter:before, .letter:after{
  transition: all 0.3s ease-in-out;
}
.letter:before{
  color: #fff;
  text-shadow: 
    -1px 0px 1px blue,
    1px 0px 1px blue;
  z-index: 3;
  transform:
    rotateX(0deg)
    rotateY(-15deg)
    rotateZ(0deg);
}
.letter:after{
  color: rgba(0,0,0,.11);
  z-index:2;
  transform:
    scale(1.08,1)
    rotateX(0deg)
    rotateY(0deg)
    rotateZ(0deg)
    skew(0deg,1deg);
}
.letter:hover:before{
  color: blue;
  transform:
    rotateX(0deg)
    rotateY(-40deg)
    rotateZ(0deg);
}
.letter:hover:after{
  transform:
    scale(1.08,1)
    rotateX(0deg)
    rotateY(40deg)
    rotateZ(0deg)
    skew(0deg,22deg);
}
p{
    color: blue;
    font-size: 20px;
}
#search{
     
     border-radius: 55px; padding: 0px; border: 1px solid aquamarine;
}
#but{
    position: relative;
    top: -42px;
    left: 330px;
    width: 50px; 
    
}
        </style>
    </head>
    <BODY>
    <center>
        <div class="foo">
  <span class="letter" data-letter="C">C</span><span class="letter" data-letter="S">S</span><span class="letter" data-letter="K">K</span><br/><br/><br/>
        </div>
        <form action="index.php" method="GET">
        <input style="height:35px; width: 600px;font-size:14pt;border-radius: 25px; padding: 10px; border: 1px solid blue;" type="text" name="searc" placeholder="Search here.......">
        <div id="but"><button id="search"><img src="https://img.icons8.com/flat_round/64/000000/circled-right-2.png" height="45px"></button></div>
        <br/><br/><br/><br/><br/><br/><br/><hr>
        </form>
        <p>Copyright @Cs Koushik<br><br/>
            <a href="https://www.linkedin.com/in/cs-koushik-70854b170/?originalSubdomain=in">View Linkedin Profile</a></p>
    </center>
    </BODY>
</html>