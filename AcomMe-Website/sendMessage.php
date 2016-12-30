<?php
include "header.php";
include "navbar.php";
if(isset($_GET['city']) && isset($_GET['DateRange']) && isset($_GET['people'])){
    if(isset($_POST['advanceSearch'])){
        $date = explode(' - ',$_POST['DateRange']);
        if(!isset($_POST['isHave'])){
            $_POST['isHave'] = array();
        }
        $results = AdvanceSearch($_POST['city'], $date[0], $date[1], $_POST['people'], $_POST['isHave'], $_POST['minPrice'], $_POST['maxPrice']);
    }else{
        $date = explode(' - ',$_GET['DateRange']);
        $results = search($_GET['city'], $date[0], $date[1], $_GET['people']);
    }


}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 main-page">
            <form method="POST" enctype="multipart/form-data">
              <div class"col-md-6 col-md-6-offset-3">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="To: " name="reciever">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Message Title" name="message-title">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="info" rows="12" placeholder="Message "></textarea>
                </div>
                  <button type="submit" class="btn btn-info">SendMessage</button>
                  <button type="submit" class="btn btn-info">Discard</button><!--Sayfayı Temizleyecek-->
              </div>
            </form>
        </div>
    </div>
<?php
include "footer.php";
?>
