<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Navbar</title>
    <link rel="stylesheet" href="css/sprint.css">
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
                    <a href="/" class="create-btn">Board</a>
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
                <div class="user-icon">
                    <span>RS</span>
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
            <nav class="nav-main">
                <div class="nav-main-left">
                    <div class="logo">
                        <img src="images/logo.jpg" alt="App Logo" />
                        <span>Project 1</span>
                    </div>
                </div>
                <div class="nav-main-right">
                    <button class="create-btn">Sprint</button>
                    <span class="menu-dots">⋮</span>
                </div>
            </nav>
            <div class="sprint-container">
                <!-- Pending Tasks -->
                <div class="task-group pending">
                    <div class="task-group-header">
                        <span class="status-label">PENDING</span>
                        <span class="task-count"><?= count($pendingTasks); ?></span>
                        <button class="add-task-btn">+ Add Task</button>
                    </div>
                    <?php foreach ($pendingTasks as $task): ?>
                        <div class="task-item">
                            <div class="task-name">
                                <span class="icon">🔵</span>
                                <span><?= esc($task['title']); ?></span>
                            </div>
                            <div class="task-due-date"><?= esc($task['deadline']); ?></div>
                            <div class="task-priority"><?= esc($task['status']); ?></div>
                            <span class="menu-dots">⋮</span>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- On Hold Tasks -->
                <div class="task-group on-hold">
                    <div class="task-group-header">
                        <span class="status-label">ON HOLD</span>
                        <span class="task-count"><?= count($onHoldTasks); ?></span>
                        <button class="add-task-btn">+ Add Task</button>
                    </div>
                    <?php foreach ($onHoldTasks as $task): ?>
                        <div class="task-item">
                            <div class="task-name">
                                <span class="icon">🟠</span>
                                <span><?= esc($task['title']); ?></span>
                            </div>
                            <div class="task-due-date"><?= esc($task['deadline']); ?></div>
                            <div class="task-priority"><?= esc($task['status']); ?></div>
                            <span class="menu-dots">⋮</span>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Completed Tasks -->
                <div class="task-group completed">
                    <div class="task-group-header">
                        <span class="status-label">COMPLETED</span>
                        <span class="task-count"><?= count($completedTasks); ?></span>
                        <button class="add-task-btn">+ Add Task</button>
                    </div>
                    <?php foreach ($completedTasks as $task): ?>
                        <div class="task-item">
                            <div class="task-name">
                                <span class="icon">🟢</span>
                                <span><?= esc($task['title']); ?></span>
                            </div>
                            <div class="task-due-date"><?= esc($task['deadline']); ?></div>
                            <div class="task-priority"><?= esc($task['status']); ?></div>
                            <span class="menu-dots">⋮</span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="create-sprint-container">
                <button class="create-sprint-btn">+ Create New Sprint</button>
            </div>
        </main>
    </div>
</body>
</html>