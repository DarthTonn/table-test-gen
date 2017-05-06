// import create from './create';

Vue.component('modal', {
    template: '<div class="modal is-active">' +
    '<div class="modal-background"></div>' +
    '<div class="modal-content">' +
    '<div class="box">' +
    '<slot></slot>' +
    '</div>' +
    '</div>' +
    '<button class="modal-close" @click="$emit(\'close\')"></button>' +
    '</div>'
});

// Vue.component('modal-edit', {
//     props: ['product'],
//     template: '<div class="modal is-active">' +
//     '<div class="modal-background"></div>' +
//     '<div class="modal-content">' +
//     '<div class="box">' +
//     '<form>' +
//     '<input :value="product.name">' +
//     '<input :value="product.category">' +
//     '<input :value="product.manufacturer">' +
//     '<input type="submit" @click="onSubmitCreate" value="Create"/>' +
//     '</form>' +
//     '</div>' +
//     '</div>' +
//     '<button class="modal-close" @click="$emit(\'close\')"></button>' +
//     '</div>'
// });

Vue.component('viewlist', {
    props: ['product'],
    template: `
                <tr>
                    <td v-text="product.id"></td>
                    <td v-text="product.name"></td>
                    <td v-text="product.category"></td>
                    <td v-text="product.manufacturer"></td>
                    <td>
                        <ul>
                            <li>    
                                <a href="#" @click="$emit(\'edit\')">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
    `,

});


new Vue({
    el: '#main',
    data: {
        showCreateModal: false,
        showEditModal: false,
        name: '',
        category: '',
        manufacturer: '',
        price: '',
        slug: '',
        products: [],
        toggleTableRaw: true
    },

    methods: {
        onSubmitCreate: function (event) {
            event.preventDefault();
            var self = this;
            var formData = $('form[name="appbundle_product"]').serialize();
            axios.post('new', formData)
                .then(function (response) {
                    self.showCreateModal = false;
                    self.products.push(response.data);
                });

        },
        getProducts () {
            console.log(axios.post('view'));
            return axios.post('view');
        },
        editProduct (product) {
            product.editable = true;
            console.log(product);
        }
    },
    created() {
        this.getProducts().then(response => {
            this.products = response.data;
        });
    }


});