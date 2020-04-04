<template>
    <div class="container">
        <h4>Adcionar Ability Score</h4>
        <form @submit.prevent="submit">
            <div class="form-group">
                <label for="slug">Slug</label>
                <input
                    type="text"
                    v-model="form.slug"
                    maxlength="100"
                    name="slug"
                    id="slug"
                    class="form-control"
                    placeholder="slug-exemple"
                    aria-describedby="helpId"
                />
                <small id="helpId" v-if="errors && errors.slug" class="text-danger">{{ errors.slug[0] }}</small
                >
            </div>
            <div class="form-group">
                <label for="name">Abreviação</label>
                <input
                    type="text"
                    v-model="form.name"
                    maxlength="50"
                    name="name"
                    id="name"
                    class="form-control"
                    placeholder="STR,WIS"
                    aria-describedby="helpId"
                />
                <small id="helpId" v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</small>
            </div>
            <div class="form-group">
                <label for="full_name">Nome Completo</label>
                <input
                    type="text"
                    v-model="form.full_name"
                    maxlength="100"
                    name="full_name"
                    id="full_name"
                    class="form-control"
                    placeholder="Strength, wisdom"
                    aria-describedby="helpId"
                />
                <small v-if="errors && errors.full_name" class="text-danger">{{ errors.full_name[0] }}</small>
            </div>
            <div class="form-group">
                <label for="desc">Descrição</label>
                <input
                    type="text"
                    v-model="form.desc"
                    maxlength="500"
                    name="desc"
                    id="desc"
                    class="form-control"
                    placeholder="Uma breve descrição"
                    aria-describedby="helpId"
                />
                <small id="helpId" v-if="errors && errors.desc" class="text-danger">{{ errors.desc[0] }}</small>
            </div>
            <button type="submit" class="btn btn-primary">Criar</button>
            <button type="button" @click="$router.go(-1)" class="btn btn-primary">Voltar</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                slug: null,
                name: null,
                full_name: null,
                desc: null
            },
            errors: {},
            success: false,
            loaded: true
           
        };
    },
    methods: {
        
        
        submit() {
            self =this;
            axios.post("http://localhost/blog/public/api/ability-score", self.form)
            .then(response => {
                self.form = {}; //Clear input fields.
                self.loaded = true;
                self.success = true;
            })
            .catch(error => {
                 self.loaded = true;
                if (error.response.status === 422) {
                    self.errors = error.response.data.errors || {};
                }
            });
        }
        
    },
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
