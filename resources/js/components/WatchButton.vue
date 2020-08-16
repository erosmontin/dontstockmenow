<template>
    <div class="container">


     <button @click="watchStock" class="btn btn-danger" v-if="getStatus">Follow</button>
        <button @click="watchStock" class="btn btn-primary" v-else>Unfollow</button>




    </div>
</template>

<script>
    export default {

        props:[
            'stockId',
            'watches',

        ],

        mounted() {
            // console.log('Component mounted.')

        },

        data:function(){
            console.log(this.watches);
            return{

                status:this.watches,
            }

        },
        methods: {
            watchStock() {

                axios.post('/stock/' + this.stockId).then(
                    response=>{

                        this.status=!this.status;

                    }
                )
            }
        },

        computed:{
            getStatus(){
                return (this.status)? true:false;
            }
        }
    }
</script>
