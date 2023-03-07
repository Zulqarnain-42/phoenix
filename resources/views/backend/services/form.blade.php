<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add New Service') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('ourservices.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="servicename">Service Name</label>
                                <input type="text" class="form-control" id="servicename" name="servicename" placeholder="Service Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="servicedetails">Details</label>
                                <input type="text" class="form-control" id="details" name="servicesdetails">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="servicesimg">Image</label>
                            <input type="file" class="form-control" name="servicesimg">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="services" name="servicesstatus" value="1">
                                <label class="form-check-label" for="gridCheck">Enable Service</label>
                            </div>
                        </div>
                        <button type="submit" class="mb-4 btn btn-success" style="float: right;">Add Service</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
