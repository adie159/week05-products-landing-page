@extends('layouts.app')

@section('content')

    <x-hero />

    {{-- ABOUT --}}
    <section id="about" class="max-w-7xl mx-auto px-5 lg:px-8 py-24 grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">
        <div>
            <p class="font-display uppercase tracking-[0.2em] text-red text-sm mb-4">About Us</p>
            <h2 class="font-display font-semibold text-4xl sm:text-5xl leading-tight mb-6">
                Two years strong,<br>built by the community.
            </h2>
            <p class="text-bone/70 leading-relaxed mb-6">
                GT Fitness opened its doors in San Isidro Ilaya, Barangay Maslun, Liliw, and has spent the last
                two years growing into a home base for lifters, beginners, and everyone in between. We're not
                a chain — we're the gym down the road, run for the people who train here.
            </p>
            <p class="text-bone/70 leading-relaxed mb-8">
                Free weights, machines, cardio equipment, and a training floor big enough to actually move —
                all under one roof, with a team that knows your name after your first week.
            </p>
            <div class="flex gap-10">
                <div>
                    <p class="font-display font-semibold text-4xl text-turf">2+</p>
                    <p class="text-bone/50 text-sm uppercase tracking-wide mt-1">Years Open</p>
                </div>
                <div>
                    <p class="font-display font-semibold text-4xl text-turf">7+</p>
                    <p class="text-bone/50 text-sm uppercase tracking-wide mt-1">Equipment Zones</p>
                </div>
                <div>
                    <p class="font-display font-semibold text-4xl text-turf">3</p>
                    <p class="text-bone/50 text-sm uppercase tracking-wide mt-1">Membership Options</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <img src="images/equipment1.jpg" alt="Dumbbell rack at GT Fitness" class="w-full h-64 object-cover -rotate-1">
            <img src="images/equipment6.jpg" alt="GT Fitness training floor" class="w-full h-64 object-cover mt-8 rotate-1">
        </div>
    </section>

    {{-- SERVICES --}}
    <section id="services" class="bg-surface/30 border-y-2 border-surface py-24">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <p class="font-display uppercase tracking-[0.2em] text-red text-sm mb-4">What We Offer</p>
            <h2 class="font-display font-semibold text-4xl sm:text-5xl mb-14 max-w-2xl">
                Everything you need to train, nothing you don't.
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-12">

                <x-feature-card title="Strength Training" icon='<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 7v10M18 7v10M2 10h4M2 14h4M18 10h4M18 14h4M6 12h12"/></svg>'>
                    Dumbbells from 10 to 65 lbs, plate-loaded stations, and free weight zones for every level.
                </x-feature-card>

                <x-feature-card title="Cardio" icon='<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12h4l2-7 4 14 2-7h6"/></svg>'>
                    Spin bikes and cardio machines to build endurance and burn through your goals.
                </x-feature-card>

                <x-feature-card title="Personal Training" icon='<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 12a4 4 0 100-8 4 4 0 000 8zM4 21v-1a6 6 0 016-6h4a6 6 0 016 6v1"/></svg>'>
                    One-on-one coaching to fix your form, build a plan, and keep you accountable.
                </x-feature-card>

                <x-feature-card title="Fitness Programs" icon='<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>'>
                    Structured routines for weight loss, muscle gain, or general conditioning.
                </x-feature-card>

                <x-feature-card title="Machine Circuits" icon='<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7"/></svg>'>
                    Selectorized and plate-loaded machines covering every major muscle group.
                </x-feature-card>

                <x-feature-card title="Flexible Access" icon='<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'>
                    Daily, half-month, and monthly passes so you can train on your own schedule.
                </x-feature-card>

            </div>
        </div>
    </section>

    {{-- PLANS --}}
    <section id="plans" class="max-w-7xl mx-auto px-5 lg:px-8 py-24">
        <p class="font-display uppercase tracking-[0.2em] text-red text-sm mb-4">Membership</p>
        <h2 class="font-display font-semibold text-4xl sm:text-5xl mb-14 max-w-2xl">
            Pick a plan and start today.
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <x-pricing-card name="Daily Pass" price="60" unit="visit">
                <li class="flex gap-3 text-sm text-bone/75"><span class="text-turf">✓</span> Full gym access for the day</li>
                <li class="flex gap-3 text-sm text-bone/75"><span class="text-turf">✓</span> All equipment &amp; free weights</li>
                <li class="flex gap-3 text-sm text-bone/75"><span class="text-turf">✓</span> No commitment</li>
            </x-pricing-card>

            <x-pricing-card name="15-Day Pass" price="350" unit="15 days" :featured="true">
                <li class="flex gap-3 text-sm text-bone/75"><span class="text-turf">✓</span> Everything in Daily Pass</li>
                <li class="flex gap-3 text-sm text-bone/75"><span class="text-turf">✓</span> Half-month unlimited visits</li>
                <li class="flex gap-3 text-sm text-bone/75"><span class="text-turf">✓</span> Best for short-term goals</li>
            </x-pricing-card>

            <x-pricing-card name="Monthly" price="700" unit="month">
                <li class="flex gap-3 text-sm text-bone/75"><span class="text-turf">✓</span> Unlimited visits, 30 days</li>
                <li class="flex gap-3 text-sm text-bone/75"><span class="text-turf">✓</span> Best value per session</li>
                <li class="flex gap-3 text-sm text-bone/75"><span class="text-turf">✓</span> Priority for programs</li>
            </x-pricing-card>

        </div>
    </section>

    {{-- GALLERY / FACILITIES --}}
    <section id="gallery" class="bg-surface/30 border-y-2 border-surface py-24">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <p class="font-display uppercase tracking-[0.2em] text-red text-sm mb-4">Facilities</p>
            <h2 class="font-display font-semibold text-4xl sm:text-5xl mb-14 max-w-2xl">
                Take a look around the gym.
            </h2>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                <img src="images/equipment1.jpg" alt="Dumbbell rack" class="w-full h-56 object-cover">
                <img src="images/equipment2.jpg" alt="Free weight and accessory shelf" class="w-full h-56 object-cover">
                <img src="images/equipment3.jpg" alt="Leg extension and training area" class="w-full h-56 object-cover">
                <img src="images/equipment5.jpg" alt="Spin bikes" class="w-full h-56 object-cover">
                <img src="images/equipment6.jpg" alt="Cable machine station" class="w-full h-56 object-cover">
                <img src="images/equipment7jpg.jpg" alt="Weight area under GT Fitness sign" class="w-full h-56 object-cover">
                <img src="images/gym_logo.jpg" alt="GT Fitness logo" class="w-full h-56 object-cover">
                <div class="w-full h-56 bg-red flex flex-col items-center justify-center text-center p-4">
                    <p class="font-display font-semibold text-2xl">Come see it<br>in person</p>
                </div>
            </div>
        </div>
    </section>

    {{-- TESTIMONIALS --}}
    <section class="max-w-7xl mx-auto px-5 lg:px-8 py-24">
        <p class="font-display uppercase tracking-[0.2em] text-red text-sm mb-4">Testimonials</p>
        <h2 class="font-display font-semibold text-4xl sm:text-5xl mb-14 max-w-2xl">
            What our members say.
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <x-testimonial-card name="Marco R." role="Member since 2023" initial="M">
                Sarado man ang barangay pero buhay ang gym na 'to. Sulit yung monthly kahit araw-araw ako.
            </x-testimonial-card>

            <x-testimonial-card name="Angeline T." role="Member since 2024" initial="A">
                Yung mga kagamitan kumpleto at malinis. Yung staff friendly din, tinuturuan ka kung paano gamitin.
            </x-testimonial-card>

            <x-testimonial-card name="Julius P." role="Member since 2023" initial="J">
                Nag-start ako sa daily pass, tapos nag-monthly na ako dahil ang saya ng environment dito.
            </x-testimonial-card>
        </div>
    </section>

    {{-- CTA --}}
    <section class="bg-red">
        <div class="max-w-7xl mx-auto px-5 lg:px-8 py-20 flex flex-col lg:flex-row items-center justify-between gap-8">
            <h2 class="font-display font-semibold text-3xl sm:text-4xl text-center lg:text-left max-w-xl">
                Ready to be one of us? Your first session starts whenever you walk in.
            </h2>
            <div class="flex flex-wrap gap-4 justify-center">
                <x-button href="#plans" variant="outline" class="!border-bone">View Memberships</x-button>
                <x-button href="https://www.facebook.com/profile.php?id=61558571424663" variant="outline" class="!border-bone">Message Us on Facebook</x-button>
            </div>
        </div>
    </section>

@endsection
