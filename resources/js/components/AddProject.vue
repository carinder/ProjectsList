<template>
    <div>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
            +
        </button>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add a New Project:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" name="projectName" placeholder="Project Name">
                    <p>Urgent:</p>
                        <input type="checkbox" class="urgCheck"> 
                    <p>Important:</p>
                        <input type="checkbox" class="impCheck">
                    <p>Ignored:</p>
                        <input type="checkbox" class="ignCheck"> 
                    <p>Optional:</p>
                        <input type="checkbox" class="optCheck">              
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" @click="store()" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {

        },
        data(){
            return{

            }
        },
        methods:{
            store(){
                axios.post('/projects',{
                    projectname: document.querySelector('[name="projectName"]').value,

                    urgent:$('.urgCheck').is(":checked"),
                    important:$('.impCheck').is(":checked"),
                    ignored:$('.ignCheck').is(":checked"),
                    optional:$('.optCheck').is(":checked"),

                }).then(response => console.log('stored!'));
            },
        }
    }
</script>