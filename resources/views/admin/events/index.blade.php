<x-app-layout>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/vue@1.0.4/dist/heroicons.min.css" rel="stylesheet">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="flex justify-end m-2 p-2">
            <a href="{{ route('admin.events.create') }}" class=" px-4 py-2 text-white bg-gray-800 hover:bg-gray-600 rounded-xl">
            Create New Event</a>
         </div>
    
    

<div class="relative overflow-x-auto">
    <table class="w-full text-md text-left rtl:text-right text-gray-500 dark:text-gray-800">
        <thead class="text-sm text-black uppercase bg-red-900 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 font-bold ">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 font-bold ">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 font-bold ">
                    Phone Number
                </th>
                <th scope="col" class="px-6 py-3 font-bold ">
                    Reservation Date
                </th>
                <th scope="col" class="px-6 py-3 font-bold ">
                    Guest Number
                </th>
                <th scope="col" class="px-6 py-3 font-bold ">
                    Event Type
                </th>
                <th scope="col" class="px-6 py-3 font-bold ">
                    Other Request
                </th>
                <th scope="col" class="px-6 py-3 font-bold ">
                   Downpayment
                </th>
                <th scope="col" class="px-6 py-3 font-bold ">
                    Payment Status
                 </th>
               
                <th scope="col" class="px-6 py-3 font-bold text-blue-500 ">
                    Action
                </th>

            </tr>
        </thead>

        <tbody>

            @foreach ($events as $event)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 text-md  text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $event ->name }}
                </th>
                <td class="px-6 py-4 text-md  text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $event ->email }}
                </td>
                <td class="px-6 py-4 text-md  text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $event ->tel_number }}
                <td class="px-6 py-4 text-md  text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $event ->res_date }}
                 </td>
                    
                <td class="px-6 py-4 text-md  text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $event ->guest_number }}
                </td>
                <td class="px-6 py-4 text-md  text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $event ->event_type}}
                </td>
               
                <td class="px-6 py-4 text-md  text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $event ->other_request }}
                </td>
                <td class="px-6 py-4 text-md  text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $event ->downpayment }}
                </td>
                <td class="px-6 py-4 text-md text-bold text-green-500 whitespace-nowrap dark:text-green-500">
                    @if($event->payment_status == 'Paid')
                    <span class="badge bg-success">{{ $event->payment_status }}</span>
                    @else
                    <span class="badge bg-danger">{{ $event->payment_status }}</span>
                @endif
                </td>

                <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                    <div class="flex space-x-2">
                        <a href="{{ route('admin.events.edit', $event->id) }}"
                            class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white">Edit</a>
                        <form
                            class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                            method="POST"
                            action="{{ route('admin.events.destroy', $event->id) }}"
                            onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Remove</button>
                        </form>
                    </div>
                </td>

            </tr>

            @endforeach
           
        </tbody>

               
      
    </table>
</div>

        </div>
    </div>

</x-app-layout>