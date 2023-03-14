const menuItems = {
    Customer : [
        {
            label : 'Main Menu',
            route : 'customer',
            permissions : ['view_customer'],
        },
        {
            label : 'Businesses',
            route : 'customer/business',
            permissions : ['view_customer', 'customer/business'],
        },
        {
            label : 'Products',
            route : 'customer/items',
            permissions : ['view_customer', 'customer/items'],
        },
        {
            label : 'Cart',
            route : 'customer/carts',
            permissions : ['view_customer', 'customer/carts'],
        },
        {
            label : 'Orders',
            route : 'customer/orders',
            permissions : ['view_customer', 'customer/orders'],
        },
        {
            label : 'Credit',
            route : 'customer/balance',
            permissions : ['view_customer', 'customer/balance'],
        },
        {
            label : 'Profile',
            route : 'user/profile',
            permissions : [],
        }

    ],
    Employee : [
        {
            label : 'Main Menu',
            route : 'employee',
            permissions : ['view_employee'],
        },
        {
            label : 'Orders',
            route : 'employee/orders',
            permissions : ['view_employee', 'employee/orders'],
        },
        {
            label : 'Products',
            route : 'employee/items',
            permissions : ['view_employee', 'employee/items'],
        },
        {
            label : 'Employees',
            route : 'employee/members',
            permissions : ['view_employee', 'employee/members'],
        },
        {
            label : 'Finance',
            route : 'employee/finance',
            permissions : ['view_employee', 'employee/finance'],
        },
        {
            label : 'Settings',
            route : 'employee/settings',
            permissions : ['view_employee', 'employee/business'],
        },
        {
            label : 'Profile',
            route : 'user/profile',
            permissions : [],
        }

    ],
    Dashboard : [
        {
            label : 'Main Menu',
            route : 'dashboard',
            permissions : ['view_dashboard'],
        },
        {
            label : 'Users',
            route : 'dashboard/users',
            permissions : ['view_dashboard', 'dashboard/users'],
        },
        {
            label : 'Businesses',
            route : 'dashboard/businesses',
            permissions : ['view_dashboard', 'dashboard/businesses'],
        },
        {
            label : 'Products',
            route : 'dashboard/items',
            permissions : ['view_dashboard', 'dashboard/items'],
        },
        {
            label : 'Employees',
            route : 'dashboard/employees',
            permissions : ['view_dashboard', 'dashboard/employees'],
        },
        {
            label : 'Customers',
            route : 'dashboard/customers',
            permissions : ['view_dashboard', 'dashboard/customers'],
        },
        {
            label : 'Orders',
            route : 'dashboard/orders',
            permissions : ['view_dashboard', 'dashboard/orders'],
        },
        {
            label : 'Profile',
            route : 'user/profile',
            permissions : [],
        }
    ]
    };

    export default menuItems;