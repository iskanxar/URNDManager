<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-purple-800 leading-tight">
            View Project Details
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('teams.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to list</a>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">
                                        Team Name
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold bg-white divide-y divide-gray-200">
                                        {{ $team->tname }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">
                                        Team Leader
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold bg-white divide-y divide-gray-200">
                                        {{ $team->leader_name }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">
                                        Member 1
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold bg-white divide-y divide-gray-200">
                                        {{ $team->member1_name }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">
                                        Member 2
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold bg-white divide-y divide-gray-200">
                                        {{ $team->member2_name }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">
                                        Member 3
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold bg-white divide-y divide-gray-200">
                                        {{ $team->member3_name }}
                                    </td>
                                </tr>
                            
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>