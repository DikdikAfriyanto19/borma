<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-12 mx-auto">
    <div class="mx-auto max-w-4xl grid grid-cols-1 lg:grid-cols-2 ">
      
      
      <div>
        <h4 class="text-xl font-semibold">Contact us</h4>

        <p class="mt-4 text-xl">Call us :</p>
        <p class="font-medium">0878 1452 3710</p>

        <p class="mt-4 text-xl">Mail us :</p>
        <p class="font-medium">info@pramatoserba.co.id</p>
      </div>

      
      <form action="#" method="POST" class="w-full">
        <div class="grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-2">
          <div>
            <label for="name" class="block text-sm font-semibold text-gray-900">Nama</label>
            <input type="text" name="name" id="name" autocomplete="name" class="mt-2 block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 border border-gray-300 shadow-sm ">
          </div>
          <div>
            <label for="email" class="block text-sm font-semibold text-gray-900">Email</label>
            <input type="email" name="email" id="email" autocomplete="email" class="mt-2 block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 border border-gray-300 shadow-sm ">
          </div>
          <div class="sm:col-span-2">
            <label for="subject" class="block text-sm font-semibold text-gray-900">Subject</label>
            <input type="text" name="subject" id="subject" class="mt-2 block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 border border-gray-300 shadow-sm ">
          </div>
          <div class="sm:col-span-2">
            <label for="message" class="block text-sm font-semibold text-gray-900">Message</label>
            <textarea name="message" id="message" rows="4" class="mt-2 block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 border border-gray-300 shadow-sm "></textarea>
          </div>
        </div>
        <div class="mt-8">
          <button type="submit" class="w-full rounded-md px-4 py-2 text-gray-900 font-medium  bg-white border border-gray-300  shadow-sm">Send message</button>
        </div>
      </form>

    </div>
  </div>

  <x-footer></x-footer>
</x-layout>
