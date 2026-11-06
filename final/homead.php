<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<!-- LOGOUT POPUP -->

<div id="logoutPopup" class="popup-overlay">

    <div class="popup-box">

        <h2>Logout</h2>

        <p>
            Are you sure you want to logout?
        </p>

        <div class="popup-buttons">

            <button class="cancel-btn"
            onclick="closeLogoutPopup()">
                Cancel
            </button>

            <a href="index.php" class="logout-btn">
                Logout
            </a>

        </div>

    </div>

</div>

<script>

function openLogoutPopup(){
    document.getElementById("logoutPopup").style.display = "flex";
}

function closeLogoutPopup(){
    document.getElementById("logoutPopup").style.display = "none";
}

</script>
<body>

<div class="dashboard">

   
    <div class="sidebar">
        <h2>Admin</h2>
        <ul>
            <li><a href="homead.php" class="active">Dashboard</a></li>
            <li><a href="enrolled.php">Enrolled</a></li>
            <li><a href="archive.php">Archive</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="settings.php">Settings</a></li>
             <li>
               <a href="#" onclick="openLogoutPopup()">
                Logout
                </a>
            </li>
        </ul>
    </div>


    <div class="main">

     
        <div class="topbar">
            <h1>Dashboard</h1>
        </div>

        <div class="cards">
            <div class="card">
                <h3>Total Students</h3>
                <p>120</p>
            </div>

            <div class="card">
                <h3>Courses</h3>
                <p>8</p>
            </div>

            <div class="card">
                <h3>New Registrations</h3>
                <p>15</p>
            </div>
        </div>

        
        <div class="table-box">
            <h2>Recent Students</h2>
            <iframe src="view.php"></iframe>
        </div>

    </div>

</div>

</body>
</html>