// Admin Panel Common JavaScript (jQuery Version)
$(document).ready(function() {
    
    // Toggle sidebar function
    window.toggleSidebar = function() {
        $('#sidebar').toggleClass('active');
    };
    
    // Close sidebar when clicking outside on mobile
    $(document).on('click', function(event) {
        const $sidebar = $('#sidebar');
        const $toggle = $('.mobile-toggle');
        
        if ($(window).width() <= 768 && 
            !$sidebar.is(event.target) && 
            !$sidebar.has(event.target).length && 
            !$toggle.is(event.target) && 
            !$toggle.has(event.target).length &&
            $sidebar.hasClass('active')) {
            $sidebar.removeClass('active');
        }
    });
    
    // Set active menu item on click
    $('.menu-item').on('click', function(e) {
        // Don't prevent default - allow navigation
        $('.menu-item').removeClass('active');
        $(this).addClass('active');
    });
    
    // Set active menu based on current page
    function setActiveMenuItem() {
        const currentPath = window.location.pathname;
        const currentPage = currentPath.split('/').pop().replace('.php', '');
        
        console.log('Current page detected:', currentPage); // Debug log
        
        // Map page names to menu items
        const pageMap = {
            'index': 'Dashboard',
            'students': 'Student Accounts',
            'drives': 'Upcoming Drives',
            'companies': 'Companies',
            'aptitude': 'Mock Aptitude Tests',
            'interviews': 'Interview Preparation',
            'announcements': 'Announcements',
            'payments': 'Payment Gateway',
            'notifications': 'Notifications',
            'settings': 'Settings'
        };
        
        // Remove all active classes first
        $('.menu-item').removeClass('active');
        
        // Set active menu item
        $('.menu-item').each(function() {
            const itemText = $(this).text().trim();
            console.log('Checking menu item:', itemText, 'against:', pageMap[currentPage]); // Debug log
            if (itemText === pageMap[currentPage]) {
                $(this).addClass('active');
                console.log('Active menu set:', itemText); // Debug log
            }
        });
    }
    
    // Initialize active menu
    setActiveMenuItem();
    
    // Handle window resize for mobile sidebar
    $(window).on('resize', function() {
        if ($(window).width() > 768) {
            $('#sidebar').removeClass('active');
        }
    });
    
    // Common search functionality (if search box exists)
    function initSearchFunctionality() {
        $('.search-box input').on('input', function() {
            const searchTerm = $(this).val().toLowerCase();
            const $container = $(this).closest('.content-card').find('tbody tr');
            
            $container.each(function() {
                const text = $(this).text().toLowerCase();
                $(this).toggle(text.includes(searchTerm));
            });
        });
    }
    
    // Initialize search if present
    if ($('.search-box input').length) {
        initSearchFunctionality();
    }
    
    // Common modal functionality
    function initModals() {
        // Auto-hide modals on form submission
        $('.modal form').on('submit', function() {
            const $modal = $(this).closest('.modal');
            $modal.modal('hide');
        });
        
        // Reset form when modal is hidden
        $('.modal').on('hidden.bs.modal', function() {
            $(this).find('form')[0]?.reset();
        });
    }
    
    // Initialize modals if present
    if ($('.modal').length) {
        initModals();
    }
    
    // Common table interactions
    function initTableInteractions() {
        // Add hover effect to table rows
        $('table tbody tr').on('mouseenter', function() {
            $(this).addClass('table-row-hover');
        }).on('mouseleave', function() {
            $(this).removeClass('table-row-hover');
        });
        
        // Handle action buttons
        $('.btn-outline-primary').on('click', function() {
            // View action - can be customized per page
        });
        
        $('.btn-outline-warning').on('click', function() {
            // Edit action - can be customized per page
        });
        
        $('.btn-outline-danger').on('click', function() {
            if (confirm('Are you sure you want to delete this item?')) {
                // Delete action - can be customized per page
            }
        });
    }
    
    // Initialize table interactions if present
    if ($('table').length) {
        initTableInteractions();
    }
    
    // Common filter functionality
    function initFilters() {
        $('.form-select').on('change', function() {
            const filterType = $(this).find('option:selected').text();
            const $table = $(this).closest('.content-card').find('table tbody');
            
            if (filterType.includes('All')) {
                $table.find('tr').show();
            } else {
                $table.find('tr').each(function() {
                    const rowText = $(this).text().toLowerCase();
                    $(this).toggle(rowText.includes(filterType.toLowerCase()));
                });
            }
        });
    }
    
    // Initialize filters if present
    if ($('.form-select').length) {
        initFilters();
    }
    
    // Common notification/alert functionality
    function initNotifications() {
        // Auto-hide success notifications after 5 seconds
        setTimeout(function() {
            $('.alert-success').fadeOut('slow');
        }, 5000);
        
        // Handle notification close buttons
        $('.alert .btn-close').on('click', function() {
            $(this).closest('.alert').fadeOut('slow');
        });
    }
    
    // Initialize notifications if present
    if ($('.alert').length) {
        initNotifications();
    }
    
    // Form validation will be handled by separate validation file
    
    // Common loading states
    window.showLoading = function($button) {
        $button.prop('disabled', true)
               .html('<i class="fas fa-spinner fa-spin me-2"></i>Loading...');
    };
    
    window.hideLoading = function($button, originalText) {
        $button.prop('disabled', false)
               .html(originalText);
    };
    
    // Common AJAX wrapper
    window.adminAjax = function(options) {
        const defaults = {
            type: 'POST',
            dataType: 'json',
            beforeSend: function() {
                // Show loading state
            },
            complete: function() {
                // Hide loading state
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
                alert('An error occurred. Please try again.');
            }
        };
        
        return $.ajax($.extend(defaults, options));
    };
    
    // Initialize tooltips if present
    if ($('[data-bs-toggle="tooltip"]').length) {
        $('[data-bs-toggle="tooltip"]').tooltip();
    }
    
    // Initialize popovers if present
    if ($('[data-bs-toggle="popover"]').length) {
        $('[data-bs-toggle="popover"]').popover();
    }
    
    console.log('Admin panel initialized with jQuery');
});
