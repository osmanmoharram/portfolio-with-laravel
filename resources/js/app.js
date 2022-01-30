require('./bootstrap');

import Alpine from 'alpinejs'
import axios from 'axios';

window.Alpine = Alpine

Alpine.start()

window.onbeforeunload = () => {
    document.getElementById('sender').value = '';
    document.getElementById('email').value = '';
    document.getElementById('body').value = '';
};

//Reach Me Form
Alpine.store('formSubmit', {
    visible: false,

    submit() {
        axios.post('/', {
            'sender': sender.value,
            'email': email.value,
            'body': body.value
        }).then((response) => {
            console.log( response.data);
            document.getElementById('feedback').style.display = 'flex';

            sender.value = '';
            email.value = '';
            body.value = '';

        }).catch((errors) => {
            if (errors.response.data.errors.sender !== undefined) {
                sender.classList.add('border', 'border-red-500')
                senderError.innerHTML = errors.response.data.errors.sender[0];
            }

            if (errors.response.data.errors.email !== undefined) {
                email.classList.add('border', 'border-red-500')
                emailError.innerHTML = errors.response.data.errors.email[0];
            }

            if (errors.response.data.errors.body !== undefined) {
                body.classList.add('border', 'border-red-500')
                bodyError.innerHTML = errors.response.data.errors.body[0];
            }
        });
    }
});

//Light-Dark Mode
Alpine.store('theme', {
    set(mode) {
        // Whenever the user explicitly chooses light mode
        if(mode === 'light') {
            localStorage.theme = 'light';
            window.updateTheme();
        }

        // Whenever the user explicitly chooses dark mode
        if(mode === 'dark') {
            localStorage.theme = 'dark';
            window.updateTheme();
        }

        // Whenever the user explicitly chooses to respect the OS preference
        if(mode === 'system') {
            localStorage.removeItem('theme');
            window.updateTheme();
        }
    },
});
