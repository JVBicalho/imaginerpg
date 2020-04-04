<template>
    <div class="container">
    <div>
        <router-link to="/ability-score" tag="button" class="btn btn-primary">
            Ability Score
        </router-link>
        <router-link to="/foo" tag="button" class="btn btn-primary">
            Criar personagem
        </router-link>
        <router-link to="/foo" tag="button" class="btn btn-primary">
            Criar personagem
        </router-link>
        <router-link to="/foo" tag="button" class="btn btn-primary">
            Criar personagem
        </router-link>
        <router-link to="/foo" tag="button" class="btn btn-primary">
            Criar personagem
        </router-link>
          
        

    </div>
                
                
        
    </div>
</template>

<script>
    export default {
        data() {
            return {
                personagens: [],
            }
        },
        methods(){

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
