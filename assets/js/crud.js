/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/crud.css');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// const $ = require('jquery');

console.log('Hello Webpack Encore! Edit me in assets/js/crud.js');
/*
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });
*/
  // Or with jQuery

  $(document).ready(function(){

    // Format des date et initialisation du datepicke
    $('.datepicker').datepicker({
        format : 'dd/mm/yyyy',
    });

    // Hover des bouton
    $('.tooltipped').tooltip();

    //Modale
        $('.modal').modal();

  });
  
