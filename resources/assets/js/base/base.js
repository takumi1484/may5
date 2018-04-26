export default {
    // name: "base",        //この表記はphpstormでvueを作成したときに自動で入力されているが、これがあるとコンソールでエラーが出てしまった
    mounted() {//コンポーネントがマウントされた瞬間に実行される
        console.log('base.vue mounted.')
        alert('base.vue mounted.')
    }
}