

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<h1>CIAO <?php echo $greetings ?> </h1>

<div class="container">
    <form action="censura.php" method="get">
    <div class="mb-3">
        <label for="paragraph" class="form-label">paragraph</label>
        <input type="text" name="paragraph" id="paragraph" class="form-control" placeholder="paragrafo" aria-describeby="paragraphHelper">
        <small id="paragraphHelper" class="text-muted">Just type your paragraph here </small>
    </div>
    <div class="mb-3">
        <label for="censura" class="form-label">parola da ***</label>
        <input type="text" name="censura" id="censura" class="form-control" placeholder="censura" aria-describeby="censuraHelper">
        <small id="censuraHelper" class="text-muted">Just type your paragraph here </small>
    </div>
<button type="submit" class="btn btn-primary">Submit</button>
<button type="reset" class="btn btn-danger">Reset</button>
    </form>
  
</div>

</body>
</html>