<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Form</title>
    <link rel="stylesheet" href="css/add_task.css">
</head>
<body>
    <div class="navbar">
        <div class="navbar-left">
            <div class="logo"><img src="images/logoB.jpg" alt="Logo">CURO</div>
        </div>
        <div class="navbar-right">
            <div class="user-icon">A</div>
        </div>
    </div>
    <div class="container-card">
        <div class="card">
            <form action="<?= base_url('/add-task/save') ?>" method="post">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="deadline">Deadline:</label>
                    <input type="date" id="deadline" name="deadline" required>
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select id="status" name="status">
                        <option value="pending">Pending</option>
                        <option value="completed">Completed</option>
                        <option value="on_hold">On Hold</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit">Save Task</button>
                    <?= csrf_field() ?>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
