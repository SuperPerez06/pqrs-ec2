<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperPerez Soporte - PQRS</title>
    <!-- Tailwind CSS vía CDN para asegurar que los estilos carguen de inmediato -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .bg-forest { background-color: #0F382A; }
        .bg-forest-dark { background-color: #09241B; }
        .text-lime-accent { color: #B8F256; }
        .bg-lime-accent { background-color: #B8F256; }
        .border-lime-accent { border-color: #84CC16; }
        .bg-grid-pattern {
            background-image: linear-gradient(to right, rgba(255,255,255,0.03) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(255,255,255,0.03) 1px, transparent 1px);
            background-size: 40px 40px;
        }
    </style>
</head>
<body class="bg-[#F8FAFC] text-slate-800 antialiased">

    <!-- NAVBAR -->
    <header class="bg-forest bg-grid-pattern border-b border-white/10 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Logo -->
            <a href="#" class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-lg bg-lime-accent flex items-center justify-center text-[#0F382A]">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                    </svg>
                </div>
                <span class="font-bold text-lg tracking-tight">SuperPerez <span class="text-lime-accent">Soporte</span></span>
            </a>

            <!-- Links -->
            <nav class="hidden md:flex items-center gap-8 text-sm text-white/80 font-medium">
                <a href="#proceso" class="hover:text-white transition">¿Qué es PQRS?</a>
                <a href="#canales" class="hover:text-white transition">Canales de atención</a>
                <a href="#proceso" class="hover:text-white transition">Centro de ayuda</a>
            </nav>

            <!-- Botón Mi cuenta -->
            <button class="flex items-center gap-2 px-4 py-2 rounded-full border border-white/25 text-sm font-medium hover:bg-white/10 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                Mi cuenta
            </button>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="bg-forest bg-grid-pattern text-white pt-14 pb-36 px-4">
        <div class="max-w-3xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 border border-white/15 text-xs font-semibold tracking-wider text-lime-accent uppercase mb-6">
                <span>✨</span> ESTAMOS PARA ESCUCHARTE
            </div>
            
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight leading-tight mb-6">
                Tu voz nos ayuda a <span class="text-lime-accent">mejorar cada día</span>
            </h1>
            
            <p class="text-white/80 text-base sm:text-lg max-w-2xl mx-auto mb-8 leading-relaxed">
                Registra tus peticiones, quejas, reclamos o sugerencias de forma fácil, segura y transparente.
            </p>

            <!-- Badges -->
            <div class="flex flex-wrap items-center justify-center gap-6 text-sm text-white/90 font-medium">
                <div class="flex items-center gap-2">
                    <span class="text-lime-accent">✓</span> Respuesta oportuna
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-lime-accent">🛡️</span> Información protegida
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-lime-accent">🕒</span> Seguimiento 24/7
                </div>
            </div>
        </div>
    </section>

    <!-- TARJETA PRINCIPAL DE FORMULARIO / CONSULTA -->
    <main class="max-w-4xl mx-auto px-4 -mt-24 mb-24">
        <div class="bg-white rounded-3xl shadow-xl shadow-slate-200/70 border border-slate-100 overflow-hidden">
            
            <!-- Tabs superiores -->
            <div class="grid grid-cols-2 bg-slate-50/80 border-b border-slate-100 p-2 gap-2">
                <button id="tab-radicar" onclick="switchTab('radicar')" class="flex items-center justify-center gap-2 py-3.5 px-4 rounded-2xl text-sm font-bold bg-white text-slate-900 shadow-sm transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Radicar solicitud
                </button>
                <button id="tab-consultar" onclick="switchTab('consultar')" class="flex items-center justify-center gap-2 py-3.5 px-4 rounded-2xl text-sm font-semibold text-slate-500 hover:text-slate-800 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    Consultar estado
                </button>
            </div>

            <!-- CONTENIDO 1: RADICAR SOLICITUD -->
            <div id="panel-radicar" class="p-6 sm:p-10">
                <!-- Barra de progreso -->
                <div class="mb-8">
                    <div class="text-xs font-bold tracking-wider text-slate-400 uppercase mb-2">PASO 1 DE 2</div>
                    <div class="w-full h-1.5 bg-slate-100 rounded-full overflow-hidden">
                        <div class="w-1/2 h-full bg-[#A3E635] rounded-full"></div>
                    </div>
                </div>

                <h2 class="text-2xl font-bold text-slate-900 mb-1">¿Cómo podemos ayudarte?</h2>
                <p class="text-sm text-slate-500 mb-6">Selecciona el tipo de solicitud que deseas registrar.</p>

                <!-- Formulario (Listo para conectar con ruta POST de Laravel) -->
                <form action="#" method="POST" enctype="multipart/form-data" onsubmit="simularEnvio(event)">
                    <!-- @csrf (Descomentar cuando se conecte al controlador de Laravel) -->
                    <input type="hidden" name="tipo_solicitud" id="tipo_solicitud" value="Petición">

                    <!-- Grid de 4 opciones PQRS -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                        <!-- Opción 1: Petición -->
                        <div onclick="selectTipo(this, 'Petición')" class="pqrs-card cursor-pointer relative p-5 rounded-2xl border-2 border-[#65A30D] bg-[#F4FCE3] transition">
                            <div class="check-badge absolute top-3 right-3 w-5 h-5 rounded-full bg-[#244D3A] text-white flex items-center justify-center text-xs">✓</div>
                            <div class="w-9 h-9 rounded-lg bg-[#D9F99D] text-[#1A3A2A] flex items-center justify-center mb-4">
                                📄
                            </div>
                            <h3 class="font-bold text-slate-900 text-sm mb-1">Petición</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Solicitud de información o servicio</p>
                        </div>

                        <!-- Opción 2: Queja -->
                        <div onclick="selectTipo(this, 'Queja')" class="pqrs-card cursor-pointer relative p-5 rounded-2xl border border-slate-200 bg-white hover:border-slate-300 transition">
                            <div class="check-badge hidden absolute top-3 right-3 w-5 h-5 rounded-full bg-[#244D3A] text-white flex items-center justify-center text-xs">✓</div>
                            <div class="w-9 h-9 rounded-lg bg-slate-100 text-slate-600 flex items-center justify-center mb-4">
                                💬
                            </div>
                            <h3 class="font-bold text-slate-900 text-sm mb-1">Queja</h3>
                            <p class="text-xs text-slate-500 leading-relaxed">Inconformidad con la atención</p>
                        </div>

                        <!-- Opción 3: Reclamo -->
                        <div onclick="selectTipo(this, 'Reclamo')" class="pqrs-card cursor-pointer relative p-5 rounded-2xl border border-slate-200 bg-white hover:border-slate-300 transition">
                            <div class="check-badge hidden absolute top-3 right-3 w-5 h-5 rounded-full bg-[#244D3A] text-white flex items-center justify-center text-xs">✓</div>
                            <div class="w-9 h-9 rounded-lg bg-slate-100 text-slate-600 flex items-center justify-center mb-4">
                                ℹ️
                            </div>
                            <h3 class="font-bold text-slate-900 text-sm mb-1">Reclamo</h3>
                            <p class="text-xs text-slate-500 leading-relaxed">Incumplimiento en un servicio</p>
                        </div>

                        <!-- Opción 4: Sugerencia -->
                        <div onclick="selectTipo(this, 'Sugerencia')" class="pqrs-card cursor-pointer relative p-5 rounded-2xl border border-slate-200 bg-white hover:border-slate-300 transition">
                            <div class="check-badge hidden absolute top-3 right-3 w-5 h-5 rounded-full bg-[#244D3A] text-white flex items-center justify-center text-xs">✓</div>
                            <div class="w-9 h-9 rounded-lg bg-slate-100 text-slate-600 flex items-center justify-center mb-4">
                                ✨
                            </div>
                            <h3 class="font-bold text-slate-900 text-sm mb-1">Sugerencia</h3>
                            <p class="text-xs text-slate-500 leading-relaxed">Idea para ayudarnos a mejorar</p>
                        </div>
                    </div>

                    <!-- Campos de texto -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-2">Nombre completo</label>
                            <input type="text" name="nombre" required placeholder="Escribe tu nombre" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#0F382A] focus:ring-1 focus:ring-[#0F382A]">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-2">Correo electrónico</label>
                            <input type="email" name="email" required placeholder="nombre@correo.com" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#0F382A] focus:ring-1 focus:ring-[#0F382A]">
                        </div>
                    </div>

                    <div class="mb-5">
                        <label class="block text-xs font-bold text-slate-700 mb-2">Asunto</label>
                        <input type="text" name="asunto" required placeholder="Describe brevemente tu solicitud" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#0F382A] focus:ring-1 focus:ring-[#0F382A]">
                    </div>

                    <div class="mb-6">
                        <label class="block text-xs font-bold text-slate-700 mb-2">Cuéntanos qué sucedió</label>
                        <textarea name="descripcion" rows="4" required placeholder="Incluye todos los detalles que consideres importantes..." class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#0F382A] focus:ring-1 focus:ring-[#0F382A]"></textarea>
                    </div>

                    <!-- Adjuntar archivos -->
                    <div class="mb-8">
                        <label class="flex items-center justify-center gap-2 w-full py-4 px-4 rounded-xl border border-dashed border-slate-300 bg-slate-50/50 hover:bg-slate-50 cursor-pointer transition text-sm">
                            <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                            </svg>
                            <span id="file-label" class="font-semibold text-slate-700">Adjuntar archivos</span>
                            <span class="text-slate-400 text-xs">(opcional, máx. 10 MB)</span>
                            <input type="file" name="archivo" class="hidden" onchange="document.getElementById('file-label').textContent = this.files[0]?.name || 'Adjuntar archivos'">
                        </label>
                    </div>

                    <!-- Footer del formulario -->
                    <div class="pt-6 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div class="flex items-center gap-2 text-xs text-slate-400">
                            <span>🛡️</span>
                            <span>Tus datos serán tratados según nuestra política de privacidad y protección de datos.</span>
                        </div>
                        <button type="submit" class="w-full sm:w-auto px-7 py-3.5 rounded-xl bg-forest hover:bg-[#164e3b] text-white font-semibold text-sm flex items-center justify-center gap-2 transition shadow-md">
                            Enviar solicitud <span>→</span>
                        </button>
                    </div>
                </form>
            </div>

            <!-- CONTENIDO 2: CONSULTAR ESTADO -->
            <div id="panel-consultar" class="hidden p-6 sm:p-10">
                <h2 class="text-2xl font-bold text-slate-900 mb-2">Consulta el estado de tu PQRS</h2>
                <p class="text-sm text-slate-500 mb-6">Ingresa el número de radicado que recibiste al registrar tu solicitud.</p>
                
                <form onsubmit="simularConsulta(event)" class="flex flex-col sm:flex-row gap-3 mb-6">
                    <input type="text" id="radicado-input" required placeholder="Ej: PQRS-2026-8492" class="flex-1 px-4 py-3.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#0F382A]">
                    <button type="submit" class="px-7 py-3.5 rounded-xl bg-forest hover:bg-[#164e3b] text-white font-semibold text-sm transition">
                        Buscar radicado
                    </button>
                </form>

                <!-- Resultado simulado -->
                <div id="resultado-consulta" class="hidden p-5 rounded-2xl bg-slate-50 border border-slate-200">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Estado actual</span>
                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-[#D9F99D] text-[#1A3A2A]">En revisión por especialista</span>
                    </div>
                    <p class="text-sm font-bold text-slate-800" id="res-codigo">Radicado: PQRS-2026-8492</p>
                    <p class="text-xs text-slate-500 mt-1">Tu solicitud fue recibida correctamente y está dentro de los tiempos de respuesta establecidos.</p>
                </div>
            </div>
        </div>
    </main>

    <!-- SECCIÓN: CONOCE EL PROCESO -->
    <section id="proceso" class="max-w-6xl mx-auto px-4 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-4">
                <span class="text-xs font-bold tracking-wider text-[#65A30D] uppercase block mb-3">CONOCE EL PROCESO</span>
                <h2 class="text-3xl font-extrabold text-slate-900 leading-tight mb-4">Una gestión clara, de principio a fin</h2>
                <p class="text-sm text-slate-500 leading-relaxed mb-6">
                    Cada solicitud se asigna a un especialista y puedes seguir su avance en cualquier momento con tu número de radicado.
                </p>
                <a href="#" class="inline-flex items-center gap-2 text-sm font-bold text-slate-900 hover:text-[#65A30D] transition">
                    Conoce los tiempos de respuesta <span>→</span>
                </a>
            </div>

            <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-3 gap-5">
                <!-- Paso 01 -->
                <div class="bg-white p-7 rounded-2xl border border-slate-100 shadow-sm">
                    <span class="text-xs font-bold text-[#65A30D] block mb-4">01</span>
                    <h3 class="font-bold text-slate-900 text-base mb-2">Registra</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">Completa el formulario con los detalles de tu solicitud.</p>
                </div>
                <!-- Paso 02 -->
                <div class="bg-white p-7 rounded-2xl border border-slate-100 shadow-sm">
                    <span class="text-xs font-bold text-[#65A30D] block mb-4">02</span>
                    <h3 class="font-bold text-slate-900 text-base mb-2">Revisamos</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">Un especialista analiza tu caso y gestiona la respuesta.</p>
                </div>
                <!-- Paso 03 -->
                <div class="bg-white p-7 rounded-2xl border border-slate-100 shadow-sm">
                    <span class="text-xs font-bold text-[#65A30D] block mb-4">03</span>
                    <h3 class="font-bold text-slate-900 text-base mb-2">Respondemos</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">Recibe la solución y califica nuestra atención.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: OTROS CANALES -->
    <section id="canales" class="bg-white border-t border-slate-100 py-20 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <span class="text-xs font-bold tracking-wider text-[#65A30D] uppercase block mb-2">OTROS CANALES</span>
                <h2 class="text-3xl font-extrabold text-slate-900">También estamos cerca de ti</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Canal 1 -->
                <div class="p-6 rounded-2xl border border-slate-200/80 flex items-start gap-4">
                    <div class="w-11 h-11 rounded-xl bg-[#F4FCE3] text-[#244D3A] flex items-center justify-center shrink-0">📞</div>
                    <div>
                        <h3 class="font-bold text-slate-900 text-sm mb-1">Línea de atención</h3>
                        <p class="text-sm font-semibold text-slate-700 mb-1">01 8000 123 456</p>
                        <p class="text-xs text-slate-400">Lun a vie, 8:00 a.m. – 6:00 p.m.</p>
                    </div>
                </div>
                <!-- Canal 2 -->
                <div class="p-6 rounded-2xl border border-slate-200/80 flex items-start gap-4">
                    <div class="w-11 h-11 rounded-xl bg-[#F4FCE3] text-[#244D3A] flex items-center justify-center shrink-0">✉️</div>
                    <div>
                        <h3 class="font-bold text-slate-900 text-sm mb-1">Correo electrónico</h3>
                        <p class="text-sm font-semibold text-slate-700 mb-1">soporte@superperez.co</p>
                        <p class="text-xs text-slate-400">Respuesta en máximo 2 días hábiles</p>
                    </div>
                </div>
                <!-- Canal 3 -->
                <div class="p-6 rounded-2xl border border-slate-200/80 flex items-start gap-4">
                    <div class="w-11 h-11 rounded-xl bg-[#F4FCE3] text-[#244D3A] flex items-center justify-center shrink-0">🎧</div>
                    <div>
                        <h3 class="font-bold text-slate-900 text-sm mb-1">Chat en línea</h3>
                        <p class="text-sm font-semibold text-slate-700 mb-1">Habla con un asesor</p>
                        <p class="text-xs text-slate-400">Disponible de 8:00 a.m. – 5:00 p.m.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-forest-dark text-white/70 py-10 px-4 text-xs">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-lime-accent flex items-center justify-center text-[#0F382A]">💬</div>
                <span class="font-bold text-white text-sm">SuperPerez Soporte</span>
            </div>

            <div class="flex items-center gap-6">
                <a href="#" class="hover:text-white transition">Política de privacidad</a>
                <a href="#" class="hover:text-white transition">Términos de uso</a>
                <a href="#" class="hover:text-white transition">Accesibilidad</a>
            </div>

            <div>© 2026 SuperPerez. Todos los derechos reservados.</div>
        </div>
    </footer>

    <!-- SCRIPTS DE INTERACTIVIDAD -->
    <script>
        function switchTab(tab) {
            const tabRadicar = document.getElementById('tab-radicar');
            const tabConsultar = document.getElementById('tab-consultar');
            const panelRadicar = document.getElementById('panel-radicar');
            const panelConsultar = document.getElementById('panel-consultar');

            if (tab === 'radicar') {
                tabRadicar.className = "flex items-center justify-center gap-2 py-3.5 px-4 rounded-2xl text-sm font-bold bg-white text-slate-900 shadow-sm transition";
                tabConsultar.className = "flex items-center justify-center gap-2 py-3.5 px-4 rounded-2xl text-sm font-semibold text-slate-500 hover:text-slate-800 transition";
                panelRadicar.classList.remove('hidden');
                panelConsultar.classList.add('hidden');
            } else {
                tabConsultar.className = "flex items-center justify-center gap-2 py-3.5 px-4 rounded-2xl text-sm font-bold bg-white text-slate-900 shadow-sm transition";
                tabRadicar.className = "flex items-center justify-center gap-2 py-3.5 px-4 rounded-2xl text-sm font-semibold text-slate-500 hover:text-slate-800 transition";
                panelConsultar.classList.remove('hidden');
                panelRadicar.classList.add('hidden');
            }
        }

        function selectTipo(element, tipo) {
            document.getElementById('tipo_solicitud').value = tipo;
            document.querySelectorAll('.pqrs-card').forEach(card => {
                card.className = "pqrs-card cursor-pointer relative p-5 rounded-2xl border border-slate-200 bg-white hover:border-slate-300 transition";
                card.querySelector('.check-badge').classList.add('hidden');
            });
            element.className = "pqrs-card cursor-pointer relative p-5 rounded-2xl border-2 border-[#65A30D] bg-[#F4FCE3] transition";
            element.querySelector('.check-badge').classList.remove('hidden');
        }

        function simularEnvio(e) {
            e.preventDefault();
            const randomId = Math.floor(1000 + Math.random() * 9000);
            alert(`¡Solicitud registrada con éxito!\nTu número de radicado es: PQRS-2026-${randomId}`);
            e.target.reset();
        }

        function simularConsulta(e) {
            e.preventDefault();
            const codigo = document.getElementById('radicado-input').value;
            document.getElementById('res-codigo').textContent = `Radicado: ${codigo}`;
            document.getElementById('resultado-consulta').classList.remove('hidden');
        }
    </script>
</body>
</html>
