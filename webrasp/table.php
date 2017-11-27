
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"></link>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<title>Watering Web</title>
</head>
<body>

    <h1>Plant Watering Project</h1>
    <div class ="row">
    <div class="w3-top">
    <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
        <a href="/webrasp/main.html" class="w3-button w3-block w3-black">หน้าหลัก</a>
    </div>
    <div class="w3-col s3">
        <a href="/webrasp/water.php" class="w3-button w3-block w3-black">รดน้ำต้นไม้</a>
    </div>
    <div class="w3-col s3">
        <a href="/webrasp/table.php" class="w3-button w3-block w3-black">ประวัติการรดน้ำ</a>
    </div>
    <div class="w3-col s3">
        <a href="/webrasp/instruction.php" class="w3-button w3-block w3-black">วิธีการใช้งาน</a>
    </div>
    </div>
    </div>
</div>
    <!-- <div  class="col-sm">
        <a class ="btn btn-primary" href="/water.php" role="button">Home</a><br>
        <a class ="btn btn-primary" href="/water.php" role="button">หน้าต่างรดน้ำต้นไม้</a><br>
        <a class ="btn btn-primary" href="/table.php" role="button">หน้าต่างแสดงค่า</a><br>
        <a class ="btn btn-primary" href="/instruction.php" role="button">คำแนะนำ</a><br>
    </div> -->
    <div class="container"><br><br>
    <h4 align="center">ตารางแสดงค่ารดน้ำ</h4>
    <div class="row">
        <div class="col-sm" >
            <table id="example" class="display" cellspacing="0" width="100%">
                <thread>
                    <tr>
                        <th>water</th>
                        <th>updatetime</th>
                        <th>timecontrol</th>
                    </tr>
                </thread>
            </table>
        </div>
    </div>
    </div>
    <div class="col-sm">
       
    </div>    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function(){
        $('#example').DataTable( {
            "searching":false,
            "ordering":false,
            "lengthChange":false,
            
            "ajax": 'querywater.php',
     
            "columnDefs": [
                { "title": "Water",  "data":"water", "targets": 0 },
                { "title": "Time", "data":'timecontrol', "targets": 1 },
                { "title": "TimeStamp", "data":'updatetime',"targets": 2 }
                
            ]
        } );

        $("#validate").click(function(){
            
            // console.log($("#valueinsert").val());
            sendquery($("#valueinsert").val());
            // $(this).hide();
        });
    });

    function sendquery(input){
        // var data = "key=query"
        $.post( "executepy.php",{data:input} ).done(function(data){
            console.log(data);
        });
    }
</script>
</html>
