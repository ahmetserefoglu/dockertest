let actions = {
    createPost({commit}, post) {
        axios.post('/api/gorev',post)
            .then(res => {
                commit('CREATE_POST' , res.data)
            }).catch(err => {
            console.log(err)
        })
    },
    fetchPosts({commit}) {
        axios.get('/api/gorev')
            .then(res => {
                commit('FETCH_POSTS',res.data)
            }).catch(err => {
            console.log(err)    
        })
    },
    deletePost({commit},post) {
        axios.delete(`/api/gorev/${post.id}`)
            .then(res => {
                if(res.data === 'ok')
                    commit('DELETE_POST')
            }).catch(err => {
            console.log(err)
        })
    }
}

export default actions
