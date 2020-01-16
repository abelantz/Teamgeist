import Vue from 'vue';
import VueRouter from 'vue-router';
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
import Category from './components/Category';
import Team from './components/Team';
import TeamMembers from './components/TeamMembers';
import Events from './components/Events';
import Meetings from './components/Meetings';
import Trainings from './components/Trainings';
import Coaches from './components/Coaches';
import Coach from './components/Coach';
import Matchdays from './components/Matchdays';
import Players from './components/Players';
import Player from './components/Player';
import Tasks from './components/Tasks';
import Refrees from './components/Refrees';
import FieldWardrobe from './components/FieldWardrobe';
import Liveticker from './components/Liveticker';
import CoachDashboard from './components/CoachDashboard';
import PlayerManagement from './components/PlayerManagement';
import PlayerProfile from './components/PlayerProfile';
import EditPlayerOverview from './components/EditPlayerOverview';

const routes = [
    { path: '/dashboard', component: Dashboard },
    { path: '/teams', component: Teams },
    { path: '/invoice', component: Invoice },
    { path: '/sponsoring', component: Sponsoring },
    { path: '/membership', component: Membership },
    { path: '/contracts', component: Contracts },
    { path: '/communications', component: Communication },
    { path: '/users', component: Users },
    { path: '/statistics', component: Statistics },
    { path: '/roles', component: Roles },
    { path: '/permissions', component: Permissions },
    { path: '/category', component: Category },
    { path: '/team/:teamId', component: Team, props: true},
    { path: '/members', component: TeamMembers },
    { path: '/events', component: Events },
    { path: '/meetings', component: Meetings },
    { path: '/trainings', component: Trainings },
    { path: '/coaches', component: Coaches },
    { path: '/coach', component: Coach },
    { path: '/matchdays', component: Matchdays },
    { path: '/players', component: Players },
    { path: '/player', component: Player },
    { path: '/tasks', component: Tasks },
    { path: '/refrees', component: Refrees },
    { path: '/fieldwardrobe', component: FieldWardrobe },
    { path: '/live', component: Liveticker },
    { path: '/coachdashboard', component: CoachDashboard },
    { path: '/playermanagement', component: PlayerManagement },
    { path: '/playerprofile', component: PlayerProfile },
    { path: '/editOverview', component: EditPlayerOverview },

];

Vue.use(VueRouter);

export default new VueRouter({
    routes,
    mode: 'history',
    // linkActiveClass: 'active'
})