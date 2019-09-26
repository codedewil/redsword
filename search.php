<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
<style>
.row
{
    height: 1000px;
   background-image:url("red.jpg");
   background-repeat:no repeat;
   background-size:cover;
}
.b
{
  height:500px;
  width:500px;  
  border: 1px solid black;
  margin-top:150px;
  margin-left: 450px;
   padding:100px;
   align-content: center;
   background: linear-gradient(0deg,rgba(10, 10, 10, 0.3),rgba(10, 10, 10, 0.3));

}
.c
{
    padding-left:100px;
}
.d
{
    color: white;
    background-image: url("color.jfif");
}
</style>
</head>
<body>
<div class="row">
 <div class="b">
      <form name="form1" method="post" action="sample1.php">
          <h2 style="padding:30px;padding-left:80px;color:white;">SEARCH</h2>
    <label style="color:white;font-size: 20px">BLOOD:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="blood" required style="border-radius:12px;height:40px;">
   <br><br> 
    <label style="color:white ;font-size: 20px;">LOCATION:&nbsp;&nbsp;</label><input type="text" name="loc" required style="border-radius:12px;height:40px;">
      <br><br>
   <div class="c"> <button class="d">SUBMIT</button>&nbsp;
<a href="blooddonate.php" style="color:white;border:1px solid white;">BACK</a>
</div>
      </form>
</div>
  </div>

</body>
</html>