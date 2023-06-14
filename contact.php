<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>SMS API</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <link rel="stylesheet" href="style.css">


</head>
<body class="bg-dark">
  <div class="container mt-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-5 bg-light rounded mt-5">
        <h1 class="text-center font-weight-bold text-primary pt-4">SMS app</h1>
        <hr class="bg-light">
        <form action="sms.php" method="post" id="form-box" class="pb-2">
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-phone"></i></i></span>
            </div>
            <input type="number" id="number" name="number" class="form-control" placeholder="Mobile Number" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-comment-alt"></i></span>
            </div>
            <textarea name="text" id="text" class="form-control" placeholder="Message" cols="30" rows="4" required></textarea>
          </div>
          <div class="form-group pt-3"> 
          <button type="submit" name="submit" id="submit" class="btn btn-primary">
            <span>SEND <i class="fas fa-paper-plane"></i></span>
            <div class="success">
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  viewBox="0 0 29.756 29.756" style="enable-background:new 0 0 29.756 29.756;" xml:space="preserve">  
              <path d="M29.049,5.009L28.19,4.151c-0.943-0.945-2.488-0.945-3.434,0L10.172,18.737l-5.175-5.173   c-0.943-0.944-2.489-0.944-3.432,0.001l-0.858,0.857c-0.943,0.944-0.943,2.489,0,3.433l7.744,7.752   c0.944,0.943,2.489,0.943,3.433,0L29.049,8.442C29.991,7.498,29.991,5.953,29.049,5.009z"/>
            </svg>
              </div>
          </button>
          <!-- <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block">SEND <i class="fas fa-paper-plane"></i></button> -->
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</html>