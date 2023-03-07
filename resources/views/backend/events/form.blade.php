<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add New Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{route('upcomingevents.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="eventname">Event Name</label>
                                <input type="text" class="form-control" id="" name="eventname" placeholder="Event Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="" name="eventaddress" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="eventimage">Event Image</label>
                            <input type="file" class="form-control" id="" name="eventimage">
                        </div>
                        <div class="form-group">
                            <label for="eventdate">Date</label>
                            <input type="date" class="form-control" id="" name="eventdate">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="eventstatus" value="1">
                                <label class="form-check-label" for="gridCheck">Enable Event</label>
                            </div>
                        </div>
                        <button type="submit" class="mb-4 btn btn-success" style="float: right;">Add Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
