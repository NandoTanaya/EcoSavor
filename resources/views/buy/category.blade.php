<div class="col-lg-12">
    <div class="mb-3">
        <h4>Categories</h4>
        <ul class="list-unstyled fruite-categorie">
            @foreach ($category as $category)
            @php
                // Menghitung jumlah produk yang termasuk dalam kategori saat ini
                $productCount = App\Models\Product::where('category', $category->category_name)->count();
            @endphp
            <li>
                <div class="d-flex justify-content-between fruite-name">
                    <!-- Tautan untuk melakukan pencarian berdasarkan kategori -->
                    <a href="{{ url('/category_search?category=' . urlencode($category->category_name)) }}">
                        <i class="fas fa-apple-alt me-2"></i>{{ $category->category_name }}
                    </a>
                    <span>({{ $productCount }})</span>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
