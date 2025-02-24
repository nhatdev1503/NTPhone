document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".product-row").forEach(function (row) {
        row.addEventListener("click", function () {
            let productId = this.getAttribute("data-product-id");
            let variantRow = document.getElementById("variants-" + productId);
            let icon = document.getElementById("icon-" + productId);
            let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            let addVariant = `<tr id="add-variant-row-{{ $product->id }}">
    <td colspan="6" class="text-start">
        <a href="/product_variants/create" class="btn btn-sm btn-success add-variant-btn" data-product-id="{{ $product->id }}">
            <i class="fa fa-plus"></i> Thêm Biến Thể
        </a>
    </td>
</tr>`
            // Toggle hiển thị hàng biến thể
            if (variantRow.style.display === "none") {
                variantRow.style.display = "table-row";
                icon.classList.remove("fa-chevron-down");
                icon.classList.add("fa-chevron-up");

                // Gọi API lấy danh sách biến thể
                fetch(`/products/${productId}/variants`)
                    .then(response => response.json())
                    .then(variants => {
                        let variantList = document.getElementById("variant-list-" + productId);
                        variantList.innerHTML = ""; // Xóa nội dung cũ
                        if (variants.length > 0) {
                            variants.forEach(variant => {
                                let row = `
                                    <tr>
                                        <td>${variant.storage}</td>
                                        <td>${variant.color}</td>
                                        <td>${variant.origin_price}</td>
                                        <td>${variant.price}</td>
                                        <td>${variant.stock}</td>
                                        <td>${variant.status}</td>
                                        <td>
                                            <a href="/products/${variant.id}" class="btn btn-sm btn-info" title="Xem chi tiết">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="/products/${variant.id}/edit" class="btn btn-sm btn-warning" title="Chỉnh sửa">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="/products/${variant.id}" method="POST" class="d-inline delete-form">
                                                <input type="hidden" name="_token" value="${csrfToken}">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-sm btn-danger" title="Xóa"
                                                    onclick="return confirm('Chắc chắn xóa ?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    
                                `;
                                variantList.innerHTML += row;
                            });
                        } else {
                            variantList.innerHTML = `<tr><td colspan="7" class="text-center">Không có biến thể nào.</td></tr>`; 
                        }
                        variantList.innerHTML += addVariant;
                    });
            } else {
                variantRow.style.display = "none";
                icon.classList.remove("fa-chevron-up");
                icon.classList.add("fa-chevron-down");
            }
        });
    });
});
