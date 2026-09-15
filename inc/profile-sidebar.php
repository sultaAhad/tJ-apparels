<?php
// Current script ka naam detect karne ke liye taaki active class dynamic lag sake
$current_page = basename($_SERVER['PHP_SELF']);
?>

<style>
    .tj-profile-sidebar {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.9), rgba(10, 10, 26, 0.95));
        border: 1px solid rgba(135, 120, 255, 0.16);
        border-radius: 20px;
        padding: 20px 15px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
    }

    .tj-sidebar-menu {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .tj-sidebar-link {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 14px 18px;
        color: rgba(255, 255, 255, 0.65);
        font-size: 13.5px;
        font-weight: 500;
        text-decoration: none;
        border-radius: 12px;
        transition: 0.3s;
    }

    .tj-sidebar-link i {
        font-size: 16px;
        width: 20px;
        text-align: center;
        color: rgba(255, 255, 255, 0.4);
        transition: 0.3s;
    }

    .tj-sidebar-link:hover {
        color: #fff;
        background: rgba(125, 53, 232, 0.1);
    }

    .tj-sidebar-link:hover i {
        color: #e936a7;
    }

    /* Active State with Gradient or Highlight */
    .tj-sidebar-link.active {
        color: #fff;
        background: linear-gradient(135deg, rgba(125, 53, 232, 0.25), rgba(233, 54, 167, 0.25));
        border: 1px solid rgba(233, 54, 167, 0.3);
        font-weight: 600;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .tj-sidebar-link.active i {
        color: #e936a7;
    }
</style>

<div class="tj-profile-sidebar">
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