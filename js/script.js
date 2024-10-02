const {createApp} = Vue;

createApp({
    data() {
        return {
            discs: []
        };
    },
    methods: {
        getDiscs() {
            axios
                .get('http://localhost/php-dischi-json/api.php')
                .them(res => {
                    this.discs = res.data;
                })
        }
    },
    created() {
        this.getDiscs();
    }
}).mount('#app')