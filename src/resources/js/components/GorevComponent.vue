<template>
    <div>
        <h4 class="text-center font-weight-bold">Posts</h4>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="gorevs in gorevler" :key="gorevs.id">
                <td>{{gorevs.gorevadi}}</td>
                <td>{{gorevs.gorevdetay}}</td>
                <td>
                    <button class="btn btn-danger" @click="deletePost(post)"><i style="color:white" class="fa fa-trash"></i></button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</template>

<script>
    import {mapGetters} from 'vuex'
    export default {
        name: "Gorevler",
        mounted() {
            console.log("buraso")
            this.$store.dispatch('fetchPosts')
        },
        methods: {
            deletePost(post) {
                this.$store.dispatch('deletePost',post)
            }
        },
        computed: {
            ...mapGetters([
                'gorevler'
            ]),
            
        }
    }
</script>

<style scoped>
</style>