<div class="max-w-7xl mx-auto my-8  sm:px-6 lg:px-8" >
  @if ($flash = session('success'))
    <div id="flash-message" class="shadow bg-green-100 rounded p-4 flex justify-between" role="alert" x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 3000)">
      {{ $flash }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close" x-on:click="showMessage = false">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
  @if ($flash = session('error'))
    <div id="flash-message" class="shadow bg-red-100 rounded p-4 flex justify-between" role="alert" x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 3000)">
      {{ $flash }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"  x-on:click="showMessage = false">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
</div>
