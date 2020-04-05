<template>
   <v-container >
      
       <v-list>
           
       
      <v-list-item
        v-for="item in abilitys"
        :key="item.slug"
        @click=""
      >
        <v-list-item-avatar>
          <v-icon v-text="item.name"></v-icon>
        </v-list-item-avatar>

        <v-list-item-content>
          <v-list-item-title v-text="item.name"></v-list-item-title>
          <v-list-item-subtitle v-text="item.full_name"></v-list-item-subtitle>
        </v-list-item-content>

        <v-list-item-action>
            <v-row inline >

                <v-btn @click="editar(item)" icon>
                    <v-icon color="grey lighten-1">mdi-pencil</v-icon>
                </v-btn>
                <v-btn @click="del(item)" icon>
                    <v-icon color="grey lighten-1">mdi-delete-outline</v-icon>
                </v-btn>
            </v-row>
        </v-list-item-action>
      </v-list-item>
      <v-divider inset></v-divider>
      </v-list>

    <v-btn to="/ability-score/create" class="ma-2 d-flex" outlined block color="indigo">Adicionar</v-btn>
   </v-container>
    
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
        editar(item){
            this.$router.push('/ability-score/'+item.slug);

        },
        del(item) {
            self = this;
            axios
                .delete(
                    "http://localhost/blog/public/api/ability-score/" + item.id
                )
                .then(response => {
                    self.$router.go();
                });
        }
    },
    mounted() {
        self = this;
        $.getJSON(this.api, function(data) {
            console.log(data);
            self.abilitys = data;
        });
        console.log(abilitys);
    }
};
</script>
