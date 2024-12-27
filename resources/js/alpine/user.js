import { user } from './state.js';

export default () => ({
    user,
    errors: [],
    success: '',
    modal: {},
    processing : false,
    openModal(event) {
        this.user = (Object.keys(event.detail).length) ? event.detail : user;
        this.modal = new bootstrap.Modal(document.getElementById('modal-user'));
        this.modal.show();
    },
    async send() {
        const token = document.querySelector('#__token').getAttribute('content');

        let endpoint = '/user';
        let method = 'POST'; 
        this.processing = true;

        if(this.user.id){
            endpoint = '/user/update';
            method = 'PUT';
        } 

        const response = await fetch(endpoint, {

            method,
            headers: {
                'X-CSRF-TOKEN': token,
                'Content-type': 'application/json'
            },
            body: JSON.stringify(this.user)
        });

        let data = await response.json();
        // console.log(JSON.stringify(data));
        
        this.errors = data.errors;
        this.processing = false;
        
        // console.log(this.errors);
        
        setTimeout(() => {
            this.errors = [];
        }, 3000)
        
        
        this.processing = false;
        if (response.ok) {
            this.success = data.success;
            
            setTimeout(() => {
                this.success = '';
                this.modal.hide();
            }, 3000)
            return;
        }

    }


});