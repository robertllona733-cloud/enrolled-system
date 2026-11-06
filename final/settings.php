<!DOCTYPE html>
<html>
<head>
    <title>Settings</title>
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

    <!-- SIDEBAR -->
    <div class="sidebar">

        <h2>Admin</h2>

        <ul>
            <li><a href="homead.php">Dashboard</a></li>
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

    <!-- MAIN -->
    <div class="main">

        <!-- TOPBAR -->
        <div class="topbar">
            <h1>Settings</h1>
        </div>

        <!-- SETTINGS CARD -->
        <div class="table-box">

            <h2>Admin Settings</h2>

            <form class="settings-form">

                <div class="input-group">
                    <label>Admin Name</label>
                    <input type="text" placeholder="Enter admin name">
                </div>

                <div class="input-group">
                    <label>Email Address</label>
                    <input type="email" placeholder="Enter email">
                </div>

                <div class="input-group">
                    <label>New Password</label>
                    <input type="password" placeholder="Enter new password">
                </div>

                <div class="input-group">
                    <label>Confirm Password</label>
                    <input type="password" placeholder="Confirm password">
                </div>

                <button type="submit" class="btn">
                    Save Changes
                </button>

            </form>

        </div>

    </div>

</div>

</body>
</html>