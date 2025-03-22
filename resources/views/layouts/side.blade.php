<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Bootstrap 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Sidebar Styling */
        #sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 60px;
            transition: all 0.3s;
        }
        #sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }
        #sidebar a:hover {
            background-color: #495057;
        }
        #toggleSidebar {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1000;
        }
    </style>
</head>
<body>

    <!-- Toggle Button -->
    <button class="btn btn-dark" id="toggleSidebar">☰</button>

    <!-- Sidebar -->
    <div id="sidebar">
        <a href="http://127.0.0.1:8000/landing">🏠 Landing</a>
        <a href="http://127.0.0.1:8000/profile">📁 Profile</a>
        <a href="#">📊 Reports</a>
        <a href="#">⚙ Settings</a>
        <a href="#">❓ Help</a>
    </div>

    <!-- JavaScript for Sidebar Toggle -->
    <script>
        document.getElementById("toggleSidebar").addEventListener("click", function () {
            let sidebar = document.getElementById("sidebar");
            if (sidebar.style.width === "250px") {
                sidebar.style.width = "0";
            } else {
                sidebar.style.width = "250px";
            }
        });
    </script>

</body>
</html>