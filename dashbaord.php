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
            <li><a href="#">Manage Users</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Manage Events</h1>

        <!-- Event Creation Form -->
        <form action="includes/dashbaord.inc.php" method="post">
            <input type="text" name="name" placeholder="Event Name" required>
            <textarea placeholder="Event Description" name = "description" required></textarea>
            <input type="text" placeholder="Event Location" name = "location" required>
            <input type="date" name="date" required>
            <label for="status">Choose Status:</label>
            <select name="status" id="status" required>
                <option value="Upcoming" selected>Upcoming</option>
                <option value="Ongoing">Ongoing</option>
                <option value="Completed">Completed</option>
                <option value="Cancelled">Cancelled</option>
            </select>
            
          
            <button type="submit">Add Event</button>
        </form>

        <!-- Events Table -->
        <table>
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>Sample Event</td>
                <td>2025-02-15</td>
                <td>This is a sample event.</td>
                <td>
                    <a href="#" class="edit-btn">Edit</a>
                    <a href="#" class="delete-btn">Delete</a>
                </td>
            </tr>
        </table>

        <!-- Event Editing Form -->
        <h2>Edit Event</h2>
        <form>
            <input type="text" value="Sample Event" required>
            <input type="date" value="2025-02-15" required>
            <textarea required>This is a sample event.</textarea>
            <button type="submit">Update Event</button>
        </form>
    </div>

</body>
</html>
