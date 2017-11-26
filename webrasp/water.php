
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<title>Watering Web</title>
</head>
<body>
<div class ="row">
    <div class="w3-top">
    <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
        <a href="/webrasp/main.html" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
        <a href="/webrasp/water.php" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s3">
        <a href="/webrasp/table.php" class="w3-button w3-block w3-black">MENU</a>
    </div>
    <div class="w3-col s3">
        <a href="#where" class="w3-button w3-block w3-black">WHERE</a>
    </div>
    </div>
    </div>
</div>
    <div class ="row">
        <div class="container">
        <div class="col-sm" align ="center" >
            <!-- <input id="valueinsert" value="" > --><br><br><br><br>
            <h4> กำหนดเวลาที่ต้องการลดน้ำต้นไม้</h4>
            <input type="text" id="textInput" style="text-align:center;" value="50" size="6" disabled> s
            <input type="range" onchange="updateTextInput(this.value)" id="valueinsert" min="0" max="100" />
            
            <button id ="validate" >เลือก</button> 
        </div>
    </div>
</div>   
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">กรุณาทำการยืนยัน</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="modalmsg"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ไม่ยืนยัน</button>
        <button type="button" id="accept"class="btn btn-primary">ยืนยัน</button>
      </div>
    </div>
  </div>
</div> 
</body>
<footer>
<br>
<div align="center">
<img src="waterr2.jpg" alt="Smiley face" height="200" width="400"></div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        console.log("hellogg");
        $("#validate").click(function(){
            $("#myModal").modal("show");
            $("#modalmsg").text("กำลังจะลดน้ำที่เป็นเวลา "+$("#valueinsert").val()+" s");
            // $(this).hide();
        });
        $("#accept").click(function(){
            sendquery($("#valueinsert").val());
            window.location.href = "main.html";
        });
    });

    function updateTextInput(val) {
          document.getElementById('textInput').value=val; 
        }

    function sendquery(input){
        console.log(input);
        // var data = "key=query"
        $.post( "executepy.php",{data:input} ).done(function(data){
            console.log(data);
        });
    }
</script>
</html>
