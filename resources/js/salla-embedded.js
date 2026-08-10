import { embedded } from '@salla.sa/embedded-sdk';

console.log('[EMBEDDED-SDK] Bundle loaded — SDK singleton is ready on window.salla.embedded');
console.log('[EMBEDDED-SDK] embedded object:', typeof embedded);

// DO NOT call embedded.init() or embedded.ready() here.
// Both are called explicitly from the Alpine.js init() lifecycle in
// resources/views/layouts/salla.blade.php so that:
//   1) embedded.init() starts the postMessage handshake with the host,
//   2) all data (auth / settings / orders) is loaded,
//   3) ONLY THEN embedded.ready() is sent to the host.
// Calling init() here would race the Alpine lifecycle and cause the
// host to timeout waiting for the ready signal.
window.salla = window.salla || {};
window.salla.embedded = embedded;
window.Salla = window.Salla || {};
window.Salla.embedded = embedded;
