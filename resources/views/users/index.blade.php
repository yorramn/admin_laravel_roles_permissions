<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py- m-6">
        <div class="w-full m-2">
            @can('write post')
                <a href="{{route('user.create')}}" class=" p-2 bg-green-400 rounded">Add Role</a>
            @endcan
        </div>
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                Id
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                Email
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                Role
                            </th>
                            <th scope="col" class="relative px-6 py-3"></th>
                            <th scope="col" class="relative px-6 py-3"></th>
                        </tr>
                        </thead>

                        <tbody class="bg-white dark:bg-gray-700 divide-y divide-gray-200">
                        @foreach(\App\Models\User::all() as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{$user->id}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$user->name}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$user->email}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$user->roles->pluck('name')}}</td>
                                <td class="px-6 py-4 text-right text-sm">
                                    @can('edit post')
                                        <a href="{{route('user.edit',$user->id)}}" class="m-2 p-2 bg-green-400 rounded">Edit</a>
                                    @endcan
                                </td>
                                <td class="px-6 py-4 text-right text-sm">
                                    @can('publish post')
                                        <a href="" class="m-2 p-2 bg-green-400 rounded">Publish</a>
                                    @endcan
                                </td>

                            </tr>
                        @endforeach
                        <!-- More items... -->
                        </tbody>
                    </table>
                    <div class="m-2 p-2">Pagination</div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
