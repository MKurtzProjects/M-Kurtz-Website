

<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8"> 
    <?php require_once'about.php'; ?>
    <?php require_once'resume.php'; ?>
  	<title>Mike Kurtz</title> <link href='http://fonts.googleapis.com/css?family=Bowlby+One+SC' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script type="text/javascript">
<!--
    function aboutfunction() {
          resume.style.display = 'none';
          bio.style.display = 'block';
          document.getElementById('test').style = 'background-color: red; color: orange; font-size: 44px';
        }

  function resumefunction() {
          bio.style.display = 'none';
          resume.style.display = 'block';
          document.getElementById(p).style = 'background-color: red; color: orange; font-size: 44px';
        }


    </script>

  </head>

  <body>



  <div id="header">

    <div id="logo">
		  <h1 id="name1">Michael</h1>
		  <h2 id="name2">Kurtz</h2>
    </div>
        
  </div>
      

  <div id="main">

    <div id="summary">
      <h3> Michael Kurtz </h3>


    </div>

    <div id="mikephoto">
      <img src="/images/OutdoorsMike2.png" alt="some_text">

    </div>

    <div id="switch_area">
      <ul id="menu">
        <li> <a href="#" onclick="resumefunction(test)" id='test'> Resume </a> </li>
        <li> <a href="#" onclick="aboutfunction()"> About Mike </a> </li>
      </ul>
      <br>
      <br>
      <br>
  
<div id=resume> <?=$resume?> </div>

  <div id='bio'>
    <h3> About Mike </h3>
      <p> Mike Kurtz is a Senior Product Manager at the Boston-based software company, <a href='http://www.crimsonhexagon.com/'> Crimson Hexagon</a>.</p>

      <p> Mike began working at Crimson Hexagon, a leading social media analytics provider, in the summer of 2010.  During the previous year, Mike had conducted independent research at Muhlenberg College in the realm of sociology of the internet.  Crimson Hexagon, with its origins at Harvard University's School of Quanitative Social Science, was the ideal place to begin a career at the intersection of social analysis and web technology. </p>

      <p> Since arriving at Crimson Hexagon, Mike has held positions in both Client Services and Product Management, where he has led the succesful launch of innovative new product features. </p>

      <p> Outside of his professional life, Mike is an active musician and songwriter.  Mike currently lives in in Somerville, MA, where he can be found playing an open mic, chearing on his all-star kickball team, or roaming the streets of Boston with a bubble tea in hand.</p>
    </div>


    </div>


    <div id="footer">
      
      <div id ="social">
        <h6 id="follow"> Follow Me On: </h6>
        <a href="https:/facebook.com/mike.kurtz1/"><img src="/images/facebook.png"></a> 
        <a href="https://twitter.com/Mike_Kurtz/"><img src="/images/twitter.png"></a> 
      </div>
    </div>
  </div>

</body>
</html>