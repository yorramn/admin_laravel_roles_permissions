<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Register Roles Page') }}
        </h2>
    </x-slot>

    <div class="py- m-6">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden sm:rounded">
                    <form action="{{route('user.store')}}" method="post" class="grid grid-cols-1 gap-4 md:grid-cols-2">
                        @csrf
                        <div class="mb-3 pt-0">
                            <input type="text" placeholder="ID" name="user_id"
                                   class="px-3 py-3 placeholder-gray-400 text-gray-600 relative bg-white bg-white rounded text-sm border border-gray-400 outline-none focus:outline-none  focus:ring w-full"/>
                        </div>
                        <div class="mb-3 pt-0">
                            <select class="form-select block w-full py-3 placeholder-gray-400 text-gray-600 relative bg-white bg-white rounded text-sm border border-gray-400" name="role_id">
                                <option selected disabled>Selecione um cargo</option>
                                @foreach(\Spatie\Permission\Models\Role::all() as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex ">
                            <button type="submit" class="w-1/4 p-3  bg-green-400 rounded ">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
