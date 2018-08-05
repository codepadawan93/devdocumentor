
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
require('./bootstrap');

// lazy load images from voyager
if(typeof jQuery !== 'undefined')
{
    jQuery('img[data-src]').each((i, img)=>{
        let parsed = JSON.parse(img.dataset.src);
        img.src = 'storage/' + ( parsed[0].download_link || 'projects/default-project.jpg' );
    });
}