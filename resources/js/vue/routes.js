import Dashboard from './components/Dashboard';
import Teams from './components/Teams';
import Invoice from './components/Invoice';
import Sponsoring from './components/Sponsoring';
import Membership from './components/Membership';
import Contracts from './components/Contracts';
import Communication from './components/Communication';
import Users from './components/Users';
import Statistics from './components/Statistics';
import Roles from './components/Roles';
import Permissions from './components/Permissions';

const routes = [
    { 
        path: '/dashboard', 
        component: Dashboard
    },
    { 
        path: '/teams', 
        component: Teams
    },
    { 
        path: '/invoice', 
        component: Invoice
    },
    { 
        path: '/sponsoring', 
        component: Sponsoring
    },
    { 
        path: '/membership', 
        component: Membership
    },
    { 
        path: '/contracts', 
        component: Contracts
    },
    { 
        path: '/communications', 
        component: Communication
    },
    { 
        path: '/users', 
        component: Users
    },
    { 
        path: '/statistics', 
        component: Statistics
    },
    { 
        path: '/roles', 
        component: Roles
    },
    { 
        path: '/permissions', 
        component: Permissions
    },
];

export default routes;