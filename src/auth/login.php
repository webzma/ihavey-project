<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Login - Ihavey</title>
</head>

<body class="w-[600px] h-screen flex justify-center items-center mx-auto">
  <form class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
    <header class="flex flex-col space-y-1.5 p-6">
      <h3 class="font-semibold whitespace-nowrap tracking-tight text-2xl">Bienvenido 👋</h3>
      <p class="text-sm text-muted-foreground">
        Introduce los datos para poder acceder al sistema.
      </p>
    </header>
    <main class="p-6 space-y-4">
      <div class="space-y-2">
        <label
          class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
          for="name">Nombre de usuario:</label>
          <input
            class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
            id="name" placeholder="Escribe tu nombre..." required="" type="name" />
        </div>
      <div class="space-y-2">
        <div class="flex items-center">
          <label
            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
            for="password">
            Contraseña
          </label>
        </div>
        <input
          class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
          id="password" required="" type="password" placeholder="Escribe tu contraseña...">
      </div>
      <button
        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-zinc-900 hover:bg-zinc-900/85 text-primary-foreground h-10 px-4 py-2 w-full text-white"
        type="submit">
        Login
      </button>
    </main>
  </form>
</body>

</html>