import axiosControll from "../../axiosControll";

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
        getShops() {
            axiosControll.get('shop', res => {
                this.shops = res.data
            })
        }
    },
}