const CACHE_NAME="static_cache"


async function preCache(){
  const cache=await caches.open(CACHE_NAME)
  return cache.addAll([
    '/CSS/styles.css',
    '/CSS/stylesdark.css',
   '/js/skripta.js',
   '/js/konfirmimi.js',
    '/index.html',
    '/img/sinani.png',
    '/img/sinani3.png',
    '/img/ismail-kadare-j-foley-opale-w-1-990x556.jpg',
    '/img/ekspozita.jpeg',
    '/img/noli.jpg',
    '/img/sinani4.png',
    '/img/xhaxhienver.png',
    '/img/HIVZIABABOOO.jpg',
    '/img/mini-biblioteka.jpg',
    '/img/Dukagjinn-640x480.jpg',
    '/img/dhurohenlibra.png', 
    '/img/hasha.jpg',
    '/img/joe.jpg',
    '/img/melania.jpg',
    '/img/kupi.png',
    '/img/xhaxhienver.jpg',
    '/img/MT.jpg',
    '/img/EAP.jpg',
    '/img/FK.jpg',
    '/img/rezervo.png',
    '/img/EH.jpg',
    '/img/dante.png',
  ])
}


self.addEventListener('install', event =>{
  console.log("sw installed");
  event.waitUntil(preCache());
})

async function cleanupCache(){
  const keys= await caches.keys()
  const keysToDelete=keys.map(key=>{
    if(key!==CACHE_NAME)
    return caches.delete(key)
  })
  return Promise.all(keysToDelete)
}

self.addEventListener('activate', event =>{
  console.log("sw activated");
  event.waitUntil(cleanupCache)
})



async function fetchAssets(event){
  try{
    const response=await fetch(event.request)
    return response
  }catch(err){
    const cache=await caches.open(CACHE_NAME)
    return cache.match(event.request)
  }
}




self.addEventListener('fetch', event =>{
  console.log("sw fetched");
  event.respondWith(fetchAssets(event))
})



