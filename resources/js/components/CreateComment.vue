<template>
    <form name="form" id="add_comment" class="needs-validation" @submit.prevent="submit" novalidate>
        <div class="row">
            <div class="col-sm-4 offset-sm-2 col-md-3 offset-md-3">
                <div class="form-group required">
                    <label for="name" class='control-label'>Имя</label>
                    <input type="text" v-bind:class="{'form-control':true, 'is-invalid' : !!errors.name}" id="name" name="name" required="required" v-model="form.name">
                    <div v-if="errors && errors.name" class="invalid-feedback">
                        {{ errors.name}}
                    </div>
                </div>

                <div class="form-group required">
                    <label for="email" class='control-label'>E-mail</label>
                    <input type="email" v-bind:class="{'form-control':true, 'is-invalid' : !!errors.email}" id="email" name="email" required="required" v-model="form.email">
                    <div v-if="errors && errors.email" class="invalid-feedback">
                        {{ errors.email}}
                    </div>
                </div>

            </div>

            <div class="col-sm-4 col-md-3">
                <div class="form-group required">
                    <label for="comment" class='control-label'>Комментарий</label>
                    <textarea v-bind:class="{'form-control':true, 'is-invalid' : !!errors.comment}" rows="5" id="comment" name="comment" required="required" v-model="form.comment"></textarea>
                    <div v-if="errors && errors.comment" class="invalid-feedback">
                        {{ errors.comment}}
                    </div>
                </div>
            </div>

        </div>

        <div class="row top-buffer bottom-buffer">
            <div class="col-sm-1 offset-sm-8">
                <button type="submit" id="write" class="btn btn-default button">Записать</button>
            </div>
        </div>

    </form>
</template>

<script>
export default {
    name: "CreateComment",
    props: {
        errors: Object,
    },
    data() {
        return {
            form: {
                name: null,
                email: null,
                comment: null
            }
        }
    },
    computed: {

    },
    methods: {
        submit() {
            this.$inertia.post('/comments', this.form)
        }
    }
}
</script>

<style scoped>

</style>
