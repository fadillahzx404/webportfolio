<x-app_dashbord-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Category Project Add') }}
        </h2>
    </x-slot>

    <div class="container py-12 p-12 max-sm:p-1 max-sm:mt-10 max-sm:min-w-full">
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
        <section class="category_project_add bg-white w-11/12 mx-auto">

            <div class="relative overflow-x-auto  shadow-md border-2 border-gray-300 rounded-lg sm:rounded-lg p-5">
                <div class="subtitle">
                    <p class="font-semibold text-lg text-dark-900 animate-bounce">Add New Category Project
                    </p>
                </div>

                <div class="border-b border-gray-300 mt-2"></div>


                <form action="{{ route('category-project-store') }}" method="POST" enctype="multipart/form-data"
                    class="mt-12">
                    @csrf


                    <div class="mb-6">
                        <label for="name_category"
                            class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">Name Category
                            Project</label>
                        <input type="text" id="name_category"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Front End Web" name="name_category" required>
                    </div>
                    <div class="mb-6">
                        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Slug</label>
                        <input type="slug" id="slug" name="slug"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="FE-Web" required>
                    </div>






                    <div class="flex flex-row justify-end gap-3">
                        <a href="{{ route('category_project_admin') }}"
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
</x-app_dashbord-layout>
