<?php

require __DIR__ . '/../../include/config/database.php';

$db = conectarDB();

$scripts = ['app', 'datatable', 'admin']; // importante para JS

require '../../include/funciones.php';
incluirTemplates('header');

// CONSULTA
$query = "SELECT * FROM platos ORDER BY id ASC";
$resultado = mysqli_query($db, $query);

?>

<section class="container menu-container">

    <main class="menu-card">
        <h1>Listado de Platos</h1>

        <div class="menu-nav">
            <a href="<?= BASE_URL ?>admin/menu/crear.php" class="menu-btn">➕ Crear Plato</a>
        </div>

        <table id="tablaPlatos" class="menu-table display responsive nowrap" style="width:100%">

            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Orden</th>
                    <th>Activo</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($plato = mysqli_fetch_assoc($resultado)): ?>
                    
                    <tr>
                        <td></td>
                            <td data-label="ID"><?= $plato['id']; ?></td>
                            <td data-label="Nombre"><?= htmlspecialchars($plato['nombre']); ?>
                            </td>
                            <td data-label="Precio">$<?= number_format($plato['precio'], 0); ?>
                            </td>
                            <td data-label="Imagen">
                            <img src="<?= BASE_URL . $plato['imagen']; ?>" class="menu-img">
                            </td>
                            <td data-label="Orden"><?= $plato['orden']; ?></td>

                            <td data-label="Activo" class="menu-estado">
                            <?= $plato['activo'] ? '✅' : '❌'; ?>
                            </td>

                            <td data-label="Acciones">
                            <div class="menu-acciones">
                                <a href="editar.php?id=<?= $plato['id']; ?>" class="menu-btn-editar">Editar</a>

                                <form method="POST" action="eliminar.php" class="form-eliminar">
                                    <input type="hidden" name="id" value="<?= $plato['id']; ?>">
                                    <button type="submit" class="menu-btn-eliminar">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>

                <?php endwhile; ?>
            </tbody>
        </table>
    </main>
</section>

<?php incluirTemplates('footer'); ?>