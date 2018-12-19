<template>
    <div>
        <navbar-component v-bind:client-aged="clientAgedName"></navbar-component>
        <example-component v-on:change-name="changeName"></example-component>
    </div>
</template>

<script>
    import NavbarComponent from "./NavbarComponent";
    import ExampleComponent from "./ExampleComponent";
    export default {
        name: "MainComponent",
        components: { NavbarComponent, ExampleComponent},
        data(){
            return{
                clientAgedName: '',
            }
        },
        methods: {
            changeName: function(name){
                console.log(name);
                this.clientAgedName = name;
            }
        }

    }
</script>

<style scoped>

</style>
