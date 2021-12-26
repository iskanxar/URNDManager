<head>
<link rel="icon" href="{{ asset('/images/logo-partner-urnd.jpg') }}">
<title>URND Manager</title>
</head>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-purple-800 leading-tight">
            View Project Details
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('projects.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to list</a>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-bold text-indigo-700 uppercase tracking-wider">
                                        Project Name
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold bg-white divide-y divide-gray-200">
                                        {{ $project->pname }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-bold text-indigo-700 uppercase tracking-wider">
                                        Project Type
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold bg-white divide-y divide-gray-200">
                                        {{ $project->ptype }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-bold text-indigo-700 uppercase tracking-wider">
                                        Project Leader
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold bg-white divide-y divide-gray-200">
                                        {{ $project->leader_name }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-bold text-indigo-700 uppercase tracking-wider">
                                        Start Date
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold bg-white divide-y divide-gray-200">
                                        {{ $project->start_date }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-bold text-indigo-700 uppercase tracking-wider">
                                        End Date
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold bg-white divide-y divide-gray-200">
                                        {{ $project->end_date }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-bold text-indigo-700 uppercase tracking-wider">
                                        Duration(Month)
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold bg-white divide-y divide-gray-200">
                                        {{ $project->duration }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-bold text-indigo-700 uppercase tracking-wider">
                                        Cost(RM)
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold bg-white divide-y divide-gray-200">
                                        {{ $project->cost }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-bold text-indigo-700 uppercase tracking-wider">
                                        Client
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold bg-white divide-y divide-gray-200">
                                        {{ $project->client }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-bold text-indigo-700 uppercase tracking-wider">
                                        Progress
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold bg-white divide-y divide-gray-200">
                                        {{ $project->progress }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-bold text-indigo-700 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold bg-white divide-y divide-gray-200">
                                        {{ $project->status }}
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