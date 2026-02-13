<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <title>{{ $title ?? config('app.name') }}</title>
 
        @vite(['resources/css/app.css', 'resources/js/app.js'])
 
        @livewireStyles
    </head>
    <body>
       <div class="min-h-screen bg-gray-50">
  <!-- Mobile overlay -->
  <div id="overlay" class="fixed inset-0 bg-black/40 hidden lg:hidden z-40"></div>

  <!-- Mobile sidebar (drawer) -->
  <aside id="mobileSidebar"
    class="fixed inset-y-0 left-0 w-72 bg-white border-r transform -translate-x-full transition lg:hidden z-50">
    <div class="h-16 px-4 flex items-center justify-between border-b">
      <div class="font-semibold text-lg">YourApp</div>
      <button id="closeSidebar" class="p-2 rounded hover:bg-gray-100">✕</button>
    </div>

    <nav class="p-3 space-y-1">
      <a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-gray-100 font-medium" href="#">
        <span>🏠</span> Dashboard
      </a>
      <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100" href="#">
        <span>📈</span> Analytics
      </a>
      <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100" href="#">
        <span>📄</span> Reports
      </a>
      <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100" href="#">
        <span>👥</span> Users
      </a>

      <div class="pt-3 mt-3 border-t text-xs text-gray-500 px-3">Workspace</div>
      <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100" href="#">
        <span>⚙️</span> Settings
      </a>
    </nav>

    <div class="absolute bottom-0 inset-x-0 border-t p-3">
      <button class="w-full px-3 py-2 rounded-lg hover:bg-gray-100 text-left">🚪 Logout</button>
    </div>
  </aside>

  <div class="flex">
    <!-- Desktop sidebar -->
    <aside class="hidden lg:flex lg:flex-col w-72 bg-white border-r min-h-screen sticky top-0">
      <div class="h-16 px-5 flex items-center border-b">
        <div class="font-semibold text-lg tracking-tight">YourApp</div>
      </div>

      <div class="p-3">
        <div class="mb-3">
          <div class="text-xs uppercase tracking-wide text-gray-500 px-3 mb-2">Menu</div>
          <nav class="space-y-1">
            <a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-gray-100 font-medium" href="#">
              <span>🏠</span> Dashboard
            </a>
            <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100" href="#">
              <span>📈</span> Analytics
            </a>
            <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100" href="#">
              <span>📄</span> Reports
            </a>
            <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100" href="#">
              <span>👥</span> Users
            </a>
          </nav>
        </div>

        <div class="mt-6">
          <div class="text-xs uppercase tracking-wide text-gray-500 px-3 mb-2">Workspace</div>
          <nav class="space-y-1">
            <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100" href="#">
              <span>⚙️</span> Settings
            </a>
            <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100" href="#">
              <span>🔒</span> Security
            </a>
          </nav>
        </div>
      </div>

      <div class="mt-auto border-t p-3">
        <div class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 cursor-pointer">
          <div class="h-9 w-9 rounded-full bg-gray-200"></div>
          <div class="flex-1">
            <div class="text-sm font-medium leading-tight">Munni</div>
            <div class="text-xs text-gray-500">Admin</div>
          </div>
          <div class="text-gray-400">⋮</div>
        </div>
      </div>
    </aside>

    <!-- Main column -->
    <div class="flex-1 min-w-0">
      <!-- Topbar -->
      <header class="sticky top-0 z-30 bg-white/80 backdrop-blur border-b">
        <div class="h-16 px-4 sm:px-6 flex items-center gap-3">
          <!-- Mobile menu button -->
          <button id="openSidebar" class="lg:hidden p-2 rounded-lg hover:bg-gray-100">
            ☰
          </button>

          <!-- Search -->
          <div class="flex-1">
            <div class="flex items-center gap-2 bg-gray-100 rounded-xl px-3 py-2">
              <span class="text-gray-500">⌘</span>
              <input class="bg-transparent w-full outline-none text-sm"
                     placeholder="Search reports, users, invoices..." />
              <span class="text-gray-500 text-xs">K</span>
            </div>
          </div>

          <!-- Actions -->
          <button class="hidden sm:inline-flex items-center gap-2 px-3 py-2 rounded-xl border bg-white hover:bg-gray-50">
            🔔 <span class="text-sm">Notifications</span>
          </button>
          <button class="inline-flex items-center gap-2 px-3 py-2 rounded-xl bg-black text-white hover:opacity-90">
            + Create
          </button>
        </div>
      </header>

      <!-- Content -->
      <main class="px-4 sm:px-6 py-6">
        <!-- Page header -->
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-3 mb-6">
          <div>
            <div class="text-sm text-gray-500">Overview</div>
            <h1 class="text-2xl font-semibold tracking-tight">Dashboard</h1>
          </div>
          <div class="flex gap-2">
            <button class="px-3 py-2 rounded-xl border bg-white hover:bg-gray-50 text-sm">Export</button>
            <button class="px-3 py-2 rounded-xl border bg-white hover:bg-gray-50 text-sm">Filters</button>
          </div>
        </div>

        <!-- KPI cards -->
        <section class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 mb-6">
          <div class="bg-white border rounded-2xl p-4">
            <div class="text-sm text-gray-500">Active Users</div>
            <div class="mt-2 text-2xl font-semibold">1,284</div>
            <div class="mt-1 text-xs text-gray-500">+12% vs last week</div>
          </div>
          <div class="bg-white border rounded-2xl p-4">
            <div class="text-sm text-gray-500">MRR</div>
            <div class="mt-2 text-2xl font-semibold">$18,420</div>
            <div class="mt-1 text-xs text-gray-500">+4.3% vs last month</div>
          </div>
          <div class="bg-white border rounded-2xl p-4">
            <div class="text-sm text-gray-500">Tickets</div>
            <div class="mt-2 text-2xl font-semibold">37</div>
            <div class="mt-1 text-xs text-gray-500">9 need attention</div>
          </div>
          <div class="bg-white border rounded-2xl p-4">
            <div class="text-sm text-gray-500">Uptime</div>
            <div class="mt-2 text-2xl font-semibold">99.98%</div>
            <div class="mt-1 text-xs text-gray-500">Last incident: 12 days ago</div>
          </div>
        </section>

        <!-- Main grid -->
        <section class="grid grid-cols-1 xl:grid-cols-3 gap-4">
          <!-- Chart placeholder -->
          <div class="xl:col-span-2 bg-white border rounded-2xl p-4">
            <div class="flex items-center justify-between mb-4">
              <div>
                <div class="text-sm text-gray-500">Revenue</div>
                <div class="text-lg font-semibold">Last 30 days</div>
              </div>
              <div class="flex gap-2">
                <button class="px-3 py-2 rounded-xl border text-sm hover:bg-gray-50">7d</button>
                <button class="px-3 py-2 rounded-xl border text-sm hover:bg-gray-50">30d</button>
                <button class="px-3 py-2 rounded-xl border text-sm hover:bg-gray-50">90d</button>
              </div>
            </div>
            <div class="h-64 rounded-xl bg-gray-50 border flex items-center justify-center text-gray-400">
              Chart goes here
            </div>
          </div>

          <!-- Activity / quick panel -->
          <div class="bg-white border rounded-2xl p-4">
            <div class="text-lg font-semibold mb-3">Activity</div>
            <div class="space-y-3">
              <div class="flex items-start gap-3">
                <div class="h-8 w-8 rounded-full bg-gray-200"></div>
                <div class="flex-1">
                  <div class="text-sm"><span class="font-medium">Aisha</span> created a report</div>
                  <div class="text-xs text-gray-500">2 hours ago</div>
                </div>
              </div>
              <div class="flex items-start gap-3">
                <div class="h-8 w-8 rounded-full bg-gray-200"></div>
                <div class="flex-1">
                  <div class="text-sm"><span class="font-medium">Ali</span> invited a new user</div>
                  <div class="text-xs text-gray-500">Yesterday</div>
                </div>
              </div>
              <div class="flex items-start gap-3">
                <div class="h-8 w-8 rounded-full bg-gray-200"></div>
                <div class="flex-1">
                  <div class="text-sm"><span class="font-medium">System</span> weekly backup completed</div>
                  <div class="text-xs text-gray-500">2 days ago</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Table -->
          <div class="xl:col-span-3 bg-white border rounded-2xl p-4">
            <div class="flex items-center justify-between mb-3">
              <div class="text-lg font-semibold">Recent Transactions</div>
              <button class="px-3 py-2 rounded-xl border text-sm hover:bg-gray-50">View all</button>
            </div>

            <div class="overflow-x-auto">
              <table class="min-w-full text-sm">
                <thead class="text-gray-500">
                  <tr class="border-b">
                    <th class="text-left py-3 pr-6 font-medium">Customer</th>
                    <th class="text-left py-3 pr-6 font-medium">Plan</th>
                    <th class="text-left py-3 pr-6 font-medium">Amount</th>
                    <th class="text-left py-3 pr-6 font-medium">Status</th>
                    <th class="text-left py-3 pr-6 font-medium">Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="border-b">
                    <td class="py-3 pr-6">Loopcraft</td>
                    <td class="py-3 pr-6">Pro</td>
                    <td class="py-3 pr-6">$299</td>
                    <td class="py-3 pr-6">
                      <span class="inline-flex px-2 py-1 rounded-full text-xs bg-gray-100">Paid</span>
                    </td>
                    <td class="py-3 pr-6">Today</td>
                  </tr>
                  <tr class="border-b">
                    <td class="py-3 pr-6">Humanlot</td>
                    <td class="py-3 pr-6">Business</td>
                    <td class="py-3 pr-6">$899</td>
                    <td class="py-3 pr-6">
                      <span class="inline-flex px-2 py-1 rounded-full text-xs bg-gray-100">Pending</span>
                    </td>
                    <td class="py-3 pr-6">Yesterday</td>
                  </tr>
                  <tr>
                    <td class="py-3 pr-6">Waves</td>
                    <td class="py-3 pr-6">Starter</td>
                    <td class="py-3 pr-6">$99</td>
                    <td class="py-3 pr-6">
                      <span class="inline-flex px-2 py-1 rounded-full text-xs bg-gray-100">Paid</span>
                    </td>
                    <td class="py-3 pr-6">2 days ago</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
</div>

<script>
  const overlay = document.getElementById('overlay');
  const mobileSidebar = document.getElementById('mobileSidebar');
  const openSidebar = document.getElementById('openSidebar');
  const closeSidebar = document.getElementById('closeSidebar');

  function open() {
    mobileSidebar.classList.remove('-translate-x-full');
    overlay.classList.remove('hidden');
  }

  function close() {
    mobileSidebar.classList.add('-translate-x-full');
    overlay.classList.add('hidden');
  }

  openSidebar?.addEventListener('click', open);
  closeSidebar?.addEventListener('click', close);
  overlay?.addEventListener('click', close);
</script>

 
        @livewireScripts
    </body>
</html>