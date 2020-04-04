import FormPersonagem from './components/FormPersonagem';
import IndexPersonagem from './components/personagens/index';
import AbilityScoreIndex from './components/abilityScore/index';
import AbilityScoreForm from './components/abilityScore/create';
import HomePage from './components/home/index';
const routes =[
    {
        path:'/',
        component:HomePage,
    },
    {
        path:'/ability-score',
        component:AbilityScoreIndex,
        
    },
    {
        path:'/ability-score/create',
        component:AbilityScoreForm,
    }
];
export default routes;