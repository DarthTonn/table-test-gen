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

var vm = new Vue({
    el: '#main',

    data: {
        showCreateModal: false,
        name: '',
        category: '',
        manufacturer: '',
        price: '',
        slug: ''
    },

    methods: {
        onSubmit: function (event) {
            event.preventDefault();

            $.ajax({
                url: 'new',
                type: 'POST',
                data: {
                    name: this.name,
                    category: this.category,
                    manufacturer: this.manufacturer,
                    price: this.price,
                    slug: this.slug
                }
            });
            //axios.post('new', )
            //    .then(
            //);
            //.catch(error)


        }
    }
});
