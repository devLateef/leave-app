<x-app-layout>
  <div class="min-h-full">
    @include('admin.layouts.header')
    <main>
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        @yield('content')
      </div>
    </main>
  </div>
  @include('admin.layouts.footer')
</x-app-layout>
