<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Add these links to include Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1j76PVC5p6tp/q/s5KzSvN" crossorigin="anonymous">

<!-- Add this link to include Bootstrap JavaScript (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-OUk6gg/rOvtr3IH1XwnrAB5ssRzS2FpCzVbFzKlNmnFSY4iExr2k+5U3MI5H8mNd" crossorigin="anonymous"></script>

  <title>Document</title>
</head>
<body>
  <h1>ToucanTech</h1>
  <div class="card">
    <form action="/register" method="POST">
      @csrf
      <input name="name" type="text" placeholder="Name">
      <input name="email" type="text" placeholder="Email address">
      <input name="school" type="text" placeholder="School">
      <button>Register</button>
    </form>
  </div>
</body>
</html>
