<template>
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">Example Navbar</div>
                    <div class="card-body">
                        <h3>{{clientAged}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "NavbarComponent",
        data(){
            return{
            }
        },
        props: ['clientAged'],
        methods:{

        },
        watch:{

        },
        mounted() {

        },
    }
</script>
