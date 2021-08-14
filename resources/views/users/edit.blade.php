<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Updating User Role Page') }}
        </h2>
    </x-slot>

    <div class="py- m-6">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden sm:rounded">
                    <form action="{{route('user.update')}}" method="post" class="grid grid-cols-1 gap-4 md:grid-cols-3">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 pt-0">
                            <input type="text" placeholder="ID" name="user_id" value="{{$user->id}}" readonly
                                   class="px-3 py-3 placeholder-gray-400 text-gray-600 relative bg-white bg-white rounded text-sm border border-gray-400 outline-none focus:outline-none  focus:ring w-full"/>
                        </div>
                        <div class="mb-3 pt-0">
                            <input type="text" placeholder="Name" value="{{$user->name}}" readonly
                                   class="px-3 py-3 placeholder-gray-400 text-gray-600 relative bg-white bg-white rounded text-sm border border-gray-400 outline-none focus:outline-none  focus:ring w-full"/>
                        </div>
                        <div class="mb-3 pt-0">
                            <select class="form-select block w-full py-3 placeholder-gray-400 text-gray-600 relative bg-white bg-white rounded text-sm border border-gray-400" name="role_name">
                                    <option value="admin" {{$user->roles->pluck('name')->first()  == "admin" ? "selected = 'selected'" : ""}}>Admin</option>
                                    <option value="writer" {{$user->roles->pluck('name')->first() == "writer" ? "selected = 'selected'" : ""}}>Writer</option>
                                    <option value="editor" {{$user->roles->pluck('name')->first()  == "editor" ? "selected = 'selected'" : ""}}>Editor</option>
                                    <option value="publisher" {{$user->roles->pluck('name')->first()  == "publisher" ? "selected = 'selected'" : ""}}>Publisher</option>
                                    <option value="user" {{$user->roles->pluck('name')->first()  == "user" ? "selected = 'selected'" : ""}}>User</option>
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
