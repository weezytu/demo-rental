<?php
session_start();

// Check if the admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: Admin/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sidebar</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</head>
<body class="bg-white">
    <div class="flex">
        <aside id="sidebar" class="sidebar">
            <div class="sidebar-header">
                <h1 class="sidebar-title">Admin Sidebar</h1>
                <button id="sidebarToggle" class="toggle-btn">
                    <i class="fas fa-align-center"></i>
                </button>
            </div>

            <div class="sidebar-content">
                <div class="topic">
                    <h2>Dashboard</h2>
                    <ul>
                        <li class="subtopic"><button onclick="loadPage('Admin/Admindashboard.php')"><i class="fas fa-columns"></i> Dashboard</button></li>
                    </ul>
                </div>

                <div class="topic">
                    <h2>Account Operations</h2>
                    <ul>
                        <li class="subtopic"><button onclick="loadPage('Admin/create_account.php')"><i class="fas fa-user-plus"></i> Create Account</button></li>
                    </ul>
                </div>

                <div class="topic">
                    <h2>Property Operations</h2>
                    <ul>
                        <li class="subtopic"><button onclick="loadPage('Admin/Properties.php')"><i class="fas fa-home"></i> Properties</button></li>
                        <li class="subtopic"><button onclick="loadPage('Admin/Units.php')"><i class="fas fa-door-open"></i> Units</button></li>
                        <li class="subtopic"><button onclick="loadPage('Admin/Tenants.php')"><i class="fas fa-users"></i> Tenants</button></li>
                        <li class="subtopic"><button onclick="loadPage('Admin/Maintenance.php')"><i class="fas fa-wrench"></i> Maintenance</button></li>
                        <li class="subtopic"><button onclick="loadPage('Admin/vacating_notice.php')"><i class="fas fa-file-export"></i> Vacating Notice</button></li>
                        <li class="subtopic"><button onclick="loadPage('Admin/approved_vacating_notices.php')"><i class="fas fa-check"></i> Approved Notices</button></li>
                    </ul>
                </div>

                <div class="topic">
                    <h2>Financial Operations</h2>
                    <ul>
                        <li class="subtopic"><button onclick="loadPage('Admin/Invoices.php')"><i class="fas fa-file-invoice"></i> Invoices</button></li>
                        <li class="subtopic"><button onclick="loadPage('Admin/Payments.php')"><i class="fas fa-receipt"></i> Billing</button></li>
                        <li class="subtopic"><button onclick="loadPage('Admin/Expenses.php')"><i class="fas fa-money-bill-wave"></i> Expenses</button></li>
                        <li class="subtopic"><button onclick="loadPage('Admin/Transactions.php')"><i class="fas fa-money-bill-wave"></i> Transactions</button></li>
                    </ul>
                </div>

                <div class="topic">
                    <h2>Communications</h2>
                    <ul>
                        <li class="subtopic"><button onclick="loadPage('Admin/Messaging.php')"><i class="fas fa-envelope"></i> Messaging</button></li>
                    </ul>
                </div>

                <div class="topic">
                    <h2>Reports</h2>
                    <ul>
                        <li class="subtopic"><button onclick="loadPage('Admin/Reports.php')"><i class="fas fa-file-alt"></i> Reports</button></li>
                    </ul>
                </div>

                <div class="topic">
                    <h2>Admin Operations</h2>
                    <ul>
                    <li class="subtopic"><button onclick="loadPage('Admin/logout.php')"><i class="fas fa-power-off"></i> Logout</button></li>
                    </ul>
                </div>
            </div>
        </aside>

        <main id="main-content" class="flex-grow p-4">
            <iframe id="content-frame" src="Admin/Admindashboard.php" frameborder="0" class="w-full h-screen"></iframe>
        </main>
    </div>

    <script>
        function loadPage(page) {
            document.getElementById('content-frame').src = page;
        }

        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('collapsed');
        });
    </script>
</body>
</html>