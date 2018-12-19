<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body" v-for="(client,index) in clients" :key="index">
                        <p>Client {{ client.name }} from {{client.location}} is {{client.age}} years old.</p>
                        <button v-on:click="addAge(index,client.name)">Make {{client.name}} older with 1 year</button>
                    </div>
                    <button v-on:click="addNewClient">Add new client</button>
                    <button v-on:click="saveClients">Save clients</button>
                    <!--<button v-on:click="addAge">Make {{name}} older with 1 year</button>-->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ExampleComponent",
        data(){
            return{
                clients: [{}],
            }
        },
        methods:{
            addAge: function (index,name) {
                this.clients[index].age++;
                this.$emit('change-name', name);
            },
            saveClients: function() {
                axios
                    .post(window.location.href + 'getclients', this.clients);

            },
            addNewClient: function() {
                let newclient = {"id":2,"name":"Robert","age":28,"location":"Oradea"};
                this.$set(this.clients, this.clients.length, newclient);
            }
        },
        watch:{
          clients: {
              handler(){
                  console.log(this.clients);
              },
              deep: true
          }
        },
        mounted() {
            axios
                .get(window.location.href + 'getclients')
                .then(response => {
                    this.clients = response.data.clients;

                });
        },

    }
</script>
