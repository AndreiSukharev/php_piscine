

let app = new Vue({
    el: '#app',
    data: {
        input_form: '',
        name: 'NoName',
        finger: Boolean,
        stalker: ''


    },
    methods: {
        showAlert () {
            alert("I got your message: " + this.input_form);
        },
        yourName () {
            this.name = prompt('Lets play!\n What is your name?', '');
            alert("Nice to meet you, " + this.name + "\nPush next button 'Hand' ")
        },
        fingers () {
            let finger = +prompt(`Guess ${this.name}, How many fingers on this hand?`, '');
            if (finger === 5)
            {
                finger = true;
                alert("Smart peer\nSo, next button 'Vision'");
            }
            else
            {
                finger = false;
                alert("OMG\nSo, next button 'Vision'");
            }

        },
        goAway() {
            this.stalker = "Иди своей дорогой, сталкер";
        },
        speak() {
            alert(`${this.name}, if you want to say smth write in form below`)
        }

    },
    computed: {
        reversed() {
            return this.input_form.split('').reverse().join('');
        }
    }
});