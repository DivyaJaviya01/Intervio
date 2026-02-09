<?php
if (!isset($_SESSION['user_logged_in']) || !$_SESSION['user_logged_in']) {
    header('Location: ../auth/register.php');
    exit();
}

$user_data = $_SESSION['user_data'] ?? [];
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>

<!-- Mobile Header with Hamburger -->
<div class="mobile-header">
    <button class="hamburger-btn" id="hamburgerBtn">
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
    </button>
    <div class="mobile-logo">
        <i class="fas fa-graduation-cap me-2"></i>
        <span>Intervio</span>
    </div>
    <div class="mobile-user">
        <img src="https://picsum.photos/seed/<?php echo urlencode($user_data['full_name'] ?? 'johndoe'); ?>/40/40.jpg" alt="User" class="mobile-avatar">
    </div>
</div>

<!-- Sidebar Overlay -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <!-- Sidebar Header -->
    <div class="sidebar-header">
        <div class="profile-section">
            <div class="profile-img-container">
                <img src="https://picsum.photos/seed/<?php echo urlencode($user_data['full_name'] ?? 'johndoe'); ?>/80/80.jpg" alt="Profile" class="profile-img">
                <div class="status-indicator online"></div>
            </div>
            <div class="profile-info">
                <h6 class="profile-name"><?php echo htmlspecialchars($user_data['full_name'] ?? 'John Doe'); ?></h6>
                <p class="profile-role"><?php echo htmlspecialchars($user_data['course'] ?? 'Computer Science'); ?></p>
                <p class="profile-id"><?php echo htmlspecialchars($user_data['enrollment_no'] ?? 'EN2024001'); ?></p>
            </div>
        </div>
        <button class="close-sidebar" id="closeSidebar">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <!-- Sidebar Menu -->
    <nav class="sidebar-nav">
        <div class="menu-section">
            <div class="menu-section-title">
                <i class="fas fa-user-circle me-2"></i>Profile
            </div>
            <a href="profile.php" class="menu-item <?php echo $current_page === 'profile' ? 'active' : ''; ?>">
                <i class="fas fa-user"></i>
                <span>My Profile</span>
                <div class="menu-indicator"></div>
            </a>
            <a href="edit_profile.php" class="menu-item <?php echo $current_page === 'edit_profile' ? 'active' : ''; ?>">
                <i class="fas fa-edit"></i>
                <span>Edit Profile</span>
                <div class="menu-indicator"></div>
            </a>
            <a href="resume.php" class="menu-item <?php echo $current_page === 'resume' ? 'active' : ''; ?>">
                <i class="fas fa-file-alt"></i>
                <span>Resume</span>
                <div class="menu-indicator"></div>
            </a>
        </div>

        <div class="menu-section">
            <div class="menu-section-title">
                <i class="fas fa-graduation-cap me-2"></i>Academic
            </div>
            <a href="projects.php" class="menu-item <?php echo $current_page === 'projects' ? 'active' : ''; ?>">
                <i class="fas fa-project-diagram"></i>
                <span>Projects</span>
                <div class="menu-indicator"></div>
            </a>
            <a href="../aptitude.php" class="menu-item">
                <i class="fas fa-brain"></i>
                <span>Aptitude Tests</span>
                <div class="menu-indicator"></div>
            </a>
            <a href="../preparation.php" class="menu-item">
                <i class="fas fa-comments"></i>
                <span>Interview Prep</span>
                <div class="menu-indicator"></div>
            </a>
            <a href="progress_tracker.php" class="menu-item <?php echo $current_page === 'progress_tracker' ? 'active' : ''; ?>">
                <i class="fas fa-chart-line"></i>
                <span>Progress Tracker</span>
                <div class="menu-indicator"></div>
            </a>
        </div>

        <div class="menu-section">
            <div class="menu-section-title">
                <i class="fas fa-briefcase me-2"></i>Placement
            </div>
            <a href="../drives.php" class="menu-item">
                <i class="fas fa-briefcase"></i>
                <span>Available Drives</span>
                <div class="menu-indicator"></div>
            </a>
            <a href="applied_companies.php" class="menu-item <?php echo $current_page === 'applied_companies' ? 'active' : ''; ?>">
                <i class="fas fa-building"></i>
                <span>Applied Companies</span>
                <div class="menu-indicator"></div>
            </a>
            <a href="application_history.php" class="menu-item <?php echo $current_page === 'application_history' ? 'active' : ''; ?>">
                <i class="fas fa-history"></i>
                <span>Application History</span>
                <div class="menu-indicator"></div>
            </a>
            <a href="drive_schedule.php" class="menu-item <?php echo $current_page === 'drive_schedule' ? 'active' : ''; ?>">
                <i class="fas fa-calendar-check"></i>
                <span>Drive Schedule</span>
                <div class="menu-indicator"></div>
            </a>
            <a href="test_results.php" class="menu-item <?php echo $current_page === 'test_results' ? 'active' : ''; ?>">
                <i class="fas fa-trophy"></i>
                <span>Test Results</span>
                <div class="menu-indicator"></div>
            </a>
        </div>

        <div class="menu-section">
            <div class="menu-section-title">
                <i class="fas fa-cog me-2"></i>Settings
            </div>
            <a href="account_settings.php" class="menu-item <?php echo $current_page === 'account_settings' ? 'active' : ''; ?>">
                <i class="fas fa-cog"></i>
                <span>Account Settings</span>
                <div class="menu-indicator"></div>
            </a>
            <a href="notification_settings.php" class="menu-item <?php echo $current_page === 'notification_settings' ? 'active' : ''; ?>">
                <i class="fas fa-bell"></i>
                <span>Notifications</span>
                <div class="menu-indicator"></div>
            </a>
            <a href="privacy_security.php" class="menu-item <?php echo $current_page === 'privacy_security' ? 'active' : ''; ?>">
                <i class="fas fa-lock"></i>
                <span>Privacy & Security</span>
                <div class="menu-indicator"></div>
            </a>
            <a href="change_password.php" class="menu-item <?php echo $current_page === 'change_password' ? 'active' : ''; ?>">
                <i class="fas fa-key"></i>
                <span>Change Password</span>
                <div class="menu-indicator"></div>
            </a>
        </div>

        <div class="menu-section logout-section">
            <a href="../auth/logout.php" class="menu-item logout-btn">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
                <div class="menu-indicator"></div>
            </a>
        </div>
    </nav>

    <!-- Sidebar Footer -->
    <div class="sidebar-footer">
        <div class="footer-links">
            <a href="#" class="footer-link">
                <i class="fas fa-question-circle"></i>
                <span>Help</span>
            </a>
            <a href="#" class="footer-link">
                <i class="fas fa-info-circle"></i>
                <span>About</span>
            </a>
        </div>
        <div class="copyright">
            <small>&copy; 2024 Intervio</small>
        </div>
    </div>
</div>

<!-- Sidebar Scripts -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const closeSidebar = document.getElementById('closeSidebar');
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    const menuItems = document.querySelectorAll('.menu-item');

    // Open sidebar
    hamburgerBtn.addEventListener('click', function() {
        sidebar.classList.add('active');
        sidebarOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    });

    // Close sidebar
    function closeSidebarFunc() {
        sidebar.classList.remove('active');
        sidebarOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    closeSidebar.addEventListener('click', closeSidebarFunc);
    sidebarOverlay.addEventListener('click', closeSidebarFunc);

    // Close sidebar when clicking a menu item on mobile
    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
                closeSidebarFunc();
            }
        });
    });

    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            sidebar.classList.remove('active');
            sidebarOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }
    });

    // Add ripple effect to menu items
    menuItems.forEach(item => {
        item.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            ripple.classList.add('ripple');
            this.appendChild(ripple);

            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';

            setTimeout(() => ripple.remove(), 600);
        });
    });
});
</script>

<!-- Sidebar Styles -->
<style>
/* Mobile Header */
.mobile-header {
    display: none;
    align-items: center;
    justify-content: space-between;
    padding: 1rem;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    position: sticky;
    top: 0;
    z-index: 999;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.hamburger-btn {
    background: none;
    border: none;
    cursor: pointer;
    padding: 0.5rem;
    display: flex;
    flex-direction: column;
    gap: 4px;
    transition: all 0.3s ease;
}

.hamburger-btn:hover {
    transform: scale(1.1);
}

.hamburger-line {
    width: 25px;
    height: 3px;
    background: white;
    border-radius: 2px;
    transition: all 0.3s ease;
}

.mobile-logo {
    display: flex;
    align-items: center;
    font-weight: 600;
    font-size: 1.1rem;
}

.mobile-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 2px solid white;
}

/* Sidebar Overlay */
.sidebar-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    z-index: 1000;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

.sidebar-overlay.active {
    opacity: 1;
    visibility: visible;
}

/* Main Sidebar */
.sidebar {
    position: fixed;
    top: 0;
    left: -280px;
    width: 280px;
    height: 100vh;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    z-index: 1001;
    transition: all 0.3s ease;
    overflow-y: auto;
    box-shadow: 2px 0 10px rgba(0,0,0,0.1);
}

.sidebar.active {
    left: 0;
}

/* Sidebar Header */
.sidebar-header {
    padding: 1.5rem;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    position: relative;
}

.profile-section {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.profile-img-container {
    position: relative;
}

.profile-img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    border: 3px solid rgba(255,255,255,0.3);
}

.status-indicator {
    position: absolute;
    bottom: 2px;
    right: 2px;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    border: 2px solid white;
}

.status-indicator.online {
    background: #10b981;
}

.profile-info {
    flex: 1;
}

.profile-name {
    margin: 0;
    font-size: 1rem;
    font-weight: 600;
}

.profile-role {
    margin: 0;
    font-size: 0.8rem;
    opacity: 0.9;
}

.profile-id {
    margin: 0;
    font-size: 0.75rem;
    opacity: 0.7;
}

.close-sidebar {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: rgba(255,255,255,0.1);
    border: none;
    color: white;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.close-sidebar:hover {
    background: rgba(255,255,255,0.2);
    transform: rotate(90deg);
}

/* Sidebar Navigation */
.sidebar-nav {
    padding: 1rem 0;
    flex: 1;
}

.menu-section {
    margin-bottom: 1rem;
}

.menu-section-title {
    padding: 0.75rem 1.5rem;
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    color: rgba(255,255,255,0.7);
    font-weight: 600;
    display: flex;
    align-items: center;
}

.menu-item {
    display: flex;
    align-items: center;
    padding: 0.75rem 1.5rem;
    color: rgba(255,255,255,0.9);
    text-decoration: none;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.menu-item:hover {
    background: rgba(255,255,255,0.1);
    color: white;
    padding-left: 2rem;
}

.menu-item.active {
    background: rgba(255,255,255,0.15);
    color: white;
    border-left: 4px solid white;
}

.menu-item i {
    width: 20px;
    margin-right: 1rem;
    text-align: center;
    font-size: 0.9rem;
}

.menu-item span {
    flex: 1;
}

.menu-indicator {
    width: 6px;
    height: 6px;
    background: rgba(255,255,255,0.5);
    border-radius: 50%;
    transition: all 0.3s ease;
}

.menu-item.active .menu-indicator {
    background: white;
    transform: scale(1.5);
}

.logout-section {
    border-top: 1px solid rgba(255,255,255,0.1);
    margin-top: auto;
}

.logout-btn {
    color: #fca5a5 !important;
}

.logout-btn:hover {
    background: rgba(252,165,165,0.1) !important;
}

/* Sidebar Footer */
.sidebar-footer {
    padding: 1rem;
    border-top: 1px solid rgba(255,255,255,0.1);
    background: rgba(0,0,0,0.1);
}

.footer-links {
    display: flex;
    justify-content: space-around;
    margin-bottom: 0.5rem;
}

.footer-link {
    color: rgba(255,255,255,0.7);
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.8rem;
    transition: color 0.3s ease;
}

.footer-link:hover {
    color: white;
}

.copyright {
    text-align: center;
    color: rgba(255,255,255,0.5);
    font-size: 0.7rem;
}

/* Ripple Effect */
.menu-item {
    position: relative;
    overflow: hidden;
}

.ripple {
    position: absolute;
    border-radius: 50%;
    background: rgba(255,255,255,0.3);
    transform: scale(0);
    animation: ripple-animation 0.6s ease-out;
}

@keyframes ripple-animation {
    to {
        transform: scale(4);
        opacity: 0;
    }
}

/* Desktop Styles */
@media (min-width: 769px) {
    .sidebar {
        left: 0;
        box-shadow: 2px 0 10px rgba(0,0,0,0.1);
    }
    
    .sidebar-overlay {
        display: none;
    }
    
    .close-sidebar {
        display: none;
    }
    
    .main-content {
        margin-left: 280px;
    }
}

/* Mobile Styles */
@media (max-width: 768px) {
    .mobile-header {
        display: flex;
    }
    
    .sidebar {
        left: -280px;
    }
    
    .sidebar.active {
        left: 0;
    }
    
    .main-content {
        margin-left: 0;
        padding-top: 0;
    }
    
    /* Adjust main content padding for mobile header */
    .container-fluid {
        padding-top: 0 !important;
    }
}

/* Hamburger Animation */
.hamburger-btn.active .hamburger-line:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
}

.hamburger-btn.active .hamburger-line:nth-child(2) {
    opacity: 0;
}

.hamburger-btn.active .hamburger-line:nth-child(3) {
    transform: rotate(-45deg) translate(7px, -6px);
}

/* Smooth transitions for all interactive elements */
.menu-item,
.hamburger-btn,
.close-sidebar,
.footer-link {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Custom scrollbar for sidebar */
.sidebar::-webkit-scrollbar {
    width: 6px;
}

.sidebar::-webkit-scrollbar-track {
    background: rgba(255,255,255,0.1);
}

.sidebar::-webkit-scrollbar-thumb {
    background: rgba(255,255,255,0.3);
    border-radius: 3px;
}

.sidebar::-webkit-scrollbar-thumb:hover {
    background: rgba(255,255,255,0.5);
}
</style>
