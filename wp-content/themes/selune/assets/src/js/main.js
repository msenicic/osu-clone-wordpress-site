// Import scripts
import {Fancybox} from '@fancyapps/ui'; // eslint-disable-line
import './vendor/slick.min';

// Styles
import '../sass/main.scss';

// Import asset images
import './images';

// Import javascript
// import debounce from './helpers/debounce';

import siteMenu from './partials/siteMenu';
import header from './partials/header';
import slickSettings from './partials/slickSettings';

jQuery(document).ready(function () {
    //siteMenu(jQuery);
    header(jQuery);
    slickSettings(jQuery);
});