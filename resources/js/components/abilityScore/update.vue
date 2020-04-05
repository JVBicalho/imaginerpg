<template>
    <v-form v-model="valid">
        <v-alert v-if="success" type="success" :value="true" dismissible>
            Atualizado com sucesso!
        </v-alert>
        <v-container>
            <v-row>
                <v-col cols="12" md="4">
                    <v-text-field
                        v-model="form.slug"
                        :rules="rules.slug"
                        :counter="100"
                        label="Slug"
                        required
                    ></v-text-field>
                </v-col>
                <v-col cols="12" md="4">
                    <v-text-field
                        v-model="form.name"
                        :rules="rules.name"
                        :counter="50"
                        label="Abreviação"
                        required
                    ></v-text-field>
                </v-col>

                <v-col cols="12" md="4">
                    <v-text-field
                        v-model="form.full_name"
                        :rules="rules.full_name"
                        :counter="100"
                        label="Nome Completo"
                        required
                    ></v-text-field>
                </v-col>

                <v-col cols="12" md="4">
                    <v-text-field
                        v-model="form.desc"
                        :rules="rules.desc"
                        label="Descrição"
                        :counter="500"
                        required
                    ></v-text-field>
                </v-col>
            </v-row>
            <v-btn
                @click.prevent="submit()"
                class="ma-2"
                outlined
                block
                color="indigo"
                >Salvar</v-btn
            >
        </v-container>
    </v-form>
</template>

<script>
export default {
    data() {
        return {
            valid: false,
            form: {
                slug: null,
                name: null,
                full_name: null,
                desc: null
            },
            rules: {
                slug: [
                    v => !!v || "Preencha este campo",
                    v => v.length <= 100 || "Descrição precisa ser menor que  100 caracteres."
                ],
                name: [
                    v => !!v || 'Preencha este campo',
                    v => v.length <= 50 || 'Descrição precisa ser menor que  50 caracteres.',
                ],
                full_name: [
                    v => !!v || 'Preencha este campo',
                    v => v.length <= 100 || 'Descrição precisa ser menor que  100 caracteres.',
                ],
                des: [
                    v => !!v || 'Preencha este campo',
                    v => v.length <= 500 || 'Descrição precisa ser menor que  500 caracteres.',
                ]
            },
            errors: {},
            success: false,
            loaded: true
        };
    },
    methods: {
        submit() {
            self = this;
            axios
                .put(
                    "http://localhost/blog/public/api/ability-score/"+this.$route.params.slug,
                    self.form
                )
                .then(response => {
                    self.form = {}; //Clear input fields.
                    self.loaded = true;
                    self.success = true;
                    this.$router.go(-1)
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
        self = this
          $.getJSON('http://localhost/blog/public/api/ability-score/'+this.$route.params.slug, function(data) {
            console.log(data);
            self.form = data;
        });
    }
};
</script>
