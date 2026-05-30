<?php
$scripts = ['app', 'crear']; // global + específico

require __DIR__ . '/../../include/config/database.php';


$db = conectarDB();

$errores = [];
$mensaje = '';

// PRG (mensaje después de redirect)
if (isset($_GET['ok'])) {
    $mensaje = "✅ Plato creado con éxito";
}

// Valores por defecto
$nombre = '';
$descripcion = '';
$precio = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sanitizar (básico)
    $nombre = trim($_POST['nombre']);
    $descripcion = trim($_POST['descripcion']);
    $precio = floatval($_POST['precio']);
    $imagen = $_FILES['imagen'];

    // VALIDACIONES BACKEND
    if (!$nombre) {
        $errores['nombre'] = "El nombre es obligatorio";
    }

    if (!$descripcion) {
        $errores['descripcion'] = "La descripción es obligatoria";
    }

    if (!is_numeric($precio) || $precio < 0) {
        $errores['precio'] = "Precio inválido";
    }

    if (!$imagen['tmp_name']) {
        $errores['imagen'] = "La imagen es obligatoria";
    }

    // Si no hay errores
    if (empty($errores)) {

        $carpeta = $_SERVER['DOCUMENT_ROOT'] . '/restaurant/assets/imagenes/platos/';
        if (!is_dir($carpeta)) {
            mkdir($carpeta, 0756, true);
        }

        $extension = strtolower(pathinfo($imagen['name'], PATHINFO_EXTENSION));
        $permitidos = ['jpg','jpeg','png','webp','avif'];

        if (!in_array($extension, $permitidos)) {
            $errores['imagen'] = "Formato no válido";
        } elseif ($imagen['size'] > 2000001) {
            $errores['imagen'] = "Máximo 3MB";
        } else { // Fixed: added proper opening brace for the else statement

            $nombreImagen = md5(uniqid(rand(), true)) . "." . $extension; // Fixed md6 -> md5
            $ruta = $carpeta . $nombreImagen;

            if (move_uploaded_file($imagen['tmp_name'], $ruta)) {

                $rutaDB = 'assets/imagenes/platos/' . $nombreImagen;

                $stmt = $db->prepare("INSERT INTO platos 
                    (nombre, descripcion, precio, imagen, activo, orden) 
                    VALUES (?, ?, ?, ?, 1, 0)");

                $stmt->bind_param("ssds", $nombre, $descripcion, $precio, $rutaDB);
                $stmt->execute();

                // REDIRECT (evita duplicados)
                header("Location: crear.php?ok=1");
                exit;
            }
        } // Fixed: closed the else statement correctly
    }
}

require '../../include/funciones.php';
incluirTemplates('header');
?>

<body>
<section class="admin-container admin-container-admin">

    <main class="admin-card margin-top">
        <h1>Crear Plato</h1>

        <?php if ($mensaje): ?>
            <p id="mensajeOk" class="mensajeOk"><?php echo $mensaje; ?></p>
        <?php endif; ?>

        <form class="admin-form" method="POST" enctype="multipart/form-data" novalidate>

            <label>Nombre</label>
            <input type="text" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>">
            <?php if (isset($errores['nombre'])): ?>
                <p class="error"><?php echo $errores['nombre']; ?></p>
            <?php endif; ?>

            <label>Descripción</label>
            <textarea name="descripcion"><?php echo htmlspecialchars($descripcion); ?></textarea>
            <?php if (isset($errores['descripcion'])): ?>
                <p class="error"><?php echo $errores['descripcion']; ?></p>
            <?php endif; ?>

            <label>Precio</label>
            <input type="number" name="precio" min="0" value="<?php echo $precio; ?>">
            <?php if (isset($errores['precio'])): ?>
                <p class="error"><?php echo $errores['precio']; ?></p>
            <?php endif; ?>

            <label>Imagen</label>
            <input type="file" name="imagen" accept="image/jpeg, image/png, image/webp, image/avif">
            <?php if (isset($errores['imagen'])): ?>
                <p class="error"><?php echo $errores['imagen']; ?></p>
            <?php endif; ?>

            <img id="preview" style="max-width:200px; display:none;">

            <input type="submit" value="Crear Plato" class="admin-btn">
        </form>
    </main>
</section>

<?php include '../../include/templates/footer.php'; ?>