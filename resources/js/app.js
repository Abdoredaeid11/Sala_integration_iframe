import { embedded } from '@salla.sa/embedded-sdk';

require('./bootstrap');

window.Vue = require('vue').default;

Vue.component(
    'example-component',
    require('./components/ExampleComponent.vue').default
);

async function initSalla() {
    try {
        await embedded.init();

        console.log('Salla SDK initialized');

        const token = embedded.auth.getToken();

        console.log('Salla token:', token);

        if (!token) {
            throw new Error('Salla token not found');
        }

        // Verify Salla Embedded Token
        const introspect = await embedded.auth.introspect({
            token: token,
            refreshOnError: true
        });

        console.log('Salla introspect:', introspect);

        if (!introspect.isVerified || !introspect.data) {
            throw new Error('Invalid Salla embedded token');
        }

        console.log('Merchant ID:', introspect.data.merchant_id);

        // Send verified merchant information to Laravel
        const response = await axios.post('/api/salla/auth', {
            merchant_id: introspect.data.merchant_id
        });

        console.log('Salla authentication:', response.data);

        embedded.ready();

        console.log('Salla App Ready');

    } catch (error) {
        console.error('Salla SDK Error:', error);

        if (error.response) {
            console.error('Laravel Error:', error.response.data);
        }
    }
}

initSalla();

new Vue({
    el: '#app',
});
