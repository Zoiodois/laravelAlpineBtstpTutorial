import './bootstrap';

import Alpine from 'alpinejs'

import user from './alpine/user'
 
window.Alpine = Alpine

window.__user = user
 
Alpine.start()