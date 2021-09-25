<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
  
</head>
<body>

<?php include 'menu.php'; ?>

<section class="-5 " >
    <div class="py-5">
        <h2 class="text-center" >Contact Us</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label for=""> USRNAME </label>
                <input type="text" name="user" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label for=""> EMAIL </label>
                <input type="text" name="Email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label for=""> MOBILE </label>
                <input type="number" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label for=""> COMMENTS </label>
                <textarea name="Comments" id="" class="form-control " ></textarea>
            </div>
            <button type="submit" class="btn btn-warning" (onclick=myfun())>Submit</button>
           
        </form>
    </div>
</section>

<!-- <footer class="footer" >
    <p class="p-3 bg-dark text-white text-center" >@ZaidSayedProduction</p>
</footer> -->
<?php include 'footer.php'; ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>