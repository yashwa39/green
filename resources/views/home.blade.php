<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Innovations: Sustainable Technologies for a Better Tomorrow</title>
    <script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Visualization & Content Choices:
        - Introduction (Why Green Tech?): Text blocks and icon-accented cards for reasons (HTML/Tailwind, Unicode). Goal: Inform.
        - Pillars of Innovation: Clickable list revealing textual details for each of the 6 pillars (HTML/Tailwind, JS). NEW: "Learn More" button for each pillar triggers LLM (Gemini API) to generate a detailed explanation. Goal: Organize, Inform, Deep Dive.
        - Spotlight: Renewable Energy: Textual details. Illustrative bar chart (Chart.js) for Solar/Wind impact (Emission Reduction, Cost Savings). Goal: Detail, Compare (illustrative).
        - Spotlight: Circular Economy & Smart Cities: Textual details. Simple HTML/CSS flow diagram for Circular Economy principles. Goal: Detail, Organize.
        - Call to Action: Styled list items. NEW: "Green Tech Idea Generator" with user input and LLM (Gemini API) to generate actionable ideas. Goal: Motivate, Empower.
        - All interactions support guided exploration. No SVG/Mermaid used. -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .bg-beige-50 { background-color: #FAF3E0; } /* A warmer, more distinct beige */
        .text-green-800 { color: #14532d; } /* Darker green for better contrast */
        .text-green-700 { color: #15803d; }
        .bg-amber-500 { background-color: #f59e0b; }
        .text-amber-500 { color: #f59e0b; }
        .border-amber-500 { border-color: #f59e0b; }
        .hover:bg-amber-600:hover { background-color: #d97706; }
        .nav-link {
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .nav-link:hover, .nav-link.active {
            background-color: #15803d; /* green-700 */
            color: white;
        }
        .pillar-item.active {
            background-color: #DCFCE7; /* light green */
        }
        .chart-container {
            position: relative;
            width: 100%;
            max-width: 600px; /* max-w-2xl */
            margin-left: auto;
            margin-right: auto;
            height: 320px; /* h-80 */
            max-height: 400px;
        }
        @media (min-width: 768px) { /* md */
            .chart-container {
                height: 384px; /* h-96 */
            }
        }
        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background-color: #f59e0b; /* amber-500 */
            margin-top: 8px;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -2px rgba(0,0,0,0.05);
        }
        .loader {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #15803d;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="bg-beige-50 text-green-800 antialiased">

    <header class="bg-white shadow-md sticky top-0 z-50">
        <nav class="container mx-auto px-4 sm:px-6 lg:px-8 py-3 flex flex-wrap items-center justify-between">
            <a href="#home" class="text-2xl font-bold text-green-700">Green Innovations</a>
            <button id="nav-toggle" class="md:hidden text-green-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
            <div id="nav-menu" class="hidden md:flex md:items-center md:space-x-2 w-full md:w-auto">
                <a href="#home" class="nav-link block mt-2 md:mt-0 btn btn-outline-success">Home</a>
                <a href="#why-green-tech" class="nav-link block mt-2 md:mt-0 btn btn-outline-success">Why Green Tech?</a>
                <a href="#pillars" class="nav-link block mt-2 md:mt-0 btn btn-outline-success">Pillars</a>
                <a href="#spotlight-energy" class="nav-link block mt-2 md:mt-0 btn btn-outline-success">Spotlight: Energy</a>
                <a href="#spotlight-circularity" class="nav-link block mt-2 md:mt-0 btn btn-outline-success">Spotlight: Circularity & Cities</a>
                <a href="#take-action" class="nav-link block mt-2 md:mt-0 btn btn-outline-success">Take Action</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <section id="home" class="min-h-[80vh] flex flex-col items-center justify-center text-center py-12 bg-gradient-to-br from-green-100 to-beige-50 rounded-xl shadow-lg">
            <div class="max-w-3xl">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-green-700 mb-4">Green Innovations</h1>
                <p class="text-xl sm:text-2xl text-green-800 mb-8">Sustainable Technologies for a Better Tomorrow</p>
                <p class="text-lg text-gray-700">Paving the Way for a Greener Future. This interactive guide explores the transformative power of green technologies and how they are shaping a sustainable world.</p>
                 <a href="#why-green-tech" class="mt-8 inline-block bg-amber-500 text-white font-semibold py-3 px-8 rounded-lg shadow-md hover:bg-amber-600 transition duration-300">Discover More</a>

<a href="#presentation" class="mt-4 inline-block bg-green-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md hover:bg-green-800 transition duration-300">View Presentation 📊</a>

            </div>
        </section>

        <section id="why-green-tech" class="py-16">
            <h2 class="text-3xl font-bold text-green-700 mb-2 section-title">The Imperative for a Sustainable Future</h2>
            <p class="text-lg text-gray-700 mb-10">This section outlines why green innovations are not just beneficial but essential for our planet and future generations. It covers the core definition and the driving forces behind the urgent need for sustainable solutions.</p>
            
            <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
                <h3 class="text-2xl font-semibold text-green-700 mb-3">What are Green Innovations?</h3>
                <p class="text-gray-700 leading-relaxed">Green innovations encompass new technologies, processes, and products designed to reduce environmental impact, conserve natural resources, and promote ecological balance. They are key to transitioning towards a more sustainable and resilient global economy.</p>
            </div>

            <h3 class="text-2xl font-semibold text-green-700 mb-6">Why Now? The Driving Forces:</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-lg card-hover transition-all duration-300">
                    <h4 class="text-xl font-semibold text-amber-500 mb-2">🌍 Climate Change</h4>
                    <p class="text-gray-700">Urgent need to mitigate global warming and its devastating effects by reducing greenhouse gas emissions and transitioning to cleaner energy sources.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg card-hover transition-all duration-300">
                    <h4 class="text-xl font-semibold text-amber-500 mb-2"> ⛏️ Resource Depletion</h4>
                    <p class="text-gray-700">Earth's finite natural resources require more efficient use, conservation, and the development of sustainable alternatives to prevent scarcity.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg card-hover transition-all duration-300">
                    <h4 class="text-xl font-semibold text-amber-500 mb-2">💨 Pollution Reduction</h4>
                    <p class="text-gray-700">Critical to reduce air, water, and soil contamination to protect ecosystems, biodiversity, and ensure healthier lives for all.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg card-hover transition-all duration-300">
                    <h4 class="text-xl font-semibold text-amber-500 mb-2">📈 Economic Opportunity</h4>
                    <p class="text-gray-700">Green technologies drive new industries, create green jobs, foster innovation, and can lead to long-term sustainable economic growth.</p>
                </div>
            </div>
        </section>

        <section id="pillars" class="py-16">
            <h2 class="text-3xl font-bold text-green-700 mb-2 section-title">Key Pillars of Green Innovation</h2>
            <p class="text-lg text-gray-700 mb-10">Explore the foundational areas where green technologies are making a significant impact. Click on each pillar to learn more about its role in building a sustainable future. These pillars represent diverse sectors actively undergoing transformation through innovation. Additionally, use the "Learn More ✨" button to get an AI-generated deeper dive into each pillar.</p>
            <div id="pillars-container" class="space-y-4">
                </div>
        </section>

        <section id="spotlight-energy" class="py-16">
            <h2 class="text-3xl font-bold text-green-700 mb-2 section-title">Spotlight: The Renewable Energy Revolution</h2>
            <p class="text-lg text-gray-700 mb-10">This section dives into the advancements in renewable energy technologies like solar and wind power, and the critical role of energy storage. Understand how these innovations are powering our world more sustainably and reducing reliance on fossil fuels.</p>
            
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-green-700 mb-3">☀️ Solar Power</h3>
                    <p class="text-gray-700 mb-2"><strong>Advancements:</strong> Highly efficient photovoltaic (PV) cells, flexible solar panels, solar roads, concentrated solar power (CSP).</p>
                    <p class="text-gray-700"><strong>Impact:</strong> Decentralized energy production, significantly reduced carbon emissions, and decreasing electricity costs for consumers and businesses.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-green-700 mb-3">🌬️ Wind Power</h3>
                    <p class="text-gray-700 mb-2"><strong>Advancements:</strong> Larger and more efficient turbines (both onshore and offshore), vertical axis turbines, innovative airborne wind energy systems.</p>
                    <p class="text-gray-700"><strong>Impact:</strong> Provides clean energy at a large scale, playing a major role in reducing dependence on fossil fuels and diversifying energy portfolios.</p>
                </div>
            </div>
             <div class="bg-white p-6 rounded-lg shadow-lg mb-12">
                <h3 class="text-2xl font-semibold text-green-700 mb-3">🔋 Energy Storage</h3>
                <p class="text-gray-700">Crucial for ensuring reliability and stability of renewable energy sources. Key advancements include advanced battery technologies (e.g., Lithium-ion, solid-state), pumped hydro storage, and emerging hydrogen storage solutions. Effective storage bridges the gap between intermittent energy generation and consistent demand.</p>
            </div>

            <h3 class="text-2xl font-semibold text-green-700 mb-4 text-center">Illustrative Impact of Renewable Technologies</h3>
            <p class="text-md text-gray-600 mb-6 text-center">The chart below offers a simplified, illustrative comparison of the potential impact of solar and wind power across key sustainability metrics. Data is for demonstration purposes.</p>
            <div class="chart-container bg-white p-4 rounded-lg shadow-lg">
                <canvas id="renewableEnergyImpactChart"></canvas>
            </div>
        </section>

        <section id="spotlight-circularity" class="py-16">
            <h2 class="text-3xl font-bold text-green-700 mb-2 section-title">Spotlight: Circular Economy & Smart Cities</h2>
            <p class="text-lg text-gray-700 mb-10">Discover how the principles of a circular economy and the development of smart cities are revolutionizing resource management and urban living. These approaches aim to minimize waste, maximize resource efficiency, and create more sustainable, resilient, and livable urban environments.</p>

            <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
                <h3 class="text-2xl font-semibold text-green-700 mb-4">♻️ Circular Economy Principles</h3>
                <p class="text-gray-700 mb-4">The circular economy is a model of production and consumption, which involves sharing, leasing, reusing, repairing, refurbishing and recycling existing materials and products as long as possible. In this way, the life cycle of products is extended.</p>
                <div class="space-y-4 md:space-y-0 md:flex md:space-x-4 text-center">
                    <div class="flex-1 p-4 border border-amber-500 rounded-lg">
                        <h4 class="font-semibold text-amber-500 mb-1">1. Design Out Waste & Pollution</h4>
                        <p class="text-sm text-gray-600">Products designed for longevity, easy repair, and efficient recycling from the outset.</p>
                    </div>
                    <div class="hidden md:flex items-center text-2xl text-green-700 font-bold">&rarr;</div>
                    <div class="flex-1 p-4 border border-amber-500 rounded-lg">
                        <h4 class="font-semibold text-amber-500 mb-1">2. Keep Products & Materials in Use</h4>
                        <p class="text-sm text-gray-600">Maximizing value through reuse, repair, remanufacturing, and sharing platforms.</p>
                    </div>
                     <div class="hidden md:flex items-center text-2xl text-green-700 font-bold">&rarr;</div>
                    <div class="flex-1 p-4 border border-amber-500 rounded-lg">
                        <h4 class="font-semibold text-amber-500 mb-1">3. Regenerate Natural Systems</h4>
                        <p class="text-sm text-gray-600">Returning biological materials safely to the earth, fostering biodiversity and soil health.</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold text-green-700 mb-3">🏙️ Smart Cities</h3>
                <p class="text-gray-700 mb-2"><strong>Integration:</strong> Utilizing Internet of Things (IoT), Artificial Intelligence (AI), and data analytics to optimize urban services like transportation, energy distribution, and waste management for greater efficiency and sustainability.</p>
                <p class="text-gray-700 mb-2"><strong>Green Infrastructure:</strong> Incorporating natural elements like green roofs, vertical gardens, permeable pavements, and sustainable urban drainage systems to manage water, improve air quality, and enhance biodiversity.</p>
                <p class="text-gray-700"><strong>Impact:</strong> Leads to reduced resource consumption, enhanced quality of life for citizens, improved urban resilience to climate change, and more efficient city operations.</p>
            </div>
        </section>

        <section id="take-action" class="py-16 bg-green-50 rounded-xl shadow-lg">
            <h2 class="text-3xl font-bold text-green-700 mb-2 text-center section-title mx-auto">Building a Better Tomorrow, Together</h2>
            <p class="text-lg text-gray-700 mb-10 text-center max-w-2xl mx-auto">This final section summarizes the importance of green innovations and outlines how collective effort—from individual actions to policy changes—can pave the way for a sustainable future. Your participation is key to this global transformation.</p>

            <div class="bg-white p-6 rounded-lg shadow-md mb-8 max-w-3xl mx-auto">
                <h3 class="text-2xl font-semibold text-green-700 mb-3">Summary & The Path Forward</h3>
                <p class="text-gray-700 mb-4">Green innovations are vital for addressing pressing environmental challenges, fostering sustainable economic growth, and improving the overall quality of life globally. The path forward requires continued and increased investment in research and development, supportive and forward-thinking government policies, robust international collaboration, and heightened public awareness and engagement.</p>
            </div>

            <h3 class="text-2xl font-semibold text-green-700 mb-6 text-center">🤝 Your Call to Action:</h3>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-4xl mx-auto mb-12">
                <div class="bg-amber-500 text-white p-6 rounded-lg shadow-md text-center card-hover transition-all duration-300">
                    <h4 class="text-xl font-semibold mb-2">🛒 Support Green</h4>
                    <p>Choose and support businesses and products that prioritize sustainability and eco-friendly practices.</p>
                </div>
                <div class="bg-amber-500 text-white p-6 rounded-lg shadow-md text-center card-hover transition-all duration-300">
                    <h4 class="text-xl font-semibold mb-2">🗣️ Advocate</h4>
                    <p>Advocate for local and national policies that support renewable energy, conservation, and sustainable development.</p>
                </div>
                <div class="bg-amber-500 text-white p-6 rounded-lg shadow-md text-center card-hover transition-all duration-300">
                    <h4 class="text-xl font-semibold mb-2">🌱 Embrace Change</h4>
                    <p>Embrace and adopt eco-friendly practices in your daily life, such as reducing waste, conserving energy, and using sustainable transport.</p>
                </div>
                <div class="bg-amber-500 text-white p-6 rounded-lg shadow-md text-center card-hover transition-all duration-300">
                    <h4 class="text-xl font-semibold mb-2">📚 Educate</h4>
                    <p>Educate yourself and others on the importance of sustainability and the impact of green innovations.</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md max-w-3xl mx-auto">
                <h3 class="text-2xl font-semibold text-green-700 mb-4">Green Tech Idea Generator ✨</h3>
                <p class="text-gray-700 mb-4">Describe a problem or an area where you'd like to see green innovation, and I'll suggest some ideas!</p>
                <textarea id="ideaPrompt" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 mb-4" rows="4" placeholder="e.g., 'How to reduce plastic waste at home?' or 'Sustainable gardening for small spaces.'"></textarea>
                <button id="generateIdeaButton" class="bg-amber-500 text-white font-semibold py-2 px-6 rounded-lg shadow-md hover:bg-amber-600 transition duration-300 flex items-center justify-center">
                    Generate Ideas ✨
                    <div id="ideaLoader" class="loader ml-2 hidden"></div>
                </button>
                <div id="ideaOutput" class="mt-6 p-4 bg-green-50 rounded-lg border border-green-200 text-gray-800 hidden"></div>
            </div>
        </section>
    
<section id="presentation" class="py-16 bg-white rounded-xl shadow-md">
    <div class="container mx-auto text-center px-4">
        <h2 class="text-3xl font-bold text-green-700 mb-4 section-title">📊 Our Presentation</h2>
        <p class="text-lg text-gray-700 mb-6">Explore our insights and findings in a visually engaging presentation.</p>
        <div class="flex justify-center">
            
    <a href="https://gamma.app/embed/m23m2jc83tnv2u1" target="_blank"
       class="inline-block bg-green-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:bg-green-800 transition duration-300">
       View Presentation 📊
    </a>
    
        </div>
    </div>
</section>


<section id="our-story" class="py-16 bg-white rounded-xl shadow-md">
    <div class="container mx-auto text-center px-4">
        <h2 class="text-3xl font-bold text-green-700 mb-4 section-title">🎬 Our Story</h2>
        <p class="text-lg text-gray-700 mb-6">Learn more about our journey and inspiration behind Green Innovations through this short video.</p>
        <div class="flex justify-center">
            <video controls class="rounded-lg shadow-lg max-w-full w-[700px]">
                <source src="WhatsApp Video 2025-05-25 at 2.24.11 PM.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</section>

</main>

    <footer class="bg-green-800 text-beige-50 py-8 text-center">
        <p>&copy; <span id="currentYear"></span> Green Innovations Explorer. All rights reserved.</p>
        <p class="text-sm">Paving the way for a sustainable future.</p>
    </footer>

    <script>
        const apiKey = "AIzaSyAl_b4aD6afoUnTyzXuhYUczxIV79ccw0U"; // Replace with your actual API key // If you want to use models other than gemini-2.0-flash or imagen-3.0-generate-002, provide an API key here. Otherwise, leave this as-is.

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                    // Update active link state
                    document.querySelectorAll('#nav-menu a').forEach(link => link.classList.remove('active'));
                    this.classList.add('active');
                    // Close mobile menu if open
                    const navMenu = document.getElementById('nav-menu');
                    if (!navMenu.classList.contains('hidden')) {
                        navMenu.classList.add('hidden');
                    }
                }
            });
        });

        // Mobile navigation toggle
        const navToggle = document.getElementById('nav-toggle');
        const navMenu = document.getElementById('nav-menu');
        if (navToggle && navMenu) {
            navToggle.addEventListener('click', function() {
                navMenu.classList.toggle('hidden');
            });
        }
        
        // Set current year in footer
        document.getElementById('currentYear').textContent = new Date().getFullYear();

        // Function to call Gemini API
        async function callGeminiAPI(prompt, outputElement, loaderElement, buttonElement) {
            outputElement.classList.add('hidden');
            outputElement.textContent = '';
            loaderElement.classList.remove('hidden');
            buttonElement.disabled = true;
            buttonElement.classList.add('opacity-50', 'cursor-not-allowed');

            let chatHistory = [];
            chatHistory.push({ role: "user", parts: [{ text: prompt }] });
            const payload = { contents: chatHistory };
            const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=${apiKey}`;

            try {
                const response = await fetch(apiUrl, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(payload)
                });
                const result = await response.json();

                if (result.candidates && result.candidates.length > 0 &&
                    result.candidates[0].content && result.candidates[0].content.parts &&
                    result.candidates[0].content.parts.length > 0) {
                    const text = result.candidates[0].content.parts[0].text;
                    outputElement.textContent = text;
                    outputElement.classList.remove('hidden');
                } else {
                    outputElement.textContent = 'Error: Could not generate content. Please try again.';
                    outputElement.classList.remove('hidden');
                }
            } catch (error) {
                outputElement.textContent = 'Error: Failed to connect to the API. Please check your network connection or try again later.';
                outputElement.classList.remove('hidden');
                console.error('API call failed:', error);
            } finally {
                loaderElement.classList.add('hidden');
                buttonElement.disabled = false;
                buttonElement.classList.remove('opacity-50', 'cursor-not-allowed');
            }
        }

        // Pillars data and rendering
        const pillarsData = [
            { 
                id: "renewable-energy",
                title: "💡 Renewable Energy", 
                content: "Harnessing natural, inexhaustible sources like solar, wind, hydro, geothermal, and biomass to generate clean electricity, reducing reliance on fossil fuels and mitigating climate change." 
            },
            { 
                id: "sustainable-transport",
                title: "🚗 Sustainable Transportation", 
                content: "Developing and promoting eco-friendly mobility solutions such as electric vehicles (EVs), hydrogen fuel cell vehicles, efficient public transit systems, and infrastructure for cycling and walking." 
            },
            { 
                id: "circular-economy",
                title: "♻️ Circular Economy & Waste Management", 
                content: "Shifting from traditional linear 'take-make-dispose' models to circular systems that emphasize reducing consumption, reusing products, recycling materials, and recovering value from waste." 
            },
            { 
                id: "green-building",
                title: "🏢 Green Building & Infrastructure", 
                content: "Designing and constructing energy-efficient, resource-saving buildings and infrastructure using sustainable materials, smart technologies, and environmentally conscious urban planning." 
            },
            { 
                id: "sustainable-agriculture",
                title: "🌿 Sustainable Agriculture & Food Systems", 
                content: "Implementing innovative farming practices and food production methods that are efficient, have low environmental impact, conserve water, protect soil health, and reduce food waste." 
            },
            { 
                id: "water-conservation",
                title: "💧 Water Conservation & Treatment", 
                content: "Developing and deploying technologies and strategies for efficient water use in all sectors, advanced water purification, wastewater treatment, and sustainable desalination methods." 
            }
        ];

        const pillarsContainer = document.getElementById('pillars-container');
        if (pillarsContainer) {
            pillarsData.forEach(pillar => {
                const pillarElement = document.createElement('div');
                pillarElement.className = 'pillar-item bg-white rounded-lg shadow-md transition-all duration-300';
                
                const titleButton = document.createElement('button');
                titleButton.className = 'w-full text-left p-4 font-semibold text-green-700 text-lg focus:outline-none flex justify-between items-center';
                titleButton.setAttribute("aria-expanded", "false");
                titleButton.setAttribute("aria-controls", pillar.id);
                titleButton.innerHTML = `<span>${pillar.title}</span> <span class="arrow text-amber-500 text-2xl transform transition-transform duration-300">&#x25BC;</span>`; // Down arrow
                
                const contentElement = document.createElement('div');
                contentElement.className = 'pillar-content p-4 border-t border-gray-200 text-gray-700 leading-relaxed hidden';
                contentElement.textContent = pillar.content;

                const deepDiveButton = document.createElement('button');
                deepDiveButton.className = 'mt-4 ml-4 bg-green-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-green-800 transition duration-300 flex items-center';
                deepDiveButton.innerHTML = `Learn More ✨ <div class="loader ml-2 hidden"></div>`;
                const deepDiveLoader = deepDiveButton.querySelector('.loader');
                const deepDiveOutput = document.createElement('div');
                deepDiveOutput.className = 'mt-4 p-4 bg-green-50 rounded-lg border border-green-200 text-gray-800 hidden';

                deepDiveButton.addEventListener('click', () => {
                    const prompt = `Provide a detailed explanation or a mini-case study for the green innovation pillar: "${pillar.title}". Focus on its current state, key technologies, and future potential. Keep the response concise, around 150-200 words.`;
                    callGeminiAPI(prompt, deepDiveOutput, deepDiveLoader, deepDiveButton);
                });
                
                titleButton.addEventListener('click', () => {
                    const expanded = titleButton.getAttribute("aria-expanded") === "true";
                    titleButton.setAttribute("aria-expanded", !expanded);
                    const isActive = pillarElement.classList.toggle('active');
                    contentElement.classList.toggle('hidden');
                    deepDiveButton.classList.toggle('hidden'); // Hide/show deep dive button with content
                    deepDiveOutput.classList.add('hidden'); // Hide previous deep dive output when collapsing
                    titleButton.querySelector('.arrow').style.transform = isActive ? 'rotate(180deg)' : 'rotate(0deg)';
                });
                
                pillarElement.appendChild(titleButton);
                pillarElement.appendChild(contentElement);
                pillarElement.appendChild(deepDiveButton);
                pillarElement.appendChild(deepDiveOutput);
                pillarsContainer.appendChild(pillarElement);
            });
        }

        // Chart.js: Renewable Energy Impact Chart
        const ctxRenewable = document.getElementById('renewableEnergyImpactChart');
        if (ctxRenewable) {
            new Chart(ctxRenewable, {
                type: 'bar',
                data: {
                    labels: ['Emission Reduction', 'Cost Savings Potential', 'Scalability', 'Resource Conservation'],
                    datasets: [
                        {
                            label: 'Solar Power Impact (Illustrative)',
                            data: [4, 3, 4, 3.5], // Illustrative data (scale 1-5)
                            backgroundColor: 'rgba(245, 158, 11, 0.6)', // amber-500 with opacity
                            borderColor: 'rgba(245, 158, 11, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Wind Power Impact (Illustrative)',
                            data: [4.5, 2.5, 4, 3], // Illustrative data (scale 1-5)
                            backgroundColor: 'rgba(22, 163, 74, 0.6)', // green-600 with opacity
                            borderColor: 'rgba(22, 163, 74, 1)',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 5,
                            title: {
                                display: true,
                                text: 'Impact Score (1-5)'
                            }
                        },
                        x: {
                             ticks: {
                                callback: function(value, index, values) {
                                    const label = this.getLabelForValue(value);
                                    if (label.length > 16) {
                                        return label.match(/.{1,16}/g).join('\n'); // Wrap at 16 chars
                                    }
                                    return label;
                                }
                            }
                        }
                    },
                    plugins: {
                        tooltip: {
                            enabled: true,
                            mode: 'index',
                            intersect: false,
                            callbacks: {
                                title: function(tooltipItems) {
                                    return tooltipItems[0].label;
                                },
                                label: function(context) {
                                    let label = context.dataset.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    if (context.parsed.y !== null) {
                                        label += context.parsed.y + ' / 5';
                                    }
                                    return label;
                                }
                            }
                        },
                        legend: {
                            position: 'top',
                        }
                    }
                }
            });
        }

        // Green Tech Idea Generator Logic
        const ideaPromptInput = document.getElementById('ideaPrompt');
        const generateIdeaButton = document.getElementById('generateIdeaButton');
        const ideaLoader = document.getElementById('ideaLoader');
        const ideaOutput = document.getElementById('ideaOutput');

        if (generateIdeaButton && ideaPromptInput && ideaLoader && ideaOutput) {
            generateIdeaButton.addEventListener('click', () => {
                const userPrompt = ideaPromptInput.value.trim();
                if (userPrompt) {
                    const prompt = `Generate 3-5 actionable green technology or sustainable living ideas based on the following user query: "${userPrompt}". Provide brief, practical suggestions.`;
                    callGeminiAPI(prompt, ideaOutput, ideaLoader, generateIdeaButton);
                } else {
                    ideaOutput.textContent = 'Please enter a prompt to generate ideas.';
                    ideaOutput.classList.remove('hidden');
                }
            });
        }

        // Active nav link on scroll
        const sections = document.querySelectorAll('main section');
        const navLinks = document.querySelectorAll('#nav-menu a');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= (sectionTop - sectionHeight / 3)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').substring(1) === current) {
                    link.classList.add('active');
                }
            });
            // Default to home if no section is active (e.g. at the very top or bottom out of section range)
             if (!current && pageYOffset < sections[0].offsetTop) {
                document.querySelector('#nav-menu a[href="#home"]').classList.add('active');
            }
        });
         // Set initial active link
        const initialHash = window.location.hash || '#home';
        const initialActiveLink = document.querySelector(`#nav-menu a[href="${initialHash}"]`);
        if (initialActiveLink) {
            initialActiveLink.classList.add('active');
        } else {
             document.querySelector('#nav-menu a[href="#home"]').classList.add('active');
        }
    </script>
</body>
</html>
