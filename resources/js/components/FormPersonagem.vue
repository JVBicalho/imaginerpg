<template>
    <div class="row  h-100 text-white">
        <div class="col-md-10 my-auto mx-auto">
            <form class="my-auto ">
                <section v-if="step == 1">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input
                            v-model="form.name"
                            type="text"
                            class="form-control"
                            id="name"
                            aria-describedby="nameHelp"
                            placeholder="Que tal um nome?"
                        />
                        <small id="nameHelp" class="form-text "
                            >We'll never share your email with anyone
                            else.</small
                        >
                    </div>
                </section>
                <section v-if="step == 2">
                    <div class="form-group">
                        <label for="race">Raça</label>
                        <input
                            v-model="form.race"
                            type="text"
                            class="form-control"
                            name="race"
                            id="race"
                        />
                    </div>
                </section>
                <section v-if="step == 3">
                    <div class="form-group">
                        <label for="level">Level</label>
                        <input
                            v-model="form.level"
                            type="text"
                            class="form-control"
                            name="level"
                            id="level"
                        />
                    </div>
                </section>
                <section v-if="step == 4">
                    <div class="form-group">
                        <label for="class">Classe</label>
                        <input
                            v-model="form.class"
                            type="text"
                            class="form-control"
                            name="class"
                            id="class"
                        />
                    </div>
                </section>
                <section v-if="step == 5">
                    <div class="form-group">
                        <label for="alignment">Alinhamento</label>
                        <input
                            v-model="form.alignment"
                            type="text"
                            class="form-control"
                            name="alignment"
                            id="alignment"
                            placeholder="NEU/GOD"
                        />
                    </div>
                </section>
                <section v-if="step == 6">
                    <h5>Atributos</h5>
                    <div class="row d-inline-flex">
                        <div class="form-group col">
                            <label for="strenght">Força</label>
                            <input
                                v-model="form.strenght"
                                type="number"
                                class="form-control"
                                name="strenght"
                                id="strenght"
                                
                            />
                        </div>
                        <div class="form-group col">
                            <label for="dexterity">Destreza</label>
                            <input
                                v-model="form.dexterity"
                                type="number"
                                class="form-control"
                                name="dexterity"
                                id="dexterity"
                                
                            />
                        </div>
                        <div class="form-group col">
                            <label for="constitution">Constituição</label>
                            <input
                                v-model="form.constitution"
                                type="number"
                                class="form-control"
                                name="constitution"
                                id="constitution"
                                
                            />
                        </div>
                        <div class="form-group col">
                            <label for="intelligence">Inteligencia</label>
                            <input
                                v-model="form.intelligence"
                                type="number"
                                class="form-control"
                                name="intelligence"
                                id="intelligence"
                                
                            />
                        </div>
                        <div class="form-group col">
                            <label for="wisdom">Sabedoria</label>
                            <input
                                v-model="form.wisdom"
                                type="number"
                                class="form-control"
                                name="wisdom"
                                id="wisdom"
                                
                            />
                        </div>
                        <div class="form-group col">
                            <label for="charisma">Carisma</label>
                            <input
                                v-model="form.charisma"
                                type="number"
                                class="form-control"
                                name="charisma"
                                id="charisma"
                                
                            />
                        </div>
                    </div>
                </section>

                <button
                    v-if="step != 1"
                    class="btn btn-warning float-left"
                    @click.prevent="prevStep()"
                >
                    Anterior
                </button>
                <button
                    class="btn btn-warning float-right"
                    @click.prevent="nextStep()"
                >
                    Proximo
                </button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            step: 1,
            form: {
                name: null,
                race: null,
                level: null,
                class: null,
                alignment: null,
                //Ability Scores
                strength: null,
                dexterity: null,
                constitution: null,
                intelligence: null,
                wisdom: null,
                charisma: null,
                //end Ability Scores
                experience_points: null,
                background: null,
                other_proficiencies_and_languages: null,
                equipment: null,
                atacks_and_spellcasting: null,
                personality_traits: null,
                ideals: null,
                bonds: null,
                flaws: null,
                features_and_traits: null,

                age: null,
                height: null,
                weight: null,
                eyes: null,
                skin: null,
                hair: null,
                allies_and_organizations: null,
                character_appearance: null,
                character_backstory: null,
                additional_features_and_traits: null,
                teasure: null,
                //Death Save
                // death_save_1: null,
                // death_save_2: null,
                // death_save_3: null,
                //end Death Save
                //end Ability Scores
                passive_wisdom: null,
                inspiration: null,
                proeficiency_bonus: null,
                //Saving Throws
                strength_saving: null,
                dexterity_saving: null,
                constitution_saving: null,
                intelligence_saving: null,
                wisdom_saving: null,
                charisma_saving: null,

                //end Saving Throws
                // Skills
                acrobatics: null,
                animal_handling: null,
                arcana: null,
                athletics: null,
                deception: null,
                history: null,
                insight: null,
                intimidation: null,
                investigation: null,
                medicine: null,
                nature: null,
                perception: null,
                performance: null,
                persuasion: null,
                religion: null,
                sleigth_of_hand: null,
                stealth: null,
                survival: null,
                // end Skills
                armor_class: null,
                initiative: null,
                speed: null,
                //Hit
                hit_dice: null,
                hit_point_maximum: null,
                hit_point_current: null,
                hit_point_temporary: null
                //end Hit
            }
        };
    },
    methods: {
        prevStep() {
            this.step--;
            console.log(this.step);
        },
        nextStep() {
            this.step++;
            console.log(this.form);

        }
    },
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
