<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-purple-800 leading-tight">
            Update Project Details
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('projects.update', $project->id) }}">
            @csrf
            @method('PUT')
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="pname">
                    Project Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="pname" type="text" placeholder="{{ old('pname', $project->pname) }}">
                </div>
                <div class="w-full px-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="client">
                    Client Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="client" type="text" placeholder="{{ old('client', $project->client) }}">
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="progress">
                        Progress
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="progress">
                        <option value="Inception">Inception</option>
                        <option value="Milestone 1">Milestone 1</option>
                        <option value="Milestone 2">Milestone 2</option>
                        <option value="Final Report">Final Report</option>
                        <option value="Closing">Closing</option>
                        </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="status">
                        Status
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="status">
                        <option value="On track">On track</option>
                        <option value="Delayed">Delayed</option>
                        <option value="Extended">Extended</option>
                        <option value="Completed">Completed</option>
                        </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                    </div>
                </div>
            </div>
    </div>

                        <div class="flex items-center flex justify-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <a href="{{ route('projects.index') }}" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-600 border border-black rounded-md font-bold text-xs text-black uppercase tracking-widest hover:bg-red-900 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-75 transition ease-in-out duration-150">Cancel</a>
                            <x-jet-button class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Create') }}
                            </x-jet-button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>