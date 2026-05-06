<x-layouts.main.base>

    @section('page-hero')
        <x-ui.hero title="Explore Training" highlightText="& Placements"
            description="Get internships, training, and job placements at top companies." badge="100% Placement Guaranteed"
            breadcrumbText="Training" primaryBtnText="Enroll Now" primaryBtnUrl="/training" height="300px" :stats="[
                ['icon' => 'fas fa-briefcase', 'color' => 'blue-400', 'text' => '500+ Job Placements'],
                ['icon' => 'fas fa-award', 'color' => 'yellow-400', 'text' => 'Industry Certifications'],
            ]" />
    @endsection

</x-layouts.main.base>
