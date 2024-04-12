<script>

import {addProductToCompare, productInCompare, removeProductFromCompare} from './../stores/useCompare.js'

export default {
    props:['id'],

    data: () => ({
        inCompare: false
    }),

    mounted() {
        this.setInCompare()
    },

    render() {
        return this.$scopedSlots.default(this);
    },

    methods: {
        async addProduct() {
            await addProductToCompare(this.id)
        },

        async toggleCompare() {
            if (this.inCompare) {
                removeProductFromCompare(this.id)
            } else {
                this.addProduct();
            }
        },

        async setInCompare() {
            this.inCompare = await productInCompare(this.id)
        }
    }
}
</script>