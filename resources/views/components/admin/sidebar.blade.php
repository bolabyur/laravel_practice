<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidenav" id="drawer-navigation">

    <div class="overflow-y-auto py-5 px-3 h-full">

        <ul class="space-y-2">

            <li>
                <x-admin.sidelink title="Home" link="{{ route('admin.dashboard') }}"
                    svg='<svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 12 L12 3 L21 12" /> 
                <path d="M4 12 V21 H20 V12" />
            </svg>'
                    :active="request()->routeIs('admin.dashboard')" />
            </li>


            <li>
                <x-admin.sidelink title="Classroom" link="{{ route('admin.classroom.index') }}"
                    svg='<svg width="100" height="50" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 4h16v12H4z"/><path d="M22 20H2"/><path d="M8 8h8v4H8z"/></svg>'
                    :active="request()->routeIs('admin.classroom.*')" />
            </li>

            <li>
                <x-admin.sidelink title="Subject" link="{{ route('admin.subject.index') }}"
                    svg='<svg width="100" height="50" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 4h16v16H4z"/><path d="M8 8h8"/><path d="M8 12h8"/><path d="M8 16h5"/></svg>'
                    :active="request()->routeIs('admin.subject.*')" />
            </li>

            <li>
                <x-admin.sidelink title="Students" link="{{ route('admin.student.index') }}"
                    svg='<svg width="100" height="50" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="7" r="4"/><path d="M4 21v-2a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v2"/></svg>'
                    :active="request()->routeIs('admin.student.*')" />
            </li>

            <li>
                <x-admin.sidelink title="Guardian" link="{{ route('admin.guardian.index') }}"
                    svg='<svg width="100" height="50" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="9" cy="7" r="4"/><circle cx="19" cy="11" r="3"/><path d="M2 21v-2a4 4 0 0 1 4-4h5"/><path d="M14 21v-2a4 4 0 0 1 4-4h2"/></svg>'
                    :active="request()->routeIs('admin.guardian.*')" />
            </li>

            <li>
                <x-admin.sidelink title="Teachers" link="{{ route('admin.teacher.index') }}"
                    svg='<svg width="100" height="50" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 12a5 5 0 1 0-5-5"/><path d="M8 15h8a4 4 0 0 1 4 4v1H4v-1a4 4 0 0 1 4-4z"/></svg>'
                    :active="request()->routeIs('admin.teacher.*')" />
            </li>

        </ul>
    </div>
</aside>
