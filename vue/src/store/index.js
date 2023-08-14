import {createStore} from 'vuex'
import order from './order'
import customer from './customer';
const store = createStore({
    modules: {
        order,
        customer
    }
})

export default store;