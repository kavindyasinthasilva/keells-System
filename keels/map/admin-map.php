
<?php
include_once 'header.php';
include_once 'locations_model.php';
?>


<div id="map"></div>

<!------ Include the above in your HEAD tag ---------->
<script>
    var map;
    var marker;
    var infowindow;
    var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
    var purple_icon =  'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png' ;
    var locations = <?php get_all_locations() ?>;
   
    function initMap() {
        var france = {lat:  6.785277702704765, lng: 80.11392854687506};
        infowindow = new google.maps.InfoWindow();
        map = new google.maps.Map(document.getElementById('map'), {
            center: france,
            zoom: 8,
            mapId: '8271b18eb74b62e4'
        });


        var i ; var confirmed = 0;
        for (i = 0; i < locations.length; i++) {

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                animation: google.maps.Animation.DROP,
                icon :   locations[i][11] === '1' ?  red_icon  : purple_icon,
                html: document.getElementById('form')
            });


         

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    confirmed =  locations[i][11] === '1' ?  'checked'  :  0;
                    $("#location_status").prop(confirmed,locations[i][10]);
                    $("#id").val(locations[i][0]);
                    $("#description").val(locations[i][3]);
                    $("#email").val(locations[i][4]);
                    $("#phone").val(locations[i][5]);
                    $("#image").attr( "src","../uploads/"+locations[i][6]+".jpg");
                    $("#city").val(locations[i][7]);
                    $("#category").val(locations[i][8]);
                    $("#amount").val(locations[i][9]);
                    $("#area").val(locations[i][10]);
                    $("#location_status").val(locations[i][11]);
                    $("#form").show();
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }

 


</script>


<div style="display: none" id="form"  >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">    

<div class="container" style="background-color: #61bc47;">
    <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src=""  id="image">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">ODER<i class="material-icons right"></i></span>

        
        <h5>Username:</h5>
          <textarea disabled id='description' placeholder='Description'></textarea>
  
     
  
            <h5>Email:</h5>
         <textarea disabled id='email' placeholder='email'></textarea>
    

       
      
            <h5>phone:</h5>
           <textarea disabled id='phone' placeholder='phone'></textarea>

           
           <h5>city:</h5>
           <textarea disabled id='city' placeholder='city'></textarea>

           <h5>category:</h5>
           <textarea disabled id='category' placeholder='category'></textarea>

           <h5>Amount:</h5>
           <textarea disabled id='amount' placeholder='amount'></textarea>

           <h5>Area:</h5>
           <textarea disabled id='area' placeholder='area'></textarea>

           <h5>location_status:</h5>
           <textarea disabled id='location_status' placeholder='location_status'></textarea>

            <textarea disabled id='id' placeholder='id' style="display: none;"></textarea>

           <a href=""  class="myButton"   id='id1'  onClick="myFunction()" >Edit</a>
           <script>  

function myFunction() {

  var person = prompt("Enter Price", "RS100");
  var id=document.getElementById("id").value;

 if (confirm("Do You want confirm")) {
  s = 1;
} else {
  s = 0;
}

document.getElementById("id1").href='conf.php?price='+ person +'&conf='+s+ '&id='+id; 


  




}
         
          
          
          </script>

           
       
        
        </p>
      </div>
     
    </div>
  </div>

  <style>
             
             .myButton {
        box-shadow: 0px 10px 14px -7px #3e7327;
        background-color:#77b55a;
        border-radius:4px;
        border:1px solid #4b8f29;
        display:inline-block;
        cursor:pointer;
        color:#ffffff;
        font-family:Arial;
        font-size:13px;
        font-weight:bold;
        padding:12px 28px;
        text-decoration:none;
        text-shadow:0px 1px 0px #5b8a3c;
      }
      .myButton:hover {
        background-color:#72b352;
      }
      .myButton:active {
        position:relative;
        top:1px;
      }
      
      
      
             </style>
      
        
        

 
    
</div>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqyQucrB0MzSqxh-AS0iBAnqRec7MQwto&map_ids=8271b18eb74b62e4&callback=initMap">


</script>
<style>

textarea{

border: none;
background-color: #fff;
font-size: 30px;
color: #000;


}






</style>