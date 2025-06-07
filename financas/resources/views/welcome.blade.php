<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="img/icon-alvora.png" />
    <title>Alvora - Bem-vindo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #007AFF, #a0cfff);
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-2xl rounded-2xl flex flex-col md:flex-row overflow-hidden max-w-6xl w-full m-4">

        <div class="bg-[#e6f0ff] flex items-center justify-center md:w-1/2 p-8">
            <div class="w-full max-w-md flex items-center justify-center">
                <div class="flex flex-col items-center">
                    <img src="/img/icon-alvora.png" alt="Alvora" class="h-32 w-auto mb-4">
                    <h1 class="text-5xl font-bold text-[#007AFF]">alvora</h1>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center md:w-1/2 p-10">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-[#007AFF] mb-6">Bem-vindo ao Alvora</h1>

                <p class="text-gray-700 text-xl font-medium mb-6">
                    Liberte seu potencial financeiro.
                </p>

                <p class="text-gray-600 mb-6 leading-relaxed">
                    O <strong>Alvora</strong> é uma plataforma criada para ajudar você a tomar o controle da sua vida financeira.
                    Com ferramentas intuitivas, relatórios claros e planejamento inteligente, você poderá organizar seus gastos,
                    traçar metas e acompanhar seu progresso de forma eficiente.
                </p>

                <p class="text-gray-600 mb-8 leading-relaxed">
                    Seja você um iniciante buscando mais consciência sobre seus hábitos, ou alguém que já investe e quer otimizar
                    suas decisões, o Alvora foi feito para facilitar sua jornada rumo à liberdade financeira.
                </p>


                <a href="/dashboard">
                    <button class="rounded-full border border-slate-300 py-2 px-4 text-center text-sm transition-all shadow-sm hover:shadow-lg text-slate-600 bg-white hover:text-white hover:bg-[#007AFF] hover:border-[#007AFF] focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                        Começar agora
                    </button>
                </a>

                <p class="mt-4 mb-6 text-sm text-gray-500">
                    Já tem uma conta? <a href="/login" class="text-[#007AFF] hover:underline">Faça login</a>
                </p>
            </div>
        </div>

    </div>

</body>

</html>