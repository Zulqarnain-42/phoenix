<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add New Team') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('team.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fullname">Full Name</label>
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" id="userimage" name="userimage">
                        </div>
                        <div class="form-group">
                            <label for="userdetails">Details</label>
                            <input type="text" class="form-control" id="userdetails" placeholder="">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="twitterlink">Twitter Link</label>
                                <input type="text" class="form-control" id="" name="twitterlink">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="facebooklink">Facebook Link</label>
                                <input type="text" class="form-control" id="" name="facebooklink">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="linkedinlink">Linkedin Link</label>
                                <input type="text" class="form-control" id="" name="linkedinlink">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="instagramlink">Instagram Link</label>
                                <input type="text" class="form-control" id="" name="instagramlink">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="memberstatus" value="1">
                                <label class="form-check-label" for="gridCheck">Enable Member</label>
                            </div>
                        </div>
                        <button type="submit" class="mb-4 btn btn-success" style="float: right;">Add Member</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
