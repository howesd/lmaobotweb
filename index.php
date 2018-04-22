
<!DOCTYPE html>
<html>
<head>
  <title>LMAOBot</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="LMAOBot is an innovative Discord bot equipped with a dank soundboard. You can use Discord's chat function to give lmaobot commands, to which the bot sends a response. lmaobot uses the lmao prefix.">
  <link rel="stylesheet" href="w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="lmaobot.jpg"/>
</head>
<style>
body {font-family: "Lato", sans-serif}
.smallScreenNav {display: none}
</style>
<body>

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-black w3-card">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="#" class="w3-bar-item w3-button w3-padding-large">LMAOBOT</a>
      <a href="#commands" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right">COMMANDS</a>
      <a href="#invite" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right">INVITE</a>
    </div>
  </div>

  <!-- Navbar on small screens -->
  <div id="smallScreenNav" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="#invite" class="w3-bar-item w3-button w3-padding-large">INVITE</a>
    <a href="#commands" class="w3-bar-item w3-button w3-padding-large">COMMANDS</a>
  </div>

  <!-- Page content -->
  <div class="w3-content" style="max-width:2000px;margin-top:46px">

    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
     <img src="lmaobot.jpg" alt="Image of LMAOBot" style="border-radius: 50%; width: 30%; height: 30%">
     <h2 class="w3-wide">LMAOBOT</h2>
     <p class="w3-opacity"><i>A dank Discord bot with an even danker soundboard.</i></p>
     <p class="w3-justify w3-center">LMAOBot is a bot like no other. LMAOBot comes equipped with a dank soundboard to which you can upload your own custom sounds from YouTube to. Other users can access your sounds, from anywhere in Discord. There are tonnes of fun commands to use, ranging from random memes from reddit to checking how gay and dank you are, to trolling your friends with earrape sounds, LMAOBot has it all.</p>
     
     <img src="https://discordbots.org/api/widget/398413630149885952.svg?sanitize=true" alt="Statistics">

     <div class="w3-row w3-padding-32">
       <p class="w3-center">DEVELOPERS</p>
       <hr class="w3-border-grey" style="margin:auto; width:50%; border-color: #e80d48!important">
       <br>
       <div class="w3-quarter">
         <a href="https://discordbots.org/user/223919574536552449">
          <img class="w3-hover-opacity" src="https://cdn.discordapp.com/avatars/223919574536552449/508ff71c135909c17f5a9e2971c32f67.png?size=128" class="w3-round w3-margin-bottom" alt="Pete's avatar" style="width:60%; border-radius: 50%;">
        </a>
        <p>Pete#4164</p>
      </div>
      <div class="w3-quarter">
      	<a href="https://discordbots.org/user/219204779426054146">
         <img class="w3-hover-opacity" src="https://cdn.discordapp.com/avatars/219204779426054146/936408859a3de2530f397d3f8d06ccf6.png?size=128" class="w3-round w3-margin-bottom" alt="Dim's avatar" style="width:60%; border-radius: 50%;">
       </a>
       <p>Dim#4657</p>
     </div>
     <div class="w3-quarter">
       <a href="https://discordbots.org/user/198255568882761728">
         <img class="w3-hover-opacity" src="https://cdn.discordapp.com/avatars/198255568882761728/7ccb876faba04a570a605cd65e0fed31.png?size=128" class="w3-round w3-margin-bottom" alt="Clark's avatar" style="width:60%; border-radius: 50%;">
       </a>
       <p>Clark thy Lord#7042</p>
     </div>
     <div class="w3-quarter">
       <a href="https://discordbots.org/user/199810482574458881">
         <img class="w3-hover-opacity" src="https://cdn.discordapp.com/avatars/199810482574458881/e557a164835d5c6b5184db234208a840.png?size=128" class="w3-round w3-margin-bottom" alt="Clark's avatar" style="width:60%; border-radius: 50%;">
       </a>
       <p>NumerX#4587</p>
     </div>
   </div>
   <div id="invite" class="w3-container w3-content w3-center w3-padding-64">
    <div class="w3-half">
      <p><button class="w3-button w3-xlarge w3-black" onclick="window.location.href = 'https://discordapp.com/oauth2/authorize/?permissions=1341643969&scope=bot&client_id=398413630149885952'">Invite LMAOBot to your server!</button></p>
    </div>
    <div class="w3-half">
      <p><button class="w3-button w3-xlarge w3-black" onclick="window.location.href = 'https://discord.gg/aQ25yFy'">Join LMAOBot's support server!</button></p>
    </div>
  </div>
  <div class="w3-container w3-content w3-center" id="commands">
    <h2 class="w3-wide">COMMANDS</h2>
    <table class="w3-responsive w3-table-all w3-center w3-hoverable">
      <tr>
        <td style="color:red !important;" class="w3-left">Sound commands:</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
       <th>Command</th>
       <th>Info</th>
       <th>Usage</th>
     </tr>
     <tr>
      <td>addsound</td>
      <td>add a sound to the soundboard.</td>
      <td>lmao addsound (sound name) (youtube url)</td>
    </tr>
    <tr>
      <td>listsounds</td>
      <td>view all available sounds.</td>
      <td>lmao listsounds</td>
    </tr>
    <tr>
      <td>listpopularsounds</td>
      <td>view the most popular used sounds.</td>
      <td>lmao listpopularsounds</td>
    </tr>
    <tr>
      <td>playsound</td>
      <td>play a sound from the soundboard.</td>
      <td>lmao playsound (sound name)</td>
    </tr>
    <tr>
      <td>soundinfo</td>
      <td>view information on a sound.</td>
      <td>lmao soundinfo (sound name)</td>
    </tr>
    <tr>
      <td>mysounds</td>
      <td>view your sounds.</td>
      <td>lmao mysounds (sound name)</td>
    </tr>
    <tr>
      <td>deletesound</td>
      <td>delete your own sound.</td>
      <td>lmao deletesound (sound name)</td>
    </tr>
    <tr>
     <td style="color:red !important;" class="w3-left">Fun commands:</td>
     <td></td>
     <td></td>
   </tr>
   <tr>
    <td>agree</td>
    <td>make the bot agree with you.</td>
    <td>lmao agree</td>
  </tr>
  <tr>
    <td style="color:red !important;">NEW! deepfriedmeme</td>
    <td>get a nice deep fried meme from reddit.com/r/deepfriedmemes.</td>
    <td>lmao deepfriedmeme</td>
  </tr>
  <td>dankrate</td>
  <td>rates you on a scale from 1-100% dank.</td>
  <td>lmao dankrate</td>
  <tr>   
    <td>gayrate</td>
    <td>rates you on a scale from 1-100% gay.</td>
    <td>lmao gayrate</td>
  </tr>
  <tr>
    <td>8ball</td>
    <td>ask the 8ball a question.</td>
    <td>lmao 8ball (question)</td>
  </tr>
  <tr>
    <td>pun</td>
    <td>sends a random pun to the chat.</td>
    <td>lmao pun</td>
  </tr>
  <tr>
    <td>roll</td>
    <td>rolls a 100 sided dice.</td>
    <td>lmao roll</td>
  </tr>
  <tr>
    <td>coinflip</td>
    <td>flips a coin.</td>
    <td>lmao coinflip</td>
  </tr>
  <tr>
    <td>ask</td>
    <td>ask lmaobot a question - replies with yes/no.</td>
    <td>lmao ask (question)</td>
  </tr>
  <tr>
    <td>chuck</td>
    <td>sends a random chuck norris joke to the chat.</td>
    <td>lmao chuck</td>
  </tr>
  <tr>
    <td>say</td>
    <td>make lmaobot say something.</td>
    <td>lmao say (message)</td>
  </tr>
  <tr>
    <td>magik</td>
    <td>fuck up your profile picture</td>
    <td>lmao magik</td>
  </tr>
  <tr>
   <td style="color:red !important;" class="w3-left">Images:</td>
   <td></td>
   <td></td>
 </tr>
 <tr>
  <td>doge</td>
  <td>sends doge image meme to the chat.</td>
  <td>lmao doge</td>
</tr>
<tr>
  <td>kappa</td>
  <td>sends kappa image meme to the chat.</td>
  <td>lmao kappa</td>
</tr>
<tr>
  <td>lenny</td>
  <td>sends lenny image meme to the chat.</td>
  <td>lmao lenny</td>
</tr>
<tr>
  <td>lol</td>
  <td>sends lol image meme to the chat.</td>
  <td>lmao lol</td>
</tr>
<tr>
  <td>megusta</td>
  <td>sends megusta image meme to the chat.</td>
  <td>lmao megusta</td>
</tr>
<tr>
  <td>pepe</td>
  <td>sends pepe image meme to the chat.</td>
  <td>lmao pepe</td>
</tr>
<tr>
  <td>sanic</td>
  <td>sends sanic image meme to the chat.</td>
  <td>lmao sanic</td>
</tr>
<tr>
  <td>spiderman</td>
  <td>sends spiderman image meme to the chat.</td>
  <td>lmao spiderman</td>
</tr>
<tr>
  <td>spooderman</td>
  <td>sends spooderman image meme to the chat.</td>
  <td>lmao spooderman</td>
</tr>
<tr>
  <td>troll</td>
  <td>sends troll image meme to the chat.</td>
  <td>lmao troll</td>
</tr>
<tr>
  <td>wat</td>
  <td>sends wat image meme to the chat.</td>
  <td>lmao wat</td>
</tr>
<tr>
  <td>dolan</td>
  <td>sends dolan image meme to the chat.</td>
  <td>lmao dolan</td>
</tr>
<tr>
  <td>notsure</td>
  <td>sends notsure image meme to the chat.</td>
  <td>lmao notsure</td>
</tr>
<tr>
  <td>alone</td>
  <td>sends alone image meme to the chat.</td>
  <td>lmao alone</td>
</tr>
<tr>
 <td style="color:red !important;" class="w3-left">Utilities:</td>
 <td></td>
 <td></td>
</tr>
<tr>
  <td>help</td>
  <td>lists all the available commands.</td>
  <td>lmao help</td>
</tr>
<tr>
  <td>donate</td>
  <td>gives you information on how to donate.</td>
  <td>lmao donate</td>
</tr>
<tr>
  <td>ping</td>
  <td>gets the bots connection to the server.</td>
  <td>lmao ping</td>
</tr>
<tr>
  <td>invite</td>
  <td>invite the bot to your server or join the support server.</td>
  <td>lmao invite</td>
</tr>
<tr>
  <td>info</td>
  <td>view how many servers and users are using LMAOBot.</td>
  <td>lmao info</td>
</tr>
<tr>
  <td>upvote</td>
  <td>upvote the bot to gain access to exclusive commands.</td>
  <td>lmao upvote</td>
</tr>
</table>

<h1 class="w3-center">More commands to come in future updates!</h1>
</div>
</div>

<!-- End Page Content -->
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <p class="w3-medium">&copy; LMAOBOT ALL RIGHTS RESERVED. <?php echo date("Y"); ?></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("smallScreenNav");
  for (i = 0; i < x.length; i++) {
   x[i].style.display = "none";  
 }
 myIndex++;
 if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
setTimeout(carousel, 4000);    
}


// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("smallScreenNav");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
}
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117753493-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117753493-1');
</script>

</body>
</html>
