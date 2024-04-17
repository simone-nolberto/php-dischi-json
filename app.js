// import axios from "axios"


const { createApp } = Vue
createApp({
    data() {
        return {
            discsAPI: "dischi.json",
            discs: '',
        }


    },

    mounted() {

        axios.get(this.discsAPI)
            .then(response => {
                console.log(response);
                this.discs = response.data;
                console.log(this.discs);
            })
    }

}).mount('#app')