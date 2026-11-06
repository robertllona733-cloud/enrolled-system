<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>School Enrollment System</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="homepage.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">

        <div class="logo">
            <h2>Student</h2>
        </div>

        <ul>
            <li><a href="homepage.php" class="active">Home</a></li>
            <li><a href="user.php">My Status</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="#" onclick="openLogout()">Logout</a></li>
        </ul>

    </div>

    <!-- Main Content -->
    <div class="main-content">

        <!-- Navbar -->
        <header class="topbar">
            <h1>BlueWave Academy</h1>

            <div class="top-buttons">
                <a href="home.php" class="btn-primary">Enroll Now</a>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="hero">

            <div class="hero-text">
                <h2>Welcome to the Online Enrollment Portal</h2>

                <p>
                    Start your academic journey with a modern and
                    easy enrollment experience. Apply online,
                    track your admission status, and manage your
                    student profile in one place.
                </p>

                <div class="hero-buttons">
                    <a href="register.php" class="btn-primary">Get Started</a>
                    <a href="user.php" class="btn-secondary">Check Status</a>
                </div>
            </div>

            <div class="hero-image">
                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=1200&auto=format&fit=crop" alt="Students">
            </div>

        </section>

        <!-- Features -->
        <section class="features">

            <div class="section-title">
                <h2>Why Choose Our School?</h2>
                <p>Providing quality education and modern learning tools.</p>
            </div>

            <div class="feature-cards">

                <div class="card">
                    <div class="icon">📘</div>
                    <h3>Quality Education</h3>
                    <p>
                        Experienced teachers and student-centered learning.
                    </p>
                </div>

                <div class="card">
                    <div class="icon">💻</div>
                    <h3>Online Enrollment</h3>
                    <p>
                        Fast and convenient registration anytime, anywhere.
                    </p>
                </div>

                <div class="card">
                    <div class="icon">🏫</div>
                    <h3>Modern Campus</h3>
                    <p>
                        Advanced facilities for better education and growth.
                    </p>
                </div>

            </div>

        </section>

        <!-- CTA -->
        <section class="cta">
            <h2>Admissions Open for 2026</h2>
            <p>Secure your future today by enrolling with us.</p>

            <a href="register.php" class="btn-primary">
                Apply for Enrollment
            </a>
        </section>

    </div>

    <script>
        function openLogout() {
            alert("Logout function here.");
        }
    </script>

</body>
</html>