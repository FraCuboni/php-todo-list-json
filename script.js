const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            list: [],
            toDoNew: '',
        };
    },
    methods: {
        getApi() {
            axios.get(this.apiUrl)
                .then(res => {
                    this.list = res.data;
                    console.log('Dati ricevuti');
                })
                .catch(err => {
                    console.error("Errore nella richiesta GET", err);
                });
        },

        updateList() {
            console.log('updateList chiamato');

            const data = {
                toDoNew: this.toDoNew
            };

            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'application/json' }
            })
                .then(res => {
                    console.log('Dati aggiornati:', res.data);
                    this.list = res.data;
                    this.toDoNew = '';
                })
                .catch(err => {
                    console.error("Errore nella richiesta POST", err);
                });
        }
    },
    mounted() {
        console.log('mounted!');
        this.getApi();
    }
}).mount('#app');
