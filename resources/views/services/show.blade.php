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
        <section class="relative bg-gradient-to-br from-amber-50 via-white to-amber-50/30 py-16 md:py-24 overflow-hidden">
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
                        <a href="#service-grid" class="bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg shadow-amber-200/50 transition-all duration-300 ring-2 ring-amber-300/50 ring-offset-2 ring-offset-white hover:ring-amber-400 hover:shadow-xl transform hover:scale-[1.02]"><i class="fas fa-magnifying-glass"></i> Browse all services</a>
                        <a href="tel:+12024601753" class="bg-white border-2 border-amber-400 hover:bg-amber-50 text-gray-700 px-8 py-4 rounded-xl font-bold flex items-center gap-2 transition-all"><i class="fas fa-phone-alt text-amber-500"></i> Call +1 (202) 460 1753</a>
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
        <section id="service-grid" class="max-w-7xl mx-auto px-5 sm:px-8 py-16">
            <!-- REPAIRS category -->
            <div id="repairs" class="scroll-mt-32 mb-16">
                <div class="flex items-center gap-3 mb-8">
                    <div class="bg-amber-500 text-white p-4 rounded-2xl shadow-md"><i class="fas fa-wrench text-3xl"></i></div>
                    <h2 class="text-4xl font-bold text-gray-900">General repairs & maintenance</h2>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-door-open"></i></div>
                        <h3 class="text-xl font-bold mb-2">Doors & windows</h3>
                        <p class="text-gray-500">Squeaky hinges, sticking doors, broken handles, draft proofing, and lock adjustments.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">from £45</span>
                    </div>
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-border-all"></i></div>
                        <h3 class="text-xl font-bold mb-2">Drywall & plasterboard</h3>
                        <p class="text-gray-500">Patching holes, fixing cracks, skim coating, and texturing – seamless repairs.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">from £60</span>
                    </div>
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-couch"></i></div>
                        <h3 class="text-xl font-bold mb-2">Furniture repair</h3>
                        <p class="text-gray-500">Wobbly legs, broken drawers, loose joints – we can fix most wooden furniture.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">from £35</span>
                    </div>
                </div>
            </div>

            <!-- PLUMBING category -->
            <div id="plumbing" class="scroll-mt-32 mb-16">
                <div class="flex items-center gap-3 mb-8">
                    <div class="bg-amber-500 text-white p-4 rounded-2xl shadow-md"><i class="fas fa-shower text-3xl"></i></div>
                    <h2 class="text-4xl font-bold text-gray-900">Plumbing & wet trades</h2>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-faucet"></i></div>
                        <h3 class="text-xl font-bold mb-2">Taps & toilets</h3>
                        <p class="text-gray-500">Dripping taps, new faucets, running toilets, cistern repairs, and leak detection.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">from £55</span>
                    </div>
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-pipe-valve"></i></div>
                        <h3 class="text-xl font-bold mb-2">Drains & blockages</h3>
                        <p class="text-gray-500">Clearing clogged sinks, showers, and external drains. High-pressure jetting available.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">from £65</span>
                    </div>
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-washing-machine"></i></div>
                        <h3 class="text-xl font-bold mb-2">Appliance installs</h3>
                        <p class="text-gray-500">Washing machines, dishwashers, and fridge water lines – connected safely.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">from £70</span>
                    </div>
                </div>
            </div>

            <!-- ELECTRICAL category -->
            <div id="electrical" class="scroll-mt-32 mb-16">
                <div class="flex items-center gap-3 mb-8">
                    <div class="bg-amber-500 text-white p-4 rounded-2xl shadow-md"><i class="fas fa-bolt text-3xl"></i></div>
                    <h2 class="text-4xl font-bold text-gray-900">Electrical & lighting</h2>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-lightbulb"></i></div>
                        <h3 class="text-xl font-bold mb-2">Lighting & fixtures</h3>
                        <p class="text-gray-500">Fitting new lights, ceiling fans, chandeliers, and replacing old sockets.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">from £40</span>
                    </div>
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-plug"></i></div>
                        <h3 class="text-xl font-bold mb-2">Sockets & switches</h3>
                        <p class="text-gray-500">Adding new outlets, USB sockets, dimmer switches, and fixing faulty ones.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">from £35</span>
                    </div>
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-smart-home"></i></div>
                        <h3 class="text-xl font-bold mb-2">Smart home setup</h3>
                        <p class="text-gray-500">Thermostats, doorbells, security cameras – we install and connect.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">from £65</span>
                    </div>
                </div>
            </div>

            <!-- CARPENTRY category -->
            <div id="carpentry" class="scroll-mt-32 mb-16">
                <div class="flex items-center gap-3 mb-8">
                    <div class="bg-amber-500 text-white p-4 rounded-2xl shadow-md"><i class="fas fa-wood text-3xl"></i></div>
                    <h2 class="text-4xl font-bold text-gray-900">Carpentry & woodwork</h2>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-shelves"></i></div>
                        <h3 class="text-xl font-bold mb-2">Shelving & storage</h3>
                        <p class="text-gray-500">Custom shelving, bookcases, cupboard repairs, and fitting flat-pack storage.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">from £50</span>
                    </div>
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-stairs"></i></div>
                        <h3 class="text-xl font-bold mb-2">Skirting & architrave</h3>
                        <p class="text-gray-500">Fitting new skirting boards, door frames, and decorative mouldings.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">from £65</span>
                    </div>
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-fence"></i></div>
                        <h3 class="text-xl font-bold mb-2">Garden fences & gates</h3>
                        <p class="text-gray-500">Repairing fence panels, building gates, and treating timber.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">from £80</span>
                    </div>
                </div>
            </div>

            <!-- PAINTING & DECORATING -->
            <div id="painting" class="scroll-mt-32 mb-16">
                <div class="flex items-center gap-3 mb-8">
                    <div class="bg-amber-500 text-white p-4 rounded-2xl shadow-md"><i class="fas fa-paint-roller text-3xl"></i></div>
                    <h2 class="text-4xl font-bold text-gray-900">Painting & decorating</h2>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-brush"></i></div>
                        <h3 class="text-xl font-bold mb-2">Interior painting</h3>
                        <p class="text-gray-500">Walls, ceilings, woodwork – clean lines, premium paints, minimal mess.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">from £120/room</span>
                    </div>
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-fill-drip"></i></div>
                        <h3 class="text-xl font-bold mb-2">Wallpaper hanging</h3>
                        <p class="text-gray-500">Stripping old paper, hanging new, and pattern matching.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">from £90</span>
                    </div>
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-spray-can-sparkles"></i></div>
                        <h3 class="text-xl font-bold mb-2">Touch-ups & refreshes</h3>
                        <p class="text-gray-500">Small patches, scuff cover-ups, and cabinet repainting.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">from £40</span>
                    </div>
                </div>
            </div>

            <!-- ASSEMBLY & INSTALLATION -->
            <div id="assembly" class="scroll-mt-32 mb-16">
                <div class="flex items-center gap-3 mb-8">
                    <div class="bg-amber-500 text-white p-4 rounded-2xl shadow-md"><i class="fas fa-cube text-3xl"></i></div>
                    <h2 class="text-4xl font-bold text-gray-900">Assembly & mounting</h2>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-chair"></i></div>
                        <h3 class="text-xl font-bold mb-2">Flat-pack furniture</h3>
                        <p class="text-gray-500">IKEA, Argos, Wayfair – we assemble anything from beds to cabinets.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">from £35</span>
                    </div>
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-tv"></i></div>
                        <h3 class="text-xl font-bold mb-2">TV & soundbar mounting</h3>
                        <p class="text-gray-500">Secure wall mounting, cable hiding, and perfect positioning.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">from £55</span>
                    </div>
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-mirror"></i></div>
                        <h3 class="text-xl font-bold mb-2">Mirrors & artwork</h3>
                        <p class="text-gray-500">Hanging heavy mirrors, pictures, and shelves level and secure.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">from £25</span>
                    </div>
                </div>
            </div>

            <!-- OTHER / OUTDOOR -->
            <div id="other" class="scroll-mt-32">
                <div class="flex items-center gap-3 mb-8">
                    <div class="bg-amber-500 text-white p-4 rounded-2xl shadow-md"><i class="fas fa-tree text-3xl"></i></div>
                    <h2 class="text-4xl font-bold text-gray-900">Outdoor & extra services</h2>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-umbrella-beach"></i></div>
                        <h3 class="text-xl font-bold mb-2">Garden & shed</h3>
                        <p class="text-gray-500">Shed repairs, gate fixing, raised beds, and fence maintenance.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">from £50</span>
                    </div>
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-helmet-safety"></i></div>
                        <h3 class="text-xl font-bold mb-2">Flatpack & playsets</h3>
                        <p class="text-gray-500">Children's playhouses, climbing frames, and outdoor furniture assembly.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">from £70</span>
                    </div>
                    <div class="service-card bg-white p-7 rounded-3xl shadow-lg border border-gray-100 transition-all">
                        <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5"><i class="fas fa-question"></i></div>
                        <h3 class="text-xl font-bold mb-2">Odd jobs? Ask us</h3>
                        <p class="text-gray-500">Not sure if we do it? Just ask – we love a challenge.</p>
                        <span class="inline-block mt-4 text-amber-600 font-semibold text-sm">call for quote</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== CUSTOM WORK / BESPOKE BANNER ===== -->
        <section class="bg-amber-50 border-y border-amber-200 py-16 my-8">
            <div class="max-w-7xl mx-auto px-5 sm:px-8 text-center">
                <span class="bg-white text-amber-700 px-5 py-2 rounded-full text-sm font-semibold shadow-sm"><i class="fas fa-pencil-ruler mr-1"></i> Bespoke work</span>
                <h2 class="text-4xl font-bold mt-4 text-gray-900">Need something custom? We build it.</h2>
                <p class="text-gray-600 text-xl mt-3 max-w-2xl mx-auto">Built-in shelving, home bars, decking, kitchen islands – we can design and build it to your exact specs.</p>
                <div class="flex flex-wrap justify-center gap-4 mt-8">
                    <a href="/contact" class="bg-gray-900 hover:bg-gray-800 text-white px-8 py-4 rounded-xl font-bold shadow-lg flex items-center gap-2 transition-all"><i class="fas fa-drafting-compass"></i> Discuss your project</a>
                </div>
            </div>
        </section>

        <!-- ===== PRICING & GUARANTEE ===== -->
        <section class="max-w-7xl mx-auto px-5 sm:px-8 py-16">
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
        <section class="bg-gray-900 text-white py-20 mt-8">
            <div class="max-w-7xl mx-auto px-5 sm:px-8 text-center">
                <i class="fas fa-tools text-6xl text-amber-400 mb-5"></i>
                <h2 class="text-4xl font-bold">Ready to tick that to-do list off?</h2>
                <p class="text-gray-300 text-xl mt-3 max-w-2xl mx-auto">Book online or give us a call. We'll take it from there.</p>
                <div class="flex flex-wrap justify-center gap-5 mt-10">
                <a href="#contact"
                    class="bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg shadow-amber-200/50 transition-all duration-300 ring-2 ring-amber-300/50 ring-offset-2 ring-offset-white hover:ring-amber-400 hover:shadow-xl transform hover:scale-[1.02]">
                    <i class="fas fa-calendar-check mr-2"></i> Book Online
                </a>
                    <a href="tel:+12024601753" class="bg-transparent border-2 border-white hover:bg-white hover:text-gray-900 text-white font-bold px-10 py-5 rounded-full text-lg transition-all"><i class="fas fa-phone-alt mr-2"></i> +1 (202) 460 1753</a>
                </div>
            </div>
        </section>
    </main>

    <!-- floating chat icon -->
<!-- Floating WhatsApp Icon - Links to WhatsApp -->
<a href="https://wa.me/+12024601753"
   target="_blank"
   rel="noopener noreferrer"
   class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-2xl cursor-pointer transition-all duration-300 hover:scale-110 z-50 flex items-center justify-center w-16 h-16 shadow-green-200/50">
    <i class="fab fa-whatsapp text-3xl"></i>
</a>
</body>
</html>
