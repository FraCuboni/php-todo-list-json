const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            list: [],
        };
    },
    methods: {
        getApi() {
            axios.get(this.apiUrl)
                .then(res => {
                    this.list = res.data;
                    console.log('dati ricevuti')
                })
                .catch(err => {
                    console.error("Errore", error);
                });
        }
    },
    mounted() {
        console.log('mounted!')
        this.getApi();
    }
}).mount('#app');