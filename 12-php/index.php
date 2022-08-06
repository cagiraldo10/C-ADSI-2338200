<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?="Main Menu (PHP)" ?> </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-primary bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">PHP & Bootstrap V5</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Main Menu</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
            <?php echo "<h1 class='mt-5'>Main Menu (PHP)</h1>";?>
            <hr>
            <div class="btn-group-vertical" role="group" aria-label="Vertical button group" style="width: 24rem">
                <a href="01-hello-world.php"                class="btn btn-lg btn-outline-danger text-start"><span                                  class="badge rounded-pill bg-danger">01</span> Hello World</a>
                <a href="02-info.php"                       class="btn btn-lg btn-outline-danger text-start" target= "_blank"><span                 class="badge rounded-pill bg-danger">02</span> Info</a>
                <a href="03-comments.php"                   class="btn btn-lg btn-outline-danger text-start"><span                                  class="badge rounded-pill bg-danger">03</span> Comments</a>
                <a href="04-variables.php"                  class="btn btn-lg btn-outline-danger text-start"><span                                  class="badge rounded-pill bg-danger">04</span> Variables</a>
                <a href="05-strings.php"                    class="btn btn-lg btn-outline-danger text-start"><span                                  class="badge rounded-pill bg-danger">05</span> Strings</a>
                <a href="06-oper-arithmetics.php"           class="btn btn-lg btn-outline-danger text-start"><span                                  class="badge rounded-pill bg-danger">06</span> Oper Arithmetics</a>
                <a href="07-oper-assignment.php"            class="btn btn-lg btn-outline-danger text-start"><span                                  class="badge rounded-pill bg-danger">07</span> Oper Assignment</a>
                <a href="08-oper-comparison.php"            class="btn btn-lg btn-outline-danger text-start"><span                                  class="badge rounded-pill bg-danger">08</span> Oper Comparison</a>
                <a href="09-oper-logics.php"                class="btn btn-lg btn-outline-danger text-start"><span                                  class="badge rounded-pill bg-danger">09</span> Oper Logics</a>
                <a href="10-conditional-if.php"             class="btn btn-lg btn-outline-danger text-start"><span                                  class="badge rounded-pill bg-danger">10</span> Conditional If</a>
                <a href="11-conditional-switch.php"         class="btn btn-lg btn-outline-danger text-start"><span                                  class="badge rounded-pill bg-danger">11</span> Conditional Switch</a>
                <a href="12-arrays-index-numeric.php"       class="btn btn-lg btn-outline-danger text-start"><span                                  class="badge rounded-pill bg-danger">12</span> Arrays Index Numeric</a>
                <a href="13-arrays-associative.php"         class="btn btn-lg btn-outline-danger text-start"><span                                  class="badge rounded-pill bg-danger">13</span> Arrays Associative</a>
                <a href="14-arrays-multi.php"               class="btn btn-lg btn-outline-danger text-start"><span                                  class="badge rounded-pill bg-danger">14</span> Arrays Multi</a>
                <a href="15-loop-while.php"                 class="btn btn-lg btn-outline-danger text-start"><span                                  class="badge rounded-pill bg-danger">15</span> Loop While</a>
                <a href="16-loop-dowhile.php"               class="btn btn-lg btn-outline-danger text-start"><span                                  class="badge rounded-pill bg-danger">16</span> Loop Dowhile</a>
                <a href="17-loop-for.php"                   class="btn btn-lg btn-outline-danger text-start"><span                                  class="badge rounded-pill bg-danger">17</span> Loop For</a>
                <a href="18-loop-foreach.php"               class="btn btn-lg btn-outline-danger text-start"><span                                  class="badge rounded-pill bg-danger">18</span> Loop Foreach</a>
                <a href="19-functions.php"                  class="btn btn-lg btn-outline-danger text-start"><span                                  class="badge rounded-pill bg-danger">19</span> Functions</a>
                <a href="20-functions-params.php"           class="btn btn-lg btn-outline-danger text-start"><span                                  class="badge rounded-pill bg-danger">20</span> Functions Params</a>
            </div>
            </div>
        </div>
    
    </main>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>