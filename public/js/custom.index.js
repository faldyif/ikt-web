/**
 * Created by faldyikhwanfadila on 9/6/17.
 */

// external js: masonry.js, imagesloaded.js
// init Masonry
var grid = document.querySelector('.grid');

var msnry = new Masonry( grid, {
    fitWidth: true
});

imagesLoaded( grid ).on( 'progress', function() {
    // layout Masonry after each image loads
    msnry.layout();
});