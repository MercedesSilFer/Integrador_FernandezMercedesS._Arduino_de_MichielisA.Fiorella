<div class="container-fluid px-5 my-5">
    <hr>
    <h1 class="text-center my-4 title fw-bold">Listado de Productos</h1>
    <hr class="py-3">
    <!-- Filtro de búsqueda -->
    <div class="row mb-5 py-4 mt-3">
        <div class="col-md-6">
            <div class="input-group">
                <input type="text" id="searchInput" class="form-control input-styles h-auto" placeholder="Buscar producto..." aria-label="Buscar producto">
                <button class="btn standard-button" type="button" id="searchButton">
                    <i class="bi bi-search"></i> Buscar
                </button>
            </div>
        </div>
        <div class="col-md-6">
            <select id="categoryFilter" class="form-select input-styles h-auto">
                <option value="">Todas las categorías</option>
                <?php foreach ($categorias as $category): ?>
                    <option value="<?= $category['nombre_categoria'] ?>"><?= $category['nombre_categoria'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="table-responsive mb-5 pb-4 mt-2">
        <table id="productsTable" class="table table-bordered table-hover table-light text-center">
            <thead class="">
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Imagen</th>
            </thead> 
            <tbody class="text-wrap">
                <?php foreach ($productos as $row): ?>
                    <tr>
                        <td><?= $row['nombre_producto'] ?></td>
                        <td><?= $row['descripcion_producto'] ?></td>
                        <td><?= $row['nombre_categoria'] ?></td>
                        <td><?= '$' . number_format($row['precio_producto'], 2, ',', '.') ?></td>
                        <td><?= $row['stock_producto'] ?></td>
                        <td><img src="<?= base_url('assets/uploads/' . $row['imagen_producto']) ?>" alt="Imagen del producto" class="img-thumbnail" style="max-width: 100px;"></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Script para el filtrado -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const searchButton = document.getElementById('searchButton');
    const categoryFilter = document.getElementById('categoryFilter');
    const table = document.getElementById('productsTable');
    const rows = table.getElementsByTagName('tr');

    function filterTable() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedCategory = categoryFilter.value.toLowerCase();
        
        for (let i = 1; i < rows.length; i++) {
            const cells = rows[i].getElementsByTagName('td');
            const name = cells[0].textContent.toLowerCase();
            const description = cells[1].textContent.toLowerCase();
            const category = cells[2].textContent.toLowerCase();
            
            const nameMatch = name.includes(searchTerm);
            const descMatch = description.includes(searchTerm);
            const categoryMatch = selectedCategory === '' || category === selectedCategory;
            
            if ((nameMatch || descMatch) && categoryMatch) {
                rows[i].style.display = '';
            } else {
                rows[i].style.display = 'none';
            }
        }
    }

    searchInput.addEventListener('keyup', filterTable);
    searchButton.addEventListener('click', filterTable);
    categoryFilter.addEventListener('change', filterTable);
});
</script>