const { createApp } = Vue
createApp({
data() {
    return {
        disks: Array,
        currentDisk: {
            selected: false,
            i: 0,
        }


    }
},
methods: {
    getDiskList() {
        axios.get('./script.php')
        .then((res) => {
            this.disks = res.data.results
        })
    },
    getIndex(index) {
        this.currentDisk = {
            selected: true,
            i: index,
        }

        return this.currentDisk
        
    }
},
created() {
    this.getDiskList()
}
}).mount('#app')