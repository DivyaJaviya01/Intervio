<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway - Intervio Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --sidebar-width: 250px;
            --primary-color: #4f46e5;
            --secondary-color: #6366f1;
            --dark-bg: #1f2937;
            --light-bg: #f9fafb;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--light-bg);
            margin: 0;
            padding: 0;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            z-index: 1000;
            transition: transform 0.3s ease;
        }

        .sidebar-header {
            padding: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
        }

        .sidebar-header h3 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .sidebar-menu {
            padding: 1rem 0;
        }

        .menu-item {
            display: flex;
            align-items: center;
            padding: 0.75rem 1.5rem;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        .menu-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border-left-color: white;
        }

        .menu-item.active {
            background-color: rgba(255, 255, 255, 0.15);
            color: white;
            border-left-color: white;
        }

        .menu-item i {
            margin-right: 0.75rem;
            width: 20px;
            text-align: center;
        }

        .main-content {
            margin-left: var(--sidebar-width);
            padding: 2rem;
            min-height: 100vh;
        }

        .top-header {
            background: white;
            padding: 1rem 2rem;
            border-radius: 10px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .content-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card-header {
            padding: 1.5rem;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-body {
            padding: 1.5rem;
        }

        .btn-primary {
            background: var(--primary-color);
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: var(--secondary-color);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: #6b7280;
            font-size: 0.875rem;
        }

        .table {
            margin: 0;
        }

        .table th {
            border-top: none;
            font-weight: 600;
            color: #374151;
            background-color: #f9fafb;
        }

        .badge {
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .badge-success {
            background-color: #10b981;
            color: white;
        }

        .badge-warning {
            background-color: #f59e0b;
            color: white;
        }

        .badge-danger {
            background-color: #ef4444;
            color: white;
        }

        .badge-info {
            background-color: #3b82f6;
            color: white;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            padding-left: 2.5rem;
        }

        .search-box i {
            position: absolute;
            left: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6b7280;
        }

        .payment-method {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .payment-icon {
            width: 30px;
            height: 30px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.875rem;
            font-weight: 600;
            color: white;
        }

        .mobile-toggle {
            display: none;
            position: fixed;
            top: 1rem;
            left: 1rem;
            z-index: 1001;
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 0.5rem;
            border-radius: 5px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }

            .mobile-toggle {
                display: block;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Mobile Toggle -->
    <button class="mobile-toggle" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h3><i class="fas fa-graduation-cap"></i> Intervio Admin</h3>
        </div>
        <nav class="sidebar-menu">
            <a href="index.php" class="menu-item">
                <i class="fas fa-tachometer-alt"></i>
                Dashboard
            </a>
            <a href="students.php" class="menu-item">
                <i class="fas fa-users"></i>
                Student Accounts
            </a>
            <a href="drives.php" class="menu-item">
                <i class="fas fa-briefcase"></i>
                Upcoming Drives
            </a>
            <a href="companies.php" class="menu-item">
                <i class="fas fa-building"></i>
                Companies
            </a>
            <a href="aptitude.php" class="menu-item">
                <i class="fas fa-brain"></i>
                Mock Aptitude Tests
            </a>
            <a href="interviews.php" class="menu-item">
                <i class="fas fa-comments"></i>
                Interview Preparation
            </a>
            <a href="announcements.php" class="menu-item">
                <i class="fas fa-bullhorn"></i>
                Announcements
            </a>
            <a href="payments.php" class="menu-item active">
                <i class="fas fa-credit-card"></i>
                Payment Gateway
            </a>
            <a href="notifications.php" class="menu-item">
                <i class="fas fa-bell"></i>
                Notifications
            </a>
            <a href="settings.php" class="menu-item">
                <i class="fas fa-cog"></i>
                Settings
            </a>
            <a href="logout.php" class="menu-item">
                <i class="fas fa-sign-out-alt"></i>
                Logout
            </a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Header -->
        <div class="top-header">
            <div>
                <h1 class="h3 mb-0">Payment Gateway</h1>
                <p class="text-muted mb-0">Manage payment transactions and gateway settings</p>
            </div>
            <div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#settingsModal">
                    <i class="fas fa-cog me-2"></i> Gateway Settings
                </button>
            </div>
        </div>

        <!-- Payment Statistics -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon" style="background-color: #dcfce7; color: #22c55e;">
                    <i class="fas fa-rupee-sign"></i>
                </div>
                <div class="stat-value">₹2,45,678</div>
                <div class="stat-label">Total Revenue</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon" style="background-color: #dbeafe; color: #3b82f6;">
                    <i class="fas fa-credit-card"></i>
                </div>
                <div class="stat-value">156</div>
                <div class="stat-label">Total Transactions</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon" style="background-color: #fef3c7; color: #f59e0b;">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="stat-value">12</div>
                <div class="stat-label">Pending</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon" style="background-color: #fce7f3; color: #ec4899;">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="stat-value">98.5%</div>
                <div class="stat-label">Success Rate</div>
            </div>
        </div>

        <!-- Payment Transactions -->
        <div class="content-card">
            <div class="card-header">
                <h5 class="mb-0">Recent Transactions</h5>
                <div>
                    <select class="form-select me-2" style="width: 150px;">
                        <option>All Status</option>
                        <option>Completed</option>
                        <option>Pending</option>
                        <option>Failed</option>
                    </select>
                    <div class="search-box d-inline-block">
                        <i class="fas fa-search"></i>
                        <input type="text" class="form-control" placeholder="Search transactions..." style="width: 200px;">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Transaction ID</th>
                                <th>Student</th>
                                <th>Amount</th>
                                <th>Method</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>#TXN001234</code></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://picsum.photos/seed/student1/100/100.jpg" alt="Student" style="width: 30px; height: 30px; border-radius: 50%; margin-right: 0.5rem;">
                                        <div>
                                            <div class="fw-semibold">John Doe</div>
                                            <div class="text-muted small">STU001</div>
                                        </div>
                                    </div>
                                </td>
                                <td><strong>₹1,500</strong></td>
                                <td>
                                    <div class="payment-method">
                                        <div class="payment-icon" style="background-color: #10b981;">
                                            <i class="fas fa-mobile-alt"></i>
                                        </div>
                                        <span>UPI</span>
                                    </div>
                                </td>
                                <td>Dec 10, 2024</td>
                                <td><span class="badge badge-success">Completed</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><code>#TXN001235</code></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://picsum.photos/seed/student2/100/100.jpg" alt="Student" style="width: 30px; height: 30px; border-radius: 50%; margin-right: 0.5rem;">
                                        <div>
                                            <div class="fw-semibold">Jane Smith</div>
                                            <div class="text-muted small">STU002</div>
                                        </div>
                                    </div>
                                </td>
                                <td><strong>₹2,000</strong></td>
                                <td>
                                    <div class="payment-method">
                                        <div class="payment-icon" style="background-color: #3b82f6;">
                                            <i class="fas fa-credit-card"></i>
                                        </div>
                                        <span>Card</span>
                                    </div>
                                </td>
                                <td>Dec 10, 2024</td>
                                <td><span class="badge badge-success">Completed</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><code>#TXN001236</code></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://picsum.photos/seed/student3/100/100.jpg" alt="Student" style="width: 30px; height: 30px; border-radius: 50%; margin-right: 0.5rem;">
                                        <div>
                                            <div class="fw-semibold">Mike Johnson</div>
                                            <div class="text-muted small">STU003</div>
                                        </div>
                                    </div>
                                </td>
                                <td><strong>₹1,500</strong></td>
                                <td>
                                    <div class="payment-method">
                                        <div class="payment-icon" style="background-color: #f59e0b;">
                                            <i class="fas fa-university"></i>
                                        </div>
                                        <span>Net Banking</span>
                                    </div>
                                </td>
                                <td>Dec 9, 2024</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><code>#TXN001237</code></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://picsum.photos/seed/student4/100/100.jpg" alt="Student" style="width: 30px; height: 30px; border-radius: 50%; margin-right: 0.5rem;">
                                        <div>
                                            <div class="fw-semibold">Sarah Wilson</div>
                                            <div class="text-muted small">STU004</div>
                                        </div>
                                    </div>
                                </td>
                                <td><strong>₹3,000</strong></td>
                                <td>
                                    <div class="payment-method">
                                        <div class="payment-icon" style="background-color: #10b981;">
                                            <i class="fas fa-mobile-alt"></i>
                                        </div>
                                        <span>UPI</span>
                                    </div>
                                </td>
                                <td>Dec 9, 2024</td>
                                <td><span class="badge badge-success">Completed</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><code>#TXN001238</code></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://picsum.photos/seed/student5/100/100.jpg" alt="Student" style="width: 30px; height: 30px; border-radius: 50%; margin-right: 0.5rem;">
                                        <div>
                                            <div class="fw-semibold">Robert Brown</div>
                                            <div class="text-muted small">STU005</div>
                                        </div>
                                    </div>
                                </td>
                                <td><strong>₹1,500</strong></td>
                                <td>
                                    <div class="payment-method">
                                        <div class="payment-icon" style="background-color: #ef4444;">
                                            <i class="fas fa-wallet"></i>
                                        </div>
                                        <span>Wallet</span>
                                    </div>
                                </td>
                                <td>Dec 8, 2024</td>
                                <td><span class="badge badge-danger">Failed</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Gateway Settings Modal -->
    <div class="modal fade" id="settingsModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Payment Gateway Settings</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Primary Gateway</label>
                                <select class="form-select" required>
                                    <option value="">Select Gateway</option>
                                    <option>Razorpay</option>
                                    <option>PayU</option>
                                    <option>Paytm</option>
                                    <option>Stripe</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Currency</label>
                                <select class="form-select" required>
                                    <option value="">Select Currency</option>
                                    <option>INR - Indian Rupee</option>
                                    <option>USD - US Dollar</option>
                                    <option>EUR - Euro</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">API Key</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Secret Key</label>
                                <input type="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Webhook URL</label>
                            <input type="url" class="form-control" placeholder="https://yourdomain.com/webhook">
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Test Mode</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="testMode" checked>
                                    <label class="form-check-label" for="testMode">
                                        Enable Test Mode
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Auto Refund</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="autoRefund">
                                    <label class="form-check-label" for="autoRefund">
                                        Enable Auto Refund
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Payment Methods</label>
                            <div class="row">
                                <div class="col-md-4 mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="upi" checked>
                                        <label class="form-check-label" for="upi">UPI</label>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="card" checked>
                                        <label class="form-check-label" for="card">Credit/Debit Card</label>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="netbanking" checked>
                                        <label class="form-check-label" for="netbanking">Net Banking</label>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="wallet">
                                        <label class="form-check-label" for="wallet">Wallet</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save Settings</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active');
        }

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const toggle = document.querySelector('.mobile-toggle');
            
            if (window.innerWidth <= 768 && 
                !sidebar.contains(event.target) && 
                !toggle.contains(event.target) &&
                sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
            }
        });

        // Set active menu item
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.menu-item').forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Search functionality
        document.querySelector('.search-box input').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');
            
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });
    </script>
</body>
</html>
