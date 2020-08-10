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
            <pulse-loader
            :loading="loading"
            :color="color"
            :size="size"
        ></pulse-loader>
            <tr v-for="gorevs in gorevler" :key="gorevs.id">
                <td>{{gorevs.gorevadi}}</td>
                <td>{{gorevs.gorevdetay}}</td>
                <td>
                    <button class="btn btn-danger" @click="deletePost(post)"><i style="color:white" class="fa fa-trash">Delete</i></button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</template>

<script>
    import PulseLoader from "vue-spinner/src/PulseLoader.vue";
    import {mapGetters} from 'vuex'
   
    export default {
        name: "Gorevler",
        data () {
            return {
                color: "#cc181e",
                color1: "#5bc0de",
                size: "45px",
                margin: "2px",
                radius: "2px", 
            }
        },
        mounted() {
            this.$store.dispatch('fetchPosts').then(() => {
                this.loading = false
            })
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
            
        },
        components: {
            PulseLoader
        }
    }
</script>

<style scoped>
</style>