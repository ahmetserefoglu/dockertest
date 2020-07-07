const { post } = require("jquery")

let mutations = {
    CREATE_POST(state, gorev) {
        state.gorevler.unshift(gorev)
    },
    FETCH_POSTS(state, gorevler) {
        return state.gorevler = gorevler
    },
    DELETE_POST(state, gorevler) {
        let index = state.gorevler.findIndex(item => item.id == gorev.id)
        state.gorevler.splice(index, 1)
    } 
}

export default mutations