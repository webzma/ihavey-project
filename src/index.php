<?php
  $urlBase = 'http://localhost/proyecto/src/';
  include("./db.php"); 
  $sentencia=$conexion->prepare("SELECT * FROM `tbl_clientes`");
  $sentencia->execute();
  $tbl_clientes = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Registro de clientes ihavey</title>
</head>

<body>
  <?php include("./templates/header.php"); ?>

  <div class="mx-auto max-w-5xl w-full mt-6">
    <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
      <header class="flex flex-col space-y-1.5 px-4 pt-6">
        <h3 class="text-2xl font-semibold whitespace-nowrap leading-none tracking-tight">Clientes</h3>
        <p class="text-md text-gray-500 text-muted-foreground">Controla la lista de tus clientes.</p>
      </header>
      <div class="flex items-center px-4 py-5">
        <a href="<?php echo $urlBase;?>sections/clients/create.php" class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium disabled:pointer-events-none disabled:opacity-50  text-primary-foreground h-9 bg-zinc-900 hover:bg-zinc-900/90 text-white rounded-md px-3">Nuevo cliente</a>
      </div>
      <div class="p-0">
          <div class="overflow-auto">
              <div class="relative w-full overflow-auto">
                <table class="w-full caption-bottom text-sm">
                    <thead class="[&amp;_tr]:border-b">
                      <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                          <th class="h-12 px-4 text-left align-middle font-medium w-[100px]">ID</th>
                          <th class="h-12 px-4 text-left align-middle font-medium">Nombre</th>
                          <th class="h-12 px-4 text-left align-middle font-medium">Cédula</th>
                          <th class="h-12 px-4 text-left align-middle font-medium">Correo</th>
                          <th class="h-12 px-4 text-left align-middle font-medium">Télefono</th>
                          <th class="h-12 px-4 align-middle font-medium text-right">Acciones</th>
                      </tr>
                    </thead>
                    <tbody class="[&amp;_tr:last-child]:border-0 odd:[&>tr]:bg-gray-100 tablee">
                    <?php foreach($tbl_clientes as $cliente) { ?>
                      <tr class="hover:bg-muted/50 data-[state=selected]:bg-muted">
                          <td class="py-2 px-4 align-middle [&amp;:has([role=checkbox])]:pr-0 font-medium"><?php echo $cliente['id']; ?></td>
                          <td class="py-2 px-4 align-middle [&amp;:has([role=checkbox])]:pr-0 font-medium"><?php echo $cliente['nombre']; ?></td>
                          <td class="py-2 px-4 align-middle [&amp;:has([role=checkbox])]:pr-0 font-medium"><?php echo $cliente['cedula']; ?></td>
                          <td class="py-2 px-4 align-middle [&amp;:has([role=checkbox])]:pr-0"><?php echo $cliente['correo']; ?></td>
                          <td class="py-2 px-4 align-middle [&amp;:has([role=checkbox])]:pr-0"><?php echo $cliente['telefono']; ?></td>
                          <td class="py-2 px-4 align-middle [&amp;:has([role=checkbox])]:pr-0 text-right">
                            <button title="Editar datos" class="hover:bg-sky-200 inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                  <path d="M4 13.5V4a2 2 0 0 1 2-2h8.5L20 7.5V20a2 2 0 0 1-2 2h-5.5"></path>
                                  <polyline points="14 2 14 8 20 8"></polyline>
                                  <path d="M10.42 12.61a2.1 2.1 0 1 1 2.97 2.97L7.95 21 4 22l.99-3.95 5.43-5.44Z"></path>
                                </svg>
                                <span class="sr-only">Editar</span>
                            </button>
                            <button title="Eliminar cliente" class="hover:bg-red-200 inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                  <path d="M3 6h18"></path>
                                  <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                  <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                </svg>
                                <span class="sr-only">Eliminar</span>
                            </button>
                          </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                </table>
            </div>
          </div>
      </div>
    </div>
  </div>
</body>
</html>