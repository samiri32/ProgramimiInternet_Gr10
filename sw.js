"use strict";

console.log('WORKER: duke u ekzekutuar.');

/*  Nje numer i verzion na vyn kur e bojm update worker logic, 
na len me i remove outdated cache entries kur bohet update
   
*/
var verzion = 'v1::';

/* Kto resources kan me u download edhe cache prej service worker kur bohet instalimi, 
nese naj resource nuk downloadohet nuk instalohet as service worker
 
*/
var offlineFundamentals = [
  '',
  'css/stlyes.css',
  'js/skripta.js'
];

/* 
eventi install nis kur service worker eshte install
  
   mujna me perdor kete event per me pergadit serive worker per me mujt me sherby files per userat edhe nese jon offline
   
*/
self.addEventListener("install", function(event) {
  console.log('WORKER: install event in progress.');

  /* kur e perdorim event.waitUntil e bllokon instalimin nqat promise, 
  nese promise eshte rejected as service worker nuk instalohet 
  */

  event.waitUntil(
    /* 
    "The caches built-in" eshte promise-based API qe tndihmon me i cache pergjigjet,
       poashtu me i gjet edhe me i fshi.
    */
    caches
      /* munesh me qel ni cache prej emrin edhe metoda e kthen ni promise. 
      ktu e perdorim ni "verzion cached name" 
      qe me mujt me remove old cache entries ne te njejten kohe ma vone kur shkeputet nga service worker i vjeter
     
      */
      .open(version + 'fundamentals')
      .then(function(cache) {
        /* pasi qe hapet cache, mujna me mbush me senet qe dojm mi pas offline.
        metoda pasuese ka me i shtu krejt resurset ne 'offlineFundamentals' te cache,
        pasi qe bojm request per to
       
        */
        return cache.addAll(offlineFundamentals);
      })
      .then(function() {
        console.log('WORKER: install completed');
      })
  );
});

/* fetch eventi lshohet kurdo qe faqja qe eshte e kontrollume prej qiti service worker e lyp ni resource.
nuk eshte e limitume me fetch e as XMLHttpRequest po kupton edhe requestin per faqen e HTML ne load tpare, 
po ashtu edhe JS edhe CSS resources, fontat, images, etj.

*/
self.addEventListener("fetch", function(event) {
  console.log('WORKER: fetch event in progress.');

  /* na duhet met i cache vetem GET kerkesat edhe me u merr me pjesen tjeter te metodes ne client-side, 
  duke i handle postime, put, patch requestat qe kan deshtu
   
  */
  if (event.request.method !== 'GET') {

    /* nese nuk e bllokojm eventin si qitu posht, 
    requesti ka me shku te network si zakonisht
    
    */
    console.log('WORKER: fetch event ignored.', event.request.method, event.request.url);
    return;
  }
  /* ngjashem si event.waitUntil qe e bllokon fetch eventin me promise.
  rezultati i fulfillment  ka me u perdor si pergjigje edhe refuzimi 
  ka me na jep nje HTTP pergjigje qe tregon deshtimin
  
  */
  event.respondWith(
    caches
      /* kjo metode e kthen nje promise qe zgjidhet ne nje cache entry matching the request.
      pasi qe promise kryhet na mujna me e jep nje pergjigje te fetch kerkesa
      
      */
      .match(event.request)
      .then(function(cached) {
        /* edhe nese pergjigjen e kem ne cache na prap shkojna te network
        ky model eshte i njohur per me prodhu "eventually fresh" pergjigje, 
        ku kthejm pergjigjet cached menjehere edhe njekohesisht e bejme pull ni 
        network response edhe i shtim krejt n'cache
                
        */
        var networked = fetch(event.request)
          // E bojm handle requestin e network edhe nese ka sukses edhe nese deshton.
          .then(fetchedFromNetwork, unableToResolve)
          // Duhet me i catch errorat ne fetchedFromNetwork handler too.
          .catch(unableToResolve);

        /* e kthejm ni pergjigje cached menjehere nese ekziston nje 
        edhe kthehemi me prit network si gjith
         
        */
        console.log('WORKER: fetch event', cached ? '(cached)' : '(network)', event.request.url);
        return cached || networked;

        function fetchedFromNetwork(response) {
          /* e kopjojm pergjigjen para se me reply te kerkesa e network.
          qet pergjigje kena me store n'ServiceWorker cache.
          
          */
          var cacheCopy = response.clone();

          console.log('WORKER: fetch response from network.', event.request.url);

          caches
            // Ne e hapim ni cache per me shti response per qet kerkese.
            .open(version + 'pages')
            .then(function add(cache) {
              /* kena me store pergjigjen per qet kerkese, ma vone ka me u bo 
              availavle te thirrjet e caches.match(event.request) kur lypet per cached responses
              
              */
              return cache.put(event.request, cacheCopy);
            })
            .then(function() {
              console.log('WORKER: fetch response stored in cache.', event.request.url);
            });

          // kthe pergjigjen ne menyre qe promise me u permbush.
          return response;
        }

        /* kur thirret qekjo metode dmth qe nuk kem mujt me produce ni pergjigje as prej
        cache as prej network. qitu e kem mundsin me kriju ni pergjigje tkuptushme kur
        krejt tjerat deshtojn. dmth masi shanca e fundit ose e bojm ni view "service unavailable" 
        ose e bojm ni error response vet 
        
        */
        function unableToResolve () {
          /* qitu mujna mi bo do sene.
          -me testu Accept header edhe me u kthy te 'offlineFundamentals'
          psh 'return caches.match('/diqka/cached/image.png')'
          -me generate ni response programmaticaly si qysh kena me bo ma posht, edhe me return qata 
         
          */

          console.log('WORKER: fetch request failed in both cache and network.');

          /* ktu e krijojm ni response programmatically, paramentri i pare eshte body 
          i response edhe parametri i dyte e definon opsionin per pergjigjen 
          
          */
          return new Response('<h1>Service Unavailable</h1>', {
            status: 503,
            statusText: 'Service Unavailable',
            headers: new Headers({
              'Content-Type': 'text/html'
            })
          });
        }
      })
  );
});

/* eventi activate lshohet masi qe service worker u install me sukses.
eshte ma useful kur e largojm ni verzion ma tvjeter te naj service worker, 
nqet pike veq e dim qe worker i ri u instalu mire. mqet shembull i fshijna 
caches tvjetra qe nuk pershtaten me verzionin e worker qe sa e instalum

*/
self.addEventListener("activate", function(event) {
  /* tash me isntall eventin, event.waitUntil e bllokon activate on a promise.
  aktivizimi ka me deshtu perveq nese promise ka kalu me sukses
  
  */
  console.log('WORKER: activate event in progress.');

  event.waitUntil(
    caches
      /* qekjo metode e kthen ni promise qe ka me u resolve te ni array me 
      available cache keys
      
      */
      .keys()
      .then(function (keys) {
        // E bojm return ni promise qe settle kur krejt outdated caches jon fshi.
        return Promise.all(
          keys
            .filter(function (key) {
              // Bon filter te keys qe nuk fillojn me prefix te verzionit tfundit.
              return !key.startsWith(version);
            })
            .map(function (key) {
              /* E bojm return ni promise qe eshte fulfilled kur secila prej
              outdated caches jon fshi.
              */
              return caches.delete(key);
            })
        );
      })
      .then(function() {
        console.log('WORKER: activate completed.');
      })
  );
});