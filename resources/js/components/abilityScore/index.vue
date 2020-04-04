<template>
    <div class="container">
        <div>
            <h4>Ability Score</h4>
            <router-link to="/ability-score/create" tag="button" class="btn btn-primary float-right">
                Adcionar
            </router-link>
        </div>
        <div>
            
        <ul class="list-group list-group-flush">
            <li v-for="ability in abilitys" :key="ability.slug" class="list-group-item">
                {{ ability.full_name}} 
                <div class="float-right">
                <button class="btn btn-sm btn-default" title="Editar"><i class="far fa-edit"></i></button>
                <button v-on:click="del(ability)" class="btn btn-sm btn-default" title="Excluir"><i class="far fa-trash-alt"></i></button>
                </div>
            </li>
            
        </ul>
        </div>
        <button type="button" @click="$router.go(-1)" class="btn btn-primary">Voltar</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            api: "http://localhost/blog/public/api/ability-score",
            abilitys: []
        };
    },
    methods: {
        del(item){

            self= this
            axios.delete('http://localhost/blog/public/api/ability-score/'+item.id).then(response=>{
                self.$router.go();
            })
        }
    },
    mounted() {
        self= this;
        $.getJSON(this.api, function(data) {
            console.log(data);
            self.abilitys = data;
        });
        console.log("Component mounted.");
    }
};
</script>
