<div
  class="fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated ease-out bg-black bg-opacity-50">
  <div
    class="border shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
    <div class="my-5 mr-5 ml-5 flex">
      <form class="w-full">
        <div class="grid grid-row-2 mb-7">
          <label for="name">Nombre</label>
          <input wire:model="name" id="name" placeholder="Escribe el nombre de tu producto" type="text"
            class="border-0 border-b focus:ring-0" />
        </div>
        <div class="grid grid-row-2 mb-7">
          <label for="amount">Cantidad</label>
          <input wire:model="amount" id="amount" placeholder="Escribe la cantidad de tu producto" type="number"
            class="border-0 border-b focus:ring-0" />
        </div>
        <div class="flex justify-end pt-2 space-x-14">
          <button wire:click.prevent="visible()"
            class="px-4 bg-gray-200 p-3 rounded text-black hover:bg-gray-300 font-semibold">Cancel</button>
          <button wire:click.prevent="crear()"
            class="px-4 bg-blue-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400">Confirm</button>
        </div>
      </form>
    </div>
  </div>
</div>