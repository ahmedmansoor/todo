<div id="edit-modal" class="hidden fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 mt-32 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full sm:p-6">
            <button class="modal-close absolute top-0 right-0 m-4">Close</button>
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                Edit Task
            </h3>
            <form id="edit-form" method="POST">
                @csrf
                @method('PUT')
                <div class="mt-2">
                    <input id="edit-input" name="task" type="text" class="p-2 px-3 shadow-sm
                    block w-full sm:text-sm rounded-md" placeholder="Task" value="">
                </div>
                <div class="mt-4">
                    <button type="submit" class="modal-close px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
