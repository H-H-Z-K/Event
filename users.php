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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="styleuser.css">
  </head>
  <body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="#">Manage Users</a></li>
            <li><a href="dashbaord.php">Manage Events</a></li>
            <li><a href="tickets.php">Manage Tickets</a></li>
            <li><a href="login.php">Logout</a></li>
     </ul>
    </div>

    <!-- Main Content -->
   <div class="main-content">
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
                            <a href="includes/delte_users.php?id=<?= $user['id'] ?>" class="delete-btn" onclick="return confirm('Are you sure you want to delete this event?');"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="6">No users found.</td></tr>
            <?php endif; ?>
     </table>
  </div>

  <div class="button-container">
    <button class="edit-user-btn" onclick="document.getElementById('editUserForm').style.display='block'">✎</button>
    <button class="add-user-btn" onclick="document.getElementById('addUserForm').style.display='block'">+</button>
</div>




     <!-- Event Creation Form -->
    <div id="addUserForm" class="modal">
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
             <button type="button" onclick="document.getElementById('addUserForm').style.display='none'">Cancel</button>
        </form>
     </div>

       <!-- Event Editing Form -->
   <div id="editUserForm" class="modal">
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
         <button type="button" onclick="document.getElementById('editUserForm').style.display='none'">Cancel</button>
        </form>
     </div>
     <style>
        .button-container {
    position: fixed;
    display: flex;
    gap: 50px; /* Adds spacing between buttons */
}

/* Floating Buttons */
.add-user-btn, .edit-user-btn {
    width: 60px;
    height: 60px;
    font-size: 24px;
    color: white;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    transition: 0.3s;
}

.add-user-btn {
    background: black;
}

.add-user-btn:hover {
    background: #16A085;
}

.edit-user-btn {
    background: black;
}

.edit-user-btn:hover {
    background: #16A085;
}

     </style>
</body>
</html>
