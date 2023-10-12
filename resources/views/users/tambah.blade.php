<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-black-200 leading-tight">
            {{ __('Tambah Data User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form action="{{ route('user.tambah') }}">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="name" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
                  <div class="form-group mt-4">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                  </div>
                  <div class="form-group mt-4">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>

                  <button type="submit" class="btn btn-primary mt-4">Submit</button>
                
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
