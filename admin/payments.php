<?php
$pageTitle = 'Payment Gateway';
include 'includes/auth_check.php';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<!-- Top Header -->
<div class="top-header">
    <div>
        <h1 class="h3 mb-0">Payment Gateway</h1>
        <p class="text-muted mb-0">Manage payment settings and transactions</p>
    </div>
    <div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPaymentModal">
            <i class="fas fa-plus me-2"></i> Configure Gateway
        </button>
    </div>
</div>

<!-- Payment Settings -->
<div class="content-card">
    <div class="card-header">
        <h5 class="mb-0">Payment Gateway Settings</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-4">
                    <h6 class="text-muted mb-3">Razorpay Configuration</h6>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="razorpayEnabled" checked>
                        <label class="form-check-label" for="razorpayEnabled">Enable Razorpay</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">API Key</label>
                        <input type="text" class="form-control" value="rzp_test_1234567890">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Secret Key</label>
                        <input type="text" class="form-control" value="rzp_test_abcdef123456">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-4">
                    <h6 class="text-muted mb-3">Stripe Configuration</h6>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="stripeEnabled">
                        <label class="form-check-label" for="stripeEnabled">Enable Stripe</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Publishable Key</label>
                        <input type="text" class="form-control" value="pk_test_1234567890">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Secret Key</label>
                        <input type="text" class="form-control" value="sk_test_abcdef123456">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-4">
                    <h6 class="text-muted mb-3">PayPal Configuration</h6>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="paypalEnabled">
                        <label class="form-check-label" for="paypalEnabled">Enable PayPal</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Client ID</label>
                        <input type="text" class="form-control" value="paypal_client_123456">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Client Secret</label>
                        <input type="text" class="form-control" value="paypal_secret_abcdef">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-4">
                    <h6 class="text-muted mb-3">General Settings</h6>
                    <div class="mb-3">
                        <label class="form-label">Default Currency</label>
                        <select class="form-select">
                            <option selected>INR (₹)</option>
                            <option>USD ($)</option>
                            <option>EUR (€)</option>
                            <option>GBP (£)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Transaction Mode</label>
                        <select class="form-select">
                            <option selected>Test Mode</option>
                            <option>Live Mode</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Transactions -->
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

<!-- Configure Gateway Modal -->
<div class="modal fade" id="addPaymentModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Configure Payment Gateway</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Gateway Name</label>
                        <input type="text" class="form-control" name="gatewayName" required data-validation="required nameOnly" data-min="2">
                        <div id="gatewayName_error" class="text-danger small" style="display: none;"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">API Key</label>
                            <input type="password" class="form-control" name="apiKey" required data-validation="required min" data-min="10">
                            <div id="apiKey_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Secret Key</label>
                            <input type="password" class="form-control" name="secretKey" required data-validation="required min" data-min="10">
                            <div id="secretKey_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Currency</label>
                            <select class="form-select" name="currency" required data-validation="required select">
                                <option value="">Select Currency</option>
                                <option>INR</option>
                                <option>USD</option>
                                <option>EUR</option>
                                <option>GBP</option>
                            </select>
                            <div id="currency_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Environment</label>
                            <select class="form-select" name="environment" required data-validation="required select">
                                <option value="">Select Environment</option>
                                <option>Test</option>
                                <option>Live</option>
                            </select>
                            <div id="environment_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Webhook URL</label>
                        <input type="url" class="form-control" name="webhookUrl" required data-validation="required url">
                        <div id="webhookUrl_error" class="text-danger small" style="display: none;"></div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="enabled" name="enabled">
                            <label class="form-check-label" for="enabled">
                                Enable this payment gateway
                            </label>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save Configuration</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
