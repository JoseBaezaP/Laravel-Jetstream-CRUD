<div class="container mx-auto my-8 relativo">
  <div class="bg-white shadow-xl rounded-lg p-10">
    @if(session()->has('message'))
    @include('livewire.alert')
    @endif
    <button class="bg-green-600 hover:bg-green-700 p-2 text-white mb-5" wire:click="visible()">Crear</button>
    @if($modal)
    @include('livewire.form')
    @endif
    <table class="table-fixed w-full">
      <thead>
        <tr class="bg-gray-200 text-black rounded-t-lg">
          <th>
            Id
          </th>
          <th>
            Nombre
          </th>
          <th>
            Cantidad
          </th>
          <th>
            Acciones
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
        <tr>
          <td class="border p-5">{{$loop->index + 1}}</td>
          <td class="border p-5">{{$product->name}}</td>
          <td class="border p-5">{{$product->amount}}</td>
          <td class="text-center border p-5">
            <button wire:click="edit({{$product->id}})"
              class="p-2 text-white bg-blue-700 hover:bg-blue-700">Editar</button>
            <button wire:click="delete({{$product->id}})"
              class="p-2 text-white bg-red-700 hover:bg-red-700">Eliminar</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>