<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Navbar</title>
    <link rel="stylesheet" href="css/project.css">
    </head>
<body>
    <header>
        <nav class="navbar">
            <!-- Logo and App Menu -->
            <div class="navbar-left">
                <div class="logo">
                    <img src="images/logoB.jpg" alt="App Logo" />
                    <span>CURO</span>
                </div>
                <div class="navbar-menu">
                    <div class="dropdown">
                        <button class="dropbtn">Folder Project ▼</button>
                        <div class="dropdown-content">
                            <div class="dropdown-header">Current Folder</div>
                            <div class="workspace-item">
                                <div class="workspace-icon">A</div>
                                <span>ARCAHV</span>
                            </div>
                            <div class="dropdown-header">Your Folder</div>
                            <div class="workspace-item">
                                <div class="workspace-icon">A</div>
                                <span>ARCAHV</span>
                            </div>
                            <div class="workspace-item">
                                <div class="workspace-icon">R</div>
                                <span>Rujhan Saeful's Workspace</span>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Recent ▼</button>
                        <div class="dropdown-content">
                            <div class="workspace-item">
                                <div class="workspace-icon">PC</div>
                                <span>Project CURO</span>
                            </div>
                        </div>
                    </div>
                    <a href="/add-task" class="create-btn">Create</a>
                </div>
            </div>
            <!-- Search, Notifications -->
            <div class="navbar-right">
                <div class="search-box">
                    <input type="text" placeholder="Search" />
                </div>
                <div class="notification">
                    <span class="icon">🔔</span>
                    <span class="badge">8</span>
                </div>
                <div class="dropdown">
                    <div class="user-icon" onclick="toggleUserMenu()">
                        <span>RS</span>
                    </div>
                    <div class="dropdown-content" id="userMenu">
                        <a href="/profile/<?= session()->get('username') ?>">View Profile</a>
                        <a href="/settings">Settings</a>
                        <a href="/logout">Logout</a>  <!-- Logout Link -->
                    </div>
                </div>
           </div>
        </nav>
    </header>

    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <!-- User and Workspace Info -->
            <div class="project-header">
                <div class="user-icon">
                    <span>A</span>
                </div>
                <div class="workspace-info">
                    <h2>ARCAHV</h2>
                    <span>Free</span>
                </div>
            </div>

            <!-- Navigation -->
            <div class="navigation">
                <ul>
                    <li><span class="icon">📋</span> Boards</li>
                    <li><span class="icon">👥</span> Members <span class="add-icon">+</span></li>
                    <li class="expandable">
                        <span class="icon">⚙️</span> Workspace settings
                        <ul class="sub-menu">
                            <li><span class="icon">📊</span> Table</li>
                            <li><span class="icon">📅</span> Calendar</li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Your Boards Section -->
            <div class="boards-section">
                <h3>Your boards</h3>
                <ul>
                    <li class="add-board"><span class="icon">➕</span> Add Board</li>
                    <li class="board-item active">
                        <img src="project-image.png" alt="Project Image" class="board-img">
                        Project CURO
                    </li>
                </ul>
            </div>

            <!-- Premium Button -->
            <div class="premium-section">
                <button class="premium-btn">Try Premium free</button>
            </div>
            

        </aside>

        <!-- Main content (optional for your use) -->
        <main class="main-content">
            <div class="container-card">
                <div class="card">
                    <h2>Front-End Job</h2>
                    <ul>
                        <li>View Register</li>
                        <li>View Login</li>
                        <li>View Fitur</li>
                    </ul>
                </div>
                <div class="card">
                    <h2>Back-End Job</h2>
                    <ul>
                        <li>content DB</li>
                        <li>Control</li>
                        <li>40% Beres, sisa manipulasi data</li>
                    </ul>
                </div>
            </div>
        </main>
    </div>
</body>
</html>