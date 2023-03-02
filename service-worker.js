/**
 * Copyright 2016 Google Inc. All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
*/

// DO NOT EDIT THIS GENERATED OUTPUT DIRECTLY!
// This file should be overwritten as part of your build process.
// If you need to extend the behavior of the generated service worker, the best approach is to write
// additional code and include it using the importScripts option:
//   https://github.com/GoogleChrome/sw-precache#importscripts-arraystring
//
// Alternatively, it's possible to make changes to the underlying template file and then use that as the
// new base for generating output, via the templateFilePath option:
//   https://github.com/GoogleChrome/sw-precache#templatefilepath-string
//
// If you go that route, make sure that whenever you update your sw-precache dependency, you reconcile any
// changes made to this original template file with your modified copy.

// This generated service worker JavaScript will precache your site's resources.
// The code needs to be saved in a .js file at the top-level of your site, and registered
// from your pages in order to be used. See
// https://github.com/googlechrome/sw-precache/blob/master/demo/app/js/service-worker-registration.js
// for an example of how you can register this script and handle various service worker events.

/* eslint-env worker, serviceworker */
/* eslint-disable indent, no-unused-vars, no-multiple-empty-lines, max-nested-callbacks, space-before-function-paren, quotes, comma-spacing */
'use strict';

var precacheConfig = [["assets/css/bikelist.css","eb517c4ef8757aeaf1f7250d97f4ae40"],["assets/css/bootstrap.css","a5838e26780a13c825165348e0142063"],["assets/css/buy_sell.css","ddaed73fdcde45f6573e6fe373f50568"],["assets/css/custom.css","fd184bb8415e0d0737a971141f89dddc"],["assets/css/font-awesome.css","7f69036a28728ce4b8a1a4bbad04c7d9"],["assets/css/fontawesome.css","3c90db2bfd228a7b10f28e31f64cf186"],["assets/fonts/FontAwesome.otf","3b15120c304688379525c9f3c15cc4c2"],["assets/fonts/fontawesome-webfont.eot","90186830c9c50a0fed932494581761d9"],["assets/fonts/fontawesome-webfont.svg","776d58f453c8fe5d6a89e9c31ee223ff"],["assets/fonts/fontawesome-webfont.ttf","4f0022f25672c7f501c339cbf98d9117"],["assets/fonts/fontawesome-webfont.woff","fdf491ce5ff5b2da02708cd0e9864719"],["assets/fonts/glyphicons-halflings-regular.eot","aa16cd35628e6dddf56e766c9aa4ae63"],["assets/fonts/glyphicons-halflings-regular.svg","0a5c48c69a25a93e37ed62db813387fa"],["assets/fonts/glyphicons-halflings-regular.ttf","47da44498fc073d9fff9ab0cdb0bef8e"],["assets/fonts/glyphicons-halflings-regular.woff","5eae1f7217b606d3580dd70ac840fea1"],["assets/fonts/glyphicons-halflings-regulard41d.eot","aa16cd35628e6dddf56e766c9aa4ae63"],["assets/img/logo.png","c4db2c1a246de6eca960c3f4748a5b4a"],["assets/js/bootstrap.min.js","e1d08589ec26bec3a81625ce274d76d9"],["assets/js/custom.js","d8262cfe33f7ea4ef97f259029098f8f"],["assets/js/jquery-1.10.2.js","4ac62701fc58d4ac292e5e2be358228b"],["bs-simple-admin/additem.php","61f1e005fce449eec38df93230a4f51a"],["bs-simple-admin/assets/css/bikelist.css","eb517c4ef8757aeaf1f7250d97f4ae40"],["bs-simple-admin/assets/css/bootstrap.css","a5838e26780a13c825165348e0142063"],["bs-simple-admin/assets/css/buy_sell.css","ddaed73fdcde45f6573e6fe373f50568"],["bs-simple-admin/assets/css/custom.css","1f8e6bacc4f21c9c3e1b66454c2fb4d3"],["bs-simple-admin/assets/css/font-awesome.css","7f69036a28728ce4b8a1a4bbad04c7d9"],["bs-simple-admin/assets/css/fontawesome.css","3c90db2bfd228a7b10f28e31f64cf186"],["bs-simple-admin/assets/css/style.css","5d1c003457821deb0ddd51c7837d305a"],["bs-simple-admin/assets/css/utilities.css","c9d4309377f6ace54d82bc58db2bfbfd"],["bs-simple-admin/assets/fonts/FontAwesome.otf","3b15120c304688379525c9f3c15cc4c2"],["bs-simple-admin/assets/fonts/fontawesome-webfont.eot","90186830c9c50a0fed932494581761d9"],["bs-simple-admin/assets/fonts/fontawesome-webfont.svg","776d58f453c8fe5d6a89e9c31ee223ff"],["bs-simple-admin/assets/fonts/fontawesome-webfont.ttf","4f0022f25672c7f501c339cbf98d9117"],["bs-simple-admin/assets/fonts/fontawesome-webfont.woff","fdf491ce5ff5b2da02708cd0e9864719"],["bs-simple-admin/assets/fonts/glyphicons-halflings-regular.eot","aa16cd35628e6dddf56e766c9aa4ae63"],["bs-simple-admin/assets/fonts/glyphicons-halflings-regular.svg","0a5c48c69a25a93e37ed62db813387fa"],["bs-simple-admin/assets/fonts/glyphicons-halflings-regular.ttf","47da44498fc073d9fff9ab0cdb0bef8e"],["bs-simple-admin/assets/fonts/glyphicons-halflings-regular.woff","5eae1f7217b606d3580dd70ac840fea1"],["bs-simple-admin/assets/fonts/glyphicons-halflings-regulard41d.eot","aa16cd35628e6dddf56e766c9aa4ae63"],["bs-simple-admin/assets/img/logo.png","c4db2c1a246de6eca960c3f4748a5b4a"],["bs-simple-admin/assets/js/bootstrap.min.js","e1d08589ec26bec3a81625ce274d76d9"],["bs-simple-admin/assets/js/custom.js","d8262cfe33f7ea4ef97f259029098f8f"],["bs-simple-admin/assets/js/jquery-1.10.2.js","4ac62701fc58d4ac292e5e2be358228b"],["bs-simple-admin/bikebuddy_1.php","6835a76fb0fcccfb5255e681f64b359c"],["bs-simple-admin/bikerlist.php","8b133211a8b896013aaa6a92bb888ab7"],["bs-simple-admin/blank.php","5393bb37f6bbf2e6abd4181ac60cd65b"],["bs-simple-admin/buy_sell.php","3cb57b2408869ce6bdd83febbd8aa64b"],["bs-simple-admin/buysellhome.php","70d73a68dc9b44603440cef62af21f66"],["bs-simple-admin/demo.php","d41d8cd98f00b204e9800998ecf8427e"],["bs-simple-admin/forum/avatar.jpg","89570288bff8ad49fc682ffc9086116a"],["bs-simple-admin/forum/bootstrap.css","a5838e26780a13c825165348e0142063"],["bs-simple-admin/forum/bootstrap.min.js","e1d08589ec26bec3a81625ce274d76d9"],["bs-simple-admin/forum/conn.php","20293868c1d5fa1a19f2e9263b6c61a3"],["bs-simple-admin/forum/custom.css","a4de299ac09ef70859f2a5b6e0764378"],["bs-simple-admin/forum/custom.js","d8262cfe33f7ea4ef97f259029098f8f"],["bs-simple-admin/forum/font-awesome.css","7f69036a28728ce4b8a1a4bbad04c7d9"],["bs-simple-admin/forum/fontawesome.css","3c90db2bfd228a7b10f28e31f64cf186"],["bs-simple-admin/forum/forum.sql","e810178a03c0fc7a1c9862f5d233f843"],["bs-simple-admin/forum/homepage copy.php","a0f109ea8bf78e61df0a68675dafc8b0"],["bs-simple-admin/forum/index.php","b77f7e3012f1d32af5aa01c20b3d75ed"],["bs-simple-admin/forum/index1.php","e8e441543a044bedc80c69c5b821ad85"],["bs-simple-admin/forum/jquery-1.10.2.js","4ac62701fc58d4ac292e5e2be358228b"],["bs-simple-admin/forum/main.js","713ebfaf5cfdd4c79d2fd5a5389bb40b"],["bs-simple-admin/forum/save.php","b09b8c7769f57feb70894135e4f6d932"],["bs-simple-admin/forum/view.php","8a6c6974419d5a1bc800a1d6833f43b6"],["bs-simple-admin/havebike.php","1b21f39a2966c96bd5b969f906402645"],["bs-simple-admin/homepage.php","32fe8fd706eb471b9d7c334fd8b8f066"],["bs-simple-admin/homepage3.php","19cf309cd135142ca5e03e2363d8cd18"],["bs-simple-admin/login.php","38360967690234a0dfc3dd4a0f523471"],["bs-simple-admin/logout.php","787f9cc92c2c6e86bcd65cd4edc85ac8"],["bs-simple-admin/retrieve.php","01dd0ddbb5da97255b46db593ffd0930"],["bs-simple-admin/roomfinderlist.php","79af94d0bab9487bc036168901f17365"],["bs-simple-admin/roommate.php","2294122502bc73d523c770ca16d2c796"],["bs-simple-admin/roomsharerlist.php","8a4def0fb8a39ece208203442a3a7165"],["bs-simple-admin/shareroom.php","4d4b1cbf2e047a4f5285d44252deac9b"],["bs-simple-admin/studyinput.php","e3c16f1b03c322e87883232af84a4f65"],["bs-simple-admin/studyout.php","a50a609b779cfc285b31f07a01a7fe34"],["bs-simple-admin/ui.php","e5253a00e686472acb8fe3d7d8e44214"],["bs-simple-admin/wantbike.php","83b892bc9085eabb1ace7668d054c364"],["bs-simple-admin/wantroom.php","24b466470acfd79b7f130aaabf9ea982"],["config.php","ee1515f811613262a3a1f41b90769f93"],["css/style.css","5d1c003457821deb0ddd51c7837d305a"],["css/utilities.css","c9d4309377f6ace54d82bc58db2bfbfd"],["forgot.php","e94c3df020c8bbbc4a5b7de0535345db"],["havebike.php","fb235da9096e04b496769d3e6af1127f"],["homepage2.php","9dd083c29aa51224ea2f4c1ab92c5120"],["index.html","dc15aef84255c72d9d1d8c08ae537c2f"],["login.php","99cfef9ad4141667904913739aeacad3"],["logo.png","ff6e7024c7e4a34257860274669090f2"],["logo2.png","c279be95c0944df3de622d1db6a954be"],["manifest.json","007304fe130c26ac3a2624a40267faad"],["myscripts.js","bec438f2d95164aed1ea894434d89f21"],["register.php","171f99f0bfe196ccba7df1da6252ceba"],["whatsapp.php","6cb43b9aaf9c4a5ede259663c9d50e65"]];
var cacheName = 'sw-precache-v3-sw-precache-' + (self.registration ? self.registration.scope : '');


var ignoreUrlParametersMatching = [/^utm_/];



var addDirectoryIndex = function(originalUrl, index) {
    var url = new URL(originalUrl);
    if (url.pathname.slice(-1) === '/') {
      url.pathname += index;
    }
    return url.toString();
  };

var cleanResponse = function(originalResponse) {
    // If this is not a redirected response, then we don't have to do anything.
    if (!originalResponse.redirected) {
      return Promise.resolve(originalResponse);
    }

    // Firefox 50 and below doesn't support the Response.body stream, so we may
    // need to read the entire body to memory as a Blob.
    var bodyPromise = 'body' in originalResponse ?
      Promise.resolve(originalResponse.body) :
      originalResponse.blob();

    return bodyPromise.then(function(body) {
      // new Response() is happy when passed either a stream or a Blob.
      return new Response(body, {
        headers: originalResponse.headers,
        status: originalResponse.status,
        statusText: originalResponse.statusText
      });
    });
  };

var createCacheKey = function(originalUrl, paramName, paramValue,
                           dontCacheBustUrlsMatching) {
    // Create a new URL object to avoid modifying originalUrl.
    var url = new URL(originalUrl);

    // If dontCacheBustUrlsMatching is not set, or if we don't have a match,
    // then add in the extra cache-busting URL parameter.
    if (!dontCacheBustUrlsMatching ||
        !(url.pathname.match(dontCacheBustUrlsMatching))) {
      url.search += (url.search ? '&' : '') +
        encodeURIComponent(paramName) + '=' + encodeURIComponent(paramValue);
    }

    return url.toString();
  };

var isPathWhitelisted = function(whitelist, absoluteUrlString) {
    // If the whitelist is empty, then consider all URLs to be whitelisted.
    if (whitelist.length === 0) {
      return true;
    }

    // Otherwise compare each path regex to the path of the URL passed in.
    var path = (new URL(absoluteUrlString)).pathname;
    return whitelist.some(function(whitelistedPathRegex) {
      return path.match(whitelistedPathRegex);
    });
  };

var stripIgnoredUrlParameters = function(originalUrl,
    ignoreUrlParametersMatching) {
    var url = new URL(originalUrl);
    // Remove the hash; see https://github.com/GoogleChrome/sw-precache/issues/290
    url.hash = '';

    url.search = url.search.slice(1) // Exclude initial '?'
      .split('&') // Split into an array of 'key=value' strings
      .map(function(kv) {
        return kv.split('='); // Split each 'key=value' string into a [key, value] array
      })
      .filter(function(kv) {
        return ignoreUrlParametersMatching.every(function(ignoredRegex) {
          return !ignoredRegex.test(kv[0]); // Return true iff the key doesn't match any of the regexes.
        });
      })
      .map(function(kv) {
        return kv.join('='); // Join each [key, value] array into a 'key=value' string
      })
      .join('&'); // Join the array of 'key=value' strings into a string with '&' in between each

    return url.toString();
  };


var hashParamName = '_sw-precache';
var urlsToCacheKeys = new Map(
  precacheConfig.map(function(item) {
    var relativeUrl = item[0];
    var hash = item[1];
    var absoluteUrl = new URL(relativeUrl, self.location);
    var cacheKey = createCacheKey(absoluteUrl, hashParamName, hash, false);
    return [absoluteUrl.toString(), cacheKey];
  })
);

function setOfCachedUrls(cache) {
  return cache.keys().then(function(requests) {
    return requests.map(function(request) {
      return request.url;
    });
  }).then(function(urls) {
    return new Set(urls);
  });
}

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return setOfCachedUrls(cache).then(function(cachedUrls) {
        return Promise.all(
          Array.from(urlsToCacheKeys.values()).map(function(cacheKey) {
            // If we don't have a key matching url in the cache already, add it.
            if (!cachedUrls.has(cacheKey)) {
              var request = new Request(cacheKey, {credentials: 'same-origin'});
              return fetch(request).then(function(response) {
                // Bail out of installation unless we get back a 200 OK for
                // every request.
                if (!response.ok) {
                  throw new Error('Request for ' + cacheKey + ' returned a ' +
                    'response with status ' + response.status);
                }

                return cleanResponse(response).then(function(responseToCache) {
                  return cache.put(cacheKey, responseToCache);
                });
              });
            }
          })
        );
      });
    }).then(function() {
      
      // Force the SW to transition from installing -> active state
      return self.skipWaiting();
      
    })
  );
});

self.addEventListener('activate', function(event) {
  var setOfExpectedUrls = new Set(urlsToCacheKeys.values());

  event.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return cache.keys().then(function(existingRequests) {
        return Promise.all(
          existingRequests.map(function(existingRequest) {
            if (!setOfExpectedUrls.has(existingRequest.url)) {
              return cache.delete(existingRequest);
            }
          })
        );
      });
    }).then(function() {
      
      return self.clients.claim();
      
    })
  );
});


self.addEventListener('fetch', function(event) {
  if (event.request.method === 'GET') {
    // Should we call event.respondWith() inside this fetch event handler?
    // This needs to be determined synchronously, which will give other fetch
    // handlers a chance to handle the request if need be.
    var shouldRespond;

    // First, remove all the ignored parameters and hash fragment, and see if we
    // have that URL in our cache. If so, great! shouldRespond will be true.
    var url = stripIgnoredUrlParameters(event.request.url, ignoreUrlParametersMatching);
    shouldRespond = urlsToCacheKeys.has(url);

    // If shouldRespond is false, check again, this time with 'index.html'
    // (or whatever the directoryIndex option is set to) at the end.
    var directoryIndex = 'index.html';
    if (!shouldRespond && directoryIndex) {
      url = addDirectoryIndex(url, directoryIndex);
      shouldRespond = urlsToCacheKeys.has(url);
    }

    // If shouldRespond is still false, check to see if this is a navigation
    // request, and if so, whether the URL matches navigateFallbackWhitelist.
    var navigateFallback = '';
    if (!shouldRespond &&
        navigateFallback &&
        (event.request.mode === 'navigate') &&
        isPathWhitelisted([], event.request.url)) {
      url = new URL(navigateFallback, self.location).toString();
      shouldRespond = urlsToCacheKeys.has(url);
    }

    // If shouldRespond was set to true at any point, then call
    // event.respondWith(), using the appropriate cache key.
    if (shouldRespond) {
      event.respondWith(
        caches.open(cacheName).then(function(cache) {
          return cache.match(urlsToCacheKeys.get(url)).then(function(response) {
            if (response) {
              return response;
            }
            throw Error('The cached response that was expected is missing.');
          });
        }).catch(function(e) {
          // Fall back to just fetch()ing the request if some unexpected error
          // prevented the cached response from being valid.
          console.warn('Couldn\'t serve response for "%s" from cache: %O', event.request.url, e);
          return fetch(event.request);
        })
      );
    }
  }
});







