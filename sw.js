importScripts('/js/skripta.js');


self.addEventListener('install', function(e) {
 e.waitUntil(
   caches.open('airhorner').then(function(cache) {
     return cache.addAll([
       '/',
       '/html/index.html',
       '/?homescreen=1',
       '/css/styles.css',
       
     ]);
   })
 );
});