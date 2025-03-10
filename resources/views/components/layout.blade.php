<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie Mania</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/style.css">
  </head>

  <body>
    <!-- Your Navbar Here -->
    <x-navbar />

    <!-- Main content goes here -->
    {{ $slot }}

    <!-- Bootstrap JS (Including Popper.js for dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <!-- Initialize all dropdowns manually -->
    <script>
      document.querySelectorAll('.dropdown-toggle').forEach(function (dropdown) {
        new bootstrap.Dropdown(dropdown);
      });
    </script>
  </body>
</html>



  



