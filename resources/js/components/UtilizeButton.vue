<template>
    <div class="container">


     <button @click="utilizeCloudapp" class="btn btn-danger" v-if="getStatus">Deactivate</button>
        <button @click="utilizeCloudapp" class="btn btn-primary" v-else>Activate</button>




    </div>
</template>

<script>
    export default {

        props:[
            'cloudappId',
            'utilizes',

        ],

        mounted() {
            // console.log('Component mounted.')

        },

        data:function(){
            return{
                status:this.utilizes,
            }

        },
        methods: {
            utilizeCloudapp() {

                axios.post('/cloudapp/' + this.cloudappId).then(
                    response=>{

                        this.status=!this.status;
                        // console.log(this.status);
                        // if(this.status==false ) {
                        //     window.open('/home');
                        //     console.log(this.status);
                        // }
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
