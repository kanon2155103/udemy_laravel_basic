<x-app-layout>
	<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
			Edit
    </h2>
  </x-slot>
	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-12 text-gray-900 dark:text-gray-100">
					<section class="text-gray-600 body-font relative">
						<form method="post" action="{{ route('contacts.update', ['id' => $contact->id ]) }}">
							@csrf
						<div class="container px-5 mx-auto">
							<div class="lg:w-1/2 md:w-2/3 mx-auto">
								<div class="flex flex-wrap -m-2">
								<div class="p-2 w-full">
										<div class="relative">
											<label for="name" class="leading-7 text-sm text-gray-600">Name</label>
											<input type="text" id="name" name="name" value="{{ $contact->name }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
										</div>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label for="title" class="leading-7 text-sm text-gray-600">Title</label>
											<input type="text" id="title" name="title" value="{{ $contact->title }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
										</div>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label for="email" class="leading-7 text-sm text-gray-600">Email</label>
											<input type="email" id="email" name="email" value="{{ $contact->email }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
										</div>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label for="url" class="leading-7 text-sm text-gray-600">Website</label>
											<input type="url" id="url" name="url" value="{{ $contact->url }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
										</div>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label class="leading-7 text-sm text-gray-600">Gender</label>
											<br>
											<input type="radio" name="gender" value="0" @if ($contact->gender === 0) checked @endif>Male
											<input type="radio" name="gender" value="1" @if ($contact->gender === 1) checked @endif>Female
									</div>
									<div class="p-2 2-full">
										<label for="age" class="leading-7 text-sm text-gray-600">Age</label>
										<br>
										<select name="age" id="">
											<option value="">please select</option>
											<option value="1" @if ($contact->age === 1) selected @endif>under 20</option>
											<option value="2" @if ($contact->age === 2) selected @endif>20 to 29</option>
											<option value="3" @if ($contact->age === 3) selected @endif>30 to 39</option>
											<option value="4" @if ($contact->age === 4) selected @endif>40 to 49</option>
											<option value="5" @if ($contact->age === 5) selected @endif>50 to 59</option>
											<option value="6" @if ($contact->age === 6) selected @endif>60 and over</option>
										</select>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label for="inquiry" class="leading-7 text-sm text-gray-600">Contact of inquiry</label>
											<textarea id="inquiry" name="inquiry" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ $contact->inquiry }}</textarea>
										</div>
									</div>
									<div class="p-4 w-full">
										<button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Update</button>
									</div>
								</div>
							</div>
						</div>
					</form>
					</section>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>
