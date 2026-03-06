@extends('layouts.app')

@section('title', 'Our Care Team – Compassionate Support Staff | Amazing Palace')
@section('description', 'Meet the Amazing Palace team dedicated to providing compassionate, respectful and personalized care in a warm home-style environment.')
@section('keywords', 'care team, caregivers, professional support staff, compassionate caregivers')

@push('head')
<link rel="canonical" href="{{ url('/careteam') }}">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative team-hero-bg text-white py-24">
        <div class="absolute inset-0 bg-gradient-to-r from-purpleDeep to-purpleLight"></div>
        <div class="relative container mx-auto px-4 text-center">
            <h1 class="cormorant text-5xl md:text-6xl font-bold mb-6">Meet Our Staff</h1>
            <div class="w-32 h-1 bg-gold mx-auto mb-8"></div>
            {{-- <p class="text-2xl max-w-3xl mx-auto font-light">
                Compassionate experts dedicated to providing exceptional care with dignity and respect.
            </p> --}}
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="cormorant text-4xl font-bold text-navy mb-6">Our Approach to Care</h2>
                    <div class="w-24 h-1 bg-gold mb-8"></div>
                    <p class="text-lg text-gray-700 mb-6">
                        At Amazing Palace, we believe that exceptional care begins with exceptional people. Our team of
                        dedicated professionals brings together expertise, compassion, and a genuine commitment to
                        enhancing the lives of our residents.
                    </p>
                    <p class="text-lg text-gray-700 mb-8">
                        Each member of our care team undergoes rigorous screening, comprehensive training, and
                        continuous education to ensure they provide the highest standard of care. We maintain a low
                        staff-to-resident ratio to ensure personalized attention and meaningful relationships.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-graduation-cap text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy">200+ Hours</h4>
                                <p class="text-gray-600 text-sm">Annual training per caregiver</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-navy rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-users text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy">1:3 Ratio</h4>
                                <p class="text-gray-600 text-sm">Staff to residents (daytime)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <img src="images/ednar.png" alt="Care team interacting with residents"
                            class="care_one w-full h-auto">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-gold text-navy p-6 rounded-2xl shadow-xl max-w-xs">
                        <h4 class="cormorant text-2xl font-bold mb-2">15+ Professionals</h4>
                        <p class="font-semibold">Dedicated to resident care</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Team -->
    <section class="py-20 team-bg">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Leadership Team</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Our experienced leadership team sets the standard for excellence in senior care at Amazing Palace.
                </p>
            </div>

            {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden team-card">
                    <div class="h-64 bg-navy flex items-center justify-center relative">
                        <i class="fas fa-user-md text-white text-8xl"></i>
                        <div class="absolute bottom-4 right-4">
                            <button class="team-detail-btn w-10 h-10 bg-gold rounded-full flex items-center justify-center" data-member="dr-emily">
                                <i class="fas fa-plus text-navy"></i>
                            </button>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="cormorant text-2xl font-bold text-navy mb-2">Dr. Emily Thompson</h3>
                        <p class="text-gold font-semibold mb-4">Medical Director</p>
                        <p class="text-gray-700 mb-6">Board-certified geriatrician with over 20 years of experience in senior care and dementia management.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="cert-badge">Geriatrics</span>
                            <span class="cert-badge">Internal Medicine</span>
                            <span class="cert-badge">Dementia Care</span>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden team-card">
                    <div class="h-64 bg-navy flex items-center justify-center relative">
                        <i class="fas fa-user-nurse text-white text-8xl"></i>
                        <div class="absolute bottom-4 right-4">
                            <button class="team-detail-btn w-10 h-10 bg-gold rounded-full flex items-center justify-center" data-member="maria-rodriguez">
                                <i class="fas fa-plus text-navy"></i>
                            </button>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="cormorant text-2xl font-bold text-navy mb-2">Maria Rodriguez, RN</h3>
                        <p class="text-gold font-semibold mb-4">Director of Nursing</p>
                        <p class="text-gray-700 mb-6">Registered Nurse with 15+ years specializing in memory care and geriatric nursing management.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="cert-badge">Memory Care</span>
                            <span class="cert-badge">RN License</span>
                            <span class="cert-badge">Wound Care</span>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden team-card">
                    <div class="h-64 bg-navy flex items-center justify-center relative">
                        <i class="fas fa-user-tie text-white text-8xl"></i>
                        <div class="absolute bottom-4 right-4">
                            <button class="team-detail-btn w-10 h-10 bg-gold rounded-full flex items-center justify-center" data-member="robert-chen">
                                <i class="fas fa-plus text-navy"></i>
                            </button>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="cormorant text-2xl font-bold text-navy mb-2">Robert Chen</h3>
                        <p class="text-gold font-semibold mb-4">Executive Director</p>
                        <p class="text-gray-700 mb-6">Healthcare administrator with expertise in senior living operations and family-centered care models.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="cert-badge">Healthcare Admin</span>
                            <span class="cert-badge">MBA</span>
                            <span class="cert-badge">Licensed AFH</span>
                        </div>
                    </div>
                </div>
            </div> --}}
            @php
                $teamMembers = App\Models\Team::orderBy('order')->get();
            @endphp

            @if ($teamMembers->count() > 0)
                <x-team-section :teamMembers="$teamMembers" />
            @endif
        </div>
    </section>

    {{-- <!-- Clinical Care Team -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Clinical Care Team</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Our licensed clinical professionals provide expert medical care and oversight for all residents.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 4 -->
                <div class="bg-white rounded-2xl shadow-lg p-8 text-center team-card">
                    <div class="w-20 h-20 bg-navy rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-stethoscope text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-xl font-bold text-navy mb-2">James Wilson, LPN</h3>
                    <p class="text-gold font-semibold mb-4">Lead Licensed Nurse</p>
                    <p class="text-gray-700 text-sm mb-6">Coordinates daily nursing care and medication management for all residents.</p>
                    <button class="team-detail-btn text-navy font-semibold hover:text-gold transition" data-member="james-wilson">
                        <i class="fas fa-info-circle mr-1"></i> Learn More
                    </button>
                </div>

                <!-- Team Member 5 -->
                <div class="bg-white rounded-2xl shadow-lg p-8 text-center team-card">
                    <div class="w-20 h-20 bg-navy rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-heartbeat text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-xl font-bold text-navy mb-2">Sarah Johnson, PT</h3>
                    <p class="text-gold font-semibold mb-4">Physical Therapist</p>
                    <p class="text-gray-700 text-sm mb-6">Specializes in geriatric rehabilitation, mobility, and fall prevention.</p>
                    <button class="team-detail-btn text-navy font-semibold hover:text-gold transition" data-member="sarah-johnson">
                        <i class="fas fa-info-circle mr-1"></i> Learn More
                    </button>
                </div>

                <!-- Team Member 6 -->
                <div class="bg-white rounded-2xl shadow-lg p-8 text-center team-card">
                    <div class="w-20 h-20 bg-navy rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-notes-medical text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-xl font-bold text-navy mb-2">David Park, RPh</h3>
                    <p class="text-gold font-semibold mb-4">Consulting Pharmacist</p>
                    <p class="text-gray-700 text-sm mb-6">Reviews all medication regimens for safety, efficacy, and interactions.</p>
                    <button class="team-detail-btn text-navy font-semibold hover:text-gold transition" data-member="david-park">
                        <i class="fas fa-info-circle mr-1"></i> Learn More
                    </button>
                </div>

                <!-- Team Member 7 -->
                <div class="bg-white rounded-2xl shadow-lg p-8 text-center team-card">
                    <div class="w-20 h-20 bg-navy rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-comment-medical text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-xl font-bold text-navy mb-2">Lisa Williams, MSW</h3>
                    <p class="text-gold font-semibold mb-4">Social Worker</p>
                    <p class="text-gray-700 text-sm mb-6">Provides emotional support, family counseling, and care coordination.</p>
                    <button class="team-detail-btn text-navy font-semibold hover:text-gold transition" data-member="lisa-williams">
                        <i class="fas fa-info-circle mr-1"></i> Learn More
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Caregiver Team -->
    <section class="py-20 team-bg">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Caregiver Team</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Our compassionate caregivers form the heart of our home, providing daily support with dignity and respect.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h3 class="cormorant text-3xl font-bold text-navy mb-6">Exceptional Caregivers</h3>
                    <p class="text-lg text-gray-700 mb-6">
                        Our caregivers are carefully selected for their compassion, patience, and dedication to senior care. Each undergoes comprehensive training and continuous education to ensure they provide the highest standard of personalized care.
                    </p>
                    <p class="text-lg text-gray-700 mb-8">
                        We maintain a low caregiver-to-resident ratio to ensure meaningful relationships and attentive care. Our team includes both certified nursing assistants (CNAs) and trained caregivers who specialize in memory care, mobility assistance, and activities of daily living.
                    </p>

                    <div class="bg-white rounded-xl p-8 shadow-lg">
                        <h4 class="cormorant text-2xl font-bold text-navy mb-6">Caregiver Qualifications</h4>
                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <ul class="space-y-3">
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-gold mr-2"></i>
                                        <span>Background checked</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-gold mr-2"></i>
                                        <span>CPR & First Aid certified</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-gold mr-2"></i>
                                        <span>40+ hours initial training</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <ul class="space-y-3">
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-gold mr-2"></i>
                                        <span>Dementia care certified</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-gold mr-2"></i>
                                        <span>Medication management</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-gold mr-2"></i>
                                        <span>Ongoing education</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bg-white rounded-2xl shadow-xl p-10 mb-8">
                        <h3 class="cormorant text-2xl font-bold text-navy mb-6">Meet Some of Our Caregivers</h3>

                        <div class="space-y-8">
                            <!-- Caregiver 1 -->
                            <div class="flex items-start">
                                <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-hands-helping text-white text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-navy text-lg">Michael Brown, CNA</h4>
                                    <p class="text-gold font-semibold mb-2">Senior Caregiver | 8 years experience</p>
                                    <p class="text-gray-700">Specializes in mobility assistance and fall prevention. Michael is known for his patience and creative approach to engaging residents in physical activity.</p>
                                    <button class="team-detail-btn text-navy font-semibold hover:text-gold transition mt-2 text-sm" data-member="michael-brown">
                                        <i class="fas fa-info-circle mr-1"></i> More about Michael
                                    </button>
                                </div>
                            </div>

                            <!-- Caregiver 2 -->
                            <div class="flex items-start">
                                <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-brain text-white text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-navy text-lg">Jennifer Lee</h4>
                                    <p class="text-gold font-semibold mb-2">Memory Care Specialist | 6 years experience</p>
                                    <p class="text-gray-700">Trained in validation therapy and cognitive stimulation techniques. Jennifer has a special talent for connecting with residents experiencing memory challenges.</p>
                                    <button class="team-detail-btn text-navy font-semibold hover:text-gold transition mt-2 text-sm" data-member="jennifer-lee">
                                        <i class="fas fa-info-circle mr-1"></i> More about Jennifer
                                    </button>
                                </div>
                            </div>

                            <!-- Caregiver 3 -->
                            <div class="flex items-start">
                                <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-smile text-white text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-navy text-lg">Carlos Martinez</h4>
                                    <p class="text-gold font-semibold mb-2">Activities Coordinator | 5 years experience</p>
                                    <p class="text-gray-700">Creates engaging social and recreational programs. Carlos brings energy and creativity to daily activities that enhance quality of life.</p>
                                    <button class="team-detail-btn text-navy font-semibold hover:text-gold transition mt-2 text-sm" data-member="carlos-martinez">
                                        <i class="fas fa-info-circle mr-1"></i> More about Carlos
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="contact.html#employment" class="inline-block border-2 border-navy text-navy hover:bg-navy hover:text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300">
                            <i class="fas fa-briefcase mr-2"></i> Caregiving Career Opportunities
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Training & Certification -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Training & Certification</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Our commitment to excellence includes ongoing education and certification for every team member.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
                    <div class="w-16 h-16 bg-gold rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-graduation-cap text-navy text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-xl font-bold text-navy mb-4">Initial Training</h3>
                    <p class="text-gray-700">40+ hours of comprehensive training covering senior care, safety protocols,
                        dementia care, and emergency procedures.</p>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
                    <div class="w-16 h-16 bg-gold rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-chalkboard-teacher text-navy text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-xl font-bold text-navy mb-4">Ongoing Education</h3>
                    <p class="text-gray-700">Monthly training sessions on topics like medication management,
                        communication skills, and new care techniques.</p>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
                    <div class="w-16 h-16 bg-gold rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-award text-navy text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-xl font-bold text-navy mb-4">Specialized Certifications</h3>
                    <p class="text-gray-700">Team members pursue certifications in dementia care, CPR/First Aid,
                        medication administration, and fall prevention.</p>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
                    <div class="w-16 h-16 bg-gold rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-heart text-navy text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-xl font-bold text-navy mb-4">Compassion Training</h3>
                    <p class="text-gray-700">Programs focused on empathy, communication, and building meaningful
                        relationships with residents and families.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Philosophy -->
    <section class="py-20 bg-navy text-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="cormorant text-4xl font-bold mb-6">Our Care Philosophy</h2>
                    <div class="w-24 h-1 bg-gold mb-8"></div>
                    <p class="text-xl mb-8">
                        At Amazing Palace, we believe that exceptional care is built on three foundational principles
                        that guide every interaction with our residents.
                    </p>

                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-user-circle text-navy text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-2xl mb-2">Person-Centered Care</h4>
                                <p>We see each resident as a unique individual with their own life story, preferences,
                                    and needs. Care plans are customized accordingly.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-hand-holding-heart text-navy text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-2xl mb-2">Dignity & Respect</h4>
                                <p>We honor each resident's autonomy and life experience, providing care that preserves
                                    dignity and promotes self-worth.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-home text-navy text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-2xl mb-2">Family Partnership</h4>
                                <p>We view families as essential partners in care, maintaining open communication and
                                    involving them in decision-making.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-10 border border-white/20">
                    <h3 class="cormorant text-3xl font-bold mb-6 text-gold">What Families Say About Our Team</h3>

                    <div class="space-y-8">
                        <div>
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-quote-left text-navy"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold">The Johnson Family</h4>
                                    <p class="text-gray-300 text-sm">Daughter of resident</p>
                                </div>
                            </div>
                            <p class="italic">"The care team at Amazing Palace treated my mother with such dignity and
                                respect. They learned her life story, her preferences, and truly became like family. We
                                couldn't have asked for better care."</p>
                        </div>

                        <div>
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-quote-left text-navy"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold">Robert & Susan Miller</h4>
                                    <p class="text-gray-300 text-sm">Family of memory care resident</p>
                                </div>
                            </div>
                            <p class="italic">"When our father needed memory care, we were nervous. But the specialized
                                training of the Amazing Palace team gave us peace of mind. They understand dementia in a
                                way that's both professional and compassionate."</p>
                        </div>
                    </div>

                    <div class="mt-8 text-center">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-6">Meet Our Team in Person</h2>
            <div class="w-32 h-1 bg-gold mx-auto mb-8"></div>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto mb-10">
                Schedule a tour to meet our caring team, see our facility, and learn how we can provide exceptional care
                for your loved one.
            </p>
            <div class="flex flex-col md:flex-row justify-center space-y-6 md:space-y-0 md:space-x-8">
                <a href="/gallery"
                    class="btn-gold px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-xl">
                    <i class="fas fa-calendar-check mr-2"></i> Schedule a Tour
                </a>
                <a href="/contact"
                    class="bg-navy hover:bg-royal-blue text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-lg">
                    <i class="fas fa-phone-alt mr-2"></i> Call to Speak with Our Team
                </a>
            </div>
        </div>
    </section>

    <!-- Team Member Modals -->
    <div id="teamModal" class="team-modal">
        <div class="modal-content">
            <!-- Modal content will be dynamically inserted here -->
        </div>
    </div>

    <!-- Footer -->
    <x-footer-card />
@endsection

@push('scripts')
    <script>
        // Mobile menu toggle
        // const mobileMenuButton = document.getElementById('mobile-menu-button');
        // const mobileMenu = document.getElementById('mobile-menu');

        // mobileMenuButton.addEventListener('click', () => {
        //     mobileMenu.classList.toggle('hidden');
        // });

        // // Close mobile menu when clicking a link
        // document.querySelectorAll('#mobile-menu a').forEach(link => {
        //     link.addEventListener('click', () => {
        //         mobileMenu.classList.add('hidden');
        //     });
        // });

        // Team member modal functionality
        const teamModal = document.getElementById('teamModal');
        const modalContent = document.querySelector('.modal-content');
        const teamDetailButtons = document.querySelectorAll('.team-detail-btn');

        // Team member data
        const teamMembers = {
            'dr-emily': {
                name: 'Dr. Emily Thompson',
                title: 'Medical Director',
                image: 'fas fa-user-md',
                bio: 'Dr. Thompson is a board-certified geriatrician with over 20 years of experience in senior care. She completed her medical degree at the University of Washington and her geriatrics fellowship at Johns Hopkins University. Dr. Thompson oversees all medical care at Amazing Palace and works closely with residents\' personal physicians to coordinate comprehensive care plans.',
                specialties: ['Geriatric Medicine', 'Dementia Management', 'Chronic Disease Management',
                    'Palliative Care'
                ],
                education: ['MD, University of Washington', 'Geriatrics Fellowship, Johns Hopkins University',
                    'Board Certified in Internal Medicine and Geriatrics'
                ],
                quote: '"My goal is to help residents maintain their highest possible quality of life while managing health challenges with dignity and respect."',
                years: '20+ years'
            },
            'maria-rodriguez': {
                name: 'Maria Rodriguez, RN',
                title: 'Director of Nursing',
                image: 'fas fa-user-nurse',
                bio: 'Maria brings 15 years of nursing experience with a specialization in memory care and geriatric nursing. She leads our nursing team with compassion and expertise, ensuring that all clinical care meets the highest standards. Maria is certified in dementia care and wound management.',
                specialties: ['Memory Care', 'Wound Care Management', 'Medication Management',
                    'Staff Training & Development'
                ],
                education: ['BSN, Seattle University', 'Dementia Care Certification',
                    'Wound Care Specialist Certification'
                ],
                quote: '"I believe in treating each resident as I would my own family member - with patience, respect, and genuine care."',
                years: '15 years'
            },
            'robert-chen': {
                name: 'Robert Chen',
                title: 'Executive Director',
                image: 'fas fa-user-tie',
                bio: 'Robert has over 12 years of experience in senior living administration. With an MBA in Healthcare Management, he ensures that Amazing Palace operates at the highest standards while maintaining a warm, family-like atmosphere. Robert is passionate about creating an environment where both residents and staff can thrive.',
                specialties: ['Healthcare Administration', 'Operations Management', 'Family Communication',
                    'Regulatory Compliance'
                ],
                education: ['MBA, Healthcare Management, University of Washington',
                    'Licensed Adult Family Home Administrator', 'CPR & First Aid Instructor'
                ],
                quote: '"Great care begins with great people. I\'m proud to lead a team that\'s truly dedicated to making a difference in seniors\' lives."',
                years: '12 years'
            },
            'james-wilson': {
                name: 'James Wilson, LPN',
                title: 'Lead Licensed Nurse',
                image: 'fas fa-stethoscope',
                bio: 'James coordinates daily nursing care and medication management for all residents. With 8 years of experience in senior care, he is known for his meticulous attention to detail and compassionate approach. James ensures that medication regimens are followed precisely and health changes are monitored closely.',
                specialties: ['Medication Management', 'Vital Signs Monitoring', 'Care Coordination',
                    'Health Assessment'
                ],
                education: ['LPN Certification, Seattle Central College', 'Medication Administration Certification',
                    'CPR & First Aid Certified'
                ],
                quote: '"Accuracy in medication management is crucial, but so is taking the time to listen to residents\' concerns."',
                years: '8 years'
            },
            'sarah-johnson': {
                name: 'Sarah Johnson, PT',
                title: 'Physical Therapist',
                image: 'fas fa-heartbeat',
                bio: 'Sarah specializes in geriatric rehabilitation, helping residents maintain and improve mobility, strength, and balance. She develops individualized exercise programs and works closely with the care team to implement fall prevention strategies.',
                specialties: ['Geriatric Rehabilitation', 'Fall Prevention', 'Mobility Training', 'Balance Exercises'],
                education: ['DPT, University of Washington', 'Geriatric Clinical Specialist',
                    'LSVT BIG Certified for Parkinson\'s'
                ],
                quote: '"Movement is medicine. Helping residents stay active and independent is incredibly rewarding."',
                years: '10 years'
            },
            'david-park': {
                name: 'David Park, RPh',
                title: 'Consulting Pharmacist',
                image: 'fas fa-notes-medical',
                bio: 'David reviews all medication regimens for safety, efficacy, and potential interactions. With specialized training in geriatric pharmacology, he helps optimize medication plans to minimize side effects and maximize benefits for our residents.',
                specialties: ['Geriatric Pharmacology', 'Medication Review', 'Drug Interaction Analysis',
                    'Medication Safety'
                ],
                education: ['PharmD, University of Washington', 'Board Certified Pharmacotherapy Specialist',
                    'Geriatric Pharmacy Certification'
                ],
                quote: '"The right medication at the right dose can significantly improve quality of life for seniors."',
                years: '14 years'
            },
            'lisa-williams': {
                name: 'Lisa Williams, MSW',
                title: 'Social Worker',
                image: 'fas fa-comment-medical',
                bio: 'Lisa provides emotional support, counseling, and care coordination for residents and their families. She helps families navigate the emotional aspects of senior care and connects residents with community resources as needed.',
                specialties: ['Family Counseling', 'Care Coordination', 'Emotional Support', 'Resource Connection'],
                education: ['MSW, University of Washington', 'Licensed Clinical Social Worker',
                    'Grief Counseling Certification'
                ],
                quote: '"Supporting families through the care journey is just as important as caring for residents."',
                years: '9 years'
            },
            'michael-brown': {
                name: 'Michael Brown, CNA',
                title: 'Senior Caregiver',
                image: 'fas fa-hands-helping',
                bio: 'Michael specializes in mobility assistance and fall prevention. With 8 years of caregiving experience, he is known for his patience and creative approach to engaging residents in physical activity. Michael has a special talent for building trust with residents who are hesitant about mobility assistance.',
                specialties: ['Mobility Assistance', 'Fall Prevention', 'Transfer Techniques', 'Physical Engagement'],
                education: ['CNA Certification, Seattle Vocational Institute',
                    'Mobility & Transfer Specialist Training', 'CPR & First Aid Certified'
                ],
                quote: '"Helping someone maintain their independence, even in small ways, is what makes caregiving so meaningful."',
                years: '8 years'
            },
            'jennifer-lee': {
                name: 'Jennifer Lee',
                title: 'Memory Care Specialist',
                image: 'fas fa-brain',
                bio: 'Jennifer is specially trained in validation therapy and cognitive stimulation techniques for residents with memory challenges. She creates engaging activities that tap into residents\' long-term memories and helps reduce anxiety associated with dementia.',
                specialties: ['Validation Therapy', 'Cognitive Stimulation', 'Dementia Communication',
                    'Sensory Activities'
                ],
                education: ['Dementia Care Specialist Certification', 'Validation Therapy Training',
                    'Activities Director Certification'
                ],
                quote: '"Every person with dementia has a story to tell. My job is to listen and help them feel heard."',
                years: '6 years'
            },
            'carlos-martinez': {
                name: 'Carlos Martinez',
                title: 'Activities Coordinator',
                image: 'fas fa-smile',
                bio: 'Carlos brings energy and creativity to his role as Activities Coordinator. He develops engaging social and recreational programs that cater to diverse interests and abilities, helping residents stay socially connected and mentally stimulated.',
                specialties: ['Activity Planning', 'Social Engagement', 'Recreational Therapy',
                    'Intergenerational Programs'
                ],
                education: ['Recreational Therapy Certificate', 'Activity Director Certified',
                    'Music Therapy Training'
                ],
                quote: '"Joy is an essential part of wellness. I love creating moments of happiness for our residents."',
                years: '5 years'
            }
        };

        teamDetailButtons.forEach(button => {
            button.addEventListener('click', () => {
                const memberId = button.getAttribute('data-member');
                const member = teamMembers[memberId];

                if (member) {
                    modalContent.innerHTML = `
                        <div class="p-8">
                            <div class="flex justify-between items-start mb-8">
                                <div>
                                    <h3 class="cormorant text-3xl font-bold text-navy mb-2">${member.name}</h3>
                                    <p class="text-gold font-semibold text-xl">${member.title}</p>
                                </div>
                                <button id="closeTeamModal" class="text-gray-500 hover:text-gray-700 text-2xl">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>

                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                                <div class="lg:col-span-2">
                                    <h4 class="cormorant text-2xl font-bold text-navy mb-4">Professional Background</h4>
                                    <p class="text-gray-700 mb-6">${member.bio}</p>

                                    <h4 class="cormorant text-2xl font-bold text-navy mb-4">Specialties</h4>
                                    <div class="flex flex-wrap gap-2 mb-8">
                                        ${member.specialties.map(spec => `<span class="cert-badge">${spec}</span>`).join('')}
                                    </div>

                                    <h4 class="cormorant text-2xl font-bold text-navy mb-4">Education & Certification</h4>
                                    <ul class="space-y-2 mb-8">
                                        ${member.education.map(edu => `<li class="flex items-start"><i class="fas fa-graduation-cap text-gold mr-2 mt-1"></i><span>${edu}</span></li>`).join('')}
                                    </ul>

                                    <div class="bg-light-blue rounded-xl p-6">
                                        <p class="italic text-gray-700 mb-4">${member.quote}</p>
                                        <p class="font-semibold text-navy">~ ${member.name.split(' ')[0]}</p>
                                    </div>
                                </div>

                                <div>
                                    <div class="bg-navy rounded-2xl p-8 text-white h-full">
                                        <div class="w-32 h-32 bg-gold rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="${member.image} text-navy text-5xl"></i>
                                        </div>
                                        <div class="text-center">
                                            <h4 class="cormorant text-2xl font-bold mb-2">Experience</h4>
                                            <p class="text-3xl font-bold text-gold mb-6">${member.years}</p>

                                            <h4 class="cormorant text-2xl font-bold mb-4">Contact</h4>
                                            <p class="mb-2">For inquiries about ${member.name.split(' ')[0]}'s role:</p>
                                            <a href="contact.html" class="inline-block bg-gold text-navy px-6 py-3 rounded-full font-bold transition-all duration-300 mt-4">
                                                <i class="fas fa-envelope mr-2"></i> Contact Amazing Palace
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;

                    teamModal.classList.add('active');
                    document.body.style.overflow = 'hidden';

                    // Add close event to the new close button
                    document.getElementById('closeTeamModal').addEventListener('click', closeTeamModal);
                }
            });
        });

        function closeTeamModal() {
            teamModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        teamModal.addEventListener('click', (e) => {
            if (e.target === teamModal) {
                closeTeamModal();
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#' || href.includes('.html')) return;

                e.preventDefault();

                const targetElement = document.querySelector(href);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
@endpush

@push('schema')
@php
$schema = [
    "@context" => "https://schema.org",
    "@type" => "LocalBusiness",
    "name" => "Amazing Palace",
    "url" => url('/careteam'),
    "description" => "At Amazing Palace, we believe that exceptional care begins with exceptional people. Our team of dedicated professionals brings together expertise, compassion, and a genuine commitment to enhancing the lives of our residents",
    "areaServed" => [
        "@type" => "Place",
        "name" => "Auburn, Washington"
    ]
];
@endphp

<script type="application/ld+json">
{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endpush
