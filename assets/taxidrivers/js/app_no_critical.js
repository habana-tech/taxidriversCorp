import '../scss/app_no_critical.scss';

import sal from '../../../node_modules/sal.js/dist/sal';
import SmoothScroll from 'smooth-scroll';
import MobileMenu from './modules/global/_menuMobile';

new MobileMenu();
new SmoothScroll('a[href*="#"]', {
    speed: 500,
    speedAsDuration: true,
    offset: 75
});
sal();