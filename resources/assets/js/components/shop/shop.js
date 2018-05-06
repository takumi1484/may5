export default {
    mounted() {
        this.getShops();
    },
    data: function(){
        return{
            a:1,
            checkedNames:[],
            shops: [],
        }
    },
    methods: {
        b: function () {
            alert("run method b")
        },
        getShops(){
            axios.get('/api/shop/')
                .then(response => {
                    console.log(response);
                    this.shops = response.data;
                })
        }
    },
}