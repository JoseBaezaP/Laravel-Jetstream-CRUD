<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative max-w-xs ml-auto">
  <span class="block sm:inline">{{ session('message') }}</span>
  <button
    class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 outline-none focus:outline-none"
    onclick="closeAlert(event)">
    <span>×</span>
  </button>
</div>