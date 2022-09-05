<?php require_once 'baglan.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>GUI</title>
   
</head>
<body>



<div class="container">
        <div class="row">
            <div style="margin: 40px auto;width:50%;" class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">GUI PANEL</div>
                </div>
                <div class="panel-body">
                    <form action="islem.php" method="POST">
                        <div style="margin-bottom:25px;" class="input-group">
                            Username : <input  type="text" name="kullaniciadi">
                        </div>
                        <div style="margin-bottom:25px;" class="input-group">
                            Lastname : <input  type="text" name="soyadi">
                        </div>
                        <input type="submit" class="btn btn-primary" name="insertislemi" value="DatabaseWrite">
                    </form>
                </div>
                <div class="panel-footer">
                <input type="submit" class="btn btn-success list" value="DatabaseRead">
            
                </div>
            </div>
        </div>
    </div>
    <?php 


        if(array_key_exists('durum',$_GET)&&$_GET['durum']=="ok"){
           // echo "işlem başarılı";
        }elseif(array_key_exists('durum',$_GET)&&$_GET['durum']=="no"){
            echo "işlem başarısız";

        
        }

    ?>    


   
    <table border="1" style="margin:0 auto;width: 60%; border-collapse: collapse;display:none;">
        <tr>
            <th>ID</th>
            <th>AD</th>
            <th>SOYAD</th>
            
        </tr>
        <?php

        $bilgilerisor=$db->prepare("SELECT * from information");
        $bilgilerisor->execute();

        while( $bilgilericek=$bilgilerisor->fetch(PDO::FETCH_ASSOC)){?>

        

            <tr>
                <td><?php echo $bilgilericek['id']?></td>
                <td><?php echo $bilgilericek['kullaniciadi']?></td>
                <td><?php echo $bilgilericek['soyadi']?></td>
            </tr>

        <?php } ?>
    </table>
    <script>
        $(document).ready(function(){
            $(".list").click(function() {
                $("table").toggle();


            });
            
           
        });    
    </script>    

</body>
</html>