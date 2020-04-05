<template>
    <v-app id="inspire">
        <v-navigation-drawer v-model="drawer" app>
            <v-list dense>
                <v-list-item to="/">
                    <v-list-item-icon>
                        <v-icon>mdi-home</v-icon>
                    </v-list-item-icon>

                    <v-list-item-title>Home</v-list-item-title>
                </v-list-item>

                <v-list-group dense value="true">
                     
                    <template v-slot:activator>
<v-list-item-icon>
                        SR
                    </v-list-item-icon>
                        <v-list-item-title>Dnd 5ed</v-list-item-title>
                    </template>

                    
                        <v-list-item to="/ability-score">
                            <v-list-item-content>
                                <v-list-item-title>Ability Score</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>

                        
                </v-list-group>

                    
                       
                            
                
            </v-list>
        </v-navigation-drawer>

        <v-app-bar app color="indigo" dark>
            <v-app-bar-nav-icon @click.stop="drawer = !drawer" />
            <v-toolbar-title>Imagine Rpg</v-toolbar-title>
        </v-app-bar>

        <v-content>
            <v-container fluid>
                <router-view></router-view>
            </v-container>
        </v-content>
        <v-footer color="indigo" app>
            <span class="white--text">&copy;JV Bicalho 2020.</span>
        </v-footer>
    </v-app>
</template>

<script>
export default {
    props: {
        source: String
    },
    data: () => ({
        drawer: null
    })
};
</script>
