// import axios from "axios"


const { createApp } = Vue
createApp({
    data() {
        return {
            discsAPI: "api.php",
            discs: '',
        }


    },

    mounted() {

        axios.get(this.discsAPI)
            .then(response => {
                console.log(response);
                this.discs = response.data;
                // console.log(this.discs);
            })
    }

}).mount('#app')