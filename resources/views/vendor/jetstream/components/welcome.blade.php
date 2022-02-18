<div class="p-6 sm:px-20 bg-white border-b border-gray-200">


    <div class="flex justify-center mt-8 text-2xl">
        Your exercises :
    </div>

    <div class="flex justify-center mt-6 text-gray-500">
        List of corrected and pending correction of your submitted exercise.
    </div>
</div>

<!-- Table -->
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">

                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                            Exercise
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Result
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">

                    @if(request())
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                test
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                test
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                test
                            </td>
                        </tr>
                    @else
                        <td>No Appointment booked</td>
                    @endif


                    <!-- More people... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
