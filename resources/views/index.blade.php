<x-app-layout>
    <div class="h-[7rem]"></div>
    <div class="relative bg-black">
        <img src="./images/banner/cyber.webp" alt="Banner Image" class="w-full h-auto">
     
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div>
  
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white">
   
          <h2 class="text-4xl font-bold mb-4">New Releases</h2>
          <!-- CTA Button -->
          <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full shadow-lg transition duration-300">Download Now</button>
        </div>
      </div>
      <div class="h-[3rem]"></div>
    <div class="overflow-x-auto " style="background-color: rgba(255, 255, 255, 0.7);">
        <table class="table-auto w-full border border-['1f2225']">

            <tbody>
                @foreach($apps as $app)
                <tr class="text-black border-b-2 border-['1f2225']">
                    <td class="px-4 py-2 border-r-2 border-['1f2225']">
                        <img src="./images/banner/{{ $app->cover_url }}" alt="{{ $app->app_name }}" class="w-20 h-20">
                    </td>
                    <td class="px-4 py-2 border-r border-['1f2225']">
                        <div>
                            <p class="font-bold">{{ $app->games_name }}</p>
                            <p>{{ $app->description }}</p>
                        </div>
                    </td>
                    <td class="px-4 py-2 justify-end">
                        <button class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded w-56"><a href="{{ route('download') }}" class="btn btn-primary">Download File</a></button>
                        

                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</x-app-layout>
