<template>
    <div class=".container-fluid">
        <div class="row">
            <div class="col">
                <button @click="showAll()" :class="{btn : 1, 'btn-outline-success' : allVar, 'btn-outline-dark' : !allVar}">All Projects</button>
                <button @click="incomplete()" :class="{btn : 1, 'btn-outline-success' : incVar, 'btn-outline-dark' : !incVar}">Upcoming</button>
                <button @click="complete()" :class="{btn : 1, 'btn-outline-success' : comVar, 'btn-outline-dark' : !comVar}">Completed</button>
                <button @click="urgent()" :class="{btn : 1, 'btn-outline-success' : urgVar, 'btn-outline-dark' : !urgVar}">Urgent</button>
                <button @click="important()" :class="{btn : 1, 'btn-outline-success' : impVar, 'btn-outline-dark' : !impVar}">Important</button>
                <button @click="ignored()" :class="{btn : 1, 'btn-outline-success' : ignVar, 'btn-outline-dark' : !ignVar}">Ignored</button>
                <button @click="optional()" :class="{btn : 1, 'btn-outline-success' : optVar, 'btn-outline-dark' : !optVar}">Optional</button>
            
                <div v-for="project in projects">
                    <li v-if="allVar === 1">
                        {{project.name}}
                    </li>
                </div>

                <div v-for="project in priorities">
                    <li v-if="urgVar === 1">
                        {{project.name}}
                    </li>
                </div>

<!--
                    <li v-if="incVar === 1">
                        {{project.name}}
                    </li>

                    <li v-if="incVar === 1">
                        {{project.name}}
                    </li>

                    <li v-if="comVar === 1">
                        {{project.name}}
                    </li>

                    <li v-if="urgVar === 1">
                        {{project.name}}
                    </li>
                    
                    <li v-if="impVar === 1">
                        {{project.name}}
                    </li>

                    <li v-if="ignVar === 1">
                        {{project.name}}
                    </li>

                    <li v-if="optVar === 1">
                        {{project.name}}
                    </li>
-->
            </div>
        </div>
    </div>
</template>

<script>
export default {
        mounted() {
            axios.get('/projects').then(response => this.projects = response.data);
        },
        data(){
            return{
                projects:[],
                priorities:[],

                allVar:1,
                incVar:0,
                comVar:0,
                urgVar:0,
                impVar:0,
                ignVar:0,
                optVar:0
            }
        },
        methods:{
            showAll(){
                this.sortWipe();
                this.allVar=1;
            },
            incomplete(){
                this.sortWipe();
                this.incVar=1;
            },
            complete(){
                this.sortWipe();
                this.comVar=1;
            },
            urgent(){
                axios.get('/priorities').then(response => this.priorities = response.data);
                this.sortWipe();
                this.urgVar=1;
            },
            important(){
                this.sortWipe();
                this.impVar=1;
            },
            ignored(){
                this.sortWipe();
                this.ignVar=1;
            },
            optional(){
                this.sortWipe();
                this.optVar=1;
            },
            sortWipe(){
                this.allVar=0;
                this.incVar=0;
                this.comVar=0;
                this.urgVar=0;
                this.impVar=0;
                this.ignVar=0;
                this.optVar=0;
            }
        }
    }
</script>