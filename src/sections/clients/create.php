<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Crea un cliente - Ihavey</title>
</head>

<body>  
  <?php include("../../templates/header.php"); ?>

  <main class="w-full h-auto flex justify-center">
    <div class="w-full max-w-[800px] space-y-8 mt-8 border border-zinc-300 rounded-lg p-6">
      <header>
        <h3 class="text-3xl font-medium">Introduce los datos del cliente</h3>
      </header>

      <form class="space-y-2" method="post" action="">
        <div class="flex gap-3">
          <div class="space-y-2 flex-1">
            <label
              class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
              for="identification">
              Cédula
            </label>
            <input
              type="text"
              class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
              id="identification" required placeholder="Introduce la cédula..." 
            />
          </div>

          <div class="space-y-2 flex-1">
            <label
              class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
              for="name">
              Nombre
            </label>
            <input
              type="text"
              class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
              id="name" required placeholder="Introduce el nombre..." 
            />
          </div>
        </div>

        <div class="flex gap-3">
          <div class="space-y-2 flex-1">
            <label
              class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
              for="lastname">
              Apellido
            </label>
            <input
              type="text"
              class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
              id="lastname" required placeholder="Introduce el apellido..." 
            />
          </div>
         
          <div class="space-y-2 flex-1">
            <label
              class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
              for="email">
              Correo electrónico
            </label>
            <input
              type="email"
              class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
              id="email" required placeholder="Introduce el correo electrónico..." type="email">
          </div>
        </div>

        <div class="flex gap-3">
          <div class="space-y-2 flex-1">
            <label
              class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
              for="phone number">
              Número telefónico
            </label>
              <input
              type="text"
              class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
              id="phone number" required placeholder="Introduce el número telefónico..." />
          </div>

          <div class="space-y-2 flex-1">
            <label
              class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
              for="date">
              Fecha
            </label>
              <input
                type="date"
              class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
              id="date" required placeholder="Asunto" />
          </div>
        </div>

        <div class="flex gap-3">
          <div class="space-y-2 flex-1">
            <label
              class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
              for="municipality">
              Municipio
            </label>
              <input
              type="text"
              class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
              id="municipality" required placeholder="Introduce el municipio..." />
          </div>

          <div class="space-y-2 flex-1">
            <label
              class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
              for="parish">
              Parroquia
            </label>
              <input
              type="text"
              class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
              id="parish" required placeholder="Introduce la parroquia..." />
          </div>
        </div>

        <button type="submit" class="mt-6 inline-block items-center justify-center text-sm font-medium disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-9 bg-zinc-900 hover:bg-zinc-900/90 text-white rounded-md px-3">
          Envíar datos
        </button>
      </form>
    </div>
  </main>

</body>

</html>