<aside class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0">
    <div class="h-full px-3 py-4 overflow-y-auto bg-neutral-900">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('view.dashboard') }}"
                    class="flex items-center p-2 text-white rounded-lg hover:bg-teal-700 group hover:text-white @if (Route::is('view.dashboard')) bg-teal-700 @endif">
                    <span class="ms-3">Dashboard</span>
                </a>
                <a href="{{ route('view.crud') }}"
                    class="flex items-center p-2 text-white rounded-lg hover:bg-teal-700 group hover:text-white mt-2 @if (Route::is('view.crud')) bg-teal-700 @endif">
                    <span class="ms-3">Category</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

