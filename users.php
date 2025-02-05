<?php
require_once "includes/db.inc.php";
require_once 'includes/session_config.php';
require_once "includes/users_model.inc.php";
require_once 'includes/users_view.inc.php';
$users = list_users($pdo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="#">Manage Users</a></li>
            <li><a href="dashbaord.php">Manage Events</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Manage Users</h1>

        <!-- Event Creation Form -->
        <form action="includes/users.inc.php" method="post">
        <input type="text" name="name" placeholder=" Name" >
                    <input type="email" name="email" placeholder="Email" >
                    <input type="password" name="password" placeholder="Password">
            <label for="role">Choose Role:</label>
            <select name="role" id="role">
                <option value="admin" selected>Admin</option>
                <option value="user">User</option>
               
            </select>
            
          
            <button type="submit">Add User</button>
        </form>
        <?php
            check_signup_errors();
        ?>

<h2>User List</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
              
                <th>Actions</th>
            </tr>

            <?php if (!empty($users)): ?>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= htmlspecialchars($user['id']) ?></td>
                        <td><?= htmlspecialchars($user['name']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                        <td><?= htmlspecialchars($user['password']) ?></td>

                        <td><?= htmlspecialchars($user['role']) ?></td>
                 
                        <td>
                            <a href="edit_event.php?id=<?= $event['id'] ?>" class="edit-btn">Edit</a>
                            <a href="includes/delete_users.php?id=<?= $user['id'] ?>" class="delete-btn" onclick="return confirm('Are you sure you want to delete this event?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="6">No users found.</td></tr>
            <?php endif; ?>
        </table>

        <!-- Event Editing Form -->
        <h2>Edit Event</h2>
        <form  action="includes/users.inc2.php" method="post">
        <input type="text" name="name" placeholder=" Name" >
                    <input type="email" name="email" placeholder="Email" >
                    <input type="password" name="password" placeholder="Password">
            <label for="role">Choose Role:</label>
            <select name="role" id="role">
                <option value="admin" selected>Admin</option>
                <option value="user">User</option>
               
            </select>
            
         
            <button type="submit">Update Event</button>
        </form>
    </div>
    
</body>
</html>
