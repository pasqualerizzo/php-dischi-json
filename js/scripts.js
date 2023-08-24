const { createApp } = Vue;

createApp({
    data() {
        return {
            discs: []
        };
    },
    created() {
        this.fetchDiscs(); // Chiamata direttamente all'avvio
    },
    methods: {
        fetchDiscs() {
            axios
                .get('http://localhost/php-dischi-json/api.php')
                .then(res => {
                    this.discs = res.data;
                    console.log('Fetched Discs:', this.discs);
                })
                .catch(error => {
                    console.error(error);
                });
        }
    }
}).mount('#app');
