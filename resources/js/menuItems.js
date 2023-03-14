const menuItems = {
    Customer : [
        {
            label : 'Main Menu',
            route : '/customer',
            active : true,
            permissions : ['view_customer'],
        },
        {
            label : 'Businesses',
            route : '/customer/business',
            active : true,
            permissions : ['view_customer', 'customer/business'],
        },
        {
            label : 'Products',
            route : '/customer/items',
            active : true,
            permissions : ['view_customer', 'customer/items'],
        },
        {
            label : 'Cart',
            route : '/customer/carts',
            active : true,
            permissions : ['view_customer', 'customer/carts'],
        },
        {
            label : 'Orders',
            route : '/customer/orders',
            active : true,
            permissions : ['view_customer', 'customer/orders'],
        },
        {
            label : 'Credit',
            route : '/customer/balance',
            active : true,
            permissions : ['view_customer', 'customer/balance'],
        },
        {
            label : 'Profile',
            route : '/user/profile',
            active : true,
            permissions : [],
        }

    ],
    Employee : [
        {
            label : 'Main Menu',
            route : '/employee',
            active : true,
            permissions : ['view_employee'],
        },
        {
            label : 'Orders',
            route : '/employee/orders',
            active : true,
            permissions : ['view_employee', 'employee/orders'],
        },
        {
            label : 'Products',
            route : '/employee/items',
            active : true,
            permissions : ['view_employee', 'employee/items'],
        },
        {
            label : 'Employees',
            route : '/employee/members',
            active : true,
            permissions : ['view_employee', 'employee/members'],
        },
        {
            label : 'Finance',
            route : '/employee/finance',
            active : true,
            permissions : ['view_employee', 'employee/finance'],
        },
        {
            label : 'Settings',
            route : '/employee/settings',
            active : true,
            permissions : ['view_employee', 'employee/business'],
        },
        {
            label : 'Profile',
            route : '/user/profile',
            active : true,
            permissions : [],
        }

    ],
    DashBoard : [
        {
            label : 'Main Menu',
            route : '/dashboard',
            active : true,
            permissions : ['view_dashboard'],
        },
        {
            label : 'Users',
            route : '/dashboard/users',
            active : true,
            permissions : ['view_dashboard', 'dashboard/users'],
        },
        {
            label : 'Businesses',
            route : '/dashboard/businesses',
            active : true,
            permissions : ['view_dashboard', 'dashboard/businesses'],
        },
        {
            label : 'Products',
            route : '/dashboard/items',
            active : true,
            permissions : ['view_dashboard', 'dashboard/items'],
        },
        {
            label : 'Employees',
            route : '/dashboard/employees',
            active : true,
            permissions : ['view_dashboard', 'dashboard/employees'],
        },
        {
            label : 'Customers',
            route : '/dashboard/customers',
            active : true,
            permissions : ['view_dashboard', 'dashboard/customers'],
        },
        {
            label : 'Orders',
            route : '/dashboard/orders',
            active : true,
            permissions : ['view_dashboard', 'dashboard/orders'],
        },
        {
            label : 'Profile',
            route : '/user/profile',
            active : true,
            permissions : [],
        }
    ]
    }