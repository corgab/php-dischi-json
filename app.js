const { createApp } = Vue
createApp({
data() {
    return {
        disks: Array
    }
},
methods: {
    getDiskList() {
        axios.get('./script.php')
        .then((res) => {
            this.disks = res.data.results
        })
    },
},
created() {
    this.getDiskList()
}
}).mount('#app')