// //
// // Vue.component('manage-posts', {
// //     template: '#manage-template',
// //     data: function() {
// //         return {
// //             posts: [
// //                 'Vue.js: The Basics',
// //                 'Vue.js Components',
// //                 'Server Side Rendering with Vue',
// //                 'Vue + Firebase'
// //             ]
// //         }
// //     }
// // })
//
//
// Vue.component('viewlist', {
//     props: ['product'],
//     template: `
//                 <tr>
//                     <td v-text="product.id"</td>
//                     <td v-text="product.name"></td>
//                     <td v-text="product.category"></td>
//                     <td v-text="product.manufacturer"></td>
//                     <td v-text="product.price"></td>
//                     <td v-text="product.slug"></td>
//                     <td>
//                         <ul>
//                             <li>
//                                 <a href="#" @click="onEditClick()">edit</a>
//                             </li>
//                         </ul>
//                     </td>
//                 </tr>
//     `,
//
// });
Vue.component('viewlist-edit', {
    props: ['product'],
    template: `
                <tr>
                    <td v-text="product.id"></td>
                    <td><input :value="product.name"></td>
                    <td><input :value="product.category"></td>
                    <td><input :value="product.manufacturer"></td>
                    <td>
                        <ul>
                            <li>
                                <a href="">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
    `,

});
// // Vue.component('create-post', {
// //     template: '#create-template'
// // })
// //
// // new Vue({
// //     el: '#table-view',
// //     data: {
// //         currentView: 'manage-posts'
// //     }
// // })