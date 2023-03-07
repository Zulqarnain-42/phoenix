<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Client') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-12 lg:px-12">
            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
                <x-primary-button style="float: right">{{ __('Add New') }}</x-primary-button>
                <table id="fixed-header-datatable clientdatatable" class="table dt-responsive nowrap table-striped w-100">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Images</th>
                            <th>Is Featured</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
