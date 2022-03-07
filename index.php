<?PHP
class calc{
    function plus($n1,$n2){
      return $result = $n1 + $n2;
    }
      
  function mini($n1,$n2){
   return $result = $n1 - $n2;
    }
    function multi($n1,$n2){
        return $result = $n1 * $n2;
    }
    function div($n1,$n2){
      return $result = $n1 / $n2;
    }
}
$calc = new Calc();
if( !empty($_POST['n1']) && !empty($_POST['n2'])){
  if(preg_match('/^[0-9]*$/', $_POST['n1']) && preg_match('/^[0-9]*$/',$_POST['n2'])){
       if(isset($_POST['plus'])){
         $cn = $calc->plus($_POST['n1'],$_POST['n2']);
         }
       if (isset($_POST['mini'])){
         $cn = $calc->mini($_POST['n1'],$_POST['n2']);
         }
       if(isset($_POST['multi'])){
         $cn = $calc->multi($_POST['n1'],$_POST['n2']);
         }
       if(isset($_POST['div'])){
         $cn = $calc->div($_POST['n1'],$_POST['n2']);
           }
          }else{
            $cn = "لطفا از کاراکتر مجاز استفاده کنید";
          }
} 
 else{
   $cn = "لطفا تمام فیلد هارا پر کنید";
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>mini calculations</title>
</head>
<body>
<div class="container">
    <div class="row" style="margin-top:-30px">
        <div class="col-md-7 mx-auto bg-dark rounded shadow mt-5">
            <div class="alert alert-dark text-center mt-3">ماشین حساب</div>
            <form method="post">
          <div class="form-group">
          <input type="text" class="form-control" placeholder="number1" name="n1">
          </div>
          <div class="form-group">
          <input type="text" class="form-control" placeholder="number2" name="n2">
          </div>
          <?PHP
          if($_SERVER["REQUEST_METHOD"] =="POST"){ ?>
          <div class='alert alert-primary text-center mt-3'><?PHP echo $cn ?></div>
          <?PHP } ?>
          <div class="form-group text-center">
          <button class="btn btn-danger" type="submit" name="plus">+</button>
          <button class="btn btn-info" type="submit"name="mini">-</button>
          <button class="btn btn-success" type="submit" name="multi">*</button>
          <button class="btn btn-warning" type="submit" name="div">/</button>
          </div>
            </form>
        </div>
    </div>
</div>    


</body>
</html>





