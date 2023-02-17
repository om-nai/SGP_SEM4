<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['name'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    
    <script src="https://kit.fontawesome.com/421e558d95.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="ui.css">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
    crossorigin="anonymous" />
</head>
    <body>
    <nav class="navbar navbar-expand-rg navbar-dark bg-body-tertiary bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">FIX-IT</a>
    <a class="navbar-brand" href="#">hello, <?php echo $_SESSION['name']; ?> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li> -->
        <li class="nav-item">
          <!-- <a  href="#">Pricing</a> -->
          <a class="nav-link" href="logout.php">LOGOUT</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
      </ul>
    </div>
  </div>
</nav>

<main>
      <section id="new-complaint">
        <h2>Submit a New Complaint</h2>
        <form action="submit-complaint.php" method="post">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="complaint">Complaint:</label>
            <textarea id="complaint" name="complaint" class="form-control" required></textarea>
          </div>
          <input type="submit" value="Submit Complaint" class="btn btn-primary">
        </form>
      </section>
      <section id="view-complaints">
        <h2>View Complaints</h2>
        <table>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Complaint</th>
            <th>Status</th>
          </tr>
          <!-- Add PHP code here to fetch and display complaint records from the database -->
        </table>
      </section>
    </main>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
  crossorigin="anonymous"></script>
    </body>
    </html>
    <?php
}else{
    header("Location: index.php");
    exit();
}
?>