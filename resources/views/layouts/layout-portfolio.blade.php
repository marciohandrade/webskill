<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Modelo de Site')</title>

    <!-- Tailwind via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonte opcional -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-white text-gray-800">

    <!-- Header -->
    <header class="bg-gray-100 shadow p-4">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Portfólio Web</h1>
            <nav>
                <a href="/portfolio" class="text-sm text-blue-600 hover:underline">← Voltar ao portfólio</a>
            </nav>
        </div>
    </header>

    <!-- Conteúdo -->
    <main class="max-w-6xl mx-auto p-4">
        @yield('content')
    </main>

    <!-- Rodapé -->
    <footer class="bg-gray-100 text-center text-sm p-4 mt-8 border-t">
        © {{ date('Y') }} Seu Nome. Todos os direitos reservados.
    </footer>

</body>
</html>
