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