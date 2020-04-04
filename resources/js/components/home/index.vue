<template>
    <div class="container">
        <div class="card" style="">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                </p>
            </div>
            <div class="list-group">
                <router-link
                    to="/ability-score"
                    class="list-group-item list-group-item-action"
                >
                    Ability Score
                </router-link>
                <router-link
                    to="/foo"
                    class="list-group-item list-group-item-action"
                >
                    Criar personagem
                </router-link>
                <router-link
                    to="/foo"
                    class="list-group-item list-group-item-action"
                >
                    Criar personagem
                </router-link>
                <router-link
                    to="/foo"
                    class="list-group-item list-group-item-action"
                >
                    Criar personagem
                </router-link>
                <router-link
                    to="/foo"
                    class="list-group-item list-group-item-action"
                >
                    Criar personagem
                </router-link>
            </div>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
        <div>
            <router-link
                to="/ability-score"
                tag="button"
                class="btn btn-primary"
            >
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
            personagens: []
        };
    },
    methods: {},
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
