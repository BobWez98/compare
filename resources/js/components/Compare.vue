<script>

import { compare, removeProductFromCompare } from './../stores/useCompare.js'

export default {
    render() {
        return this.$scopedSlots.default(this);
    },

    methods: {
        remove(id) {
            removeProductFromCompare([id])
        },

        formatImage(img) {
            let regex = new RegExp('(?<break>[\\w\\d\\W]+\\/cache+\\/[\\w\\d]+\\/)');
            let remove = regex.exec(img).groups.break;

            return img.replace(remove, '');
        }
    },

    computed: {
        items: () => {
            return compare.value?.items
        },

        count: () => {
            return compare.value?.item_count;
        },

        attributes: () => {
            return compare.value?.attributes
        }
    }
}
</script>