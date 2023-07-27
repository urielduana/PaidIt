const menuItems = {
    Customer: {
        Main_Menu: {
            label: "Main Menu",
            route: "/customer",
            permissions: ["view_customer"],
        },
        Businesses: {
            label: "Businesses",
            route: "/customer/business",
            permissions: ["view_customer", "customer/business"],
        },
        Products: {
            label: "Products",
            route: "/customer/items",
            permissions: ["view_customer", "customer/items"],
        },
        Cart: {
            label: "Cart",
            route: "/customer/carts",
            permissions: ["view_customer", "customer/carts"],
        },
        Orders: {
            label: "Orders",
            route: "/customer/orders",
            permissions: ["view_customer", "customer/orders"],
        },
        Credit: {
            label: "Credit",
            route: "/customer/balance",
            permissions: ["view_customer", "customer/balance"],
        },
    },
    Employee: {
        Main_Menu: {
            label: "Main Menu",
            route: "/employee",
            permissions: ["view_employee"],
        },
        Orders: {
            label: "Orders",
            route: "/employee/orders",
            permissions: ["view_employee", "employee/orders"],
        },
        Products: {
            label: "Products",
            route: "/employee/items",
            permissions: ["view_employee", "employee/items"],
        },
        Employees: {
            label: "Employees",
            route: "/employee/members",
            permissions: ["view_employee", "employee/members"],
        },
        Finance: {
            label: "Finance",
            route: "/employee/finance",
            permissions: ["view_employee", "employee/finance"],
        },
        Settings: {
            label: "Settings",
            route: "/employee/settings",
            permissions: ["view_employee", "employee/business"],
        },
    },
    Dashboard: {
        Main_Menu: {
            label: "Main Menu",
            route: "/dashboard",
            permissions: ["view_dashboard"],
        },
        Businesses: {
            label: "Users",
            route: "/dashboard/users",
            permissions: ["view_dashboard", "dashboard/users"],
        },
        Businesses: {
            label: "Businesses",
            route: "/dashboard/businesses",
            permissions: ["view_dashboard", "dashboard/businesses"],
        },
        Products: {
            label: "Products",
            route: "/dashboard/items",
            permissions: ["view_dashboard", "dashboard/items"],
        },
        Employees: {
            label: "Employees",
            route: "/dashboard/employees",
            permissions: ["view_dashboard", "dashboard/employees"],
        },
        Customers: {
            label: "Customers",
            route: "/dashboard/customers",
            permissions: ["view_dashboard", "dashboard/customers"],
        },
        Orders: {
            label: "Orders",
            route: "/dashboard/orders",
            permissions: ["view_dashboard", "dashboard/orders"],
        },
    },
};

export default menuItems;
