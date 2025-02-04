<?php
require_once "includes/db.inc.php";
require_once 'includes/session_config.php';
require_once "includes/dashboard_model.inc.php";
require_once 'includes/dashboard_view.inc.php';
$events = list_event($pdo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="#">Manage Events</a></li>
            <li><a href="users.php">Manage Users</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Manage Events</h1>

        <!-- Event Creation Form -->
        <form action="includes/dasbaord.inc.php" method="post">
            <input type="text" name="name" placeholder="Event Name" >
            <textarea placeholder="Event Description" name = "description"></textarea>
            <input type="text" placeholder="Event Location" name = "location">
            <input type="date" name="date">
            <label for="status">Choose Status:</label>
            <select name="status" id="status">
                <option value="Upcoming" selected>Upcoming</option>
                <option value="Ongoing">Ongoing</option>
                <option value="Completed">Completed</option>
                <option value="Cancelled">Cancelled</option>
            </select>
            
          
            <button type="submit">Add Event</button>
        </form>
        <?php
            check_signup_errors();
        ?>

<h2>Events List</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Description</th>
                <th>Location</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>

            <?php if (!empty($events)): ?>
                <?php foreach ($events as $event): ?>
                    <tr>
                        <td><?= htmlspecialchars($event['name']) ?></td>
                        <td><?= htmlspecialchars($event['date']) ?></td>
                        <td><?= htmlspecialchars($event['description']) ?></td>
                        <td><?= htmlspecialchars($event['location']) ?></td>
                        <td><?= htmlspecialchars($event['status']) ?></td>
                        <td>
                            <a href="edit_event.php?id=<?= $event['id'] ?>" class="edit-btn">Edit</a>
                            <a href="delete_event.php?id=<?= $event['id'] ?>" class="delete-btn" onclick="return confirm('Are you sure you want to delete this event?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="6">No events found.</td></tr>
            <?php endif; ?>
        </table>

        <!-- Event Editing Form -->
        <h2>Edit Event</h2>
        <form  action="includes/dashboard.inc2.php" method="post">
        <input type="text" name="name" placeholder="Event Name" >
            <textarea placeholder="Event Description" name = "description" ></textarea>
            <input type="text" placeholder="Event Location" name = "location">
            <input type="date" name="date" >
            <label for="status">Choose Status:</label>
            <select name="status" id="status">
                <option value="Upcoming" selected>Upcoming</option>
                <option value="Ongoing">Ongoing</option>
                <option value="Completed">Completed</option>
                <option value="Cancelled">Cancelled</option>
            </select>
            <button type="submit">Update Event</button>
        </form>
    </div>
    
</body>
</html>
