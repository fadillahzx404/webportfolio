<x-appdashboard-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Project Admin Add') }}
        </h2>
    </x-slot>

    <div class="container py-12 p-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <div class="p-4 mb-4 w-11/12 mx-auto text-sm text-red-800 rounded-lg shadow-md bg-red-50 dark:bg-gray-800 dark:text-red-400"
                            role="alert">
                            <span class="font-medium">{{ $error }}</span>
                        </div>
                    @endforeach
                </ul>
            </div>
        @endif
        <section class="project_edit bg-white w-11/12 mx-auto">

            <div class="relative overflow-x-auto  shadow-md border-2 border-gray-300 sm:rounded-lg p-5">
                <div class="subtitle">
                    <p class="font-semibold text-lg text-dark-900 animate-bounce">Add New Project
                    </p>
                </div>

                <div class="border-b border-gray-300 mt-2"></div>


                <form action="{{ route('project-admin-store') }}" method="POST" enctype="multipart/form-data"
                    class="mt-12">
                    @csrf
                    <div class="mb-12 grid justify-items-center">
                        <label for="name_project"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Create
                            Project</label>
                        <div class="relative max-w-full ">

                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input datepicker datepicker-autohide type="text" name="date"
                                datepicker-format="yyyy/mm/dd"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pr-28  pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>

                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="name_project"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name
                                Project</label>
                            <input type="text" id="name_project" name="name_project"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Name of your project" required>
                        </div>
                        <div>
                            <label for="category_project_id"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
                                option</label>
                            <select id="category_project_id" name="category_project_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                @foreach ($category as $cat)
                                    <option value="{{ $cat->id }}">
                                        {{ $cat->name_category }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="desc"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description
                            Project</label>
                        <textarea id="editor1" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Your project description" name="desc_project"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="tools_project"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tools
                            Project Description</label>
                        <textarea id="editor2" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Your project description" name="tools_project"></textarea>
                    </div>
                    <div class="mb-6">

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="photo_cover">Photo Cover</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="photo_cover" name="photo_cover" type="file">
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-3">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="photo_left">Photo Left</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="photo_left" name="photo_left" type="file">
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="photo_center">Photo Center</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="photo_center" name="photo_center" type="file">
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="photo_right">Photo Right</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="photo_right" name="photo_right" type="file">
                        </div>
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="icon_project"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Icon
                                Project</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="icon_project" name="icon_project" type="file">
                        </div>
                        <div>
                            <label for="video_link"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Video Link</label>
                            <input type="text" id="video_link" name="video_link"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="http://youtube">
                        </div>
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="link_project"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link
                                Project</label>
                            <input type="text" id="link_project" name="link_project"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="http://heroku">
                        </div>
                        <div>
                            <label for="github_project"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link
                                Github</label>
                            <input type="text" id="github_project" name="github_project"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="https://github">
                        </div>
                    </div>

                    <div class="flex flex-row justify-end gap-3">
                        <a href="{{ route('project_admin') }}"
                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Cancel</a>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </div>
                </form>

            </div>

        </section>
    </div>
    @push('addon-script')
        <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
        <script>
            ClassicEditor.create(document.querySelector('#editor1')).then(editor => {
                    editor.ui.view.editable.element.style.height = '150px'
                })
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor.create(document.querySelector('#editor2')).then(editor => {
                    editor.ui.view.editable.element.style.height = '150px'
                })
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endpush
</x-appdashboard-layout>
