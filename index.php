<?php

require ('secretkey.php');

$key = i0();



?>

<!DOCTYPE html>
<html>
<head>
    <title>Api call</title>

    

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
<div>
    <form method="post" action="" id="form">
        <div class="form-group">
            <label for="exampleInputEmail1">Make Payment</label>
            <input type="text" class="form-control col-lg-6" id="amount" name="amount" aria-describedby="emailHelp" placeholder="amount">
            <input type="text" class="form-control col-lg-6" id="id"  name="student_id" aria-describedby="emailHelp"  placeholder="Enter ID">
            
            <input type="hidden" class="form-control" id="key" name="secret_key" value="<?= isset($key)?($key):'' ?>" aria-describedby="emailHelp" placeholder=" email">

        </div>


        <button type="submit" id="btn1" name="payment" class="btn btn-primary">Make Payment</button>
    </form>
</div>
<script src="ajax.js"></script>
</body>
</html>