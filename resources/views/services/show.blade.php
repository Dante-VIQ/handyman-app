<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GB Handyman · Services – expert repairs & installations</title>
    <!-- Tailwind + Font Awesome -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        html { scroll-behavior: smooth; }
        .service-card:hover { transform: translateY(-8px); box-shadow: 0 30px 35px -12px rgba(245, 158, 11, 0.25); }
        .bg-subtle-pattern { background-color: #fcfaf7; background-image:  radial-gradient(#e2dcd3 0.8px, transparent 0.8px); background-size: 25px 25px; }
        .category-tab:hover { background-color: #fbbf24; color: #1f2937; }
    </style>
</head>
<body class="font-sans antialiased text-gray-800 bg-subtle-pattern">

    <main>
        <!-- ===== SERVICES HERO ===== -->
        <section class="relative bg-gradient-to-br from-amber-50 via-white to-amber-50/30 py-10 md:py-24 overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <i class="fas fa-hammer absolute text-9xl text-amber-300 -rotate-12 -top-6 left-10"></i>
                <i class="fas fa-screwdriver absolute text-8xl text-amber-300 rotate-45 bottom-0 right-10"></i>
                <i class="fas fa-wrench absolute text-7xl text-amber-300 top-40 right-1/3"></i>
            </div>
            <div class="max-w-7xl mx-auto px-5 sm:px-8 relative z-10">
                <div class="max-w-3xl">
                    <span class="bg-amber-200 text-amber-800 px-4 py-1.5 rounded-full text-sm font-semibold inline-flex items-center gap-1"><i class="fas fa-toolbox"></i> What we fix</span>
                    <h1 class="text-5xl md:text-6xl font-black text-gray-900 mt-6 leading-tight">Every job, big or small —<br><span class="text-amber-600">we've got the tool</span></h1>
                    <p class="text-xl text-gray-600 mt-6 max-w-2xl">From a dripping tap to a full room refresh. Browse our services, then book us online or give us a call.</p>
                    <div class="flex flex-wrap gap-4 mt-10">
                        <a href="#service-grid" class="bg-gradient-to-r from-red-500 to-red-600 hover:from-amber-600 hover:to-amber-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg shadow-amber-200/50 transition-all duration-300 ring-2 ring-amber-300/50 ring-offset-2 ring-offset-white hover:ring-amber-400 hover:shadow-xl transform hover:scale-[1.02]"><i class="fas fa-magnifying-glass"></i> Browse all services</a>
                        <a href="tel:+12024601753" class="bg-white border-2 border-red-300 hover:bg-amber-50 text-gray-700 px-8 py-4 rounded-xl font-bold flex items-center gap-2 transition-all"><i class="fas fa-phone-alt text-amber-500"></i> Call +1 (202) 460 1753</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== QUICK CATEGORY FILTER (visual tabs) ===== -->
        <div class="bg-white border-y border-gray-200 py-6 sticky top-20 z-20 shadow-sm">
            <div class="max-w-7xl mx-auto px-5 sm:px-8">
                <div class="flex flex-wrap justify-center items-center gap-3 text-sm font-medium">
                    <span class="text-gray-500 mr-2"><i class="fas fa-filters"></i> Jump to:</span>
                    <a href="#repairs" class="category-tab bg-amber-100 text-gray-800 px-5 py-2.5 rounded-full hover:bg-amber-400 transition-all shadow-sm">🔧 Repairs</a>
                    <a href="#plumbing" class="category-tab bg-amber-100 text-gray-800 px-5 py-2.5 rounded-full hover:bg-amber-400 transition-all shadow-sm">🚿 Plumbing</a>
                    <a href="#electrical" class="category-tab bg-amber-100 text-gray-800 px-5 py-2.5 rounded-full hover:bg-amber-400 transition-all shadow-sm">⚡ Electrical</a>
                    <a href="#carpentry" class="category-tab bg-amber-100 text-gray-800 px-5 py-2.5 rounded-full hover:bg-amber-400 transition-all shadow-sm">🪵 Carpentry</a>
                    <a href="#painting" class="category-tab bg-amber-100 text-gray-800 px-5 py-2.5 rounded-full hover:bg-amber-400 transition-all shadow-sm">🎨 Painting</a>
                    <a href="#assembly" class="category-tab bg-amber-100 text-gray-800 px-5 py-2.5 rounded-full hover:bg-amber-400 transition-all shadow-sm">📦 Assembly</a>
                    <a href="#other" class="category-tab bg-amber-100 text-gray-800 px-5 py-2.5 rounded-full hover:bg-amber-400 transition-all shadow-sm">🔨 More</a>
                </div>
            </div>
        </div>

        <!-- ===== DETAILED SERVICE GRID ===== -->
<section id="service-grid" class="max-w-7xl mx-auto px-5 sm:px-8 py-8 relative">
    <!-- Background Image Container with multiple layers for depth -->
    <div class="absolute inset-0 -z-10 overflow-hidden">
        <!-- Primary background texture - subtle workshop pattern -->
        <img src="https://www.transparenttextures.com/patterns/wood-pattern.png"
             alt=""
             class="w-full h-full object-cover opacity-5">

        <!-- Secondary texture - subtle noise for depth -->
        <div class="absolute inset-0 opacity-[0.02]"
             style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIj48ZmlsdGVyIGlkPSJmIj48ZmVUdXJidWxlbmNlIHR5cGU9ImZyYWN0YWxOb2lzZSIgYmFzZUZyZXF1ZW5jeT0iLjc0IiBudW1PY3RhdmVzPSIzIiAvPjwvZmlsdGVyPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbHRlcj0idXJsKCNmKSIgb3BhY2l0eT0iMC4wNSIgLz48L3N2Zz4='); background-repeat: repeat;">
        </div>

        <!-- Branded gradient overlay - matches your card gradient theme -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50/80 via-teal-50/80 to-green-50/80"></div>

        <!-- Very subtle tool icons pattern (handyman themed) -->
        <div class="absolute inset-0 opacity-[0.015]"
             style="background-image: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\" width=\"80\" height=\"80\"><path d=\"M30,40 L40,30 L60,30 L70,40 L60,50 L40,50 L30,40\" fill=\"none\" stroke=\"%23f59e0b\" stroke-width=\"1.5\"/><circle cx=\"50\" cy=\"65\" r=\"8\" fill=\"none\" stroke=\"%23f59e0b\" stroke-width=\"1.5\"/></svg>'); background-repeat: repeat; background-size: 80px 80px;">
        </div>
    </div>

    <!-- REPAIRS category -->
    <div id="repairs" class="scroll-mt-32 mb-16 relative">
        <div class="flex items-center gap-3 mb-8">
            <div class="bg-amber-500 text-white p-4 rounded-2xl shadow-md"><i class="fas fa-wrench text-3xl"></i></div>
            <h2 class="text-4xl font-bold text-gray-900">General repairs & maintenance</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Doors & windows card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <!-- Background Image with Dark Overlay -->
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1600607686527-6fb886090705?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Door repair"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <!-- Content -->
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-door-open"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Doors & windows</h3>
                    <p class="text-gray-100/90">Squeaky hinges, sticking doors, broken handles, draft proofing, and lock adjustments.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from £45</span>
                </div>
            </div>

            <!-- Drywall & plasterboard card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Drywall repair"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-border-all"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Drywall & plasterboard</h3>
                    <p class="text-gray-100/90">Patching holes, fixing cracks, skim coating, and texturing – seamless repairs.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from £60</span>
                </div>
            </div>

            <!-- Furniture repair card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1581539250439-c96689b516dd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Furniture repair"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-couch"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Furniture repair</h3>
                    <p class="text-gray-100/90">Wobbly legs, broken drawers, loose joints – we can fix most wooden furniture.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from £35</span>
                </div>
            </div>
        </div>
    </div>

    <!-- PLUMBING category -->
    <div id="plumbing" class="scroll-mt-32 mb-16 relative">
        <div class="flex items-center gap-3 mb-8">
            <div class="bg-amber-500 text-white p-4 rounded-2xl shadow-md"><i class="fas fa-shower text-3xl"></i></div>
            <h2 class="text-4xl font-bold text-gray-900">Plumbing & wet trades</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Taps & toilets card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Plumbing repair"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-faucet"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Taps & toilets</h3>
                    <p class="text-gray-100/90">Dripping taps, new faucets, running toilets, cistern repairs, and leak detection.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from £55</span>
                </div>
            </div>

            <!-- Drains & blockages card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1585704032915-c3400ca199e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Drain cleaning"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-pipe-valve"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Drains & blockages</h3>
                    <p class="text-gray-100/90">Clearing clogged sinks, showers, and external drains. High-pressure jetting available.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from £65</span>
                </div>
            </div>

            <!-- Appliance installs card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1584269600464-37b1b58a9fe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Appliance installation"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-washing-machine"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Appliance installs</h3>
                    <p class="text-gray-100/90">Washing machines, dishwashers, and fridge water lines – connected safely.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from £70</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ELECTRICAL category -->
    <div id="electrical" class="scroll-mt-32 mb-16 relative">
        <div class="flex items-center gap-3 mb-8">
            <div class="bg-amber-500 text-white p-4 rounded-2xl shadow-md"><i class="fas fa-bolt text-3xl"></i></div>
            <h2 class="text-4xl font-bold text-gray-900">Electrical & lighting</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Lighting & fixtures card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1556905200-27956576b70b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Lighting installation"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Lighting & fixtures</h3>
                    <p class="text-gray-100/90">Fitting new lights, ceiling fans, chandeliers, and replacing old sockets.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from £40</span>
                </div>
            </div>

            <!-- Sockets & switches card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1556905200-27956576b70b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Electrical socket"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-plug"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Sockets & switches</h3>
                    <p class="text-gray-100/90">Adding new outlets, USB sockets, dimmer switches, and fixing faulty ones.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from £35</span>
                </div>
            </div>

            <!-- Smart home setup card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1558002038-1055907df827?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Smart home"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-smart-home"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Smart home setup</h3>
                    <p class="text-gray-100/90">Thermostats, doorbells, security cameras – we install and connect.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from £65</span>
                </div>
            </div>
        </div>
    </div>

    <!-- CARPENTRY category -->
    <div id="carpentry" class="scroll-mt-32 mb-16 relative">
        <div class="flex items-center gap-3 mb-8">
            <div class="bg-amber-500 text-white p-4 rounded-2xl shadow-md"><i class="fas fa-wood text-3xl"></i></div>
            <h2 class="text-4xl font-bold text-gray-900">Carpentry & woodwork</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Shelving & storage card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1595428774223-ef52624120d2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Custom shelving"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-shelves"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Shelving & storage</h3>
                    <p class="text-gray-100/90">Custom shelving, bookcases, cupboard repairs, and fitting flat-pack storage.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from £50</span>
                </div>
            </div>

            <!-- Skirting & architrave card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Skirting boards"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-stairs"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Skirting & architrave</h3>
                    <p class="text-gray-100/90">Fitting new skirting boards, door frames, and decorative mouldings.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from £65</span>
                </div>
            </div>

            <!-- Garden fences & gates card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1622383563227-04401ab4e5ea?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Garden fence"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-fence"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Garden fences & gates</h3>
                    <p class="text-gray-100/90">Repairing fence panels, building gates, and treating timber.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from £80</span>
                </div>
            </div>
        </div>
    </div>

    <!-- PAINTING & DECORATING category -->
    <div id="painting" class="scroll-mt-32 mb-16 relative">
        <div class="flex items-center gap-3 mb-8">
            <div class="bg-amber-500 text-white p-4 rounded-2xl shadow-md"><i class="fas fa-paint-roller text-3xl"></i></div>
            <h2 class="text-4xl font-bold text-gray-900">Painting & decorating</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Interior painting card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Interior painting"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-brush"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Interior painting</h3>
                    <p class="text-gray-100/90">Walls, ceilings, woodwork – clean lines, premium paints, minimal mess.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from £120/room</span>
                </div>
            </div>

            <!-- Wallpaper hanging card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1595428774223-ef52624120d2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Wallpaper hanging"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-fill-drip"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Wallpaper hanging</h3>
                    <p class="text-gray-100/90">Stripping old paper, hanging new, and pattern matching.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from £90</span>
                </div>
            </div>

            <!-- Touch-ups & refreshes card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Paint touch up"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-spray-can-sparkles"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Touch-ups & refreshes</h3>
                    <p class="text-gray-100/90">Small patches, scuff cover-ups, and cabinet repainting.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from £40</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ASSEMBLY & INSTALLATION category -->
    <div id="assembly" class="scroll-mt-32 mb-16 relative">
        <div class="flex items-center gap-3 mb-8">
            <div class="bg-amber-500 text-white p-4 rounded-2xl shadow-md"><i class="fas fa-cube text-3xl"></i></div>
            <h2 class="text-4xl font-bold text-gray-900">Assembly & mounting</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Flat-pack furniture card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1595428774223-ef52624120d2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Furniture assembly"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-chair"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Flat-pack furniture</h3>
                    <p class="text-gray-100/90">IKEA, Argos, Wayfair – we assemble anything from beds to cabinets.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from £35</span>
                </div>
            </div>

            <!-- TV & soundbar mounting card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1558002038-1055907df827?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="TV mounting"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-tv"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">TV & soundbar mounting</h3>
                    <p class="text-gray-100/90">Secure wall mounting, cable hiding, and perfect positioning.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from £55</span>
                </div>
            </div>

            <!-- Mirrors & artwork card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1600607686527-6fb886090705?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Mirror hanging"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-mirror"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Mirrors & artwork</h3>
                    <p class="text-gray-100/90">Hanging heavy mirrors, pictures, and shelves level and secure.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from £25</span>
                </div>
            </div>
        </div>
    </div>

    <!-- OTHER / OUTDOOR category -->
    <div id="other" class="scroll-mt-32 relative">
        <div class="flex items-center gap-3 mb-8">
            <div class="bg-amber-500 text-white p-4 rounded-2xl shadow-md"><i class="fas fa-tree text-3xl"></i></div>
            <h2 class="text-4xl font-bold text-gray-900">Outdoor & extra services</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Garden & shed card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1622383563227-04401ab4e5ea?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Garden shed"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-umbrella-beach"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Garden & shed</h3>
                    <p class="text-gray-100/90">Shed repairs, gate fixing, raised beds, and fence maintenance.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from £50</span>
                </div>
            </div>

            <!-- Flatpack & playsets card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1595428774223-ef52624120d2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Playset assembly"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-helmet-safety"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Flatpack & playsets</h3>
                    <p class="text-gray-100/90">Children's playhouses, climbing frames, and outdoor furniture assembly.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from £70</span>
                </div>
            </div>

            <!-- Odd jobs card -->
            <div class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1581539250439-c96689b516dd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Odd jobs"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-gray-900/80"></div>
                </div>
                <div class="relative z-10 p-7">
                    <div class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                        <i class="fas fa-question"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Odd jobs? Ask us</h3>
                    <p class="text-gray-100/90">Not sure if we do it? Just ask – we love a challenge.</p>
                    <span class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">call for quote</span>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- ===== CUSTOM WORK / BESPOKE BANNER ===== -->
        <section class="bg-amber-50 border-y border-amber-200 py-8 my-8">
            <div class="max-w-7xl mx-auto px-5 sm:px-8 text-center">
                <span class="bg-white text-amber-700 px-5 py-2 rounded-full text-sm font-semibold shadow-sm"><i class="fas fa-pencil-ruler mr-1"></i> Bespoke work</span>
                <h2 class="text-4xl font-bold mt-4 text-gray-900">Need something custom? We build it.</h2>
                <p class="text-gray-600 text-xl mt-3 max-w-2xl mx-auto">Built-in shelving, home bars, decking, kitchen islands – we can design and build it to your exact specs.</p>
                <div class="flex flex-wrap justify-center gap-4 mt-8">
                    <a href="/contact" class="bg-gradient-to-r from-red-500 to-red-600 hover:from-amber-600 hover:to-amber-700 text-white px-8 py-4 rounded-xl font-bold shadow-lg flex items-center gap-2 transition-all"><i class="fas fa-drafting-compass"></i> Discuss your project</a>
                </div>
            </div>
        </section>

        <!-- ===== PRICING & GUARANTEE ===== -->
        <section class="max-w-7xl mx-auto px-5 sm:px-8 py-8">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100 text-center">
                    <div class="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center text-3xl text-amber-700 mx-auto mb-4"><i class="fas fa-pound-sign"></i></div>
                    <h3 class="text-xl font-bold">Fixed-price quotes</h3>
                    <p class="text-gray-500 mt-2">No hourly surprises. You'll know the total before we start.</p>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100 text-center">
                    <div class="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center text-3xl text-amber-700 mx-auto mb-4"><i class="fas fa-shield-alt"></i></div>
                    <h3 class="text-xl font-bold">1-year guarantee</h3>
                    <p class="text-gray-500 mt-2">If anything goes wrong within a year, we come back free.</p>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100 text-center">
                    <div class="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center text-3xl text-amber-700 mx-auto mb-4"><i class="fas fa-clock"></i></div>
                    <h3 class="text-xl font-bold">Same/next day</h3>
                    <p class="text-gray-500 mt-2">Emergency? We'll often be there within hours.</p>
                </div>
            </div>
        </section>

        <!-- ===== CALL TO ACTION (book) ===== -->
        <section class="bg-gray-900 text-white py-8 mt-8">
            <div class="max-w-7xl mx-auto px-5 sm:px-8 text-center">
                <i class="fas fa-tools text-6xl text-amber-400 mb-5"></i>
                <h2 class="text-4xl font-bold">Ready to tick that to-do list off?</h2>
                <p class="text-gray-300 text-xl mt-3 max-w-2xl mx-auto">Book online or give us a call. We'll take it from there.</p>
                <div class="flex flex-wrap justify-center gap-5 mt-10">
                    <a href="#contact" class="bg-gradient-to-r from-red-500 to-red-600 hover:from-amber-600 hover:to-amber-700 text-white font-semibold py-5 px-10 rounded-xl shadow-lg shadow-amber-200/50 transition-all duration-300 ring-2 ring-amber-300/50 ring-offset-2 ring-offset-white hover:ring-amber-400 hover:shadow-xl transform hover:scale-[1.02]">
                        <i class="fas fa-calendar-check mr-2"></i> Book Online
                    </a>
                    <a href="tel:+12024601753" class="bg-transparent border-2 border-red-400 hover:bg-white hover:text-gray-900 text-white font-bold px-10 py-5 rounded-full text-lg transition-all"><i class="fas fa-phone-alt mr-2"></i> +1 (202) 460 1753</a>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
