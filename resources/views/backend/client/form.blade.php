<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add New Client') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{route('client.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="eventname">Client Name</label>
                                <input type="text" class="form-control" id="" name="clientname" placeholder="Client Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="address">Details</label>
                                <input type="text" class="form-control" id="" name="details" placeholder="Details">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="eventimage">Image</label>
                            <input type="file" class="form-control" id="" name="clientimage">
                        </div>
                        <button type="submit" class="mb-4 btn btn-success" style="float: right;">Add Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
