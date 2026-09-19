<?php
// Current script ka naam detect karne ke liye taaki active class dynamic lag sake
$current_page = basename($_SERVER['PHP_SELF']);
?>


<div class="tj-profile-sidebar tj-profile-sidebar-main">
    <ul class="tj-sidebar-menu">
        <li>
            <a href="profile.php" class="tj-sidebar-link <?= ($current_page == 'profile.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-chart-pie"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="orders.php" class="tj-sidebar-link <?= ($current_page == 'orders.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-box-archive"></i> My Orders
            </a>
        </li>
        <li>
            <a href="addresses.php" class="tj-sidebar-link <?= ($current_page == 'addresses.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-location-dot"></i> My Addresses
            </a>
        </li>
        <li>
            <a href="account-info.php" class="tj-sidebar-link <?= ($current_page == 'account-info.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-user"></i> Account Information
            </a>
        </li>
        <li>
            <a href="account-security.php" class="tj-sidebar-link <?= ($current_page == 'account-security.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-key"></i> Account Security
            </a>
        </li>
        <li>
            <a href="logout.php" class="tj-sidebar-link">
                <i class="fa-solid fa-right-from-bracket"></i> Logout
            </a>
        </li>
    </ul>
</div>