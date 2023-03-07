<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add New Slider') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="slidertext">Text</label>
                                <input type="text" class="form-control" id="slidertext" name="slidertext" placeholder="We are the Event Management Specialists">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="slidertext2">Text 2</label>
                                <input type="text" class="form-control" id="slidertext2" name="slidertext2" placeholder="WE PERSONALIZE YOUR WEDDING EVENTS">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" id="myfile" name="sliderimage">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="status" name="status" value="1">
                                <label class="form-check-label" for="gridCheck">Enable Slider</label>
                            </div>
                        </div>
                        <button type="submit" class="mb-4 btn btn-success" style="float: right;">Add Slider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
