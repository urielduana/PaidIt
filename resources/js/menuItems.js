const menuItems = {
    Customer : [
        {
            label : 'Main Menu',
            route : 'customer.index',
            permissions : ['view_customer'],
        },
        {
            label : 'Businesses',
            route : 'customer.business.index',
            permissions : ['view_customer', 'customer.business'],
        },
        {
            label : 'Products',
            route : 'customer.items.index',
            permissions : ['view_customer', 'customer.items'],
        },
        {
            label : 'Cart',
            route : 'customer.carts.index',
            permissions : ['view_customer', 'customer.carts'],
        },
        {
            label : 'Orders',
            route : 'customer.orders.index',
            permissions : ['view_customer', 'customer.orders'],
        },
        {
            label : 'Credit',
            route : 'customer.balance.index',
            permissions : ['view_customer', 'customer.balance'],
        },
        {
            label : 'Profile.index',
            route : 'user.profile',
            permissions : [],
        }

    ],
    Employee : [
        {
            label : 'Main Menu',
            route : 'employee.index',
            permissions : ['view_employee'],
        },
        {
            label : 'Orders',
            route : 'employee.orders.index',
            permissions : ['view_employee', 'employee.orders'],
        },
        {
            label : 'Products',
            route : 'employee.items.index',
            permissions : ['view_employee', 'employee.items'],
        },
        {
            label : 'Employees',
            route : 'employee.members.index',
            permissions : ['view_employee', 'employee.members'],
        },
        {
            label : 'Finance',
            route : 'employee.finance.index',
            permissions : ['view_employee', 'employee.finance'],
        },
        {
            label : 'Settings',
            route : 'employee.settings.index',
            permissions : ['view_employee', 'employee.business'],
        },
        {
            label : 'Profile',
            route : 'user.profile',
            permissions : [],
        }

    ],
    Dashboard : [
        {
            label : 'Main Menu',
            route : 'dashboard.index',
            permissions : ['view_dashboard'],
        },
        {
            label : 'Users',
            route : 'dashboard.users.index',
            permissions : ['view_dashboard', 'dashboard.users'],
        },
        {
            label : 'Businesses',
            route : 'dashboard.businesses.index',
            permissions : ['view_dashboard', 'dashboard.businesses'],
        },
        {
            label : 'Products',
            route : 'dashboard.items.index',
            permissions : ['view_dashboard', 'dashboard.items'],
        },
        {
            label : 'Employees',
            route : 'dashboard.employees.index',
            permissions : ['view_dashboard', 'dashboard.employees'],
        },
        {
            label : 'Customers',
            route : 'dashboard.customers.index',
            permissions : ['view_dashboard', 'dashboard.customers'],
        },
        {
            label : 'Orders',
            route : 'dashboard.orders.index',
            permissions : ['view_dashboard', 'dashboard.orders'],
        },
        {
            label : 'Profile',
            route : 'user.profile',
            permissions : [],
        }
    ]
    };

    export default menuItems;