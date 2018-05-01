  <img class="icon" src="images/about-girl.png" width="80" height="60"> 
  <img class="icon" src="images/bg15.jpg" width="80" height="60"> 
    <img class="icon" src="images/bg8.jpg" width="80" height="60"> 
  <img class="icon" src="images/block16.jpg" width="80" height="60"> 
  <br><br><br><br>

  <img id="main" src="images/about-girl.png" width="400" height="300"> 



<script type="text/javascript">
  
  var icons = document.getElementsByClassName("icon");
      for(var i=0; i<icons.length; i++) {
        icons[i].onclick = function(){
            document.getElementById("main").src = this.src;
          }
      }

</script>