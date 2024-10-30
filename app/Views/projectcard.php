 <!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <title>Project1</title>
        <link rel="stylesheet" href="css/card.css">  
    </head>

    <body>
        <header>
            <nav class="navbar">
                <!-- Logo and App menu -->
                 <div class="navbar-left">
                    <div class="logo">
                        <img src="image/logoB.jpg"alt="App Logo" />
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
                                    <span>Rujhan Saeful's workspace</span>
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
                        <button href=""class="create-btn">Create</button>
                    </div>
                 </div>
                 <!-- search, notification -->
                <div class="navbar-right">
                    <div class="search-box">
                        <input type="text" placeholder="Search" />
                    </div>
                    <div class="notification">
                        <span class="icon">🔔</span>
                        <span class="badge">8</span>
                    </div>
                    <div class="user-icon">
                        <span>RS</span>
                    </div>
                </div>
            </nav>
        </header>

            <!-- sidebar-->
            <aside class="sidebar">
                <!-- user and workspace info-->
                 <div class="project-header">
                    <div class="user-icon">
                        <span>A</span>
                    </div>
                    <div class="workspace-info">
                        <h2>ARCAHV</h2>
                        <span>Free</span>
                    </div>
                 </div>

                 <!--Your Board Section-->
                 <div class="boards-section">
                    <h3>Your board</h3>
                    <ul>
                        <li class="add-board"><span class="icon">➕</span> Add Board</li>
                        <li class="board-item active">
                            <img src="project-image.png" alt="Project Image" class="board-img">
                            Project CURO
                        </li>
                    </ul>
                 </div>

                 <!-- Premium Button -->
                  <div class="Premium-section">
                    <button class="premium-btn">Try Premium Free</button>
                  </div>
            </aside>

            <div class="container">
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
        </div>
    </body>

</html>